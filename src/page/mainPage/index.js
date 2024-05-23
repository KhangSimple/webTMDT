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
    popup.style.display = 'flex';
    overlay.style.display = 'block';
    hgContainer.style.overflow = 'hidden';
    queryCartData()
}

function toPaymentForm() {
    window.location.href = 'http://localhost/webTMDT/src/page/mainPage/payment_form.php'
}