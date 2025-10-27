<?php
    require_once __DIR__ . '/../config/config.php';

    if (session_status() === PHP_SESSION_NONE) {
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',         // ubah jika perlu (mis. 'example.com')
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Lax'     // Lax cocok untuk login form; bisa 'Strict' jika sesuai
    ]);
    session_start();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: ../public/loginpage.php');
        exit;
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if($email === '' || $password === ''){
        header('Location: ../public/register.php?error=' . urlencode('Email & password fields must be filled.'));
        exit;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location: ../public/register.php?error=' . urlencode('Email is not valid.'));
        exit;
    }

    $stmt = mysqli_prepare($conn, "SELECT id_akun,nama_akun,password_akun,role_akun FROM akun WHERE email_akun = ? LIMIT 1");
    if(!$stmt){
        header('Location: ../public/register.php?error=' . urlencode('Terjadi kesalahan server'));
        exit;
    }
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if(mysqli_stmt_num_rows($stmt) === 0){
        mysqli_stmt_close($stmt);
        header('Location: ../public/loginpage.php?error=' . urlencode('Wrong Email or Password.'));
        exit;
    }

    mysqli_stmt_bind_result($stmt, $id, $name, $password_hash, $role);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if (!password_verify($password, $password_hash)) {
        header('Location: ../public/loginpage.php?error=' . urlencode('Wrong Email or Password.'));
        exit;
    }

    session_regenerate_id(true);
    $_SESSION['user_id'] = (int)$id;
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_role'] = $role;
    $_SESSION['last_login'] = date('Y-m-d H:i:s');

    $redirect = '';

    header('Location: ../public/homepage.php');
}