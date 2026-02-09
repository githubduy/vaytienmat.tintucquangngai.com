<?php include 'header.php'; ?>

<section class="hero">
    <div class="container">
        <h1>Hỗ Trợ Vay Tiền Mặt Tại Quảng Ngãi</h1>
        <p><?php echo $contactConfig['slogan']; ?></p>
        <p class="hero-subtitle">👉 “Giải pháp tư vấn tài chính cá nhân minh bạch & uy tín”</p>
        <a href="#lien-he" class="btn-primary"><i class="fas fa-paper-plane"></i> Đăng Ký Ngay</a>
    </div>
</section>

<section class="features container">
    <div class="feature-item">
        <i class="fas fa-bolt"></i>
        <h3>Duyệt Nhanh</h3>
        <p>Hồ sơ duyệt nhanh chóng, nhận tiền sau 30 phút.</p>
    </div>
    <div class="feature-item">
        <i class="fas fa-percentage"></i>
        <h3>Lãi Suất Thấp</h3>
        <p>Lãi suất ưu đãi, cạnh tranh nhất thị trường.</p>
    </div>
    <div class="feature-item">
        <i class="fas fa-user-secret"></i>
        <h3>Bảo Mật</h3>
        <p>Thông tin khách hàng được bảo mật tuyệt đối.</p>
    </div>
</section>

