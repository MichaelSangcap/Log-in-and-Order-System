<?php 
session_start();

	include("connect.php");
	include("role.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System</title>
</head>
<body>
    <h2>Welcome to Tito Mike's Kitchen Here's the menu and the prices.</h2>
    <h3>Pay as you order. Thanks!</h3>
    <ul>
        <li>Spicy Borger ni Koya = 85 PHP</li>
        <li>Fries ni Idol ko = 50 PHP</li>
        <li>Sisig na pangmasa = 150 PHP</li>
    </ul>
    <form method = "GET" action = "getOrder.php">
        <label for="order">Select an order:</label>
        <select id="order" name="order">
            <option value="borger">Spicy Borger ni Koya</option>
            <option value="fries">Fries ni Idol ko</option>
            <option value="sisig">Sisig na pangmasa</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>
        <label for="cash">Cash Paid:</label>
        <input type="number" id="cash" name="cash" min="0" required><br><br>
        <input type="submit" value="Submit Order" name="submitbtn">
    </form>
</body>
</html>