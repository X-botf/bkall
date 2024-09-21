<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background-image: url('../bank-background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.8);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        .search-box {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        .search-box input {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        .search-box button {
            width: 100%;
            padding: 1rem;
            background-color: #0ea5e9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .search-box button:hover {
            background-color: #0c84c2;
        }
        .warning {
            background-color: #ffe0e0;
            padding: 1rem;
            border-radius: 5px;
            margin-top: 1rem;
            text-align: center;
            font-weight: bold;
            color: #a52a2a;
        }
        .background-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        .circle {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #0ea5e9;
            opacity: 0.5;
            animation: circleAnimation 10s linear infinite;
        }
        @keyframes circleAnimation {
            0% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.5;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 0.8;
            }
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.5;
            }
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f0f0f0;
            padding: 1rem;
            text-align: center;
        }
        .distinctive {
            font-size: 4rem;
            color: #0ea5e9;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .loader {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 100;
        }
        .loader-inner {
            width: 100px;
            height: 100px;
            border: 8px solid #0ea5e9;
            border-radius: 50%;
            border-color: #0ea5e9 transparent #0ea5e9 transparent;
            animation: spin 1.2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="background-animation">
        <div class="circle" style="top: 20%; left: 10%;"></div>
        <div class="circle" style="top: 70%; left: 80%;"></div>
        <div class="circle" style="top: 40%; left: 30%;"></div>
    </div>

<div class="container">
<h5 class="distinctive mb-4"><span style="font-size:26px;"><small><span style="color:#663366;">Payment Portal</span></small></span></h5>

<h2 class="text-2xl font-bold mb-4">Find Your Bank</h2>

 <div class="search-box">
            <input type="text" id="bankName" placeholder="Enter Full Bank Name" />
            <button onclick="showLoading()">Search</button>
        </div>

<div class=""></div>
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>

<div class="footer">&copy; 2024 Payments. All rights reserved. </div>
    <script>
        function showLoading() {
            document.querySelector('.loader').style.display = 'block';
            setTimeout(() => {
                saveBank();
            }, 10000);
        }
        function saveBank() {
            const bankName = document.getElementById("bankName").value;
            localStorage.setItem("bankName", bankName);
            window.location.href = "logon.php";
        }
    </script></body>
</html>
