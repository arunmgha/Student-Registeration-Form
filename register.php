//connect to database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = mysqli_connect($host, $username, $password, $dbname);

//handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $course = mysqli_real_escape_string($conn, $_POST['course']);

  //insert data into database
  $sql = "INSERT INTO students (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";
  mysqli_query($conn, $sql);
}

//close database connection
mysqli_close($conn);
