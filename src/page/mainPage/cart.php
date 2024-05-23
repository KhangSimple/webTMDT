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
        .cart-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 25px;
            color: gray;
        }
        .cart-icon:hover {
            color: black;
            cursor: pointer;
        }
        .cart-product {
            margin-bottom: 20px;
        }
        .cart-product p {
            margin: 0;
            padding: 0;
        }
        .cart-icon-delete {
            color: gray;
            margin-left: 50px;
            font-size: 20px;
        }
        .cart-icon-delete:hover {
            color: rgb(238, 56, 128);
            cursor: pointer;
        }
        .btn-order {
            width: 100%;
            background-color: rgb(238, 56, 128);
            border: none;
            align-items: center;
            color: white;
            font-size: 16px;
            font-weight: 550;
            padding: 10px;
        }
        .btn-order:hover {
            cursor: pointer;
            background-color: rgb(190, 45, 102);
        }
        .btn-parcel {
            width: 100%;
            background-color: #1182fc;
            border: none;
            align-items: center;
            color: white;
            font-size: 16px;
            font-weight: 550;
            padding: 10px;
            margin-bottom: 10px;
        }
        .btn-parcel:hover {
            cursor: pointer;
            background-color: rgb(14, 104, 202);
        }
        button {
            font-family: "Roboto Condensed", sans-serif;;
        }
    </style>
</head>
<body style="position:absolute;display: flex; width:100%;height: 100vh; flex-direction: row;z-index: 1;">
    <div style="flex: 0.75;" id="overlay" class="overlay">
    </div>
    <div style="flex-direction: column;flex: 0.25;text-align: center" id="popup" class="popup">
        <div style="flex:0.8">
            <i class="fa-solid fa-xmark cart-icon" id="closePopup"></i>
            <div>
                <p style="font-size: 18px;margin-top: 35px;"><b>GIỎ HÀNG</b></p>
            </div>
            <div id='cart_content' style="display: flex; flex-direction: column;overflow-y: auto;height: 500px; max-height: 500px">

            </div>
            <!-- <div class="cart-product" style="display: flex; flex-direction: row;align-items: center;">
                <div class="cart-img-product" style="margin-left: 30px;align-items: center;">
                    <img src="https://kyo.vn/wp-content/uploads/2024/04/Son-Dior-Rouge-Dior-Satin-Lipstick-766-Rose-Harpers-2-300x300.png" style="width: 60px; height: 60px;"/>
                </div>
                <div class="cart-name-product" style="max-width: 180px;text-align: left;margin-left: 20px;">
                    <p>Son Dior Rouge Dior Satin Lipstick 766 Rose Harpers - Hồng Sen Ánh Đỏ<br>1 × 990.000</p>
                </div>
                <i class="fa-solid fa-xmark cart-icon-delete"></i>
            </div> -->
        </div>
        <div style="flex:0.2;background-color: white;text-align: center;">
            <div style="display: flex;border-bottom: 2px solid #ECECEC;margin: 15px 30px;">
                <div style="flex:0.5; margin-bottom: 10px;">
                    <p style="font-size: 18px;margin: 0px;text-align: left;"><b>Tổng số tiền:</b></p>
                </div>
                <div class='total_price' style="flex:0.5; margin-bottom: 10px;">
                    <!-- <p style="font-size: 18px;margin: 0px;text-align: right;"><b>1.980.000 ₫</b></p> -->
                </div>
            </div>
            <div class="btn" style="margin: 15px 30px;">
                <button class="btn-parcel" onclick="watchOrder()">
                    Xem giỏ hàng
                </button>
                <button class="btn-order" onclick="toPaymentForm()">
                    Thanh toán
                </button>
            </div>
        </div>
    </div>

    <script>
        function queryCartData() {
            getTotalPrice('font-size: 18px;margin: 0px;text-align: right;')
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cart_content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "query_cart.php", true);
            xhttp.send();
        }
        function watchOrder() {
            window.location.href = "http://localhost/webTMDT/src/page/mainPage/pre_payment.php"
        }
    </script>
    <script src="index.js"></script>
</body>
</html>