<!DOCTYPE html>
<html>
<head>
    <title>Simple Form with MySQL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            color: #4CAF50;
            margin-top: 10px;
        }
        .error {
            color: #FF0000;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "vanshseth@2004";
$dbname = "form_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $email = $image = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $image = $_FILES["image"]["tmp_name"];

    if (!empty($name) && !empty($email) && !empty($image)) {
        $imageContent = addslashes(file_get_contents($image));

        $sql = "INSERT INTO submissions (name, email, image) VALUES ('$name', '$email', '$imageContent')";
        if ($conn->query($sql) === TRUE) {
            $message = "Form submitted successfully!";
            $name = $email = ""; 
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $message = "Please fill in all fields and upload an image.";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn->close();
?>

<div id="container">
    <h2>Enter your details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        
        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image">
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (!empty($message)) {
        if (strpos($message, "Error") !== false) {
            echo '<div class="error">' . $message . '</div>';
        } else {
            echo '<div class="message">' . $message . '</div>';
        }
    }
    ?>
</div>

</body>
</html>