<section class="container content-block">
    <h2 class="section-title">Bảng Lãi Suất & Hạn Mức</h2>
    <div class="table-responsive">
        <table class="table-loan">
            <thead>
                <tr>
                    <th>SẢN PHẨM VAY</th>
                    <th>Lãi suất</th>
                    <th>Hạn mức</th>
                    <th>VAY Tối Đa</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Lương</td><td>0.83-1.84%</td><td>&lt; 350 triệu</td><td>48 tháng</td></tr>
                <tr><td>B.Hiểm nhân thọ</td><td>1.2 – 1.76%</td><td>&lt; 160 triệu</td><td>48 tháng</td></tr>
                <tr><td>Hóa đơn điện</td><td>1.6 – 2.2%</td><td>&lt; 70 triệu</td><td>36 tháng</td></tr>
                <tr><td>Cavet xe máy</td><td>1.5 – 2.2%</td><td>&lt; 70 triệu</td><td>36 tháng</td></tr>
                <tr><td>SIM Điện thoại</td><td>1.6 – 2.0%</td><td>&lt; 70 triệu</td><td>36 tháng</td></tr>
                <tr><td>HĐ Tín chấp cũ</td><td>2.0 ~2.2%</td><td>&lt; 70 triệu</td><td>36 tháng</td></tr>
                <tr><td>Kinh Doanh</td><td>1.5 – 2.0%</td><td>&lt; 400 triệu</td><td>48 tháng</td></tr>
                <tr><td>Số dư Tài khoản</td><td>1.3 – 1.6%</td><td>&lt; 100 triệu</td><td>48 tháng</td></tr>
            </tbody>
        </table>
    </div>
    <p class="note-text">* Lưu ý: Thời gian vay tối thiểu là 6 tháng, tối đa là 48 tháng. Mức vay tối thiểu là 10 triệu, tối đa là 400 triệu cho một lần vay. Lãi suất % hàng năm tối thiểu là 18%/năm và tối đa là 36%/năm</p>

    <div class="loan-example" style="background: #eef7ff; padding: 20px; border-radius: 8px; margin-top: 20px; border: 1px solid #b8daff;">
        <h3 style="color: var(--primary-color); margin-bottom: 15px;"><i class="fas fa-calculator"></i> Ví Dụ Minh Họa Khoản Vay</h3>
        <ul style="list-style: none;">
            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: green; margin-right: 10px;"></i> <strong>Gói vay:</strong> 10 triệu – 100 triệu đồng</li>
            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: green; margin-right: 10px;"></i> <strong>Thời gian vay:</strong> 6 tháng - 36 tháng</li>
            <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: green; margin-right: 10px;"></i> <strong>Lãi suất phẳng (tham chiếu) tối đa:</strong> 35,4%/năm</li>
        </ul>
        <p style="margin-top: 15px; font-style: italic;">Kết quả ước tính dựa trên mức lãi suất phẳng (tham chiếu) 16,44%/năm:</p>
        <div style="background: #fff; padding: 15px; border-radius: 5px; margin-top: 10px; border-left: 4px solid var(--secondary-color);">
            <p style="margin-bottom: 5px;"><strong>Ví dụ:</strong> Khách hàng vay <strong>20.000.000đ</strong> trong <strong>18 tháng</strong>, với lãi suất phẳng <strong>16,44%/năm</strong>.</p>
            <p style="margin-bottom: 5px;">👉 <strong>Tổng số tiền cần thanh toán:</strong> <span style="color: #d9534f; font-weight: bold;">25.110.000đ</span></p>
            <p style="font-size: 0.9em; color: #666;">(Đã bao gồm các loại phí, trừ phí bảo hiểm không bắt buộc, phí chuyển tiền và phí trả nợ trước hạn).</p>
        </div>
        <p style="margin-top: 15px; font-weight: bold; color: var(--primary-color);"><i class="fas fa-info-circle"></i> SHBFinance không thu bất kỳ khoản phí nào cho đến khi khoản vay được giải ngân.</p>
    </div>

    <!-- Công cụ tính lãi suất -->
    <div class="calculator-box" id="calculator">
        <h3 style="color: var(--primary-color); text-align: center; margin-bottom: 20px;"><i class="fas fa-calculator"></i> Công Cụ Tính Lãi Suất</h3>
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 30px;">
            <div style="flex: 1; min-width: 300px;">
                <div class="form-group">
                    <label>Số tiền cần vay (Triệu đồng):</label>
                    <input type="number" id="calc-amount" placeholder="Nhập số tiền (10 - 100)" min="10" max="100" value="20" oninput="calculateLoan()">
                </div>
                <div class="form-group">
                    <label>Thời hạn vay:</label>
                    <select id="calc-term" onchange="calculateLoan()">
                        <option value="6">6 Tháng</option>
                        <option value="12">12 Tháng</option>
                        <option value="18" selected>18 Tháng</option>
                        <option value="24">24 Tháng</option>
                        <option value="36">36 Tháng</option>
                    </select>
                </div>
                <button onclick="calculateLoan()" class="btn-primary" style="width: 100%; margin-top: 10px;">Tính Toán Ngay</button>
            </div>
            <div style="flex: 1; min-width: 300px; background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #eee;">
                <h4 style="margin-bottom: 15px; border-bottom: 2px solid #ddd; padding-bottom: 10px;">Kết Quả Ước Tính</h4>
                <div class="result-row">
                    <span>Khoản vay:</span>
                    <strong id="res-amount">20.000.000 ₫</strong>
                </div>
                <div class="result-row">
                    <span>Lãi suất (tham chiếu):</span>
                    <strong>16.44%/năm</strong>
                </div>
                <div class="result-row">
                    <span>Gốc + Lãi hàng tháng:</span>
                    <strong id="res-monthly" style="color: var(--secondary-color); font-size: 1.3em;">1.395.000 ₫</strong>
                </div>
                <div class="result-row" style="border-top: 1px solid #ddd; margin-top: 10px; padding-top: 10px;">
                    <span>Tổng tiền phải trả:</span>
                    <strong id="res-total">25.110.000 ₫</strong>
                </div>
                <p style="font-size: 0.8em; color: #666; margin-top: 10px; font-style: italic;">* Kết quả tính toán chỉ mang tính chất tham khảo.</p>
            </div>
        </div>
    </div>
</section>

