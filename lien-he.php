<?php include 'header.php'; ?>


<section class="hero">
    <div class="container">
        <h1>Liên Hệ Tu Vấn Vay Tiền Mặt Tại Quảng Ngãi</h1>
        <p><?php echo $contactConfig['slogan']; ?></p>
        <p class="hero-subtitle">👉 “Chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7”</p>
        <a href="#lien-he" class="btn-primary"><i class="fas fa-paper-plane"></i> Đăng Ký Ngay</a>
    </div>
</section>

<main class="page-content container">

    <section class="container" style="padding-bottom: 50px;">
        <div style="display: flex; flex-wrap: wrap; gap: 30px;">
            <!-- Thông tin liên hệ -->
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
                </div>
            </div>

            <!-- Form liên hệ -->
            <div style="flex: 1; min-width: 300px;">
                <div class="contact-form" style="background: var(--primary-color); color: #fff; margin: 0;">
                    <h3 style="text-align: center; margin-bottom: 20px;">Đăng Ký Vay Online</h3>
                    <form id="formContact" onsubmit="sendTelegram(event, 'formContact')">
                        <div class="form-group"><i class="fas fa-user"></i><input type="text" name="fullname" placeholder="Họ và tên" required></div>
                        <div class="form-group"><i class="fas fa-phone"></i><input type="tel" name="phone" placeholder="Số điện thoại" required></div>
                        <div class="form-group"><i class="fas fa-id-card"></i><input type="text" name="id_card" placeholder="Số CMND/CCCD"></div>
                        <div class="form-group"><i class="fas fa-money-bill-wave"></i><input type="number" name="amount" placeholder="Số tiền muốn vay (triệu đồng)"></div>
                        <div class="form-group"><i class="fas fa-map-marker-alt"></i><input type="text" name="address" placeholder="Khu vực sinh sống (Huyện/Xã)"></div>
                        <input type="hidden" name="source" value="Trang liên hệ">
                        <button type="submit" class="btn-primary" style="width: 100%; background: var(--secondary-color);">Gửi Hồ Sơ Ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>