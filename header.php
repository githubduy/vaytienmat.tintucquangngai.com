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
                <a href="index" class="logo"><i class="fas fa-hand-holding-usd"></i> <?php echo $contactConfig['brand']; ?></a>
                
                <div class="menu-toggle" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index" class="<?php echo ($currentPage == 'index') ? 'active' : ''; ?>">Trang chủ</a></li>
                    <li><a href="gioi-thieu" class="<?php echo ($currentPage == 'gioi-thieu') ? 'active' : ''; ?>">Giới thiệu</a></li>
                    <li><a href="dich-vu" class="<?php echo ($currentPage == 'dich-vu') ? 'active' : ''; ?>">Gói vay</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown(this)">Hỗ trợ <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="pages/dich-vu/gioi-thieu-app-banking.html">Hướng dẫn vay qua App SHB</a>
                            <a href="pages/dich-vu/tat-toan-khoan-vay.html">Hướng dẫn tất toán</a>
                            <a href="pages/dich-vu/no-qua-han.html">Tìm hiểu nợ quá hạn</a>
                        </div>
                    </li>
                    <li><a href="dieu-khoan" class="<?php echo ($currentPage == 'dieu-khoan') ? 'active' : ''; ?>">Điều khoản</a></li>
                    <li><a href="lien-he" class="<?php echo ($currentPage == 'lien-he') ? 'active' : ''; ?>">Liên hệ</a></li>
                </ul>
            </div>
        </nav>
</header>

<script>
function toggleMobileMenu() {
    var navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}

function toggleDropdown(element) {
    // Ngăn chặn hành vi mặc định nếu cần và toggle class show
    var dropdownContent = element.nextElementSibling;
    dropdownContent.classList.toggle("show");
}

// Đóng dropdown khi click ra ngoài (tùy chọn để trải nghiệm tốt hơn)
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn') && !event.target.closest('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script>