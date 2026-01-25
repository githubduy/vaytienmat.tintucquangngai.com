<?php include 'config/contact.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vay Tiền Mặt Quảng Ngãi - Uy Tín, Nhanh Chóng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="container">
                <span><i class="fas fa-phone-alt"></i> Hotline: <?php echo $contactConfig['phone_display']; ?></span>
                <span><i class="fas fa-envelope"></i> <?php echo $contactConfig['email']; ?></span>
                <span class="header-slogan hidden-mobile"> - <?php echo $contactConfig['slogan']; ?></span>
            </div>
        </div>
        <nav class="navbar">
            <div class="container">
                <a href="index.php" class="logo"><i class="fas fa-hand-holding-usd"></i> <?php echo $contactConfig['brand']; ?></a>
                <ul class="nav-links">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="gioi-thieu.php">Giới thiệu</a></li>
                    <li><a href="dich-vu.php">Gói vay</a></li>
                    <li><a href="lien-he.php">Liên hệ</a></li>
                </ul>
            </div>
        </nav>
    </header>