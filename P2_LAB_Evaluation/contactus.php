<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            width: 100%;
        }

        label {
            display: inline-block;
            width: 30%;
            margin-right: 5%;
            text-align: right;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 65%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .errors {
            color: red;
        }
    </style>
</style>

</head>
<body>

<h1>Contact Us</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "vanshseth@2004";
$dbname = "contact_form_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $website = $_POST['website'];
    $hosting = $_POST['hosting'];
    $project_description = $_POST['project_description'];

    $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, phone, address, city, state, zip_code, website, hosting, project_description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $first_name, $last_name, $email, $phone, $address, $city, $state, $zip_code, $website, $hosting, $project_description);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<div class="form-container">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
    </div>
    
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
    </div>
    
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    </div>
    
    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>
    </div>
    
    <div class="form-group">
        <label for="state">State:</label>
        <select id="state" name="state" required>
            <option value="">Please select your state</option>
            <option value="CA">California</option>
            <option value="NY">New York</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="zip_code">Zip Code:</label>
        <input type="text" id="zip_code" name="zip_code" required>
    </div>
    
    <div class="form-group">
        <label for="website">Website or Domain Name:</label>
        <input type="text" id="website" name="website">
    </div>
    
    <div class="form-group">
        <label for="hosting">Do you have hosting?</label>
        <input type="radio" id="hosting_yes" name="hosting" value="Yes" required> Yes
        <input type="radio" id="hosting_no" name="hosting" value="No" required> No
    </div>
    
    <div class="form-group">
        <label for="project_description">Project Description:</label>
        <textarea id="project_description" name="project_description" rows="4" required></textarea>
    </div>
    
    <div class="form-group">
        <input type="submit" value="Submit">
    </div>
</form>
</div>
</body>
</html>
