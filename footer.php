<?php
if (!isset($contactConfig) && file_exists('config/contact.php')) {
    include 'config/contact.php';
}
?>
    <footer>
        <div class="container">
            <div class="footer-col">
                <h3>Về Chúng Tôi</h3>
                <p>Đơn vị hỗ trợ vay tiền mặt tín chấp uy tín nhất tại Quảng Ngãi. Thủ tục đơn giản, giải ngân nhanh chóng trong ngày.</p>
            </div>
            <div class="footer-col">
                <h3>Liên Hệ</h3>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo $contactConfig['address']; ?></p>
                <p><i class="fas fa-phone"></i> <?php echo $contactConfig['phone_display']; ?></p>
                <p><i class="fas fa-envelope"></i> <?php echo $contactConfig['email']; ?></p>
            </div>
            <div class="footer-col">
                <h3>Chính Sách</h3>
                <p><i class="fas fa-shield-alt"></i> Bảo mật thông tin khách hàng</p>
                <p><i class="fas fa-check-circle"></i> Lãi suất minh bạch</p>
                <p><a href="dieu-khoan" style="color: inherit; text-decoration: none;"><i class="fas fa-file-contract"></i> Điều khoản sử dụng</a></p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $contactConfig['brand']; ?>. All rights reserved.</p>
        </div>
    </footer>

    <!-- Floating Contact Buttons -->
    <div class="floating-contact">
        <a href="https://zalo.me/<?php echo $contactConfig['zalo']; ?>" target="_blank" class="contact-btn zalo-btn">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Icon_of_Zalo.svg/1200px-Icon_of_Zalo.svg.png" alt="Zalo">
        </a>
        <a href="tel:<?php echo $contactConfig['phone']; ?>" class="contact-btn phone-btn">
            <i class="fas fa-phone-alt"></i>
            <span class="phone-text"><?php echo $contactConfig['phone_display']; ?></span>
        </a>
    </div>

    <script>
    function sendTelegram(event, formId) {
        event.preventDefault();
        const form = document.getElementById(formId);
        const formData = new FormData(form);
        const btn = form.querySelector('button[type="submit"]');
        const originalHTML = btn.innerHTML;
        
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang gửi...';
        btn.disabled = true;

        fetch('api/send-contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Chuyển hướng sang trang cảm ơn
                window.location.href = 'cam-on';
            } else {
                alert('Có lỗi xảy ra: ' + data.message);
                btn.innerHTML = originalHTML;
                btn.disabled = false;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Có lỗi kết nối, vui lòng thử lại sau.');
            btn.innerHTML = originalHTML;
            btn.disabled = false;
        });
    }

    // Theo dõi sự kiện nhấp vào số điện thoại (Call Tracking)
    document.addEventListener('DOMContentLoaded', function() {
        var telLinks = document.querySelectorAll('a[href^="tel:"]');
        telLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Vui lòng thay 'CONVERSION_LABEL' bằng nhãn chuyển đổi cuộc gọi thực tế từ Google Ads
                if (typeof gtag === 'function') {
                    gtag('event', 'conversion', {'send_to': 'AW-17948533999/CONVERSION_LABEL'});
                }
            });
        });
    });
    </script>
</body>
</html>