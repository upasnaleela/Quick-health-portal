<?php
session_start();
unset($_SESSION["status"]);
session_destroy();

?>
<script type="text/javascript">
window.location="../../USERS/login.php";
</script>