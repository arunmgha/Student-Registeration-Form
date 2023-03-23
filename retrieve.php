//retrieve data from database
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

//display data in a table
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Course</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['course']."</td></tr>";
}
echo "</table>";
