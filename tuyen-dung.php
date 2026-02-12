<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Tuyển Dụng Cộng Tác Viên</h1>
        <p>Hợp tác cùng phát triển - Thu nhập không giới hạn</p>
    </div>
</section>

<section class="container content-block">
    <div style="display: flex; flex-wrap: wrap; gap: 40px;">
        <!-- Cột trái: Nội dung tuyển dụng -->
        <div style="flex: 2; min-width: 300px;">
            <h2 style="color: var(--primary-color);">Tại Sao Nên Trở Thành CTV Của Chúng Tôi?</h2>
            <p>Chúng tôi liên tục tuyển dụng Cộng tác viên (CTV) giới thiệu khách hàng vay vốn tại Quảng Ngãi với cơ chế hoa hồng hấp dẫn nhất thị trường.</p>
            
            <div style="margin-top: 20px;">
                <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                    <div style="background: #e7f3ff; padding: 15px; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.5em;"><i class="fas fa-hand-holding-usd"></i></div>
                    <div>
                        <h3>Hoa Hồng Hấp Dẫn</h3>
                        <p>Nhận hoa hồng cao ngay khi hồ sơ giải ngân thành công. Cơ chế thưởng thêm theo doanh số tháng.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                    <div style="background: #e7f3ff; padding: 15px; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.5em;"><i class="fas fa-clock"></i></div>
                    <div>
                        <h3>Thời Gian Linh Hoạt</h3>
                        <p>Không gò bó thời gian, không cần đến văn phòng. Bạn có thể làm việc mọi lúc, mọi nơi.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                    <div style="background: #e7f3ff; padding: 15px; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.5em;"><i class="fas fa-graduation-cap"></i></div>
                    <div>
                        <h3>Đào Tạo Miễn Phí</h3>
                        <p>Được hướng dẫn chi tiết về nghiệp vụ, cách tìm kiếm khách hàng và chốt sale hiệu quả.</p>
                    </div>
                </div>
            </div>

            <h3>Mô Tả Công Việc</h3>
            <ul style="margin-left: 20px; line-height: 1.8;">
                <li><i class="fas fa-check" style="color: green;"></i> Tìm kiếm khách hàng có nhu cầu vay vốn tín chấp (theo lương, bảo hiểm, hóa đơn...).</li>
                <li><i class="fas fa-check" style="color: green;"></i> Thu thập thông tin cơ bản và gửi về cho bộ phận xử lý hồ sơ.</li>
                <li><i class="fas fa-check" style="color: green;"></i> Theo dõi tiến độ và nhận hoa hồng khi giải ngân.</li>
            </ul>
        </div>

        <!-- Cột phải: Form đăng ký -->
        <div style="flex: 1; min-width: 300px;">
            <div class="contact-form" style="background: #fff; border: 1px solid #ddd; color: #333; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <h3 style="text-align: center; margin-bottom: 20px; color: var(--primary-color);">Đăng Ký Làm CTV</h3>
                <form id="formRecruit" onsubmit="sendTelegram(event, 'formRecruit')">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="fullname" placeholder="Họ và tên" required style="background: #f9f9f9;">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <input type="tel" name="phone" placeholder="Số điện thoại / Zalo" required style="background: #f9f9f9;">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" name="address" placeholder="Khu vực sinh sống" style="background: #f9f9f9;">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-briefcase"></i>
                        <input type="text" name="job" placeholder="Nghề nghiệp hiện tại (nếu có)" style="background: #f9f9f9;">
                    </div>
                    <!-- Trường ẩn để phân biệt nguồn -->
                    <input type="hidden" name="source" value="Đăng ký CTV">
                    <input type="hidden" name="amount" value="0"> <!-- Không cần số tiền vay -->
                    
                    <button type="submit" class="btn-primary" style="width: 100%;">Gửi Đăng Ký</button>
                </form>
                <p style="text-align: center; margin-top: 15px; font-size: 0.9em;">
                    Hoặc liên hệ trực tiếp Zalo: <a href="https://zalo.me/<?php echo $contactConfig['zalo']; ?>" target="_blank" style="font-weight: bold; color: var(--primary-color);"><?php echo $contactConfig['phone_display']; ?></a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>