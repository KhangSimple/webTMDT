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
        p {
            margin: 0px;
        }
    </style>
</head>
<body id="hg_container" style="background-color: white;">
    <?php include 'header.php'; ?>
    <?php include 'cart.php'; ?>
    <div style="background-color: rgb(242, 242, 242);width: 100%; height: 90vh;display: flex; justify-content: center; align-items: center;margin-top:15px">
        <div style="background-color: white; width: 70%; height: 80%;display:flex; justify-content:center; align-items:center; flex-direction: column;">
            <i class="fa-regular fa-circle-check" style="color:rgb(242, 96, 147); font-size: 60px;"></i>
            <p style="font-size: 30px;margin-bottom: 40px;"><b>Đặt hàng thành công</b></p>
            <p style="font-size: 18px;margin-bottom: 0px;">Mã đặt hàng của bạn là: <p id="product_list_order_id" style="font-size: 20px;color: rgb(242, 78, 135);"></p></p>
            <p style="margin-top: 5px;">Theo dõi đơn hàng của bạn bằng cách tra cứu trạng thái của đơn hàng</p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
        var product_list_order_id = localStorage.getItem('product_list_order_id');
        document.getElementById('product_list_order_id').innerText = product_list_order_id;

        var currentCategory = '';
        var currentDetailType = '';

        function queryData(category) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            currentCategory = category
            currentDetailType = ''
            xhttp.open("GET", "query.php?type=" + category, true);
            xhttp.send();
        }

        function queryDetailType(detailType) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            currentDetailType = detailType
            currentCategory = ''
            xhttp.open("GET", "query.php?detail_type=" + detailType, true);
            xhttp.send();
        }

        function queryBrandData(brand) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            // console.log(currentDetailType);
            if(currentDetailType === ''){
                xhttp.open("GET", "query.php?type=" + currentCategory + "&brand=" + brand, true);
            }
            else{
                xhttp.open("GET", "query.php?detail_type=" + currentDetailType + "&brand=" + brand, true);
            }
            xhttp.send();
        }
        function queryOriginData(origin) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            if(currentDetailType === ''){
                xhttp.open("GET", "query.php?type=" + currentCategory + "&origin=" + origin, true);
            }
            else{
                xhttp.open("GET", "query.php?detail_type=" + currentDetailType + "&origin=" + origin, true);
            }
            xhttp.send();
        }
        function openCart() {
            document.addEventListener("DOMContentLoaded", function() {
                var element = document.getElementById("cart");
                element.style.display = "block";
            });
        }

        // function addProduct(product_id) {
        //     console.log("?????");
        //     var xhttp = new XMLHttpRequest();
        //     xhttp.open("GET", "query_cart.php?product_id=" + product_id, true);
        //     xhttp.send();
        //     setTimeout(function(){
        //         popup.style.display = 'flex';
        //         overlay.style.display = 'block';
        //         hgContainer.style.overflow = 'hidden';
        //     }, 500)
        //     queryCartData()
        // }

        var popup = document.getElementById('popup');
        var overlay = document.getElementById('overlay');
        var openPopupButton = document.getElementById('openPopup');
        var closePopupButton = document.getElementById('closePopup');

        var hgContainer = document.getElementById('hg_container')

        openPopupButton.addEventListener('click', function() {
            popup.style.display = 'flex';
            overlay.style.display = 'block';
            hgContainer.style.overflow = 'hidden';
            queryCartData()
        });

        closePopupButton.addEventListener('click', function() {
            popup.style.display = 'none';
            overlay.style.display = 'none';
            hgContainer.style.overflow = 'auto';
        });

        // Đóng popup khi nhấn ra ngoài popup
        overlay.addEventListener('click', function() {
            popup.style.display = 'none';
            overlay.style.display = 'none';
            hgContainer.style.overflow = 'auto';
        });

    </script>
</body>
</html>