<section id="goi-vay" class="loan-packages">
    <div class="container">
        <h2 class="section-title">Các Gói Vay Tín Chấp</h2>
        <div class="packages-grid">
            <div class="package-card">
                <i class="fas fa-id-card"></i>
                <h3>Vay theo CMND/CCCD</h3>
                <p>Chỉ cần CMND/CCCD và Hộ khẩu/GPLX.</p>
                <a href="#lien-he" class="btn-secondary">Chọn gói này</a>
            </div>
            <div class="package-card">
                <i class="fas fa-money-check-alt"></i>
                <h3>Vay theo Lương</h3>
                <p>Dành cho người đi làm hưởng lương công ty.</p>
                <a href="#lien-he" class="btn-secondary">Chọn gói này</a>
            </div>
            <div class="package-card">
                <i class="fas fa-file-invoice-dollar"></i>
                <h3>Vay theo Hóa Đơn</h3>
                <p>Vay theo hóa đơn điện, nước, internet.</p>
                <a href="#lien-he" class="btn-secondary">Chọn gói này</a>
            </div>
        </div>
    </div>
</section>

<section id="quy-trinh" class="process container">
    <h2 class="section-title">Quy Trình Vay Đơn Giản</h2>
    <div class="steps">
        <div class="step">
            <span class="step-number">1</span>
            <h4>Đăng Ký</h4>
            <p>Điền thông tin hoặc gọi hotline.</p>
        </div>
        <div class="step">
            <span class="step-number">2</span>
            <h4>Tư Vấn</h4>
            <p>Nhân viên tư vấn khoản vay phù hợp.</p>
        </div>
        <div class="step">
            <span class="step-number">3</span>
            <h4>Thẩm Định</h4>
            <p>Duyệt hồ sơ online nhanh chóng.</p>
        </div>
        <div class="step">
            <span class="step-number">4</span>
            <h4>Giải Ngân</h4>
            <p>Nhận tiền qua tài khoản ngân hàng.</p>
        </div>
    </div>
</section>

<!-- Thêm nội dung: Điều kiện vay -->
<section class="container content-block">
    <h2 class="section-title">Điều Kiện Vay Tín Chấp</h2>
    <div class="row" style="display: flex; flex-wrap: wrap; gap: 20px;">
        <div style="flex: 1; min-width: 300px;">
            <ul style="list-style: none;">
                <li><i class="fas fa-check-circle" style="color: green;"></i> Công dân Việt Nam độ tuổi từ 20 - 60 tuổi.</li>
                <li><i class="fas fa-check-circle" style="color: green;"></i> Đang sinh sống và làm việc tại Quảng Ngãi.</li>
                <li><i class="fas fa-check-circle" style="color: green;"></i> Có CMND/CCCD còn hiệu lực.</li>
                <li><i class="fas fa-check-circle" style="color: green;"></i> Không có nợ xấu nhóm 3 trở lên (tùy trường hợp).</li>
                <li><i class="fas fa-check-circle" style="color: green;"></i> Có thu nhập ổn định (tự doanh hoặc đi làm hưởng lương).</li>
            </ul>
        </div>
        <div style="flex: 1; min-width: 300px;">
            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?auto=format&fit=crop&w=600&q=80" alt="Điều kiện vay" style="width: 100%; margin-top: 0;">
        </div>
    </div>
</section>

<!-- Thêm nội dung: FAQ -->
<section class="container content-block" style="background: #f9f9f9; border-radius: 8px; padding: 30px;">
    <h2 class="section-title">Câu Hỏi Thường Gặp</h2>
    <div class="faq-item" style="margin-bottom: 20px;">
        <h4 style="color: var(--primary-color);"><i class="fas fa-question-circle"></i> Vay tiền có cần thế chấp tài sản không?</h4>
        <p>Không. Chúng tôi hỗ trợ vay tín chấp 100%, không giữ giấy tờ gốc, không thế chấp tài sản.</p>
    </div>
    <div class="faq-item" style="margin-bottom: 20px;">
        <h4 style="color: var(--primary-color);"><i class="fas fa-question-circle"></i> Thời gian giải ngân bao lâu?</h4>
        <p>Thông thường hồ sơ được duyệt và giải ngân trong vòng 30 phút đến 2 giờ làm việc.</p>
    </div>
    <div class="faq-item">
        <h4 style="color: var(--primary-color);"><i class="fas fa-question-circle"></i> Nợ xấu có vay được không?</h4>
        <p>Chúng tôi có hỗ trợ các trường hợp nợ xấu nhóm 1, nhóm 2. Hãy liên hệ để được tư vấn cụ thể.</p>
    </div>
