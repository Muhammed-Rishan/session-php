<?php
/**
 * File name: signin.php
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
 * @return   void
 */

session_start();
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}


function signIn()
{
    $data = file_get_contents('reg.json');
    $registrations = json_decode($data, true);

    if ($_POST != null) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        foreach ($registrations as $registration) {
            if ($registration['username'] == $username 
                && $registration['password'] == $password
            ) {
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $registration['email'];

                header("Location: home.php");
                exit();
            }
        }

        // Login failed
        // echo 'Login Failed';
        header("Location: signin.html");
    } else {
        // echo 'Login Failed';
        header("Location: signin.html");
    }
}

if (file_get_contents('reg.json') == null) {
    file_put_contents('reg.json', '[]');
}

signIn();