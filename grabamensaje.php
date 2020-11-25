<?php 
$con=mysqli_connect("localhost","root","","huanchaco");
$con->query("insert mensajes values('".$_POST['txtnombres']."','".$_POST['txtapellidos']."','".$_POST['txtemail']."','".$_POST['txtlugar']."','".$_POST['txtmensaje']."')");
$con->close();
?>
<script type="text/javascript">
	top.location.href="index.html";
</script>