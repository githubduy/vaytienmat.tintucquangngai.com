<?php include 'header.php'; ?>

<style>
    /* CSS riêng cho trang chính sách để giao diện đẹp hơn */
    .policy-intro { text-align: center; max-width: 800px; margin: 0 auto 40px; }
    .policy-grid { display: flex; flex-wrap: wrap; gap: 30px; }
    .policy-card { 
        flex: 1; 
        min-width: 300px; 
        background: #fff; 
        padding: 30px; 
        border-radius: 8px; 
        box-shadow: 0 4px 15px rgba(0,0,0,0.05); 
        border-top: 4px solid var(--primary-color);
    }
    .policy-card h3 { color: var(--primary-color); margin-bottom: 20px; display: flex; align-items: center; gap: 10px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
    .policy-list { list-style: none; margin: 0; padding: 0; }
    .policy-list li { margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px; }
    .policy-list i { color: #28a745; margin-top: 5px; }
    
    .security-badges { display: flex; justify-content: center; gap: 50px; margin-top: 60px; flex-wrap: wrap; border-top: 1px dashed #ddd; padding-top: 40px; }
    .badge-item { text-align: center; max-width: 250px; }
    .badge-item i { font-size: 3em; color: var(--secondary-color); margin-bottom: 15px; }
    .badge-item h4 { margin-bottom: 10px; color: #333; }
    .badge-item p { font-size: 0.9em; color: #666; }
</style>

<section class="page-header">
    <div class="container">
        <h1>Chính Sách Bảo Mật</h1>
        <p><i class="fas fa-shield-alt"></i> Cam kết bảo vệ dữ liệu cá nhân của khách hàng</p>
    </div>
</section>

<section class="container content-block">
    <div class="policy-intro">
        <h2>Cam Kết Của Chúng Tôi</h2>
        <p>Chúng tôi coi trọng việc bảo vệ dữ liệu cá nhân của bạn. Mọi thông tin bạn cung cấp trên website <strong><?php echo $contactConfig['brand']; ?></strong> đều được xử lý an toàn, mã hóa và tuân thủ nghiêm ngặt các quy định pháp luật hiện hành.</p>
    </div>

    <div class="policy-grid">
        <!-- Cột 1: Chính sách SHB -->
        <div class="policy-card">
            <h3><i class="fas fa-file-contract"></i> Quy Định Của SHBFinance</h3>
            <p>Là đối tác tư vấn chính thức, chúng tôi tuân thủ tuyệt đối <strong>"Điều khoản và Điều kiện về Bảo vệ và Xử lý Dữ liệu Cá nhân"</strong> do SHBFinance ban hành.</p>
            <p>Văn bản này quy định rõ về quyền lợi của khách hàng và trách nhiệm của đơn vị xử lý dữ liệu.</p>
            
            <div style="text-align: center; margin-top: 25px;">
                <a href="https://static-files.shbfinance.com.vn/uploads/Terms%20and%20Conditions%20on%20the%20Protection%20and%20Processing%20of%20Personal%20Data%20of%20SHBFinance.pdf" target="_blank" class="btn-primary" style="width: 100%;">
                    <i class="fas fa-file-pdf"></i> Xem Văn Bản Gốc (PDF)
                </a>
                <p style="font-size: 0.85em; margin-top: 10px; color: #888;">*Link tải trực tiếp từ server SHBFinance</p>
            </div>
        </div>

        <!-- Cột 2: Thu thập thông tin -->
        <div class="policy-card">
            <h3><i class="fas fa-user-shield"></i> Thu Thập & Sử Dụng Thông Tin</h3>
            <p>Chúng tôi chỉ thu thập các thông tin cơ bản cần thiết để phục vụ quá trình tư vấn khoản vay:</p>
            <ul class="policy-list">
                <li><i class="fas fa-check-circle"></i> <strong>Thông tin thu thập:</strong> Họ tên, Số điện thoại, Khu vực sinh sống, Nhu cầu vay.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Mục đích sử dụng:</strong> Liên hệ tư vấn, thẩm định sơ bộ và hỗ trợ làm hồ sơ vay vốn.</li>
                <li><i class="fas fa-check-circle"></i> <strong>Thời gian lưu trữ:</strong> Dữ liệu được lưu trữ cho đến khi khoản vay được giải ngân hoặc khách hàng yêu cầu hủy bỏ.</li>
            </ul>
        </div>
    </div>

    <!-- Phần cam kết thêm -->
    <div class="security-badges">
        <div class="badge-item">
            <i class="fas fa-lock"></i>
            <h4>Bảo Mật Tuyệt Đối</h4>
            <p>Thông tin được mã hóa và bảo vệ an toàn.</p>
        </div>
        <div class="badge-item">
            <i class="fas fa-user-slash"></i>
            <h4>Không Chia Sẻ</h4>
            <p>Không bán thông tin cho bên thứ 3 ngoài SHBFinance.</p>
        </div>
        <div class="badge-item">
            <i class="fas fa-ban"></i>
            <h4>Không Spam</h4>
            <p>Chỉ liên hệ khi có yêu cầu tư vấn từ khách hàng.</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>