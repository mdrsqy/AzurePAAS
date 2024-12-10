<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            color: #0078d7;
        }
        form {
            margin-top: 20px;
        }
        input, button {
            padding: 10px;
            margin: 5px 0;
            font-size: 16px;
        }
        button {
            background-color: #0078d7;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Simple PHP App</h1>
    <p>Enter your name below and I'll greet you!</p>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your name" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        echo "<h2>Hello, $name! Welcome to my PHP app!</h2>";
    }
    ?>
</body>
</html>