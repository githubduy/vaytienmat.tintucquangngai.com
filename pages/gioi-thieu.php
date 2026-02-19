<style>
    /* CSS Riêng cho trang Giới Thiệu */
    .about-hero {
        background: linear-gradient(135deg, var(--primary-color), #003d80);
        color: #fff;
        padding: 40px 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 40px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .about-hero h2 { font-size: 2.2em; margin-bottom: 10px; color: #fff; }
    .about-hero p { font-size: 1.1em; opacity: 0.9; max-width: 800px; margin: 0 auto; }

    .concept-box {
        background: #fff;
        border-left: 5px solid var(--secondary-color);
        padding: 25px;
        margin-bottom: 40px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border-radius: 0 10px 10px 0;
    }
    .concept-title { color: var(--primary-color); font-size: 1.5em; margin-bottom: 15px; display: flex; align-items: center; gap: 10px; }
    
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }
    .comparison-table th, .comparison-table td { padding: 12px; border: 1px solid #eee; text-align: left; }
    .comparison-table th { background: #f4f4f4; color: #333; }
    .comparison-table td.check { color: green; font-weight: bold; }
    .comparison-table td.cross { color: #999; }

    .local-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }
    .local-card {
        background: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        transition: transform 0.3s;
    }
    .local-card:hover { transform: translateY(-5px); background: #eef7ff; }
    .local-card i { font-size: 2em; color: var(--secondary-color); margin-bottom: 10px; }

    .districts-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 15px;
    }
    .district-tag {
        background: #e7f3ff;
        color: var(--primary-color);
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.9em;
        font-weight: 500;
    }
</style>

<div class="about-hero">
    <h2>VayNhanhQN - Điểm Tựa Tài Chính Quảng Ngãi</h2>
    <p>Chúng tôi không phải là ngân hàng, chúng tôi là cầu nối giúp người dân Quảng Ngãi tiếp cận nguồn vốn chính thống, an toàn và minh bạch nhất.</p>
</div>

<!-- Phần 1: Giáo dục khách hàng về Vay Tín Chấp -->
<div class="concept-box">
    <h3 class="concept-title"><i class="fas fa-lightbulb"></i> Vay Tín Chấp Là Gì?</h3>
    <p>Rất nhiều bà con Quảng Ngãi vẫn nhầm lẫn giữa đi vay ngân hàng (thế chấp) và vay tín chấp. Hiểu đơn giản:</p>
    <p><strong>Vay tín chấp</strong> là hình thức vay tiền <strong>dựa trên "Uy Tín"</strong> của bạn (thể hiện qua Lịch sử tín dụng, Thu nhập, Hóa đơn...) mà <strong>KHÔNG CẦN</strong> đem tài sản (Sổ đỏ, Xe cộ) ra để thế chấp.</p>
    
    <div class="table-responsive">
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Đặc điểm</th>
                    <th>Vay Thế Chấp (Truyền thống)</th>
                    <th>Vay Tín Chấp (VayNhanhQN)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tài sản đảm bảo</td>
                    <td>Bắt buộc (Nhà, Đất, Xe hơi)</td>
                    <td class="check">Không cần (Dựa vào uy tín)</td>
                </tr>
                <tr>
                    <td>Thủ tục</td>
                    <td>Phức tạp, công chứng rườm rà</td>
                    <td class="check">Đơn giản, chỉ cần chụp ảnh</td>
                </tr>
                <tr>
                    <td>Thời gian nhận tiền</td>
                    <td>7 - 14 ngày</td>
                    <td class="check">30 phút - 24 giờ</td>
                </tr>
                <tr>
                    <td>Mục đích vay</td>
                    <td>Mua nhà, kinh doanh lớn</td>
                    <td class="check">Tiêu dùng, sửa nhà, cưới hỏi...</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Phần 2: Giá trị cốt lõi & Địa phương -->
<h2 class="section-title">Tại Sao Người Quảng Ngãi Chọn Chúng Tôi?</h2>
<div class="local-grid">
    <div class="local-card">
        <i class="fas fa-map-marked-alt"></i>
        <h3>Thấu Hiểu Địa Phương</h3>
        <p>Chúng tôi là người con đất Quảng, hiểu rõ nhu cầu và khó khăn của bà con từ miền núi đến hải đảo.</p>
    </div>
    <div class="local-card">
        <i class="fas fa-shield-alt"></i>
        <h3>Nói KHÔNG với Tín Dụng Đen</h3>
        <p>Cam kết chỉ giới thiệu các gói vay từ công ty tài chính được Ngân hàng Nhà nước cấp phép (SHB, FE, Home...).</p>
    </div>
    <div class="local-card">
        <i class="fas fa-user-secret"></i>
        <h3>Bảo Mật Tuyệt Đối</h3>
        <p>Việc vay vốn là chuyện riêng tư. Chúng tôi cam kết giữ kín thông tin của bạn với gia đình và đồng nghiệp.</p>
    </div>
</div>

<!-- Phần 3: Khu vực hỗ trợ -->
<div style="margin-top: 40px; background: #fff; padding: 25px; border-radius: 10px; border: 1px solid #eee;">
    <h3 style="color: var(--primary-color); margin-bottom: 15px;"><i class="fas fa-location-arrow"></i> Hỗ Trợ Toàn Tỉnh Quảng Ngãi</h3>
    <p>Đội ngũ nhân viên của VayNhanhQN đã có mặt tại hầu hết các huyện, thị xã để hỗ trợ làm hồ sơ tận nơi:</p>
    <div class="districts-list">
        <span class="district-tag">TP. Quảng Ngãi</span>
        <span class="district-tag">TX. Đức Phổ</span>
        <span class="district-tag">TX. Thái Hòa</span>
        <span class="district-tag">H. Bình Sơn</span>
        <span class="district-tag">H. Sơn Tịnh</span>
        <span class="district-tag">H. Tư Nghĩa</span>
        <span class="district-tag">H. Nghĩa Hành</span>
        <span class="district-tag">H. Mộ Đức</span>
        <span class="district-tag">H. Ba Tơ</span>
        <span class="district-tag">H. Trà Bồng</span>
        <span class="district-tag">H. Sơn Hà</span>
        <span class="district-tag">Khu KT Dung Quất</span>
    </div>
</div>

<div style="text-align: center; margin-top: 40px;">
    <h3 style="margin-bottom: 20px;">Bạn Đã Sẵn Sàng Giải Quyết Khó Khăn Tài Chính?</h3>
    <a href="lien-he" class="btn-primary" style="padding: 15px 40px; font-size: 1.1em; border-radius: 50px; box-shadow: 0 5px 15px rgba(255, 153, 0, 0.4);">Đăng Ký Tư Vấn Ngay</a>
</div>