<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mỹ phẩm</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .product-list p {
            margin: 0px;
            margin-bottom: 10px;
        }
        .price p {
            margin: 0px;
            margin-bottom: 10px;
        }
        .btn-payment {
            width: 100%;
            background-color: rgb(238, 56, 128);
            border: none;
            align-items: center;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 10px;
            margin-top: 30px;
        }
        .btn-payment:hover {
            cursor: pointer;
            background-color: rgb(190, 45, 102);
        }
        .icon-payment {
            cursor: pointer;
        }
        .popup {
            display: none; /* Ẩn popup mặc định */
            position: fixed; /* Giữ popup cố định trên màn hình */
            left: 75%;
            width: 25%;
            height:100%;
            top: 0%;
            /* transform: translate(-50%, -50%); */
            /* border: 1px solid #ccc; */
            /* padding: 20px; */
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0);
            z-index: 1000; /* Đảm bảo popup nằm trên các phần tử khác */
        }

        .overlay {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 75%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999; 
        }

        .close {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body id='hg_container' style="background-color: white;">
    <?php include '../mainPage/header.php'; ?>
    <?php include 'cart.php'; ?>
    <div style="display: flex;flex-direction: row;margin: 40px 170px 0px 130px; min-height: 450px;">
        <div class="product-list" style="flex:0.6;padding-right: 10px;">
            <div class="product-header" style="display: flex; border-bottom: 3px solid #F5F5F5;">
                <div style="flex:0.65">
                    <p><b>SẢN PHẨM</b></p>
                </div>
                <div style="flex:0.1; text-align: center;">
                    <p><b>GIÁ</b></p>
                </div>
                <div style="flex:0.15;text-align: center;">
                    <p><b>SỐ LƯỢNG</b></p>
                </div>
                <div style="flex:0.1; text-align: right;">
                    <p><b>TẠM TÍNH</b></p>
                </div>
            </div>
            <div id='pre_payment_content'>
                <!-- <div class="product" style="display: flex; padding: 20px 0px; align-items: center; border-bottom: 2px solid #F5F5F5;">
                    <div class="product-name" style="flex:0.65;display: flex; align-items: center">
                        <i class="fa-solid fa-xmark icon-payment" style="color: gray; margin-right: 15px;"></i>
                        <img src="https://kyo.vn/wp-content/uploads/2024/04/Son-Dior-Rouge-Dior-Satin-Lipstick-766-Rose-Harpers-2-300x300.png" style="width: 80px;height: 80px;"/>
                        <p>Son Dior Rouge Dior Satin Lipstick 766 Rose Harpers - Hồng Sen Ánh Đỏ</p>
                    </div>
                    <div class="product-price" style="flex:0.1;text-align: center;">
                        <p><b>990.000 ₫</b></p>
                    </div>
                    <div class="product-quantity" style="flex:0.15;text-align: center;">
                        <i class="fa-solid fa-plus icon-payment" style="color: aquamarine; font-size: 17px;"></i>
                        <p style="margin: 0;">1</p>
                        <i class="fa-solid fa-minus icon-payment" style="color: tomato; font-size: 17px;"></i>
                    </div>
                    <div class="product-total-price" style="flex:0.1; text-align: right;">
                        <p><b>990.000 ₫</b></p>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="price" style="flex:0.4;border-left: 2px solid #F5F5F5;padding-left: 10px;">
            <div class="price-title" style="border-bottom: 3px solid #F5F5F5;">
                <p><b>CỘNG GIỎ HÀNG</b></p>
            </div>
            <div class="price-tam" style="display: flex;padding: 10px 0px; border-bottom: 2px solid #F5F5F5;">
                <div style="flex:0.5">
                    <p>Tạm tính</p>
                </div>
                <div class='total_price' style="flex:0.5;text-align: right;">
                </div>
            </div>
            <div class="price-ship" style="display: flex;padding: 10px 0px; border-bottom: 2px solid #F5F5F5;">
                <div style="flex:0.5">
                    <p>Giao hàng</p>
                </div>
                <div style="flex:0.5; text-align: right;">
                    <p style="color: gray; font-size: 14px;">Giao hàng miễn phí</p>
                </div>
            </div>
            <div class="price-total" style="display: flex;padding: 10px 0px; border-bottom: 2px solid #F5F5F5;">
                <div style="flex:0.5">
                    <p>Tổng</p>
                </div>
                <div class='total_price' style="flex:0.5;text-align: right;">
                </div>
                <!-- <div style="flex:0.5; text-align: right;">
                    <p><b>1.980.000 ₫</b></p>
                </div> -->
            </div>
            <button class="btn-payment" onclick="toPaymentForm()">
                <!-- <p style="">Tiến hành thanh toán</p> -->
                Tiến hành thanh toán
            </button>
        </div>
    </div>
    <?php include '../mainPage/footer.php'; ?>

    <script>
        getTotalPrice('')
        var pre_payment = 'test'
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pre_payment_content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "query_cart.php?pre_payment=" + pre_payment, true);
        xhttp.send();
    </script>
    <script src="index.js"></script>
</body>
</html>