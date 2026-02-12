<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Dương Yến - Chuyên Viên Tư Vấn</h1>
        <p>Chủ sở hữu website & Nhân viên chính thức SHB Finance</p>
    </div>
</section>

<section class="container content-block">
    <div style="display: flex; flex-wrap: wrap; gap: 40px;">
        <!-- Cột trái: Ảnh & Liên hệ -->
        <div style="flex: 1; min-width: 300px; text-align: center;">
            <div style="position: relative; display: inline-block;">
                <img src="https://cdn-icons-png.flaticon.com/512/4042/4042422.png" alt="Dương Yến SHB Finance" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 5px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                <span style="position: absolute; bottom: 10px; right: 10px; background: #28a745; color: #fff; padding: 5px 10px; border-radius: 20px; font-size: 0.8em; border: 2px solid #fff;"><i class="fas fa-check-circle"></i> Verified</span>
            </div>
            <h2 style="margin-top: 15px; color: var(--primary-color);">Dương Yến</h2>
            <p style="font-weight: bold; color: #666;">Chuyên Viên Tín Dụng SHB Finance</p>
            
            <div style="margin-top: 25px;">
                <a href="#" target="_blank" class="btn-primary" style="background: #1877f2; width: 100%; margin-bottom: 10px; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <i class="fab fa-facebook-f"></i> Facebook Official
                </a>
                <a href="https://zalo.me/<?php echo $contactConfig['zalo']; ?>" target="_blank" class="btn-primary" style="background: #0068ff; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <i class="fas fa-comment-dots"></i> Kết nối Zalo
                </a>
            </div>
        </div>

        <!-- Cột phải: Thông tin chi tiết -->
        <div style="flex: 2; min-width: 300px;">
            <h2 style="color: var(--primary-color); border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 20px;">Hồ Sơ Cá Nhân</h2>
            <p>Xin chào, tôi là <strong>Dương Yến</strong> - Chủ sở hữu và người chịu trách nhiệm nội dung tại website <strong><?php echo $contactConfig['brand']; ?></strong>.</p>
            <p>Hiện tại, tôi đang công tác tại <strong>SHB Finance</strong> với vai trò là Chuyên viên tư vấn tài chính cá nhân, chuyên hỗ trợ các khoản vay tín chấp tại khu vực Quảng Ngãi.</p>
            
            <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid var(--secondary-color);">
                <h3 style="margin-bottom: 15px; font-size: 1.2em;"><i class="fas fa-id-badge"></i> Thông Tin Xác Thực</h3>
                <ul style="list-style: none; margin: 0;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-building" style="color: var(--primary-color); width: 25px;"></i> <strong>Đơn vị công tác:</strong> SHB Finance Quảng Ngãi</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-briefcase" style="color: var(--primary-color); width: 25px;"></i> <strong>Chức vụ:</strong> Chuyên viên tư vấn tín dụng (Sales)</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-map-marker-alt" style="color: var(--primary-color); width: 25px;"></i> <strong>Khu vực hỗ trợ:</strong> Toàn tỉnh Quảng Ngãi</li>
                    <li><i class="fas fa-star" style="color: var(--primary-color); width: 25px;"></i> <strong>Kinh nghiệm:</strong> Tư vấn giải pháp tài chính & Hỗ trợ làm hồ sơ vay vốn nhanh.</li>
                </ul>
            </div>

            <h3><i class="fas fa-handshake"></i> Tại Sao Nên Chọn Dương Yến?</h3>
            <p>Là một nhân viên chính thức của công ty, tôi làm việc với phương châm <strong>"Tận Tâm - Minh Bạch - Hiệu Quả"</strong>:</p>
            <ul style="margin-left: 20px; margin-top: 10px;">
                <li><i class="fas fa-check" style="color: green;"></i> <strong>Thông tin chính thống:</strong> Cập nhật chính xác các gói vay và lãi suất từ SHB Finance.</li>
                <li><i class="fas fa-check" style="color: green;"></i> <strong>Không qua trung gian:</strong> Làm việc trực tiếp, không qua cò mồi, môi giới bên ngoài.</li>
                <li><i class="fas fa-check" style="color: green;"></i> <strong>Không thu phí:</strong> Tuyệt đối không thu bất kỳ khoản phí làm hồ sơ nào từ khách hàng.</li>
                <li><i class="fas fa-check" style="color: green;"></i> <strong>Bảo mật tuyệt đối:</strong> Tuân thủ quy định bảo vệ dữ liệu khách hàng.</li>
            </ul>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>