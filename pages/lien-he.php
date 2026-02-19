<h2 class="section-title">Liên Hệ Với Chúng Tôi</h2>
<div class="row" style="display:flex; flex-wrap:wrap; gap:30px;">
    <div style="flex:1; min-width:300px;">
        <p>Hãy để lại thông tin, chúng tôi sẽ gọi lại tư vấn ngay cho bạn.</p>
        <ul style="list-style:none;">
            <li style="margin-bottom:15px;"><i class="fas fa-map-marker-alt" style="color:var(--primary-color); width:25px;"></i> <strong>Địa chỉ:</strong> TP. Quảng Ngãi</li>
            <li style="margin-bottom:15px;"><i class="fas fa-phone" style="color:var(--primary-color); width:25px;"></i> <strong>Hotline:</strong> 0987618090</li>
            <li style="margin-bottom:15px;"><i class="fas fa-envelope" style="color:var(--primary-color); width:25px;"></i> <strong>Email:</strong> hotro@vaytienquangngai.net</li>
            <li style="margin-bottom:15px;"><i class="fas fa-clock" style="color:var(--primary-color); width:25px;"></i> <strong>Giờ làm việc:</strong> 08:00 - 21:00</li>
        </ul>
    </div>
    <div style="flex:1; min-width:300px;">
        <form class="contact-form" id="formContact" onsubmit="sendTelegram(event, 'formContact')" style="margin-top:0;">
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
            <input type="hidden" name="source" value="Trang Liên Hệ">
            <button type="submit" class="btn-primary" style="width:100%;">Gửi Yêu Cầu Tư Vấn</button>
        </form>
    </div>
</div>