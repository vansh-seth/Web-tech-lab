<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Request</title>
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
        input[type="datetime-local"],
        select,
        textarea {
            width: 50%;
            padding: 8px;
            box-sizing: border-box;
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
    <h1>bmcsoftware</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "vanshseth@2004";
    $dbname = "bmcsoftware_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $request_id = $_POST['request_id'];
        $name = $_POST['name'];
        $status = $_POST['status'];
        $type = $_POST['type'];
        $description = $_POST['description'];
        $mime_type = $_POST['mime_type'];
        $sub_type = $_POST['sub_type'];
        $locale = $_POST['locale'];
        $modified_date = date('Y-m-d H:i:s', strtotime($_POST['modified_date']));
        $application = $_POST['application'];
        $file = $_FILES['file_name'];

        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $upload_file)) {
            $stmt = $conn->prepare("INSERT INTO requests (request_id, name, status, type, description, mime_type, sub_type, locale, modified_date, application, file_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssss", $request_id, $name, $status, $type, $description, $mime_type, $sub_type, $locale, $modified_date, $application, $upload_file);

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
            <label for="request_id">Request ID:</label>
            <input type="text" id="request_id" name="request_id" placeholder="000000000000520" required>
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="summary" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Active">Active</option>
                <option value="Not Active">Not Active</option>
                <option value="Terminated">Terminated</option>
            </select>
        </div>

        <div class="form-group">
            <label for="type">Type:</label>
            <select id="type" name="type" required>
                <option value="Template">Template</option>
                <option value="something">Something</option>
                <option value="Others">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="summary" required></textarea>
        </div>

        <div class="form-group">
            <label for="mime_type">Mime Type:</label>
            <select id="mime_type" name="mime_type" required>
                <option value="text/html">text/html</option>
                <option value="docx">docx</option>
                <option value="ppt">ppt</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sub_type">Sub Type:</label>
            <input type="text" id="sub_type" name="sub_type" required>
        </div>

        <div class="form-group">
            <label for="locale">Locale:</label>
            <input type="text" id="locale" name="locale" required>
        </div>

        <div class="form-group">
            <label for="modified_date">Modified Date:</label>
            <input type="datetime-local" id="modified_date" name="modified_date" required>
        </div>

        <div class="form-group">
            <label for="application">Application:</label>
            <textarea id="application" name="application" required></textarea>
        </div>

        <div class="form-group">
            <label for="file_name">Upload File:</label>
            <input type="file" id="file_name" name="file_name" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>
