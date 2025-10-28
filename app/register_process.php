<?php
    include __DIR__ . '/../config/config.php';

    session_start();

    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header('Location: ../public/registerpage.php');
        exit;
    }

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if($email === '' || $password === ''){
        header('Location: ../public/registerpage.php?error=' . urlencode('Email & password fields must be filled.'));
        exit;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location: ../public/registerpage.php?error=' . urlencode('Email is not valid.'));
        exit;
    }

    if(strlen($password) < 6){
        header('Location: ../public/registerpage.php?error=' . urlencode('Password must be 6 letters or above.'));
        exit;
    }

    $stmt = mysqli_prepare($conn, "SELECT id_akun, nama_akun, password_akun, role_akun FROM akun WHERE email_akun = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if(mysqli_stmt_num_rows($stmt) > 0){
        mysqli_stmt_close($stmt);
        $_SESSION['flash_messages'] = "Email has been registered already.";
        header('Location: ../public/registerpage.php?error=' . urlencode('Email has been registered already.'));
        exit;
    }
    mysqli_stmt_close($stmt);

    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($conn, "INSERT INTO akun (nama_akun,email_akun,password_akun,role_akun) VALUES (?,?,?,'user')");
    if(!$stmt){
        header('Location: ../public/registerpage.php?error=' . urlencode('Terjadi kesalahan server'));
        exit;
    }
    mysqli_stmt_bind_param($stmt,"sss",$name,$email,$password_hash);
    $ok = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    if($ok){
        header('Location: ../public/loginpage.php?registered=1');
        exit;
    }
    else{
        header('Location: ../public/registerpage.php?error=' . urlencode('Gagal membuat akun'));
        exit;
    }
?>