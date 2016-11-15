<!--banner-->
<div class="banner">
    <div class="container " style="padding-top:10px">
      	<div class="col-md-9">  
            <!-- Start WOWSlider.com HEAD section -->
            <link rel="stylesheet" type="text/css" href="jquery/engine1/style.css" media="screen" />
            <script type="text/javascript" src="jquery/engine1/jquery.js"></script>
            <!-- End WOWSlider.com HEAD section -->
            <!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <? $slider=$groups->getByParentId(SLIDER); $i=1;
                        while($sliderGet=$conn->fetchArray($slider))
                        {?>
                            <li><img src="<?=CMS_GROUPS_DIR.$sliderGet['image'];?>" id="wows1_<?=$i++;?>" width="830" height="350"/></li>
                        <? }?>
                    </ul>
                </div>
                <a href="#" class="ws_frame"></a>
                <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="jquery/engine1//wowslider.js"></script>
            <script type="text/javascript" src="jquery/engine1//script.js"></script>
            <!-- End WOWSlider.com BODY section -->
    	</div>
        <div class="col-md-3">
        	<div class="msg-chief">
            	<? $msg=$groups->getById(MESSAGE); $msg=$conn->fetchArray($msg);?>
            	<h5><?=$msg['name'];?></h5>
            	<img src="<?=CMS_GROUPS_DIR.$msg['image'];?>"/>
                <?=substr($msg['shortcontents'],0,50);?>
                <p><a style="float:right" href="<?=$msg['urlname'];?>">more...</a></p>
                <div style="clear:both"></div>
            </div>
            <div class="msg-chief">
            	<? $off=$groups->getById(OFFICER); $off=$conn->fetchArray($off);?>
            	<h5><?=$off['name'];?></h5>
            	<img src="<?=CMS_GROUPS_DIR.$off['image'];?>"/>
                <?=substr($off['shortcontents'],0,50);?>
                <p><a style="float:right" href="<?=$off['urlname'];?>">more...</a></p>
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
</div>
<!--//banner-->


<div class="banner-bottom" style=" margin-top:1%">
    <div class="container" style="background:#fff; padding-top:1%">
        <div class="col-md-3">
        	<div class="aboutus">
            	<ul>
                	<?
					$ab=$groups->getByParentIdWithLimit(ABOUT,5);
					while($abGet=$conn->fetchArray($ab))
					{?>
                		<li><a href="<?=$abGet['urlname'];?>"><?=$abGet['name'];?></a></li>
                    <? }?>
                </ul>
            </div>
            
            <div class="sewakendra">
            	<h4 style="">
                	सेवा केन्द्रहरु
            	</h4>
                <?php
                $sk=$kendra->getSewaKendraWithLimit(4);
                while($skGet=$conn->fetchArray($sk))
                {?>
                    <div style="padding:0.8em 0; margin:0 1em" class="recent-posts-text">
                        <h5><a href="sewakendra/<?=$skGet['urlname'];?>.html"><?=$skGet['name'];?></a></h5>
                    </div>
                <? }?>
                <p style="margin-top:10px; float:right; margin-right:4%"><a class="viewall" href="sewakendra.html">View All</a></p>
                <div style="clear:both"></div>
                
            </div>
        </div>
        <div class="col-md-6">
        	<div class="welcome">
				<?
                $wel=$groups->getById(WELCOME); $welGet=$conn->fetchArray($wel);
                ?>
                <h2><?=$welGet['name'];?></h2>
                <p>
                    <?=$welGet['shortcontents'];?>
                </p>
                
                <a class="more" style="background:none; float:right; color:red; height:30px;margin:0em auto 0;width:108px;" 
                href="<?php echo $welGet['urlname'];?>">see more...</a>
                <style>
                    .more:hover{font-size:16px; font-weight:bold}
                </style>
			</div>
            <div style="clear:both"></div>
            <div class="news-notice">
            	
                <h4 style="">
                    सूचना / समाचार
                </h4>
                <?php
                $news=$groups->getByParentIdWithLimit(NEWS,4);
                while($newsGet=$conn->fetchArray($news))
                {?>
                    <div style="padding:0.6em 0; margin:0 1em; text-align:left" class="recent-posts-text">
                        <h5><a href="<?=$newsGet['urlname'];?>"><?=$newsGet['name'];?></a></h5>
                    </div>
                <? }?>
                <p style="margin-top:10px; float:right; margin-right:4%">
                	<a class="viewall" href="<? $link=$conn->fetchArray($groups->getById(NEWS)); echo $link['urlname'];?>">View All</a>
               	</p>
                <div style="clear:both"></div>
            	
            </div>			
        </div>
        <div class="col-md-3">
        	<div class="sewakendra">
            	<h4 style="">
                	महत्वपूर्ण लिन्क्स
            	</h4>
                <?php
                $links=$groups->getByParentIdWithLimit(LINKS,9);
                while($linksGet=$conn->fetchArray($links))
                {?>
                    <div style="padding:0.8em 0; margin:0 1em" class="recent-posts-text">
                        <h5><a href="<?=$linksGet['urlname'];?>"><?=$linksGet['name'];?></a></h5>
                    </div>
                <? }?>
                <p style="margin-top:10px; float:right; margin-right:4%">
                	<a class="viewall" href="<? $link=$conn->fetchArray($groups->getById(LINKS)); echo $link['urlname'];?>">View All</a>
              	</p>
                <div style="clear:both"></div>
                
            </div>
        </div>
    </div>
</div>

<!--stay connected-->
<div class="like">		
    <div class="container" style=" background:#fff; padding-bottom:1em">
        <div class="work-title">
            <h3>Stay connected with us</h3>
            <p class="cnnct">Click on links below to connect with us:	</p>
        </div>
        <div class="col-md-3 like-grids">
            <a href="#">
                <img src="images/icon1.png" alt=""/>
            </a>
            <p>Facebook</p>
        </div>
        <div class="col-md-3 like-grids">
            <a href="#">
                <img src="images/icon5.png" alt=""/>
            </a>
            <p>Twitter</p>
        </div>
        <div class="col-md-3 like-grids">
            <a href="#">
                <img src="images/krishighar.png" alt=""/>
            </a>
            <p>Krishighar</p>
        </div>
        <div class="col-md-3 like-grids">
            <a href="#">
                <img src="images/icon7.png" alt=""/>
            </a>
            <p>Googleplus</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>