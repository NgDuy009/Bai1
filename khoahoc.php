<?php
// 1. Tạo mảng khóa học gồm: HTML, CSS, JavaScript, PHP
$khoaHoc = array("HTML", "CSS", "JavaScript", "PHP");
// Hoặc viết theo cú pháp ngắn: $khoaHoc = ["HTML", "CSS", "JavaScript", "PHP"];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 2: Danh sách khóa học</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            padding: 40px;
        }
        .container {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 8px;
        }
        ul {
            padding-left: 20px;
        }
        li {
            font-size: 18px;
            margin-bottom: 10px;
            color: #444;
        }
        .badge {
            background-color: #ffc107;
            color: #000;
            font-size: 13px;
            padding: 2px 8px;
            border-radius: 4px;
            font-weight: bold;
            margin-left: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Danh sách khóa học</h2>
        
        <!-- 2. Dùng foreach để in ra danh sách ul/li -->
        <ul>
            <?php foreach ($khoaHoc as $tenKhoaHoc): ?>
                <li>
                    <?php 
                    echo $tenKhoaHoc; 

                    // 3. Nếu tên khóa học là PHP, thêm chữ "Đang học"
                    if ($tenKhoaHoc == "PHP") {
                        echo '<span class="badge">Đang học</span>';
                    }
                    ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>