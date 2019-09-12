<?php
/*
echo "Detta suger";
?>
<?php header("Content-type: text/html; charset=utf-8");
if (empty($_GET['name'])) {
  echo '<h1>Hej berit</hq>';
} else {
  echo '<h1>Hej ', filter_input('INPUT_GET', 'name', FILTER_SANITIZE_SPECIAL_CHARS), '</h1>';
}
*/
?>
<!--
<form action="index2.php" method="get">
  <input type="text" name="fname">
  <input type="submit">
</form>
-->
<form action="index2.php" method="get">
  <input type="text" name="sname">
  <input type="submit">
</form>
