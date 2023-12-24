<?php
include ("../config/koneksi.php");

session_start();

$user = [
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'No_Telepon' => $_POST['No_Telepon'],
    'password' => $_POST['password'],
    'password2' => $_POST['password2'],
    'register' => $_POST['register'],
];

if ($user['password'] !== $user['password2']) {
    $_SESSION['error'] = "Password yang Anda masukkan tidak sama dengan password konfirmasi";
    echo "<script>alert('Password yang anda masukkan tidak sama dengan password konfirmasi');</script>";
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['No_Telepon'] = $_POST['No_Telepon'];
    header("refresh:3;url=register.php");
    exit;
}


$stmt = $koneksi->stmt_init();
if (!$stmt) {
    die('Tidak dapat membuat objek statement');
}

$query = "SELECT * FROM user WHERE username = ? LIMIT 1";
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

if ($row !== null) {
    $_SESSION['error'] ; 
    echo "<script>alert('Username yang anda masukkan sudah ada di database');</script>";
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
	$_SESSION['password2'] = $_POST['password2'];
    header("refresh:5;url=register.php");
    exit;
} else {
    $query = "INSERT INTO user (username, password, email, No_Telepon) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->stmt_init();
    if (!$stmt) {
        die('Tidak dapat membuat objek statement');
    }
    $stmt->prepare($query);
    $stmt->bind_param('sss', $user['username'], $user['password'], $user['email'], $user['No_Telepon']);
    $stmt->execute();
    $_SESSION['message'] = "Registrasi gagal. Silakan coba lagi."; 
    echo "<script>alert('Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat'); </script>";
    header("refresh:3;url=login.php");
    exit;
}
?>
