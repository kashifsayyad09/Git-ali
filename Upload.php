<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Upload.css">
</head>
<body>
<nav class="navbar">
      <div class="logo">
        <img src="kashif.jpg">
        <div class="container">
        </div>
        
            <ul class="nav-links">
                <li><a href="head.html">Home</a></li>
                <li><a href="Upload.php">Media</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="https://www.paypal.com/in/home">Payment</a></li>
            </ul>
            <div class="search-box">
                <input type="search" id="search-input" placeholder="Search The World....">
                <button id="search-btn">Search</button>
            </div>
        </div>
        <div class="logout"><a href="login.php">Logout</a></div>
    </nav>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <br/><br />
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    include('dbconnection.php');
    if(isset($_POST['submit'])){
        $file = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = 'Images/';
        $file_path = $folder . $file; 
        $query = mysqli_query($con,"Insert into images (file) values ('$file')");
        if(move_uploaded_file($tempname, $file_path)){
            echo "<h2>File upload successfully</h2>";
        } else{
            echo "<h2>File not uploaded successfully</h2>";
        }    
       
    }
    
    ?>
    <div>
        <?php
          $res = mysqli_query($con,"select * from images");
          while($row = mysqli_fetch_assoc($res)){
        ?>
        <img src="Images/<?php echo $row['file'] ?>"/>
        <?php }?>
    </div>
    <div class="gallery">
           
    <div class="gallery-item">
        <img src="pexels-wisdomsky-1673973.jpg" alt="Image 28" usemap="#image-map28">
        <map name="image-map28">
          <area shape="rect" coords="200,100,400,300" href="image28.html" alt="Link to example website">
          <area shape="circle" coords="500,250,50" href="image28.html" alt="Link to Google">
        </map>
      </div>
      <div class="gallery-item">
        <img src="pexels-rompalliharish-1698618.jpg" alt="Image 29" usemap="#image-map29">
<map name="image-map29">
  <area shape="rect" coords="200,100,400,300" href="image29.html" alt="Link to example website">
  <area shape="circle" coords="500,250,50" href="image29.html" alt="Link to Google">
</map>
      </div>
      <div class="gallery-item">
        <img src="pexels-pixabay-50594.jpg" alt="Image 3" usemap="#image-map3">
<map name="image-map3">
  <area shape="rect" coords="200,100,400,300" href="image3.html" alt="Link to example website">
  <area shape="circle" coords="500,250,50" href="image3.html" alt="Link to Google">
</map>
      </div>
      <div class="gallery-item">
        <img src="pexels-francesco-ungaro-1525041.jpg" alt="Image 4" usemap="#image-map4">
<map name="image-map4">
  <area shape="rect" coords="150,50,350,200" href="image4.html" alt="Link to example website">
  <area shape="circle" coords="550,250,50" href="image4.html" alt="Link to Google">
</map>
      </div>
      <div class="gallery-item">
        <img src="pexels-pixabay-459203.jpg" alt="Image 5" usemap="#image-map5">
<map name="image-map5">
  <area shape="rect" coords="68,46,792,680" href="image5.html" alt="Link to Google">
  <area shape="rect" coords="10,138,623,680" href="image5.html" alt="Link to example website">
  <area shape="rect" coords="281,34,930,480" href="image5.html" alt="Link to Google">
  <area shape="rect" coords="383,0,749,296" href="image5.html" alt="Link to example website">
</map>
      </div>
      <div class="gallery-item">
        <img src="pexels-iriser-1366957.jpg" alt="Image 6" usemap="#image-map6">
        <map name="image-map6">
          <area shape="rect" coords="68,46,792,680" href="image6.html" alt="Link to Google">
          <area shape="rect" coords="10,138,623,680" href="image6.html" alt="Link to example website">
          <area shape="rect" coords="281,34,930,480" href="image6.html" alt="Link to Google">
          <area shape="rect" coords="383,0,749,296" href="image6.html" alt="Link to example website">
        </map>
      </div>
      <div class="gallery-item">
        <img src="pexels-pixabay-161153.jpg" alt="Image 7" usemap="#image-map7">
<map name="image-map7">
  <area shape="rect" coords="200,100,400,300" href="image7.html" alt="Link to Google">
  <area shape="rect" coords="500,200,700,400" href="image7.html" alt="Link to example website">
  <area shape="rect" coords="300,50,600,250" href="image7.html" alt="Link to Google">
  <area shape="rect" coords="100,150,300,350" href="image7.html" alt="Link to example website">
</map>
      </div>
      <div class="gallery-item">
        <img src="pexels-8moments-1183099.jpg" alt="Image 28" usemap="#image-map8">
        <map name="image-map8">
          <area shape="rect" coords="150,50,350,250" href="image8.html" alt="Link to Google">
          <area shape="rect" coords="350,150,550,350" href="image8.html" alt="Link to example website">
          <area shape="rect" coords="100,200,300,400" href="image8.html" alt="Link to Google">
          <area shape="rect" coords="450,250,650,450" href="image8.html" alt="Link to example website">
        </map>
      </div>
      <div class="gallery-item">
        <img src="pexels-eberhardgross-691668.jpg" alt="Image 9" usemap="#image-map9">
        <map name="image-map9">
          <area shape="rect" coords="150,50,350,250" href="image9.html" alt="Link to Google">
          <area shape="rect" coords="350,150,550,350" href="image9.html" alt="Link to example website">
          <area shape="rect" coords="100,200,300,400" href="image9.html" alt="Link to Google">
          <area shape="rect" coords="450,250,650,450" href="image9.html" alt="Link to example website">
        </map>
      </div>
           
  </div>

    <footer class="footer"></footer>
            <div class="footer-content">
              <p>&copy; 2024 AK Photo Stock. All rights reserved.</p>
              <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="Contact.html">Contact Us</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="Privacy.html">Privacy Policy</a></li>
              </ul>
            </div>
          </footer>
    <script src="hed.js"></script>
</body>
</html>