</section>

<section id="lien-he" class="contact-section">
    <div class="container">
        <h2>Liên Hệ Tư Vấn Miễn Phí</h2>
        <p>Để lại thông tin, chúng tôi sẽ gọi lại ngay cho bạn.</p>
        <form class="contact-form" id="formIndex" onsubmit="sendTelegram(event, 'formIndex')">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fullname" placeholder="Họ và tên" required>
            </div>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="tel" name="phone" placeholder="Số điện thoại" required>
            </div>
            <div class="form-group">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="address" placeholder="Khu vực sinh sống">
            </div>
            <input type="hidden" name="source" value="Trang chủ">
            <button type="submit" class="btn-primary">Gửi Yêu Cầu</button>
        </form>
    </div>
</section>

<script>
function calculateLoan() {
    // Lấy giá trị đầu vào
    let amountInput = document.getElementById('calc-amount').value;
    let months = parseInt(document.getElementById('calc-term').value);
    
    // Kiểm tra giá trị hợp lệ (chỉ cảnh báo khi bấm nút, không cảnh báo khi đang nhập)
    if (!amountInput || amountInput < 0) return;

    let amount = parseFloat(amountInput) * 1000000;
    let rate = 16.44 / 100; // Lãi suất 16.44%/năm

    // Công thức tính lãi phẳng:
    // Tổng lãi = Gốc * Lãi suất năm * (Số tháng / 12)
    // Tổng phải trả = Gốc + Tổng lãi
    // Trả hàng tháng = Tổng phải trả / Số tháng

    let totalInterest = amount * rate * (months / 12);
    let totalPayment = amount + totalInterest;
    let monthlyPayment = totalPayment / months;

    // Định dạng tiền tệ Việt Nam
    const formatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND'
    });

    document.getElementById('res-amount').innerText = formatter.format(amount);
    document.getElementById('res-monthly').innerText = formatter.format(monthlyPayment);
    document.getElementById('res-total').innerText = formatter.format(totalPayment);
}
</script>

<!-- Popup Khuyến Mãi -->
<div id="promo-popup" class="popup-overlay">
    <div class="popup-content">
        <span class="close-popup" onclick="closePopup()">&times;</span>
        <div class="popup-header">
            <i class="fas fa-coffee" style="font-size: 3em; color: #6f4e37; margin-bottom: 10px;"></i>
            <h3>Mời Cafe - Tư Vấn Miễn Phí</h3>
        </div>
        <div class="popup-body">
            <p>🎁 <strong>Tặng ngay 01 ly cafe</strong> khi khách hàng đến tư vấn trực tiếp 1-1.</p>
            <p><i class="fas fa-map-marker-alt" style="color: var(--secondary-color);"></i> <strong>Địa chỉ:</strong> 478 Hai Bà Trưng, Trần Phú, Quảng Ngãi</p>
            <p><i class="fas fa-clock" style="color: var(--secondary-color);"></i> <strong>Thời gian:</strong> Thứ 2 - Thứ 5 hàng tuần</p>
            <a href="#lien-he" class="btn-primary" onclick="closePopup()" style="display: block; margin-top: 15px; text-align: center;">Đặt Lịch Ngay</a>
        </div>
    </div>
</div>

<script>
    // Hiển thị popup sau 2 giây nếu chưa đóng trong phiên làm việc
    window.addEventListener('load', function() {
        if (!sessionStorage.getItem('popupClosed')) {
            setTimeout(function() {
                document.getElementById('promo-popup').style.display = 'flex';
            }, 2000);
        }
    });

    function closePopup() {
        document.getElementById('promo-popup').style.display = 'none';
        sessionStorage.setItem('popupClosed', 'true');
    }
</script>

<?php include 'footer.php'; ?>