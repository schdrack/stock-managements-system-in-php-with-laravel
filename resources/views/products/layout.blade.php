<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>infinity mura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 0.3rem;
        }

        .tagline {
            font-style: italic;
            color: #ecf0f1;
            font-size: 0.9rem;
        }

        nav {
            background-color: #34495e;
            padding: 0.8rem;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            flex-wrap: wrap;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 0.3rem;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #3498db;
        }

        main {
            flex: 1;
            padding: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        footer {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 0.8rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-links {
            display: flex;
            gap: 1.5rem;
        }

        .footer-links a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #3498db;
        }

        .management-terms {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .management-terms span {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 0.2rem 0.5rem;
            border-radius: 3px;
            font-size: 0.7rem;
        }

        .copyright {
            margin-top: 0.5rem;
            color: #bdc3c7;
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .footer-links, .management-terms {
                gap: 0.5rem;
            }
            
            nav ul li {
                margin: 0 0.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">Stock Management System</div>
            <div class="tagline">Streamline your operations with our comprehensive solution</div>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-users"></i> User Management</a></li>
            <li><a href="#"><i class="fas fa-tasks"></i> Task Management</a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i> Analytics</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Support</a>
            </div>
            <div class="management-terms">
                <span>CRM</span>
                <span>ERP</span>
                <span>Workflow</span>
                <span>Automation</span>
                <span>Analytics</span>
                <span>Reporting</span>
            </div>
        </div>
        <div class="copyright">
            &copy; 2023 Stock Management System Pro | Optimize • Automate • Succeed
        </div>
    </footer>
</body>
</html>