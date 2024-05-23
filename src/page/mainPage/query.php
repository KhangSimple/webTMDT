<?php
// Bước 1: Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cosmetic_db";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
function createLink($url, $onclick, $text) {
    return '<a href="' . $url . '" onclick="' . $onclick . '">' . $text . '</a>';
}


if(isset($_GET['type'])) {
    $type = $_GET['type'];

    // Bước 3: Truy vấn cơ sở dữ liệu dựa trên danh mục sản phẩm
    $sql = "SELECT * FROM product WHERE type = '$type'";
    if(isset($_GET['brand'])) {
        $brand = $_GET['brand'];
        $sql = "SELECT * FROM product WHERE type = '$type' AND brand = '$brand'";        
    }
    else if(isset($_GET['origin'])) {
        $origin = $_GET['origin'];
        $sql = "SELECT * FROM product WHERE type = '$type' AND origin = '$origin'";        
    }
    else {
        $sql = "SELECT * FROM product WHERE type = '$type'";
    }

    $result = $conn->query($sql);

    // Bước 4: Hiển thị kết quả dưới dạng HTML
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $productID = $row["product_id"];
            echo "<div class='product'>";
            echo "<img src='" . $row["img_url"] . "' class='img-product'/>";
            echo "<div class='name'><a href='#'>" . $row["name"] . "</a></div>";
            echo "<div class='price'>";
            echo "<p class='old-price'>" . $row["old_price"] . " ₫</p>";
            echo "<p class='new-price'>" . $row["new_price"] . " ₫</p>";
            echo "</div>";
            echo "<div class='btn-buy'>";
            echo createLink('#', 'addProduct(' . $productID . '); return false;', 'Mua ngay');
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "Không có sản phẩm trong danh mục này.";
    }
} 
else if(isset($_GET['detail_type'])) {
    $detail_type = $_GET['detail_type'];

    // Bước 3: Truy vấn cơ sở dữ liệu dựa trên danh mục sản phẩm
    $sql = "SELECT * FROM product WHERE detail_type = '$detail_type'";
    if(isset($_GET['brand'])) {
        $brand = $_GET['brand'];
        $sql = "SELECT * FROM product WHERE detail_type = '$detail_type' AND brand = '$brand'";        
    }
    else if(isset($_GET['origin'])) {
        $origin = $_GET['origin'];
        $sql = "SELECT * FROM product WHERE detail_type = '$detail_type' AND origin = '$origin'";        
    }
    else {
        $sql = "SELECT * FROM product WHERE detail_type = '$detail_type'";
    }

    $result = $conn->query($sql);

    // Bước 4: Hiển thị kết quả dưới dạng HTML
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $productID = $row["product_id"];
            echo "<div class='product'>";
            echo "<img src='" . $row["img_url"] . "' class='img-product'/>";
            echo "<div class='name'><a href='#'>" . $row["name"] . "</a></div>";
            echo "<div class='price'>";
            echo "<p class='old-price'>" . $row["old_price"] . " ₫</p>";
            echo "<p class='new-price'>" . $row["new_price"] . " ₫</p>";
            echo "</div>";
            echo "<div class='btn-buy'>";
            echo createLink('#', 'addProduct(' . $productID . '); return false;', 'Mua ngay');
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "Không có sản phẩm trong danh mục này.";
    }
}
else {
    echo "Không có danh mục sản phẩm được chọn.";
}

// Bước 5: Đóng kết nối
$conn->close();
?>