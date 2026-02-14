<?php
// Sử dụng cấu hình mặc định để tránh lỗi header
$page = 'default';
include 'header.php';
?>

<div class="container" style="text-align: center; padding: 80px 0;">
    <h1 style="font-size: 8em; color: var(--secondary-color); margin-bottom: 0; line-height: 1;">404</h1>
    <h2 style="margin-bottom: 20px; color: var(--primary-color);">Không Tìm Thấy Trang</h2>
    <p style="font-size: 1.2em; margin-bottom: 30px;">Rất tiếc, trang bạn đang tìm kiếm không tồn tại hoặc đã bị xóa.</p>
    <a href="/" class="btn-primary"><i class="fas fa-home"></i> Quay Về Trang Chủ</a>
</div>

<?php include 'footer.php'; ?>
