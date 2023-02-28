<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../public/css/Home.css">

</head>
<body>
    
      
      <header>
 
        <div class="logo">
          <img src="../../public/img/img_LandingGr12.png" alt="" class="header-logo">
        </div>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>

        <nav class="navbar">
            <a href="./Home.php">HOME</a>
            <a href="#features">ABOUT US</a>
            <a href="../controllers/logout.php">
              <button type="button" class="btn-logout">Đăng xuất</button>
            </a>
        </nav>
    </header>
  <div class="main">
    <div class="decoration">
        <h3>HCMUS PORTAL</h3>
        <div class="title">
          <p>Một website đăng ký học phần tiện lợi của trường đại học, </p>
          <p>với những tính năng đặc biệt và hữu ích dành cho sinh viên.</p>
        </div> 
        
    </div>
    <div class="image">
        <img src="../../public/img/BG_Book_Landing.png" alt="">
    </div>
  </div>
    
   <div class="footer">
     <form method="post">
      <a href="./ProfilePage.php">
        <div class="Profile">
           <img src="../../public/img/img_Landing1.png" alt="" >
          <div class="text">
            <p>THÔNG TIN </p>
            <p>CÁ NHÂN</p>
          </div>
        </div>
      </a>
       
      <a href="#">
        <div class="Profile">
           <img src="../../public/img/img_Landing2.png" alt="" >
          <div class="text">
            <p>DANH SÁCH</p>
            <p>LỚP MỞ</p>
          </div>
        </div>
      </a>
       
      <a href="./Register.php">
        <div class="Profile">
          <img src="../../public/img/img_Landing3.png" alt="" >
         <div class="text">
           <p>ĐĂNG KÝ</p>
           <p>HỌC PHẦN</p>
         </div>
       </div>
      </a>
       
       <a href="#">
        <div class="Profile">
          <img src="../../public/img/img_Landing4.png" alt="" >
         <div class="text">
           <p>TRAO ĐỔI</p>
           <p>HỌC PHẦN</p>
         </div>
       </div>
       </a>

      </form>
   </div>

<!-- header section starts  -->



<!-- header section ends -->

<!-- home section starts  -->


</body>
</html>