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
    .form-group {
        margin-bottom: 15px;
        align-items: center; 
        display: flex; 
    }
    label {
        display: inline-block; 
        width: 30%;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select,
    textarea {
        width: 50%;
        padding: 8px;
        box-sizing: border-box;
    }
    input[type="radio"],
    input[type="checkbox"] {
        display: block;
        margin: 5px 0;
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
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $browsers = isset($_POST['browser']) ? implode(', ', $_POST['browser']) : '';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $file = $_FILES['file'];

    $upload_dir = 'uploads/';
    $upload_file = $upload_dir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $upload_file)) {
        $stmt = $conn->prepare("INSERT INTO submissions (email, tel, department, gender, browsers, subject, message, file_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $email, $tel, $department, $gender, $browsers, $subject, $message, $upload_file);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    } else {
        echo "<p>Error uploading file</p>";
    }
}

$conn->close();
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  placeholder="Email" required>
    </div>
    
    <div class="form-group">
        <label for="tel">Tel. Number:</label>
        <input type="tel" id="tel" name="tel" placeholder="(+91) 98******00" required>
    </div>
    
    <div class="form-group">
        <label for="department">Department:</label>
        <select id="department" name="department" required>
            <option value="sales">Sales</option>
        </select>
    </div>

    <div class="form-group form-group-radio">
    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
</div>

    <div class="form-group form-group-checkbox">
    <label>Browser Compatibility:</label>
    <input type="checkbox" id="chrome" name="browser[]" value="chrome">
    <label for="chrome">Google Chrome</label>
    <input type="checkbox" id="firefox" name="browser[]" value="firefox">
    <label for="firefox">Mozilla Firefox</label>
    <input type="checkbox" id="opera" name="browser[]" value="opera">
    <label for="opera">Opera</label>
    <input type="checkbox" id="edge" name="browser[]" value="edge">
    <label for="edge">E</label>
    </div>

    
    <div class="form-group">
        <label for="subject">Subject: </label>
        <input type="text" id="subject" name="subject" maxlength="3" required>
    </div>
    
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
    </div>
    
    <div class="form-group">
        <label for="file">Upload File (Accepted: png, jpg, jpeg, gif up to 1.5MB):</label>
        <input type="file" id="file" name="file" accept=".png, .jpg, .jpeg, .gif" required>
    </div>
    
    <div class="form-group">
        <input type="submit" value="Submit">
    </div>
</form>

</body>
</html>
