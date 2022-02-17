<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("picture_chayut/3.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
}
.fa-facebook {
  color: white;
}
.fa-linkedin{
  color: pink;
}
</style>
</head>
<body>
<div class="bg-image"></div>
<div class="container">
<div class="bg-text">
  <h2 style="text-align: center;">ประวัติส่วนตัว</h2>
  <div style="text-align: left"class="float-left">
  <img style="border: 5px solid #555;" src="picture_chayut/1.jpg" alt="">
</div>
<div class="float-left" style="margin-left:10px">
<p>ชื่อ: นาย ชยุต ชะนวน (เด่น)</p>
<p>เพื่อนสนิท: เท่ง/อ้วน/เซฟ</p>
<p>งานอดิเรก: วาดรูป</p>
<p>อาหารที่ชอบ: ข้าว/ไก่ทอด/ผัดกระเพรา</p>
<p>ศึกษาอยู่ที่: วิทยาลัยเทคนิคชลบุรี</p>
<p>เคยศึกษาที่: โรงเรียนบ้านคลองปริง/โรงเรียนบ่อทองวงศ์จันทร์วิทยา</p>
<div> 
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a> 
</div>
</div>
<div>
  <div>
  <img style="width:20%" src="picture_chayut/5.gif" alt="">
  <img style="width:20%" src="picture_chayut/6.gif" alt="">
</div>
</div>
</div>
</div>
</body>
</html>

