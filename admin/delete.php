<?php
include 'config.php';
$id=$_GET["id"];
//echo $id;
//mysqli_query($conn,"delete from menu where id='$id'");
?>
<script type="text/javascript">
	var d =confirm("Do you want to delete?");
	// /alert(d);
	if(d)
	{
		window.location="delete1_m.php?id=<?php echo $id;?>"; 	
	}else{
		window.location="display_menu.php"; 	
	}
	
</script>
