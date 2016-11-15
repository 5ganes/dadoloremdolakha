<?php
	$urlname=$_GET['url'];
	$sewa=$kendra->getByUrlName($urlname);
	$sewa=$conn->fetchArray($sewa);
?>
<div class="about"> 
		
    <div class="container">
        <div class="about-text">
        	<?php if(!empty($sewa['image']) and file_exists(CMS_GROUPS_DIR.$sewa['image']))
			{?>
            <div class="col-md-5 about-text-left">
              	<img src="<?=CMS_GROUPS_DIR.$sewa['image']?>" class="img-responsive" alt=""/>
          	</div>
            <? }?>
            <div class="col-md-7 about-text-right" style="text-align:justify">
            	<h3><?php echo $sewa['name'];?></h3>
                <ul>
                    <li><b>Address :</b> <?=$sewa['address'];?></li>
                    <li><b>Kendra Head :</b> <?=$sewa['kendrahead'];?></li>
                    <li><b>Phone :</b> <?=$sewa['phone'];?></li>
                    <li><b>Email :</b> <?=$sewa['email'];?></li>
                    <li><b>Kendra Info:</b> <br /><?=$sewa['contents'];?></li>
             	</ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        
        <h3>Other Sewakendra</h3>
        <div class="about-text" style="padding:0 1.5em">
        	<?php
			$list=$kendra->getSewaKendraWithLimit(100);
			while($row=$conn->fetchArray($list))
			{?>
                <div style="padding:5px 0" class="listTitle">
                    <br/>
                    <a href="sewakendra/<?=$row['urlname'];?>.html"><?=$row['name'];?></a>
                    <div id="news">
                        <? echo substr(strip_tags($row['shortcontents']), 0, 500); ?>
                    </div>
                </div>
        	<? }?>
        </div>
        
  	</div>
</div>