<?php
/**
 * File name: home.php
 *
 * PHP script to handle logout and session destroy.
 * PHP version 8.2
 * 
 * @category PHP
 * @package  MyPackage
 * @author   rishan <rishan.k@codilar.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://example.com/my_file
 */
session_start();
session_destroy();
header('Location: index.html');
clearstatcache();
?>