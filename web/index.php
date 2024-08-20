<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sunbeam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light blue background */
            margin: 0;
            padding: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        h1 {
            color: #333; /* Dark gray for the heading */
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white; /* White background for the form */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            border-radius: 8px; /* Rounded corners */
        }
        td {
            padding: 10px;
        }
        label {
            color: #555; /* Medium gray for labels */
            font-weight: bold; /* Bold labels */
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 4px; /* Rounded corners */
            transition: border-color 0.3s; /* Smooth transition for border color */
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff; /* Blue border on focus */
            outline: none; /* Remove default outline */
        }
        input[type="submit"] {
            background-color: #007bff; /* Bootstrap primary blue */
            color: white; /* White text */
            border: none;
            padding: 10px 20px;
            border-radius: 4px; /* Rounded corners */
            cursor: pointer;
            font-size: 16px; /* Larger font size */
            transition: background-color 0.3s; /* Smooth transition for background color */
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
        hr {
            border: 1px solid #007bff; /* Blue horizontal line */
            margin: 10px 0; /* Margin around the line */
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Backup</h1>
        <hr>
    </header>
    <main>
        <form action="login.php" method="POST">
            <table border="1">
                <tr>
                    <td><label for="uname">Username</label></td>
                    <td><input type="text" id="uname" name="uname" required></td>
                </tr>
                <tr>
                    <td><label for="pass">Password</label></td>
                    <td><input type="password" id="pass" name="pass" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </main>
</body>
</html>
