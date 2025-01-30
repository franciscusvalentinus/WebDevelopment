<?php
include('user.php');
session_start();
if (isset($_POST['create'])) {
    if (!empty($_SESSION['daftar'])) {
        $listUser = unserialize($_SESSION['daftar1']);
    }
    $newUser = new User($_POST['name'], $_POST['address'], $_POST['phone'], $_POST['birthday'], $_POST['email']);
    $listUser[] = $newUser;
    $serialized = serialize($listUser);
    $_SESSION['daftar'] = $serialized;
    echo "<script>location.href='progressbar.php'</script>";
} else {
}