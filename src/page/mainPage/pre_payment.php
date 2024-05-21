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
        p {
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
    </style>
</head>
<body style="background-color: white;">
    <?php include '../mainPage/header.php'; ?>
    
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
            <div class="product" style="display: flex; padding: 20px 0px; align-items: center; border-bottom: 2px solid #F5F5F5;">
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
            </div>
            <div class="product" style="display: flex; padding: 20px 0px; align-items: center; border-bottom: 2px solid #F5F5F5;">
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
            </div>
            <div class="product" style="display: flex; padding: 20px 0px; align-items: center; border-bottom: 2px solid #F5F5F5;">
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
                <div style="flex:0.5; text-align: right;">
                    <p><b>1.980.000 ₫</b></p>
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
                <div style="flex:0.5; text-align: right;">
                    <p><b>1.980.000 ₫</b></p>
                </div>
            </div>
            <button class="btn-payment">
                <!-- <p style="">Tiến hành thanh toán</p> -->
                Tiến hành thanh toán
            </button>
        </div>
    </div>
    <?php include '../mainPage/footer.php'; ?>
</body>
</html>