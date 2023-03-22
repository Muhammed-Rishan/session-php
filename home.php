<?php
/**
 * File name: home.php
 *
 * PHP script that stores user data in session.
 *
 * PHP version 8.2
 *
 * @category PHP
 * @package  MyPackage
 * @author   rishan <rishan.k@codilar.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://example.com/my_file
 */

 session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signin.php');
    exit();

}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['$username']);
    header("location: signin.php");
   
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
<h2>Home Page</h2>
</div>
<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
<h3>
          <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
</h3>
      </div>
<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
<p><a href="logout.php" style="color: red;">logout</a></p>
    <?php endif ?>
</div>

</body>
</html>