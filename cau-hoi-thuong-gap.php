<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Câu Hỏi Thường Gặp</h1>
        <p>Giải đáp mọi thắc mắc của bạn về dịch vụ vay tiền</p>
    </div>
</section>

<section class="container content-block">
    <div class="faq-accordion">
        <div class="faq-item">
            <button class="faq-question">
                Vay tiền mặt cần những điều kiện gì?
            </button>
            <div class="faq-answer">
                Để vay tiền mặt, bạn cần đáp ứng các điều kiện sau: là công dân Việt Nam, độ tuổi từ 20-60, có CMND/CCCD, có thu nhập ổn định.
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Thủ tục vay tiền gồm những gì?
            </button>
            <div class="faq-answer">
                Thủ tục vay tiền khá đơn giản, bạn chỉ cần CMND/CCCD và sổ hộ khẩu hoặc các giấy tờ khác tùy theo gói vay.
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Lãi suất vay tiền mặt là bao nhiêu?
            </button>
            <div class="faq-answer">
                Lãi suất vay tiền mặt sẽ tùy thuộc vào gói vay và thời hạn vay, dao động từ 1.6% - 2.2%/tháng.
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Thời gian giải ngân là bao lâu?
            </button>
            <div class="faq-answer">
                Thời gian giải ngân rất nhanh chóng, thường chỉ từ 30 phút đến 2 giờ làm việc sau khi hồ sơ được duyệt.
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">
                Nợ xấu có vay được tiền không?
            </button>
            <div class="faq-answer">
                 Chúng tôi có hỗ trợ các trường hợp nợ xấu nhóm 1, nhóm 2. Hãy liên hệ để được tư vấn cụ thể.
            </div>
        </div>
    </div>
</section>

<script>
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentNode;
            item.classList.toggle('active');
        });
    });
</script>

<style>
    .faq-item {
        margin-bottom: 10px;
        border-bottom: 1px solid #eee;
    }
</style>

<?php include 'footer.php'; ?>