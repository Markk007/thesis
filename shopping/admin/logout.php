<?php
session_start();
$_SESSION['alogin']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="You've logout successfully!";
?>
<script language="javascript">
document.location="index.php";
</script>
