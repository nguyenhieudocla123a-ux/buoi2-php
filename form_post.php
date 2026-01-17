<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST - Đăng ký</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(45deg, #28a745, #1e7e34);
            border-radius: 2px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        input[type="text"], 
        input[type="password"] {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8f9fa;
            outline: none;
        }

        input[type="text"]:focus, 
        input[type="password"]:focus {
            border-color: #28a745;
            background: white;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.1);
            transform: translateY(-2px);
        }

        input::placeholder {
            color: #6c757d;
            font-weight: 400;
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(45deg, #28a745, #1e7e34);
            color: white;
        }

        button:hover {
            background: linear-gradient(45deg, #1e7e34, #155724);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(40, 167, 69, 0.3);
        }

        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        button:hover::before {
            left: 100%;
        }

        .result {
            margin-top: 25px;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-weight: 500;
            font-size: 16px;
            animation: fadeIn 0.5s ease;
            background: linear-gradient(45deg, #d4edda, #c3e6cb);
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
                margin: 10px;
            }
            
            h2 {
                font-size: 24px;
            }
            
            input[type="text"], 
            input[type="password"],
            button {
                padding: 12px 15px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>👤 Đăng ký</h2>

    <form method="POST">
        <div class="form-group">
            <input type="text" name="username" placeholder="Tên đăng nhập" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Mật khẩu" required>
        </div>
        <button type="submit" class="btn-register">Đăng ký ngay</button>
    </form>

    <?php
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        echo '<div class="result success">✅ Chào mừng <strong>'.htmlspecialchars($_POST['username']).'</strong>! Đăng ký thành công.</div>';
    }
    ?>
</div>

</body>
</html>
