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

// function deleteProduct($product_id) {
//     $sql = "DELETE FROM cart where product_id = '$product_id'";
//     $result = $conn->query($sql);
// }


if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "INSERT INTO cart (product_id) values ('$product_id')";
    $result = $conn->query($sql);
}
else if(isset($_GET['delete_product'])) {
    $product_id = $_GET['delete_product'];
    $sql = "DELETE FROM cart where product_id = '$product_id'";
    $result = $conn->query($sql);
}
else if(isset($_GET['total_price'])) {
    $sql = "select sum(product.new_price_int * cart.quantity) as total_price from cart join product on cart.product_id = product.product_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $totalPrice = $row["total_price"];
            echo "<p style='font-size: 18px;margin: 0px;text-align: right;'><b>" . number_format($row["total_price"], 0, ',', '.') . " ₫</b></p>";
        }
    } else {
        echo "Lỗi.";
    }
}
else if(isset($_GET['add_quantity'])) {
    $product_id = $_GET['add_quantity'];
    $sql = "update cart set quantity = quantity + 1 where product_id = '$product_id'";
    $result = $conn->query($sql);
}
else if(isset($_GET['minus_quantity'])) {
    $product_id = $_GET['minus_quantity'];
    $sql = "update cart set quantity = quantity - 1 where product_id = '$product_id'";
    $result = $conn->query($sql);
}
else if(isset($_GET['pre_payment'])) {
    $sql = "SELECT *,cart.quantity FROM product join cart on product.product_id = cart.product_id order by cart.id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $productID = $row["product_id"];
            echo "<div class='product' style='display: flex; padding: 20px 0px; align-items: center; border-bottom: 2px solid #F5F5F5;'>";
            echo "    <div class='product-name' style='flex:0.63;display: flex; align-items: center'>";
            echo createLink('#', 'deleteProduct(' . $productID . '); return false;', "<i class='fa-solid fa-xmark icon-payment' style='color: gray; margin-right: 15px;'></i>");
            echo "        <img src='" . $row["img_url"] . "' style='width: 80px;height: 80px;'/>";
            echo "        <p>" . $row["name"] . "</p>";
            echo "    </div>";
            echo "    <div class='product-price' style='flex:0.1;text-align: center;'>";
            echo "        <p><b>" . $row["new_price"] . "</b></p>";
            echo "    </div>";
            echo "    <div class='product-quantity' style='flex:0.15;text-align: center;'>";
            echo createLink('#', 'addQuantity(' . $productID . '); return false;', "<i class='fa-solid fa-plus icon-payment' style='color: aquamarine; font-size: 17px;'></i>");
            echo "        <p style='margin: 0;'>" . $row["quantity"] . "</p>";
            echo createLink('#', 'minusQuantity(' . $productID . '); return false;', "<i class='fa-solid fa-minus icon-payment' style='color: tomato; font-size: 17px;'></i>");
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
else if(isset($_GET['order_info'])) {
    $product_list_order_id = $_GET['product_list_order_id'];
    $sql = "SELECT *,product_list_order.quantity FROM product join product_list_order on product.product_id = product_list_order.product_id where product_list_order.product_list_order_id = '$product_list_order_id' order by product_list_order.id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $productID = $row["product_id"];
            echo "<div class='product' style='display: flex; padding: 20px 0px; align-items: center; border-bottom: 2px solid #F5F5F5;'>";
            echo "    <div class='product-name' style='flex:0.63;display: flex; align-items: center'>";
            echo "        <img src='" . $row["img_url"] . "' style='width: 80px;height: 80px;'/>";
            echo "        <p>" . $row["name"] . "</p>";
            echo "    </div>";
            echo "    <div class='product-price' style='flex:0.1;text-align: center;'>";
            echo "        <p><b>" . $row["new_price"] . "</b></p>";
            echo "    </div>";
            echo "    <div class='product-quantity' style='flex:0.15;text-align: center;'>";
            echo "        <p style='margin: 0;'>" . $row["quantity"] . "</p>";
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
else if(isset($_GET['order_buyer_info'])) {
    $product_list_order_id = $_GET['product_list_order_id'];
    $sql = "SELECT *, (select sum(product.new_price_int * plo.quantity) from product join product_list_order as plo on plo.product_id = product.product_id WHERE plo.product_list_order_id = '$product_list_order_id') as total_price FROM orders WHERE product_list_order_id = '$product_list_order_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h2>Thông tin đơn hàng</h2>";
            echo "<p id='order_id'><strong>Mã đơn hàng:</strong> " . $row["product_list_order_id"] . "</p>";
            echo "<p id='buyer_name'><strong>Người đặt hàng:</strong> " . $row["buyer_name"] . "</p>";
            echo "<p id='buyer_address'><strong>Địa chỉ:</strong> " . $row["buyer_address"] . "</p>";
            echo "<p id='buyer_email'><strong>Email:</strong> " . $row["buyer_email"] . "</p>";
            echo "<p id='order_status'><strong>Trạng thái:</strong> Đang vận chuyển</p>";
            echo "<p id='order_status'><strong>Tổng giá tiền:</strong> " . number_format($row["total_price"], 0, ',', '.') . " ₫</p>";
        }
    } else {
        echo "Đơn hàng không tồn tại";
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
            $productID = $row["product_id"];
            echo "<div class='cart-product' style='display: flex; flex-direction: row;align-items: center;'>";
            echo "<div class='cart-img-product' style='margin-left: 30px;align-items: center;'>";
            echo "<img src='" . $row["img_url"] . "' style='width: 60px; height: 60px;'/>";
            echo "</div>";
            echo "<div class='cart-name-product' style='max-width: 180px;text-align: left;margin-left: 20px;'>";
            echo "<p>" . $row["name"] . "<br>" . $row["quantity"] . " × " . $row["new_price"] . " ₫</p>";
            echo "</div>";
            echo createLink('#', 'deleteProduct(' . $productID . '); return false;', "<i class='fa-solid fa-xmark cart-icon-delete'></i>");
            echo "</div>";
        }
    } else {
        echo "Không có sản phẩm trong danh mục này.";
    }
}

// Bước 5: Đóng kết nối
$conn->close();
?>