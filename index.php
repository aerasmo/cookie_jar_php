<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John W";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
<body>
  
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  URL: <input type="text" name="url"><br><br>
  <input type="submit" value="Submit">
</form> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"];
    if (empty($url)) {
        $url = "/index.php";
    }
    echo "<a href='$url'>$url</a>";
}
?>

</body>
</html>