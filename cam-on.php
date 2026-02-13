<?php include 'header.php'; ?>

<!-- Event snippet for Đăng ký thành công conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-17948533999/IcwlCIHUnPcbEO_Jw-5C',
      'value': 1.0,
      'currency': 'VND'
  });
</script>

<section class="page-header">
    <div class="container">
        <h1>Đăng Ký Thành Công!</h1>
        <p>Cảm ơn bạn đã tin tưởng lựa chọn VayNhanhQN</p>
    </div>
</section>

<section class="container content-block" style="text-align: center; padding: 60px 0;">
    <div style="max-width: 600px; margin: 0 auto;">
        <div style="margin-bottom: 30px;">
            <i class="fas fa-check-circle" style="font-size: 5em; color: #28a745; animation: scaleIn 0.5s ease-out;"></i>
        </div>
        <h2 style="color: var(--primary-color); margin-bottom: 15px;">Hồ Sơ Đã Được Gửi Đi</h2>
        <p style="font-size: 1.1em; margin-bottom: 20px; color: #555;">
            Chúng tôi đã nhận được thông tin của bạn. Nhân viên tư vấn sẽ liên hệ lại trong vòng <strong>15 - 30 phút</strong> tới (trong giờ làm việc).
        </p>
        
        <div style="background: #f9f9f9; padding: 25px; border-radius: 10px; margin-bottom: 30px; border: 1px dashed #ccc;">
            <p style="margin-bottom: 10px;"><strong>Trong lúc chờ đợi:</strong></p>
            <p>Bạn vui lòng chuẩn bị sẵn ảnh chụp <strong>CMND/CCCD</strong> (2 mặt) để quá trình làm hồ sơ diễn ra nhanh chóng hơn.</p>
        </div>

        <div style="margin-bottom: 40px;">
            <p>Cần hỗ trợ gấp? Gọi ngay Hotline:</p>
            <a href="tel:<?php echo $contactConfig['phone']; ?>" style="font-size: 1.5em; font-weight: bold; color: var(--secondary-color); text-decoration: none;">
                <i class="fas fa-phone-alt"></i> <?php echo $contactConfig['phone_display']; ?>
            </a>
        </div>

        <a href="index" class="btn-primary"><i class="fas fa-arrow-left"></i> Quay Về Trang Chủ</a>
    </div>
</section>

<style>
@keyframes scaleIn {
    from { transform: scale(0); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}
</style>

<?php include 'footer.php'; ?>