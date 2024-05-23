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
if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "INSERT INTO cart (product_id) values ('$product_id')";
    $result = $conn->query($sql);
}
else if(isset($_GET['pre_payment'])) {
    $sql = "SELECT *,cart.quantity FROM product join cart on product.product_id = cart.product_id order by cart.id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='product' style='display: flex; padding: 20px 0px; align-items: center; border-bottom: 2px solid #F5F5F5;'>";
            echo "    <div class='product-name' style='flex:0.63;display: flex; align-items: center'>";
            echo "        <i class='fa-solid fa-xmark icon-payment' style='color: gray; margin-right: 15px;'></i>";
            echo "        <img src='" . $row["img_url"] . "' style='width: 80px;height: 80px;'/>";
            echo "        <p>" . $row["name"] . "</p>";
            echo "    </div>";
            echo "    <div class='product-price' style='flex:0.1;text-align: center;'>";
            echo "        <p><b>" . $row["new_price"] . "</b></p>";
            echo "    </div>";
            echo "    <div class='product-quantity' style='flex:0.15;text-align: center;'>";
            echo "        <i class='fa-solid fa-plus icon-payment' style='color: aquamarine; font-size: 17px;'></i>";
            echo "        <p style='margin: 0;'>" . $row["quantity"] . "</p>";
            echo "        <i class='fa-solid fa-minus icon-payment' style='color: tomato; font-size: 17px;'></i>";
            echo "    </div>";
            echo "    <div class='product-total-price' style='flex:0.12; text-align: right;'>";
            echo "        <p><b>" . number_format($row["new_price_int"] * $row["quantity"], 0, ',', '.') . " ₫</b></p>";
            echo "    </div>";
            echo "</div>";
        }
    } else {
        echo "Không có sản phẩm trong danh mục này.";
    }
}
else if(isset($_GET['payment_form'])) {
    $sql = "SELECT *,cart.quantity FROM product join cart on product.product_id = cart.product_id order by cart.id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div style='display: flex; border-bottom: 1px solid #ECECEC; padding: 12px 0px;'>";
            echo "    <div style='flex:0.8; color: gray;'>";
            echo "        <p>" . $row["name"] . "  × " . $row["quantity"] . "</p>";
            echo "    </div>";
            echo "    <div style='flex:0.2; text-align: right; align-items: center;'>";
            echo "        <p><b>" . number_format($row["new_price_int"] * $row["quantity"], 0, ',', '.') . " ₫</b></p>";
            echo "    </div>";
            echo "</div>";
        }
    } else {
        echo "Không có sản phẩm trong danh mục này.";
    }
}
else{
    $sql = "SELECT *,cart.quantity FROM product join cart on product.product_id = cart.product_id order by cart.id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='cart-product' style='display: flex; flex-direction: row;align-items: center;'>";
            echo "<div class='cart-img-product' style='margin-left: 30px;align-items: center;'>";
            echo "<img src='" . $row["img_url"] . "' style='width: 60px; height: 60px;'/>";
            echo "</div>";
            echo "<div class='cart-name-product' style='max-width: 180px;text-align: left;margin-left: 20px;'>";
            echo "<p>" . $row["name"] . "<br>" . $row["quantity"] . " × " . $row["new_price"] . " ₫</p>";
            echo "</div>";
            echo "<i class='fa-solid fa-xmark cart-icon-delete'></i>";
            echo "</div>";
        }
    } else {
        echo "Không có sản phẩm trong danh mục này.";
    }
}

// Bước 5: Đóng kết nối
$conn->close();
?>