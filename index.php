<?php
// 1. Khai báo các biến thông tin sinh viên
$hoTen = "Tzy";
$tuoi = 19;
$nganhHoc = "Công nghệ thông tin";
$email = "tzy425@gmail.com";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1: Trang chào sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .student-card {
            background-color: #ffffff;
            width: 350px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #007bff;
        }
        .student-card h2 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }
        .info-group {
            margin-bottom: 12px;
            font-size: 16px;
            color: #555;
        }
        .info-label {
            font-weight: bold;
            color: #222;
        }
        .status {
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="student-card">
        <h2>Thông Tin Sinh Viên</h2>
        <hr>
        <div class="info-group">
            <span class="info-label">Họ tên:</span> <?php echo $hoTen; ?>
        </div>
        <div class="info-group">
            <span class="info-label">Tuổi:</span> <?php echo $tuoi; ?>
        </div>
        <div class="info-group">
            <span class="info-label">Ngành học:</span> <?php echo $nganhHoc; ?>
        </div>
        <div class="info-group">
            <span class="info-label">Email:</span> <?php echo $email; ?>
        </div>

        <?php if ($tuoi >= 18): ?>
            <div class="status">
                Đủ tuổi học đại học
            </div>
        <?php endif; ?>
    </div>

</body>
</html>
