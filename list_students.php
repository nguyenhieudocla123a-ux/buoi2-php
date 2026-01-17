<?php
include "db_connect.php";

// Lấy danh sách sinh viên
$sql = "SELECT * FROM students";
$stmt = $conn->query($sql);
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        body { font-family: Arial; background: #f4f6f8; }
        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: #007bff;
            color: white;
        }
        a {
            text-decoration: none;
            margin: 0 5px;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Danh sách sinh viên</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($students as $stu): ?>
    <tr>
        <td><?= $stu['id'] ?></td>
        <td><?= $stu['fullname'] ?></td>
        <td><?= $stu['student_code'] ?></td>
        <td><?= $stu['email'] ?></td>
        <td>
            <a href="#">Sửa</a> |
            <a href="#">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
