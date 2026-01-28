<?php include 'header.php'; ?>
<?php
$page_title = "Liên Hệ Đặt Lịch - Yến Makeup Artist";
include 'header.php';
?>

<div class="page-header">
    <div class="container">
        <h1>Liên Hệ Tư Vấn</h1>
        <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7</p>
    </div>
</div>

<section class="container" style="padding-bottom: 50px;">
    <div style="display: flex; flex-wrap: wrap; gap: 30px;">
        <!-- Thông tin liên hệ -->
<main class="page-content container">
    <h2 class="section-title">Liên Hệ & Đặt Lịch</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 40px;">
        <!-- Contact Info -->
        <div style="flex: 1; min-width: 300px;">
            <h2 style="color: var(--primary-color); margin-bottom: 20px;">Thông Tin Liên Lạc</h2>
            <p style="margin-bottom: 15px;"><i class="fas fa-map-marker-alt" style="color: var(--secondary-color); width: 25px;"></i> <strong>Địa chỉ:</strong> <?php echo $contactConfig['address']; ?></p>
            <p style="margin-bottom: 15px;"><i class="fas fa-phone-alt" style="color: var(--secondary-color); width: 25px;"></i> <strong>Hotline:</strong> <a href="tel:<?php echo $contactConfig['phone']; ?>" style="color: #333; font-weight: bold;"><?php echo $contactConfig['phone_display']; ?></a></p>
            <p style="margin-bottom: 15px;"><i class="fas fa-envelope" style="color: var(--secondary-color); width: 25px;"></i> <strong>Email:</strong> <?php echo $contactConfig['email']; ?></p>
            <p style="margin-bottom: 15px;"><i class="fas fa-clock" style="color: var(--secondary-color); width: 25px;"></i> <strong>Giờ làm việc:</strong> <?php echo $contactConfig['working_hours']; ?></p>
            
            <div style="margin-top: 30px; background: #f9f9f9; padding: 20px; border-radius: 8px;">
                <h3>Lưu ý:</h3>
                <ul style="margin-left: 20px; margin-top: 10px;">
                    <li>Chúng tôi KHÔNG thu phí hồ sơ trước.</li>
                    <li>Mọi thông tin tư vấn đều là miễn phí.</li>
                    <li>Cảnh báo lừa đảo: Không chuyển tiền cho bất kỳ ai yêu cầu phí đặt cọc.</li>
                </ul>
            <h3>Thông Tin Liên Hệ</h3>
            <p>Hãy liên hệ với Yến để được tư vấn và đặt lịch sớm nhất cho ngày trọng đại của bạn!</p>
            <p style="margin: 15px 0;"><i class="fas fa-map-marker-alt"></i> <strong>Địa chỉ:</strong> <?php echo $config['address']; ?></p>
            <p style="margin-bottom: 15px;"><i class="fas fa-phone"></i> <strong>Hotline:</strong> <a href="tel:<?php echo $config['phone']; ?>"><?php echo $config['phone']; ?></a> (Call/Zalo)</p>
            <p style="margin-bottom: 15px;"><i class="fas fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?php echo $config['email']; ?>"><?php echo $config['email']; ?></a></p>
            <div class="social-links" style="margin-top: 20px;">
                <a href="<?php echo $config['facebook_url']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo $config['instagram_url']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo $config['tiktok_url']; ?>" target="_blank"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>

        <!-- Form liên hệ -->
        <div style="flex: 1; min-width: 300px;">
            <div class="contact-form" style="background: var(--primary-color); color: #fff; margin: 0;">
                <h3 style="text-align: center; margin-bottom: 20px;">Đăng Ký Vay Online</h3>
                <form>
                    <div class="form-group"><i class="fas fa-user"></i><input type="text" placeholder="Họ và tên" required></div>
                    <div class="form-group"><i class="fas fa-phone"></i><input type="tel" placeholder="Số điện thoại" required></div>
                    <div class="form-group"><i class="fas fa-id-card"></i><input type="text" placeholder="Số CMND/CCCD"></div>
                    <div class="form-group"><i class="fas fa-money-bill-wave"></i><input type="number" placeholder="Số tiền muốn vay (triệu đồng)"></div>
                    <div class="form-group"><i class="fas fa-map-marker-alt"></i><input type="text" placeholder="Khu vực sinh sống (Huyện/Xã)"></div>
                    <button type="submit" class="btn-primary" style="width: 100%; background: var(--secondary-color);">Gửi Hồ Sơ Ngay</button>
                </form>
            </div>
        <!-- Contact Form -->
        <div style="flex: 1.5; min-width: 300px;">
            <h3>Gửi Yêu Cầu Tư Vấn</h3>
            <form action="#" method="post" class="contact-form-makeup">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Họ và tên của bạn" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Số điện thoại" required>
                </div>
                <div class="form-group">
                    <select name="service" required>
                        <option value="">-- Chọn dịch vụ bạn quan tâm --</option>
                        <option value="Trang điểm cô dâu">Trang điểm cô dâu</option>
                        <option value="Trang điểm dự tiệc">Trang điểm dự tiệc</option>
                        <option value="Trang điểm kỷ yếu">Trang điểm kỷ yếu</option>
                        <option value="Học trang điểm cá nhân">Học trang điểm cá nhân</option>
                        <option value="Học trang điểm chuyên nghiệp">Học trang điểm chuyên nghiệp</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Nội dung yêu cầu hoặc câu hỏi của bạn..."></textarea>
                </div>
                <button type="submit" class="btn">Gửi Yêu Cầu</button>
            </form>
        </div>
    </div>
</section>
</main>

<?php include 'footer.php'; ?>