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
        #order-details {
            border: 1px solid rgb(238, 56, 128);
            padding: 20px;
            margin-bottom: 20px;
        }
        #product-details {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body id='hg_container' style="background-color: white;">
    <?php include '../mainPage/header.php'; ?>
    <?php include 'cart.php'; ?>
    <div style="display: flex;flex-direction: column;margin: 40px 170px 0px 130px; min-height: 450px;">
        <div id="order-details">
        </div>
        <div id="product-details">
            <div class="product-header" style="display: flex; border-bottom: 3px solid #F5F5F5;">
                <div style="flex:0.63">
                    <p><b>SẢN PHẨM</b></p>
                </div>
                <div style="flex:0.1; text-align: center;">
                    <p><b>GIÁ</b></p>
                </div>
                <div style="flex:0.15;text-align: center;">
                    <p><b>SỐ LƯỢNG</b></p>
                </div>
                <div style="flex:0.12; text-align: right;">
                    <p><b>TỔNG</b></p>
                </div>
            </div>
            <div id='order-info-content'>

            </div>
        </div>
    </div>
    <?php include '../mainPage/footer.php'; ?>
    <script>
        var product_list_order_id = localStorage.getItem('order_search_id')
        console.log(product_list_order_id);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("order-info-content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "query_cart.php?order_info=" + 'order_info' + '&product_list_order_id=' + product_list_order_id, true);
        xhttp.send();

        var xhttp1 = new XMLHttpRequest();
        xhttp1.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("order-details").innerHTML = this.responseText;
            }
        };
        var product_list_order_id = localStorage.getItem('order_search_id')
        xhttp1.open("GET", "query_cart.php?order_buyer_info=" + 'order_buyer_info' + '&product_list_order_id=' + product_list_order_id, true);
        xhttp1.send();

    </script>
    <script src="index.js"></script>
</body>
</html>