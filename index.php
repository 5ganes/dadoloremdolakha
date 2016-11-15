<?php
include("clientobjects.php");
include("includes/header.php");
?>

<?php 
	if(isset($_GET['action']))
	{
		if($_GET['action']=="sewakendra")
		{
			include("includes/showsewakenrasingle.php");
		}
		else
		{
			//echo $_GET['action'];
			$action = $_GET['action'];
			$action = str_replace(".","", $action);
			include("includes/".$action.".php");			
		}
	}
	else if(isset($_POST['search']))
	{
		include("includes/search.php");	
	}			
	else if(isset($pageLinkType))
	{
		if($pageLinkType == "")
		{}
		else
		{
			include("includes/cmspage.php");
		}
	}
	else
	{
		include("includes/main.php");
	}
?>
	
<!--footer-->
<?php
include("includes/footer.php");
?>