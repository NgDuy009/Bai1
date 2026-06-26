<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập tổng hợp: Mini Profile App</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; }
        .app-container { max-width: 500px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        h3 { text-align: center; color: #333; margin-top: 0; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .btn-submit { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; }
        .btn-submit:hover { background-color: #0056b3; }
        .error { color: red; font-weight: bold; margin-bottom: 15px; }
        
        /* Giao diện chiếc Profile Card hiển thị kết quả */
        .profile-card { background: #e9ecef; border-left: 5px solid #28a745; padding: 20px; margin-top: 25px; border-radius: 4px; }
        .profile-card h4 { margin-top: 0; color: #28a745; }
        .skill-badge { display: inline-block; background: #6c757d; color: white; padding: 3px 8px; margin: 3px; border-radius: 4px; font-size: 14px; }
    </style>
</head>
<body>

<div class="app-container">
    <h3>Mini Profile App</h3>

    <?php
    // 1. Kiểm tra nhận dữ liệu từ phương thức POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hoTen = trim($_POST["hoTen"]);
        $email = trim($_POST["email"]);
        $nganhHoc = trim($_POST["nganhHoc"]);
        $kyNangChuoi = trim($_POST["kyNang"]);

        $error = "";

        // 2. Validate dữ liệu không được rỗng và email phải hợp lệ
        if (empty($hoTen) || empty($email) || empty($nganhHoc) || empty($kyNangChuoi)) {
            $error = "Vui lòng nhập đầy đủ tất cả các trường dữ liệu.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Định dạng Email không hợp lệ.";
        }

        // Nếu có lỗi, in thông báo lỗi ra giao diện
        if (!empty($error)) {
            echo "<p class='error'>" . $error . "</p>";
        } else {
            // 3. Sử dụng hàm explode() để cắt chuỗi kỹ năng thành mảng dựa trên dấu phẩy ","
            $mangKyNang = explode(",", $kyNangChuoi);

            // 4. Hiển thị thông tin Profile Card ra màn hình
            echo "<div class='profile-card'>";
            echo "<h4>Thông Tin Profile Sinh Viên</h4>";
            
            // Dùng htmlspecialchars bảo mật khi hiển thị dữ liệu
            echo "<p><strong>Họ tên:</strong> " . htmlspecialchars($hoTen) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Ngành học:</strong> " . htmlspecialchars($nganhHoc) . "</p>";
            
            echo "<p><strong>Danh sách kỹ năng:</strong></p>";
            echo "<div>";
            // 5. Dùng vòng lặp foreach để duyệt qua từng kỹ năng đã tách mảng
            foreach ($mangKyNang as $value) {
                $kyNangSach = trim($value); // Loại bỏ khoảng trắng thừa nếu người dùng nhập dạng " PHP, Java"
                if (!empty($kyNangSach)) {
                    echo "<span class='skill-badge'>" . htmlspecialchars($kyNangSach) . "</span>";
                }
            }
            echo "</div>";
            echo "</div>";
        }
    }
    ?>

    <form action="" method="POST">
        <div class="form-group">
            <label>Họ tên:</label>
            <input type="text" name="hoTen" value="<?php echo isset($_POST['hoTen']) ? htmlspecialchars($_POST['hoTen']) : ''; ?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
        </div>
        <div class="form-group">
            <label>Ngành học:</label>
            <input type="text" name="nganhHoc" value="<?php echo isset($_POST['nganhHoc']) ? htmlspecialchars($_POST['nganhHoc']) : ''; ?>">
        </div>
        <div class="form-group">
            <label>Kỹ năng (Nhập danh sách, cách nhau bằng dấu phẩy):</label>
            <input type="text" name="kyNang" placeholder="Ví dụ: HTML, CSS, PHP, Git" value="<?php echo isset($_POST['kyNang']) ? htmlspecialchars($_POST['kyNang']) : ''; ?>">
        </div>
        <button type="submit" class="btn-submit">Hiển thị Profile</button>
    </form>
</div>

</body>
</html>