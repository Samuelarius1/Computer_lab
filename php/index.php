<?php
// Step 1: Database connection
$host = 'localhost';  // XAMPP's default MySQL host
$dbname = 'lab_system';  // Your database name
$username = 'root';  // XAMPP's default MySQL username (no password by default)
$password = '';  // Leave empty for XAMPP

$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student-id'];
    $student_name = $_POST['student-name'];
    $student_class = $_POST['student-class'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $return_date = $_POST['return-date'];
    $return_time = $_POST['return-time'];
    $affirmation = isset($_POST['affirmation']) ? 'Yes' : 'No';

    // Step 3: Insert data into the database
    $sql = "INSERT INTO lab_records (student_id, student_name, student_class, date, time, return_date, return_time, affirmation)
            VALUES ('$student_id', '$student_name', '$student_class', '$date', '$time', '$return_date', '$return_time', '$affirmation')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Step 4: Close the database connection
$conn->close();
?>
<?php
// Step 1: Database connection
$host = 'localhost';  // XAMPP's default MySQL host
$dbname = 'lab_system';  // Your database name
$username = 'root';  // XAMPP's default MySQL username (no password by default)
$password = '';  // Leave empty for XAMPP

$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student-id'];
    $student_name = $_POST['student-name'];
    $student_class = $_POST['student-class'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $return_date = $_POST['return-date'];
    $return_time = $_POST['return-time'];
    $affirmation = isset($_POST['affirmation']) ? 'Yes' : 'No';

    // Step 3: Insert data into the database
    $sql = "INSERT INTO lab_records (student_id, student_name, student_class, date, time, return_date, return_time, affirmation)
            VALUES ('$student_id', '$student_name', '$student_class', '$date', '$time', '$return_date', '$return_time', '$affirmation')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Step 4: Close the database connection
$conn->close();
?>
