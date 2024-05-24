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
    /* * {
      box-sizing: border-box
    } */

    .mySlides {
      display: none
    }

    img {
      vertical-align: middle;
      width: 100%;
      height: 600px;
    }

    .slideshow-container {
      position: relative;
      margin-top: 15px
    }

    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    .dot {
      cursor: pointer;
      height: 0px;
      width: 0px;
      /* margin: 0 2px; */
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }

    .fade {
      animation-name: fade;
      animation-duration: 0.5s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }
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

<body id="hg_container" style="background-color: white;">
  <?php include 'header.php'; ?>
  <?php include 'cart.php'; ?>
  <div class="slideshow-container">
    <!-- Slide 1 -->
    <div class="mySlides fade">
      <!-- <div class="numbertext">1 / 2</div> -->
      <img src="https://kyo.vn/wp-content/uploads/2018/04/sonxinh-banner-1.jpg" style="width:100%">
    </div>

    <!-- Slide 2 -->
    <div class="mySlides fade">
      <!-- <div class="numbertext">2 / 2</div> -->
      <img src="https://kyo.vn/wp-content/uploads/2018/04/sonxinh-banner-2.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>

  <br>

  <!-- Dots for slide indication -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
  </div>

  <?php include 'footer.php'; ?>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }

    function autoSlides() {
      plusSlides(1);
      setTimeout(autoSlides, 5000);
    }

    autoSlides();

  </script>
  <script src='index.js'></script>
</body>

</html>