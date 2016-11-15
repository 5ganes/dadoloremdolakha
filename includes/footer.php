<script type="text/javascript">
	function ajaxinsert()
	{
		mobile = document.getElementById("mobile").value; //alert(mobile); return false;
		document.getElementById("msg").style = "margin-top:15px; color:red";
		if(mobile=="" || isNaN(mobile) || mobile.length>10 || mobile.length<10)
		{
			document.getElementById("msg").innerHTML="Please Enter valid mobile number";
		}
		else
		{
			//alert(urlname);
			var xmlHttp;
			if(window.XMLHttpRequest)
			{
				xmlHttp=new XMLHttpRequest();
			}
			else
			{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlHttp.onreadystatechange=function()
			{
				if (xmlHttp.readyState==4)
				{
					document.getElementById("msg").innerHTML = xmlHttp.responseText;
				}
			};
			
			xmlHttp.open("GET",'savemobile.php?mobile='+ mobile,true);
			xmlHttp.send(null);
		}
	}
</script>
<div class="footer">
    <div class="container" style="background:#fff; padding-top:1em">
        <div class="footer-grids">				
            <div class="col-md-4 recent-posts">
                
                <h4>हाम्रो बारेमा</h4>
                <?
                $about=$groups->getByParentIdWithLimit(ABOUT, 5);
                while($aboutGet=$conn->fetchArray($about))
                {?>
                    <div class="recent-posts-text" style="padding:1em 0 1em">
                        <h5><a href="<?=$aboutGet['urlname'];?>"><?=$aboutGet['name'];?></a></h5>
                    </div>
                <? }?>
            </div>
            <div class="col-md-4 recent-posts">
                <h4>SMS Subscription</h4>
                <div id="msg"></div>
                <input id="mobile" type="number" name="mobile"  placeholder="Enter your mobile number"/><br />
                <input class="submit" type="button" name="subscribe" value="Subscribe" onclick="ajaxinsert()"/>
            	<br /><br /><br />
                <span style="color:red">[ Note: Only for NTC and SKY Users ]</span>
            </div>
            <div class="col-md-4 recent-posts">
                <?php
                $contact=$groups->getById(CONTACT);
                $contactGet=$conn->fetchArray($contact);
                ?>
                <h4><?=$contactGet['name'];?></h4>
                <?=$contactGet['shortcontents'];?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>	
</div>	
	<!--//footer-->
<div class="footer-bottom">
    <div class="container">
        <p>Copyright © 2015 DADO Dolakha. All rights reserved | Powered by: <a href="http://www.krishighar.com">Team Krishigar</a></p>
    </div>
</div>
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--//smooth-scrolling-of-move-up-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"> </script>
</body>
</html>