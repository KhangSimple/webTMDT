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
        .payment-form p {
            margin: 0px;
            margin-bottom: 10px;
        }
        .order-info p {
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
        .payment-form {
            flex:0.6;
            border-top: 2px solid #ECECEC;
            padding: 20px 0px;
        }
        .order-info {
            flex: 0.4;
            padding: 40px 30px;
            margin-left: 50px;
            border: 2px solid rgb(238, 56, 128);
            min-height: 600px;
        }
        input {
            width: 100%;
            height: 35px;
            border: 1px solid sandybrown;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        .btn-order {
            width: 100%;
            background-color: rgb(238, 56, 128);
            border: none;
            align-items: center;
            color: white;
            font-size: 17px;
            font-weight: 600;
            padding: 10px;
            margin-top: 30px;
        }
        .btn-order:hover {
            cursor: pointer;
            background-color: rgb(190, 45, 102);
        }
    </style>
</head>
<body style="background-color: white;">
    <?php include '../mainPage/header.php'; ?>
    
    <div style="display: flex;flex-direction: row;margin: 40px 170px 0px 130px; min-height: 410px; margin-bottom:40px">
        <div class="payment-form">
            <p style="font-size: 18px; font-weight: 600;">
                THÔNG TIN THANH TOÁN
            </p>
            <div class="name">
                <label for="name"><b>Họ và tên *</b></label>
                <input type="text" id="name" name="name"><br><br>
            </div>
            <div class="phone">
                <label for="phone"><b>Số điện thoại *</b></label>
                <input type="text" id="phone" name="phone"><br><br>
            </div>
            <div class="email">
                <label for="email"><b>Địa chỉ email *</b></label>
                <input type="text" id="email" name="email"><br><br>
            </div>
            <div class="address-payment">
                <label for="address-payment"><b>Địa chỉ *</b></label>
                <input type="text" id="address-payment" name="address-payment"><br><br>
            </div>
            <div class="note">
                <label for="note"><b>Ghi chú đơn hàng (tùy chọn)</b></label>
                <textarea type="text" id="note" name="note" style="box-sizing: border-box;width:600px;max-width: 600px;height: 100px ;max-height: 100px; border: 1px solid sandybrown;"></textarea>
            </div>
        </div>
        <div class="order-info">
            <p style="font-size: 18px; font-weight: 600; margin-bottom: 20px;">
                ĐƠN HÀNG CỦA BẠN
            </p>
            <div style="display: flex; border-bottom: 2px solid #ECECEC;">
                <div style="flex:0.8">
                    <p><b>SẢN PHẨM</b></p>
                </div>
                <div style="flex:0.2; text-align: right;">
                    <p><b>TẠM TÍNH</b></p>
                </div>
            </div>
            
            <div style="display: flex; border-bottom: 1px solid #ECECEC;padding: 12px 0px;">
                <div style="flex:0.8; color: gray;">
                    <p>Son Dior Rouge Dior Satin Lipstick 766 Rose Harpers - Hồng Sen Ánh Đỏ  × 1</p>
                </div>
                <div style="flex:0.2; text-align: right;align-items: center;">
                    <p><b>990.000 ₫</b></p>
                </div>
            </div>
            <div style="display: flex; border-bottom: 1px solid #ECECEC;padding: 12px 0px;">
                <div style="flex:0.8; color: gray;">
                    <p>Son Dior Rouge Dior Satin Lipstick 766 Rose Harpers - Hồng Sen Ánh Đỏ  × 1</p>
                </div>
                <div style="flex:0.2; text-align: right;align-items: center;">
                    <p><b>990.000 ₫</b></p>
                </div>
            </div>

            <div style="display: flex; border-bottom: 1px solid #ECECEC; margin-top: 10px;font-size: 14px;">
                <div style="flex:0.8;">
                    <p><b>Tạm tính</b></p>
                </div>
                <div style="flex:0.2; text-align: right;">
                    <p><b>1.980.000 ₫</b></p>
                </div>
            </div>
            <div style="display: flex; border-bottom: 1px solid #ECECEC; margin-top: 10px;font-size: 14px; color: gray;">
                <div style="flex:0.8;">
                    <p><b>Giao hàng</b></p>
                </div>
                <div style="flex:0.2; text-align: right;">
                    <p><b>Giao hàng miễn phí</b></p>
                </div>
            </div>
            <div style="display: flex; border-bottom: 2px solid #ECECEC; margin-top: 10px;font-size: 14px;">
                <div style="flex:0.8;">
                    <p><b>Tổng</b></p>
                </div>
                <div style="flex:0.2; text-align: right;">
                    <p><b>1.980.000 ₫</b></p>
                </div>
            </div>
            <div style="display:flex; flex-direction: row;font-size: 15px; text-align: left; align-items: center; padding: 0;">
                <input type="radio" id="payment-type" name="fav_language" value="1" style="scale: 0.4;flex: 0.2;padding: 0px;" checked>
                <label for="payment-type"><b>Chuyển khoản ngân hàng</b></label>
            </div>
            <button class="btn-order">
                ĐẶT HÀNG
            </button>
            <div style="margin-top: 30px;">
                <p>- 100% sản phẩm chính hãng</p>
                <p>- Đổi trả trong 30 ngày</p>
                <p>- Free ship đơn hàng từ 800k</p>
                <p>- Giao hàng toàn quốc</p>
                <p>- Gửi quà tặng đến tận tay người nhận</p>
            </div>
        </div>
    </div>
    <?php include '../mainPage/footer.php'; ?>
</body>
</html>