<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>TUGAS 1</title>

    <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: linear-gradient(135deg, #667eea, #764ba2);
                margin: 0;
                font-family: "Segoe UI", sans-serif;
            }

            .btn-detail {
                background: #fff;
                color: #764ba2;
                padding: 15px 30px;
                border: none;
                border-radius: 50px;
                font-size: 18px;
                font-weight: bold;
                cursor: pointer;
                box-shadow: 0 10px 20px rgba(0,0,0,0.2);
                transition: all 0.3s ease;
            }

            .btn-detail:hover {
                background: #764ba2;
                color: #fff;
                transform: translateY(-5px) scale(1.05);
                box-shadow: 0 15px 25px rgba(0,0,0,0.3);
            }
        </style>
</head>
<body>
    <button class="btn-detail" onclick="window.location.href='/profil'">
        DETAIL PRIBADI KLIK DISINI
    </button>
</body>
</html>
