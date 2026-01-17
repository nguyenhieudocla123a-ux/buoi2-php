<?php
// Xử lý khi submit form
if (isset($_POST['fullname'])) {
    include "db_connect.php";

    $fullname = $_POST['fullname'];
    $student_code = $_POST['student_code'];
    $email = $_POST['email'];

    // Prepared Statement
    $sql = "INSERT INTO students (fullname, student_code, email)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$fullname, $student_code, $email]);

    $success = "Thêm sinh viên thành công!";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <style>
        body { font-family: Arial; background: #f4f6f8; }
        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        button {
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .msg {
            margin-top: 15px;
            color: green;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Thêm sinh viên</h2>

    <form method="POST">
        <input type="text" name="fullname" placeholder="Họ tên" required>
        <input type="text" name="student_code" placeholder="Mã sinh viên" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Thêm mới</button>
    </form>

    <?php if (!empty($success)) echo "<div class='msg'>$success</div>"; ?>
</div>

</body>
</html>
