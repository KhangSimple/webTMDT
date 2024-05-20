<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example_db";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Truy vấn SQL để lấy dữ liệu
$sql = "SELECT id, firstname, lastname, email, reg_date FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị dữ liệu trong bảng HTML
    echo "<table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Registration Date</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["firstname"]."</td>
                <td>".$row["lastname"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["reg_date"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Không có kết quả nào";
}

// Đóng kết nối
$conn->close();
?>
