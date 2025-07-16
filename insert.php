$conn = new mysqli("localhost", "root", "", "empdata");

$n = $_POST['name'];
$r = $_POST['role'];
$s = $_POST['salary'];

$conn->query("INSERT INTO employee(name, role, salary) VALUES('$n', '$r', '$s')");

header("Location: index.html");
