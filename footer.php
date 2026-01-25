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
</body>
</html>