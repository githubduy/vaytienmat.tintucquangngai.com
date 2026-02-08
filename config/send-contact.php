<?php
header('Content-Type: application/json');
require_once '../config/telegram.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

$fullname = $_POST['fullname'] ?? 'Không rõ';
$phone = $_POST['phone'] ?? 'Không rõ';
$address = $_POST['address'] ?? 'Không rõ';
$amount = $_POST['amount'] ?? '';
$id_card = $_POST['id_card'] ?? '';
$source = $_POST['source'] ?? 'Website';

// Validate phone
if (empty($phone)) {
    echo json_encode(['status' => 'error', 'message' => 'Vui lòng nhập số điện thoại']);
    exit;
}

$message = "🔔 <b>KHÁCH HÀNG MỚI ĐĂNG KÝ</b>\n";
$message .= "--------------------------------\n";
$message .= "👤 <b>Họ tên:</b> $fullname\n";
$message .= "📞 <b>SĐT:</b> $phone\n";
if (!empty($id_card)) $message .= "🆔 <b>CMND/CCCD:</b> $id_card\n";
if (!empty($amount)) $message .= "💰 <b>Khoản vay:</b> $amount triệu\n";
$message .= "📍 <b>Khu vực:</b> $address\n";
$message .= "🌐 <b>Nguồn:</b> $source\n";
$message .= "⏰ <b>Thời gian:</b> " . date('d/m/Y H:i:s');

// --- Gửi Email Thông Báo ---
$to = 'duongthiyen256@gmail.com';
$subject = "🔔 Khách hàng mới: $fullname - $phone";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Website VayNhanhQN <noreply@vaytienmat.tintucquangngai.com>" . "\r\n";

$emailContent = "<h3>🔔 KHÁCH HÀNG MỚI ĐĂNG KÝ</h3>";
$emailContent .= "<p>👤 <b>Họ tên:</b> $fullname</p>";
$emailContent .= "<p>📞 <b>SĐT:</b> $phone</p>";
if (!empty($id_card)) $emailContent .= "<p>🆔 <b>CMND/CCCD:</b> $id_card</p>";
if (!empty($amount)) $emailContent .= "<p>💰 <b>Khoản vay:</b> $amount triệu</p>";
$emailContent .= "<p>📍 <b>Khu vực:</b> $address</p>";
$emailContent .= "<p>🌐 <b>Nguồn:</b> $source</p>";
$emailContent .= "<p>⏰ <b>Thời gian:</b> " . date('d/m/Y H:i:s') . "</p>";

@mail($to, $subject, $emailContent, $headers);

$url = "https://api.telegram.org/bot" . $telegramConfig['bot_token'] . "/sendMessage";
$data = [
    'chat_id' => $telegramConfig['chat_id'],
    'text' => $message,
    'parse_mode' => 'HTML'
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context  = stream_context_create($options);
$result = @file_get_contents($url, false, $context);

if ($result === FALSE) {
    echo json_encode(['status' => 'error', 'message' => 'Không thể gửi tin nhắn. Vui lòng kiểm tra cấu hình Bot.']);
} else {
    echo json_encode(['status' => 'success', 'message' => 'Đã gửi thông tin thành công']);
}
?>