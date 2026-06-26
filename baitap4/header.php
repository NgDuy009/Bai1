<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Website dùng include PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        header { background: #007bff; color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 24px; font-weight: bold; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .content { max-width: 800px; margin: 30px auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); min-height: 300px; }
        footer { background: #333; color: white; text-align: center; padding: 15px 0; position: relative; bottom: 0; width: 100%; margin-top: 30px; }
    </style>
</head>
<body>

<header>
    <div class="logo">MyWebsite</div>
    <nav>
        <a href="index.php">Trang chủ</a>
        <a href="about.php">Giới thiệu</a>
    </nav>
</header>

<div class="content">