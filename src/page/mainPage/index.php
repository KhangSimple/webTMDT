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
</head>
<body style="background-color: white;">
    <?php include 'header.php'; ?>
    
    <div style="display: flex;flex-direction: row;margin: 20px 170px 0px 130px">
        <div id="sidebar" style="flex:0.25">
            <div class="filter-component">
                <div class="header">
                    Thương hiệu
                </div>
                <div class="filter-content" style="overflow-y: auto;height: 200px;">
                    <div class="filter-items" >
                        <a class="value" href="##" onclick="queryBrandData('3CE')">3CE</a>
                        <p class="quantity">(111)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Bbia</a>
                        <p class="quantity">(9)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Black Rouge</a>
                        <p class="quantity">(111)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Chanel</a>
                        <p class="quantity">(55)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Charlotte Tibury</a>
                        <p class="quantity">(4)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Mac</a>
                        <p class="quantity">(88)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Roman</a>
                        <p class="quantity">(31)</p>
                    </div>
                </div>
            </div>
            <div class="filter-component">
                <div class="header">
                    Màu sắc
                </div>
                <div class="filter-content" style="overflow-y: auto;height: 200px;">
                    <div class="filter-items" >
                        <a class="value" href="##">Cam Cháy</a>
                        <p class="quantity">(9)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Cam cháy ánh đỏ</a>
                        <p class="quantity">(1)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Cam Đào</a>
                        <p class="quantity">(8)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Cam Đất</a>
                        <p class="quantity">(27)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Cam Gạch</a>
                        <p class="quantity">(5)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Cam Hồng</a>
                        <p class="quantity">(1)</p>
                    </div>
                </div>
            </div>
            <div class="filter-component">
                <div class="header">
                    Xuất xứ
                </div>
                <div class="filter-content" style="overflow-y: auto;height: 200px;">
                    <div class="filter-items" >
                        <a class="value" href="##">Anh</a>
                        <p class="quantity">(4)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##" onclick="queryOriginData('han_quoc')">Hàn quốc</a>
                        <p class="quantity">(255)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Italy</a>
                        <p class="quantity">(23)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Mỹ</a>
                        <p class="quantity">(134)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Nhật bản</a>
                        <p class="quantity">(4)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Pháp</a>
                        <p class="quantity">(290)</p>
                    </div>
                </div>
            </div>
            <div class="filter-component">
                <div class="header">
                    Nồng độ
                </div>
                <div class="filter-content">
                    <div class="filter-items" >
                        <a class="value" href="##">EDP - Eau De Parfum</a>
                        <p class="quantity">(3)</p>
                    </div>
                </div>
            </div>
            <div class="filter-component">
                <div class="header">
                    Nhóm hương
                </div>
                <div class="filter-content">
                    <div class="filter-items" >
                        <a class="value" href="##">Oriental Fougere – Hương dương sỉ phương Đông</a>
                        <p class="quantity">(2)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Oriental Vanilla – Hương vani phương Đông</a>
                        <p class="quantity">(1)</p>
                    </div>
                </div>
            </div>
            <div class="filter-component">
                <div class="header">
                    Độ lưu hương
                </div>
                <div class="filter-content">
                    <div class="filter-items" >
                        <a class="value" href="##">Lâu – Từ 7 đến 12 giờ</a>
                        <p class="quantity">(2)</p>
                    </div>
                    <div class="filter-items" >
                        <a class="value" href="##">Trung bình – Từ 3 đến 6 giờ</a>
                        <p class="quantity">(1)</p>
                    </div>
                </div>
            </div>
            <div class="filter-component">
                <div class="header">
                    Độ tỏa hương
                </div>
                <div class="filter-content">
                    <div class="filter-items" >
                        <a class="value" href="##">Gần – Toả hương trong vòng một cánh tay</a>
                        <p class="quantity">(3)</p>
                    </div>
                </div>
            </div>
            <div class="filter-component">
                <div class="header">
                    Giới tính
                </div>
                <div class="filter-content">
                    <div class="filter-items" >
                        <a class="value" href="##">Nữ</a>
                        <p class="quantity">(3)</p>
                    </div>
                </div>
            </div>
            <div class="filter-component">
                <div class="header">
                    Dung tích
                </div>
                <div class="filter-content">
                    <div class="filter-items" >
                        <a class="value" href="##">90ml + 10ml</a>
                        <p class="quantity">(3)</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
        <!-- <?php foreach ($result as $danhMuc): ?>
            <div class="product">
                <img src=<?php echo $danhMuc['img_url']; ?> class="img-product"/>
                <div class="name">
                    <a href="##"><?php echo $danhMuc['name']; ?></a>
                </div>
                <div class="price">
                    <p class="old-price"><?php echo $danhMuc['old_price']; ?></p>
                    <p class="new-price"><?php echo $danhMuc['new_price']; ?></p>
                </div>
                <div class="btn-buy">
                    <a href="##">Mua ngay</a>
                </div>
            </div>
        <?php endforeach; ?> -->
            <!-- <div class="product">
                <img src="https://kyo.vn/wp-content/uploads/2024/05/Son-Dior-Rouge-Dior-Satin-Lipstick-818-Be-Loved-1-1.png" class="img-product"/>
                <div class="name">
                    <a href="##">Son Dior Rouge Dior Satin Lipstick 818 Be Loved – Màu Đỏ Rượu</a>
                </div>
                <div class="price">
                    <p class="old-price">1.480.000 ₫</p>
                    <p class="new-price">990.000 ₫</p>
                </div>
                <div class="btn-buy">
                    <a href="##">Mua ngay</a>
                </div>
            </div> -->
            
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script>
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
    </script>
</body>
</html>