<div class="about"> 
		
    <div class="container">
        <h3><?=$pageName?></h3>
        <div class="about-text">
        	<?php
			$page=$groups->getById($pageId);
			$pageGet=$conn->fetchArray($page);
			if(!empty($pageGet['image']) and file_exists(CMS_GROUPS_DIR.$pageGet['image']))
			{?>
            	<div class="col-md-5 about-text-left">
                	<img src="<?=CMS_GROUPS_DIR.$pageGet['image']?>" class="img-responsive" alt=""/>
           	 	</div>
            <?php }?>
            <div class="col-md-11 about-text-right" style="text-align:justify">
                <h4>
                	<?php echo $pageGet['contents'];?>
                </h4>
            </div>
            <div class="clearfix"> </div>
            
        </div>
   	</div>
</div>