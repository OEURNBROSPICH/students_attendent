<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .user-welcome {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .logout-link {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .dashboard-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .dashboard-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            flex: 0 0 calc(33.33% - 20px);
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="dashboard-header">
        <div class="user-welcome">Welcome, [Username]!</div>
        <a href="logout.php" class="logout-link">Logout</a>
    </div>
    <div class="dashboard-content">
        <div class="dashboard-card">
            <h3>Recent Activity</h3>
            <p>Your recent activity details go here.</p>
        </div>
        <div class="dashboard-card">
            <h3>Notifications</h3>
            <p>Notification details go here.</p>
        </div>
        <div class="dashboard-card">
            <h3>Statistics</h3>
            <p>Statistical information goes here.</p>
        </div>
    </div>
</div>

</body>
</html>