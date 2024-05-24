var currentCategory = '';
var currentDetailType = '';

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

var search_popup = document.getElementById('search-popup');
var search_overlay = document.getElementById('search-overlay');
var search_openPopupButton = document.getElementById('search-openPopup');

search_openPopupButton.addEventListener('click', function() {
    search_popup.style.display = 'flex';
    search_overlay.style.display = 'block';
    // hgContainer.style.overflow = 'hidden';
    // queryCartData()
});

// Đóng popup khi nhấn ra ngoài popup
overlay.addEventListener('click', function() {
    popup.style.display = 'none';
    overlay.style.display = 'none';
    hgContainer.style.overflow = 'auto';
});

function queryAllData() {
    setTimeout(function _(){
        console.log('???');
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "query.php", true);
        xhttp.send();
        }
    , 1000)    
    // window.location.href = "http://localhost/webTMDT/src/page/mainPage/index.php";
}

function queryData(category) {
    setTimeout(function _(){
        console.log('???');
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
    , 1000)    
    window.location.href = "http://localhost/webTMDT/src/page/mainPage/index.php";
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

function addProduct(product_id) {
    console.log("?????");
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "query_cart.php?product_id=" + product_id, true);
    xhttp.send();
    setTimeout(function(){
        popup.style.display = 'flex';
        overlay.style.display = 'block';
        hgContainer.style.overflow = 'hidden';
    }, 500)
    queryCartData()
}

function deleteProduct(product_id) {
    console.log("?????");
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "query_cart.php?delete_product=" + product_id, true);
    xhttp.send();
    popup.style.display = 'none';
    overlay.style.display = 'none';
    hgContainer.style.overflow = 'auto';
    window.location.reload()
    queryCartData()
}

function getTotalPrice(style) {
    console.log("total_price");
    var price = 'test';
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var elements = document.getElementsByClassName("total_price")
            for (var i = 0; i < elements.length; i++) {
                elements[i].innerHTML = this.responseText;
            }
        }
    };
    xhttp.open("GET", "query_cart.php?total_price=" + price + "$style=" + style, true);
    xhttp.send();
}

function toPaymentForm() {
    window.location.href = 'http://localhost/webTMDT/src/page/mainPage/payment_form.php'
}

function addQuantity(product_id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Add quantity successfully");
        }
    };
    xhttp.open("GET", "query_cart.php?add_quantity=" + product_id, true);
    xhttp.send();
    window.location.reload()
}

function minusQuantity(product_id){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Add quantity successfully");
        }
    };
    xhttp.open("GET", "query_cart.php?minus_quantity=" + product_id, true);
    xhttp.send();
    window.location.reload()
}

function generateRandomString(length) {
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    var result = '';
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

function orderProduct(){
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address-payment').value;
    var note = document.getElementById('note').value;
    // if(name == '' || phone == '' || email == '' || address == ''){
    //     alert("Vui lòng điền đầy đủ thông tin")
    //     return;
    // }
    var product_list_order_id = generateRandomString(6);
    localStorage.setItem('product_list_order_id', product_list_order_id)
    // var xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //         console.log("Add order successfully");
    //     }
    // };
    // xhttp.open("GET", "query.php?order=" + 'order' + '&name=' + name + '&phone=' + phone + '&email=' + email + '&address=' + address + '&note=' + note + '&product_list_order_id=' + product_list_order_id, true);
    // xhttp.send();
    window.location.href = "http://localhost/webTMDT/src/page/mainPage/orderSuccess.php"
}