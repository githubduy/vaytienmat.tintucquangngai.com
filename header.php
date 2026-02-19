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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17948533999"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17948533999');
    </script>
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="container">
                <span><i class="fas fa-phone-alt"></i> Hotline: <a href="tel:<?php echo $contactConfig['phone']; ?>" style="color: inherit; text-decoration: none;"><?php echo $contactConfig['phone_display']; ?></a></span>
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
                    <li><a href="index" class="<?php echo ($currentPage == 'index') ? 'active' : ''; ?>"><i class="fas fa-home"></i> Trang chủ</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn <?php echo ($currentPage == 'gioi-thieu' || $currentPage == 'tac-gia-duong-yen' || $currentPage == 'tuyen-dung') ? 'active' : ''; ?>" onclick="toggleDropdown(this)"><i class="fas fa-info-circle"></i> Giới thiệu <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="pages/gioi-thieu"><i class="fas fa-building"></i> Về VayNhanhQN</a>
                            <a href="pages/tac-gia-duong-yen"><i class="fas fa-user-tie"></i> Tác Giả Dương Yến</a>
                            <a href="pages/tuyen-dung"><i class="fas fa-users"></i> Tuyển Dụng CTV</a>
                        </div>
                    </li>
                    <li><a href="dich-vu" class="<?php echo ($currentPage == 'dich-vu') ? 'active' : ''; ?>"><i class="fas fa-hand-holding-usd"></i> Gói vay</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown(this)"><i class="fas fa-headset"></i> Hỗ trợ <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="pages/dich-vu/gioi-thieu-app-banking.html"><i class="fas fa-mobile-alt"></i> Hướng dẫn vay qua App SHB</a>
                            <a href="pages/dich-vu/tat-toan-khoan-vay.html"><i class="fas fa-check-double"></i> Hướng dẫn tất toán</a>
                            <a href="pages/dich-vu/no-qua-han.html"><i class="fas fa-exclamation-triangle"></i> Tìm hiểu nợ quá hạn</a>
                            <a href="pages/cau-hoi-thuong-gap"><i class="fas fa-question-circle"></i> Câu hỏi thường gặp</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn <?php echo ($currentPage == 'dieu-khoan' || $currentPage == 'chinh-sach-bao-mat') ? 'active' : ''; ?>" onclick="toggleDropdown(this)"><i class="fas fa-file-contract"></i> Điều khoản <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="pages/dieu-khoan"><i class="fas fa-file-alt"></i> Điều khoản sử dụng</a>
                            <a href="pages/chinh-sach-bao-mat"><i class="fas fa-user-shield"></i> Chính sách bảo mật</a>
                        </div>
                    </li>
                    <li><a href="lien-he" class="<?php echo ($currentPage == 'lien-he') ? 'active' : ''; ?>"><i class="fas fa-envelope"></i> Liên hệ</a></li>
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