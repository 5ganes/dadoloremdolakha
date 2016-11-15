<div class="about"> 
		
    <div class="container">
    	<h3>Our Sewakendra</h3>
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