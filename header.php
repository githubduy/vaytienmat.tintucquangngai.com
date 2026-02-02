<?php 
include 'config/contact.php'; 
include 'config/seo.php';

$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$currentSeo = $seoConfig[$currentPage] ?? $seoConfig['default'];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $currentSeo['title']; ?></title>
    <meta name="description" content="<?php echo $currentSeo['description']; ?>">
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
                    <li><a href="index.php" class="<?php echo ($currentPage == 'index') ? 'active' : ''; ?>">Trang chủ</a></li>
                    <li><a href="gioi-thieu.php" class="<?php echo ($currentPage == 'gioi-thieu') ? 'active' : ''; ?>">Giới thiệu</a></li>
                    <li><a href="dich-vu.php" class="<?php echo ($currentPage == 'dich-vu') ? 'active' : ''; ?>">Gói vay</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Hỗ trợ</a>
                        <div class="dropdown-content">
                            <a href="pages/dich-vu/gioi-thieu-app-banking.html">Hướng dẫn vay qua App SHB</a>
                        </div>
                    </li>
                    <li><a href="dieu-khoan.php" class="<?php echo ($currentPage == 'dieu-khoan') ? 'active' : ''; ?>">Điều khoản</a></li>
                    <li><a href="lien-he.php" class="<?php echo ($currentPage == 'lien-he') ? 'active' : ''; ?>">Liên hệ</a></li>
                </ul>
            </div>
        </nav>
    </header>