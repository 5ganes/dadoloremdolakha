<?php include("includes/breadcrumb.php"); ?>

<div class="about"> 
		
    <div class="container">
        <h3><?=$pageName?></h3>
        <div class="about-text">
        
        <?php
	$pagename = "index.php?linkId=". $pageId ."&";
	
	$sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY id ASC";
	
	$newsql = $sql;

	$limit = LISTING_LIMIT;
	
	include("includes/pagination.php");
	$return = Pagination($sql, "");
	
	$arr = explode(" -- ", $return);

	$start = $arr[0];
	$pagelist = $arr[1];
	$count = $arr[2];
	
	$newsql .= " LIMIT $start, $limit";
	
	$result = mysql_query($newsql);
	
	while ($listRow = $conn->fetchArray($result))
	{
	?>
<div class="listRow" style="margin:12px 0px">
  <? if(file_exists(CMS_GROUPS_DIR . $listRow['image']) && !empty($listRow['image'])){?>
  <div style="float: left; width: 110px;"> <a href="<?= $listRow['urlname'] ?>"><img src="<?php echo imager($listRow['image'], 100, 75, "fix"); ?>" alt="<?php echo $listRow['title']; ?>" style="border:0" /></a></div>
  <? } ?>
  <div>
    <div>
      <div class="newsList">
      	<a href="<?php echo $listRow['urlname']; ?>" style="font-size: 15px;font-weight: bold;">
			<?php echo $listRow['name']; ?>
      	</a>
   	  </div>
      <?php echo $listRow['shortcontents']; ?> </div>
  </div>
</div>
<div style="clear:both;"></div>
<?
}
if($count > $limit)
echo $pagelist;
?>
		
    </div>
</div>