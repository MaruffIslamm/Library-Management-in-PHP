<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
session_destroy();
?>
?>
<script>
alert('logout success...');
window.location='index.php'
</script>
?php>
</body>
</html>