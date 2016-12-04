<div class="about"> 
		
    <div class="container">
        <h3><?=$pageName?></h3>
        <div class="about-text">
			<?php
			$i = 0;
			$pagename = $pageUrlName."/";
			$sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY id DESC";

			$newsql = $sql;

			$limit = PAGING_LIMIT;

			include("includes/pagination.php");
			$return = Pagination($sql, "");

			$arr = explode(" -- ", $return);

			$start = $arr[0];
			$pagelist = $arr[1];
			$count = $arr[2];

			$newsql .= " LIMIT $start, $limit";

			$result = mysql_query($newsql);

			while($row = $conn -> fetchArray($result))
			{
				$i++;?>
				<div class="video" style="float:left; width:240px; text-align:center; margin:0 15px 16px 0;<?php if($i%4==0) echo ' margin-right:0px;'; ?>">
					<iframe width="240" height="170" src="<?php echo $row['contents'];?>" frameborder="0" allowfullscreen=""></iframe>
					
				</div>  
			<?php }?>
			<br clear="all">
			<?php
			if($count > $limit)
				echo $pagelist;
			?>
		</div>
   	</div>
</div>