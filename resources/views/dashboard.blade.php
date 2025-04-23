<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #4a90e2;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .container {
            display: flex;
            padding: 20px;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }

        .sidebar h3 {
            border-bottom: 1px solid #555;
            padding-bottom: 10px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px 0;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background-color: #555;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card h2 {
            margin-top: 0;
        }

        .progress-bar {
            background-color: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress-bar-inner {
            background-color: #4a90e2;
            height: 20px;
            width: 70%;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Your E-Learning Dashboard</h1>
</header>

<div class="container">
    <div class="sidebar">
        <h3>Navigation</h3>
        <ul>
            <li>Dashboard</li>
            <li>Courses</li>
            <li>Assignments</li>
            <li>Profile</li>
            <li>Settings</li>
            <li>Logout</li>
        </ul>
    </div>

    <div class="content">
        <div class="card">
            <h2>Course Progress</h2>
            <div class="progress-bar">
                <div class="progress-bar-inner"></div>
            </div>
            <p>70% Complete</p>
        </div>

        <div class="card">
            <h2>Upcoming Assignments</h2>
            <ul>
                <li>Assignment 1 - Due: April 25</li>
                <li>Assignment 2 - Due: May 3</li>
                <li>Assignment 3 - Due: May 10</li>
            </ul>
        </div>

        <div class="card">
            <h2>Recent Activity</h2>
            <ul>
                <li>Completed Lesson 5 in Course A</li>
                <li>Submitted Assignment 2</li>
                <li>Joined Course B</li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
