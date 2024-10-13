<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .navbar-brand {
            color: red; /* Màu chữ đỏ */
            font-size: 40px; /* Kích thước chữ 40px */
        }
        .navbar-brand:hover {
            color: darkred; /* Thay đổi màu khi hover */
        }
        #content {
            padding: 20px;
            background-color: #f8f9fa; /* Màu nền cho phần nội dung */
            height: 70vh; /* Chiều cao của nội dung */
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Freelancer App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('profile')">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('calendar')">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('payments')">Payments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Nội dung hiển thị -->
    <div id="content">
        <h2>Chào mừng đến với Freelancer App!</h2>
        <p>Hãy chọn một trong các tab bên trên để xem nội dung.</p>
    </div>

    <!-- Thêm Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function showContent(tab) {
            const contentDiv = document.getElementById('content');
            if (tab === 'profile') {
                contentDiv.innerHTML = `
                    <h2>Hồ Sơ Của Tôi</h2>
                    <p>Thông tin cá nhân và thông tin freelancer sẽ được hiển thị ở đây.</p>
                `;
            } else if (tab === 'calendar') {
                contentDiv.innerHTML = `
                    <h2>Lịch Của Tôi</h2>
                    <p>Thông tin lịch hẹn và quản lý sẽ được hiển thị ở đây.</p>
                `;
            } else if (tab === 'payments') {
                contentDiv.innerHTML = `
                    <h2>Thanh Toán</h2>
                    <p>Thông tin thanh toán và lịch sử giao dịch sẽ được hiển thị ở đây.</p>
                `;
            }
        }
    </script>
</body>
</html>
