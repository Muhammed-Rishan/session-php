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
 * @return   none
 */
function submitData()
{
    $data = file_get_contents('reg.json');
    $registrations = json_decode($data, true);
    

    if ($_POST != null) {
        $registration = array(
            'fname' => $_POST['fname'],
            'email' => $_POST['email'],
            'username' => $_POST['username'],
            'password' => $_POST['password']
        );
        array_push($registrations, $registration);

        $data = json_encode($registrations);

        file_put_contents('reg.json', $data);

        echo 'Registration Successful';
    } else {
        echo 'Registration Failed';
    }
}
header("Location:signin.php");
if (file_get_contents('reg.json') == null) {
    file_put_contents('reg.json', '[]');
}
submitData();
