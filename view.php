$conn = new mysqli("localhost", "root", "", "empdata");

$order = "DESC";
if (isset($_GET['order']) && $_GET['order'] == "asc") {
  $order = "ASC";
}

$q = $conn->query("SELECT * FROM employee ORDER BY salary $order");

echo "<h2>Employee List</h2>";
echo "<div style='margin-bottom:10px;'>";
echo "<a href='view.php?order=asc'>Sort by Salary (Low to High)</a> | ";
echo "<a href='view.php?order=desc'>Sort by Salary (High to Low)</a>";
echo "</div>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>ID</th><th>Name</th><th>Role</th><th>Salary</th></tr>";

while($row = $q->fetch_assoc()) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['role']."</td>";
  echo "<td>".$row['salary']."</td>";
  echo "</tr>";
}

echo "</table>";

echo "<div style='margin-top:20px;'><a href='index.html'>Add Another Employee</a></div>";
