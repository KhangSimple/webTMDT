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
        .search-popup {
            display: none; /* Ẩn popup mặc định */
            position: fixed; /* Giữ popup cố định trên màn hình */
            left: 32%;
            width: 36%;
            height:6%;
            top: 47%;
            /* transform: translate(-50%, -50%); */
            border: 1px solid #ccc;
            /* padding: 15px; */
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0);
            z-index: 1000;
            align-items: center;
            border-radius: 25px;
        }

        .search-overlay {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999; 
        }

        .search-close {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }
        .input-search {
            flex: 0.98;
            padding: 5px;
            padding-left: 15px;
            height: 80%;
            font-size: 18px;
            border: none;
            align-items: center;
            border-radius: 25px;
            font-weight:500;
        }
        .input-search:hover {
            outline: none;
            border-color: transparent;
        }
        .input-search:focus {
            outline: none; /* Loại bỏ outline mặc định */
            border-color: transparent; /* Ẩn border khi focus */
        }   
        .comfirm-search {
            border: none;
            background-color: transparent;
            justify-content: end;
        }
        .comfirm-search:hover {
            cursor: pointer;
        }
        input {
            font-family: ;
        }
    </style>
</head>
<body style="background-color: white;">
    <div id="search-overlay" class="search-overlay">
    </div>
    <div id="search-popup" class="search-popup">
        <input id="input-search" class="input-search" type="text" placeholder="Điền mã đơn hàng của bạn"/>
        <button class="comfirm-search" onclick="openOrderInfo()"><i class="fa-brands fa-searchengin" style="font-size: 25px;"></i></button>
    </div>

    </div>
    <header>
        <div class="info">
            <p style="padding:0;font-size: 15px;flex:0.7">Truong - Shop Mỹ Phẩm, Son Môi, Nước Hoa Chính Hãng</p>
            <div style="text-align: right;flex:0.3;padding-right: 130px; display: flex;align-items: center;">
                <i class="fa-solid fa-envelope" style="color:hsla(0, 0%, 100%, .8);margin-right: 5px; font-size: 14px;"></i>
                <p style="font-size: 14px;margin: 0;color:hsla(0, 0%, 100%, .8)">truongnguyen@gmail.com</p>
                <i class="fa-solid fa-phone" style="color:hsla(0, 0%, 100%, .8);margin-left: 20px;margin-right: 5px; font-size: 14px;"></i>
                <p style="font-size: 14px;margin: 0;color:hsla(0, 0%, 100%, .8)">012.34.456.999</p>
                <a href="https://www.facebook.com/PeachTruong.1503"><i class="fa-brands fa-facebook-f icon"></i></a>
                <a href="https://www.facebook.com/PeachTruong.1503"><i class="fa-brands fa-instagram icon"></i></a>
                <a href="https://www.facebook.com/PeachTruong.1503"><i class="fa-brands fa-youtube icon"></i></a>
            </div>
        </div>
        <div class="info-2">
            <img src="logo.png" alt="Ảnh" style="width: 80px;height: 80px">
            <div style="flex:0.9;display: flex; justify-content: space-evenly;align-items:center">
                <div class="info-2-component">
                    <img src="../../asset/images/fb-icon.png" class="info-2-icon"/>
                    <div>
                        <p style="font-weight: 600;">Facebook</p>
                        <p>fb.com/truongnguyen</p>
                    </div>
                </div>
                <div class="info-2-component">
                    <img src="../../asset/images/icon-ribbon.png" class="info-2-icon"/>
                    <div>
                        <p style="font-weight: 600;">Đảm bảo chất lượng</p>
                        <p>100% chính hãng</p>
                    </div>
                </div>
                <div class="info-2-component">
                    <img src="../../asset/images/icon-scooter.png" class="info-2-icon" style="width: 40px;"/>
                    <div>
                        <p style="font-weight: 600;">Free ship</p>
                        <p>Đơn hàng từ 500k</p>
                    </div>
                </div>
                <div class="info-2-component">
                    <img src="../../asset/images/icon-phone-1.png" class="info-2-icon"/>
                    <div>
                        <p style="font-weight: 600;">Hotline: 098 3535 470</p>
                        <p>Tư vấn miễn phí 24/7</p>
                    </div>
                </div>
                <div style="text-align: right">
                    <a href="#" id="search-openPopup"><i class="fa-solid fa-magnifying-glass" style="color: rgb(238, 56, 128);font-size: 25px;"></i></a>
                    <a onclick="openCart()" href="##" id="openPopup"><i class="fa-solid fa-cart-shopping" style="color: rgb(238, 56, 128);font-size: 25px;margin-left: 10px;"></i></a>
                </div>
            </div>
        </div>
        <div id="menu">
            <a href="http://localhost/webTMDT/src/page/mainPage/home.php" class="title">
                TRANG CHỦ
            </a>
            <div class="dropdown">
                <a href="#" class="dropbtn" onclick="queryData('son_moi')">
                    SON MÔI
                    <i class="fa-solid fa-caret-down" style="margin-left: 5px;"></i>
                </a>
                <div class="dropdown-content">
                  <a href="#" onclick="queryDetailType('son_thoi')">Son thỏi</a>
                  <a href="#" onclick="queryDetailType('son_kem')">Son kem</a>
                  <a href="#" onclick="queryDetailType('son_duong')">Son dưỡng</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="##" class="dropbtn" onclick="queryData('nuoc_hoa')">
                    Nước hoa
                    <i class="fa-solid fa-caret-down" style="margin-left: 5px;"></i>
                </a>
                <div class="dropdown-content">
                  <a href="#" onclick="queryDetailType('nuoc_hoa_nu')">Nước hoa nữ</a>
                  <a href="#" onclick="queryDetailType('nuoc_hoa_nam')">Nước hoa nam</a>
                  <a href="#" onclick="queryDetailType('nuoc_hoa_unisex')">Nước hoa Unisex</a>
                  <a href="#" onclick="queryDetailType('body_mist')">Body Mist</a>
                </div>
            </div>
            <a href="##" onclick="queryData('chong_nang')">
                CHỐNG NẮNG
            </a>
            <div class="dropdown">
                <a href="##" class="dropbtn" onclick="queryData('trang_diem_mat')">
                    TRANG ĐIỂM MẶT
                    <i class="fa-solid fa-caret-down" style="margin-left: 5px;"></i>
                </a>
                <div class="dropdown-content">
                  <a href="#" onclick="queryDetailType('kem_nen')">Kem nền, kem lót</a>
                  <a href="#" onclick="queryDetailType('ma_hong')">Má hồng</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="##" class="dropbtn" onclick="queryData('trang_diem_eye')">
                    TRANG ĐIỂM MẮT
                    <i class="fa-solid fa-caret-down" style="margin-left: 5px;"></i>
                </a>
                <div class="dropdown-content">
                  <a href="#" onclick="queryDetailType('phan_mat')">Phấn mắt</a>
                  <a href="#" onclick="queryDetailType('bam_mi')">Bấm mí</a>
                  <a href="#" onclick="queryDetailType('ke_mat')">Kẻ mắt</a>
                  <a href="#" onclick="queryDetailType('mascara')">mascara</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="##" class="dropbtn" onclick="queryData('cham_soc_da')">
                    CHĂM SÓC DA
                    <i class="fa-solid fa-caret-down" style="margin-left: 5px;"></i>
                </a>
                <div class="dropdown-content">
                  <a href="#" onclick="queryDetailType('mat_na')">Mặt nạ</a>
                  <a href="#" onclick="queryDetailType('dau_tay_trang')">Tẩy trang</a>
                  <a href="#" onclick="queryDetailType('xit_khoang')">Xịt khoáng</a>
                </div>
            </div>
            <a href="##" onclick="queryData('cham_soc_toc')">
                CHĂM SÓC TÓC
            </a>
            <a href="##" onclick="queryAllData()">
                SHOP ALL
            </a>
            <!-- <div class="dropdown">
                <a href="##" class="dropbtn">
                    TIN TỨC
                    <i class="fa-solid fa-caret-down" style="margin-left: 5px;"></i>
                </a>
                <div class="dropdown-content">
                  <a href="#">Làm đẹp</a>
                  <a href="#">Son Môi</a>
                  <a href="#">Nước Hoa</a>
                  <a href="#">Quà tặng</a>
                  <a href="#">Tuyển dụng</a>
                </div>
            </div> -->
        </div>
    </header>
    <script>    
        var search_popup = document.getElementById('search-popup');
        var search_overlay = document.getElementById('search-overlay');
        var search_openPopupButton = document.getElementById('search-openPopup');

        // var hgContainer = document.getElementById('search-hg_container')

        search_openPopupButton.addEventListener('click', function() {
            search_popup.style.display = 'flex';
            search_overlay.style.display = 'block';
        });

        search_overlay.addEventListener('click', function() {
            search_popup.style.display = 'none';
            search_overlay.style.display = 'none';
        });
        function openOrderInfo() {
            var order_search_id = document.getElementById('input-search').value;
            localStorage.setItem('order_search_id', order_search_id)
            search_popup.style.display = 'none';
            search_overlay.style.display = 'none';
            window.location.href = "http://localhost/webTMDT/src/page/mainPage/search_order.php"
        }

    </script>
</body>
</html>