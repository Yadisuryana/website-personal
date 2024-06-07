<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K.J. Rees</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
        }
        .header {
            background-color: gray;
            color: white;
            display: flex;
            align-items: center;
            padding: 20px 20px;
            justify-content: space-between;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100; /* Ensure it stays on top of other elements */
        }
        .logo {
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-right: 20px; /* Add margin to create space between logo and nav */
        }
        .logo img {
            height: 50px;
            margin-bottom: 10px;
            text-align: center;
        }
        .logo-text {
            font-size: 16px;
            text-align: center;
        }
        .logo-subtext {
            font-size: 12px;
        }
        .nav {
            display: flex;
            gap: 15px; /* Reduce gap between nav items */
            align-items: center;
            margin-right: auto; /* Align nav to the left */
        }
        .nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            position: relative;
            transition: color 0.3s;
            font-size: 14px; /* Reduce font size */
        }
        .nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: white;
            transition: width 0.3s, left 0.3s;
        }
        .nav a:hover::after {
            width: 100%;
            left: 0;
        }
        .nav a:hover {
            color: #ddd;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            opacity: 0;
            transition: opacity 0.5s;
            border-radius: 5px;
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-radius: 5px;
        }
        .dropdown-content a:hover {
            background-color: #444;
        }
        .dropdown:hover .dropdown-content {
            display: block;
            opacity: 1;
        }
        .dropdown:hover .dropbtn {
            color: #ddd;
        }
        .social-media {
            display: flex;
            gap: 35px;
            padding: 20px 40px;
        }
        .social-media a img {
            width: 24px;
            height: 24px;
            transition: transform 0.3s;
        }
        .social-media a img:hover {
            transform: scale(1.2);
        }
        .gallery {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }
        .gallery img {
            width: 30%;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
        .elemen {
            position: relative;
            transform: translateY(50px);
            opacity: 0;
            transition: all 0.7s ease;
        }
        .tampil {
            position: relative;
            transform: translateY(0px);
            opacity: 1;
        }
        .arrow-container {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            animation: bounce 2s infinite;
        }
        .arrow {
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 15px solid black;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
    </style>
    <script>
        window.addEventListener("scroll", function() {
            var arrow = document.querySelector('.arrow-container');
            if (window.scrollY > 50) {
                arrow.style.display = 'none';
            } else {
                arrow.style.display = 'block';
            }
            muncul();
        });
        
        function muncul(){
            let elements = document.querySelectorAll(".elemen");
            for (let i = 0; i < elements.length; i++){
                let tinggiLayar = window.innerHeight;
                let jarakAtasElemen = elements[i].getBoundingClientRect().top;
                let ukuranScroll = 150;
                if (jarakAtasElemen < tinggiLayar - ukuranScroll){
                    elements[i].classList.add("tampil");
                } else {
                    elements[i].classList.remove("tampil");
                }
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <div class="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#gallery">Gallery</a>
            <a href="home.php">Main Home</a>
            <div class="dropdown">
                <a href="#projects" class="dropbtn">Projects &#9662;</a>
                <div class="dropdown-content">
                    <a href="#project1">Submarinner</a>
                    <a href="#project2">Daytona</a>
                    <a href="#project3">Datejust</a>
                </div>
            </div>
            <a href="#contact">Contact</a>
            <a href="login.php">Login</a>
            <div class="logo">
                <img src="logo.png" alt="K.J. Rees Logo">
                <div class="logo-text"></div>
                <div class="logo-subtext"></div>
            </div>
        </div>
        <div class="social-media">
            <a href="#footer"><img src="facebook-app-symbol.png" alt="Facebook"></a>
            <a href="#footer"><img src="instagram.png" alt="Instagram"></a>
            <a href="#footer"><img src="linkedin.png" alt="LinkedIn"></a>
            <a href="#footer"><img src="twitter.png" alt="Twitter"></a>
        </div>
    </div>
    <div class="arrow-container">
        <div class="arrow"></div>
    </div>
    <br><br><br><br><br><br><br>
    <center>
        <div class="home">
            <a id="home"></a>
            <h1>Welcome to Rolex Official Website</h1>
        </div>
    </center>
    <div class="gallery elemen">
        <img src="image-1.jpg" alt="Photo 1">
        <img src="image-2.jpg" alt="Photo 2">
        <img src="image-3.jpg" alt="Photo 3">
    </div>
</body>
</html>




<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery Page</title>
    <style>
        /* Add CSS styles for the gallery */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .font1{
            background-color: gray;
            color:white;
            text-indent: 0; /* Removes default indent */
            padding: 20px 40px;
        }

        
        .gallery-item {
            margin: 10px;
            width: 250px;
            height: 250px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .gallery-item figcaption {
            padding: 10px;
            font-size: 16px;
            color: #333;
        }
        .card{
            margin: 10px;
            max-width: 450px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
        }
        .card-img{
          padding:10px;
        }
        .card-body{
          color:black;
          
        }

        .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50; /* Green */
        color: white;
        border: none;
        cursor: pointer;
        text-decoration: none;
        border-radius: 5px;
        }

.btn:hover {
  background-color: #3e8e41; /* Darker green on hover */
}

        .p1{
            font-size: 18px;
            background-color: white;
            text-indent: 0; /* Removes default indent */
            padding: 20px 40px;
        }
        
        .elemen{
            position: relative;
            transform: translateY(50px);
            opacity: 0;
            transition: all 0.7s ease;
        }

        .tampil {
            position: relative;
            transform: translateY(0px);
            opacity: 1;
        }
        
        .popup {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        
    }

    .popup-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
        animation: fadeIn 0.5s; /* Animasi fade in */
        border-radius: 10px;
    }
    .popup-image {
        width: 50%; /* Adjust width as needed */
        height: auto; /* Maintain aspect ratio */
        margin-bottom: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    .popup-text-button {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #popup-text {
        flex: 1;
        margin-right: 10px;
    }

    .popup-button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .popup-button:hover {
        background-color: #45a049;
    }


    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    
    </style>
     <script>
        window.addEventListener("scroll", muncul);
        function muncul(){
            let elements = document.querySelectorAll(".elemen");
            for (let i=0; i < elements.length; i++){
                let tinggiLayar= window.innerHeight;
                let jarakAtasElemen = elements[i].getBoundingClientRect().top;
                let ukuranScroll = 150;
                if (jarakAtasElemen < tinggiLayar - ukuranScroll){
                    elements[i].classList.add("tampil");
                }
                else{
                    elements[i].classList.remove("tampil");
                }
            }
        }
        function showPopup(productName, productImage) {
        var popup = document.getElementById("popup");
        var popupText = document.getElementById("popup-text");
        var popupImage = document.getElementById("popup-image");
        popupText.innerText = "Are you sure you want to buy " + productName + "?";
        popupImage.src = productImage;
        popup.style.display = "block";
    }

    function hidePopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "none";
    }
    function featureNotAvailable() {
        alert("Feature not available yet.");
    }

    // Hide the popup when clicking outside of it
    window.onclick = function(event) {
        var popup = document.getElementById("popup");
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }

        
        </script>
      
        
</head>
<body><section>
    <br><br><br><br><br>
    <div class="font1 ">
        <div class="elemen">
    <p id="about"></p><br><br><br><br><br>
    <p style="font-size: 48px;" >Rolex SA<br><b>Wanna See Our Profile?</b></p>
    <div class="elemen">
    <p style="font-size: 18px;">Beyond just a timepiece, Rolex SA embodies a legacy of prestige and luxury. Embark on a timeless journey with Rolex and experience its unparalleled excellence.</p></div>
    <div class="elemen">
    <a href="profil.php" class="btn">Visit Rolex History</a></div>
    </div></div>
    <div class="p1 elemen"><br><br><br>
    <p id="gallery"></p><br><br><br><br><br>
    <h1>Our Timeless Collection</h1>
</div>
    
    <div class="gallery elemen">
    
        <?php
        $i = 1;
        $rows = mysqli_query($koneksi, "select * from tb_update ORDER BY id desc");
        foreach ($rows as $row) :?>
        <div class="card">
          <div class="card-img">
            <img src="img/<?php echo $row['image'];?>" alt="<?php echo $row['name'];?>">
          </div>
            <div class="card-body">
                <h2><?php echo $row['name'];?></h2>
                <p><?php echo $row['description'];?></p>
                
                <button class="button" onclick="showPopup('<?php echo $row['name']; ?>', 'img/<?php echo $row['image']; ?>')">Buy</button>
            </div>
        </div>
        <?php endforeach;?>
        <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="hidePopup()">&times;</span>
        <img id="popup-image" src="" alt="Product Image" class="popup-image">
        <div class="popup-text-button">
            <p id="popup-text"></p>
            <button class="popup-button" onclick="featureNotAvailable()">Proceed</button>
        </div>
    </div>
</div>


</div>

    <div class="gallery elemen">
        <img src="image-4.jpg" height 300 alt="1">
        <img src="image-5.jpg" height 300 alt="2">
        <img src="image-6.jpg" height 300 alt="3"></section>
</body>
</html>
<html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .font2 {
            position: relative;
            color: white;
            text-indent: 0; /* Removes default indent */
            padding: 60px 100px;
            width: 100%;
            font-family: sans-serif;
            overflow: hidden; /* Ensure pseudo-element doesn't affect layout */
        }
        
        .font2::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: darkslateblue;
            filter: brightness(0.3);
            z-index: -1; /* Ensure it is behind the text */
        }

        .btn2 {
            display: inline-block;
            padding: 10px 20px;
            background-color: white; /* Green */
            color: darkslateblue;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 2px;
           
        }
    </style>
</head>
<body>
    <div class="font2">
        <div class="elemen">
        <p id="about"></p>
        <br><br><br><br><br>
        <p style="font-size: 48px;">Amaze your eyes<br><b>THE ONLY WATCH YOU'LL EVER NEED</b></p>
        <a class="btn2">Rolex Varian</a>
        <br><br><br>
    </div></div>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex Daytona Chronograph Watch</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
            background-image: url('bckkk.jpg');
            background-attachment: fixed;
            width: 100%;
           
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }

        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        .watch-profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 700px;
        }

        .watch-profile .watch-image {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 5px;
        }

        .watch-profile .details {
            margin-top: 20px;
            text-align: left;
            width: 100%;
        }

        .watch-profile .details h2 {
            color: #333;
        }

        .watch-profile .details p,
        .watch-profile .details ul {
            line-height: 1.6;
            color: #333;
        }

        .watch-profile .details ul {
            padding-left: 20px;
        }

        .watch-profile .details ul li {
            list-style-type: disc;
        }

        .video-section {
            text-align: center;
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .back-button {
    background-color: #4CAF50; /* Green */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none; /* Remove underline */
  }
  
  .back-button:hover {
    background-color: #3e8e41; /* Darker green on hover */
  }




        .video-section button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .video-section video {
            width: 100%;
            max-width: 700px;
            display: none;
        }
    </style>
</head>
<body><div class="body " id="projects">
    <div class="container elemen">
        <header><br><br><br><br><br><br>
            <h1>Rolex Daytona Chronograph Watch</h1>
        </header>
        <section class="watch-profile elemen">
            <img src="Rolex-Daytona-Platinum-Diamond-Baguette-116576-TBR-(5) (1).jpg" alt="Rolex Daytona Chronograph Watch" class="watch-image">
            <div class="details elemen">
                <h2>Detail dan Deskripsi</h2>
                <p>
                    Rolex Daytona, diluncurkan pada tahun 1963, dirancang untuk memenuhi kebutuhan profesional balap mobil. Ini adalah ikon abadi yang diciptakan untuk ketepatan waktu dan ketangguhan di arena balap.
                </p>
                <h2>Keunikan</h2>
                <ul>
                    <li>Desain elegan dan fungsional untuk penggemar balap.</li>
                    <li>Dilengkapi dengan kaliber 4130, sebuah mekanisme kronograf mekanis yang diciptakan oleh Rolex.</li>
                    <li>Kotak Oyster yang tahan air hingga 100 meter.</li>
                    <li>Bezel tachymetric untuk mengukur kecepatan rata-rata hingga 400 unit per jam.</li>
                </ul>
                <h2>Harga</h2>
                <p>
                    Harga: $13,150
                </p>
            </div>
        </section>
        <section class="video-section elemen">
            <button id="videoButton" onclick="toggleVideo()">Lihat Video</button>
            <video id="daytonaVideo" controls>
                <source src="Rolex Cosmograph Daytona.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section> <br><br><br><br>
        
    </div>

    <script>
        function toggleVideo() {
            var video = document.getElementById('daytonaVideo');
            var button = document.getElementById('videoButton');
            if (video.style.display === 'none') {
                video.style.display = 'block';
                video.play();
                button.textContent = 'Tutup Video';
            } else {
                video.pause();
                video.style.display = 'none';
                button.textContent = 'Lihat Video';
            }
        }
    </script></div>
</body>
</html>




<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunshine Bay Residence</title>
    <style>
        
        
        .container1 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
           
            background-color: #fff;
            
            border-radius: 10px;
            overflow: hidden;
        }
        .content1 {
            padding: 20px 40px;
            max-width: 700px;
        }
        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .description {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 40px;
        }
       
        .image {
            max-width: 600px;
            height: auto;
            width: auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
            content: "→";
        }



    </style>
</head>
<body>
    <div class="container1 " id="project1">
        <div class="content1 elemen">
            <h1 class="title">Submarinner: The Determined Sea Explorer</h1>
            <p class="description">Lahir di tahun 1953, Submariner menjelma menjadi jam tangan selam ikonik. Didesain untuk para penjelajah laut dan pecinta petualangan, Submariner terkenal dengan ketahanan dan kinerjanya yang luar biasa. Bezel berputar unidirectional, dial yang mudah dibaca, dan konstruksi tahan air yang kokoh menjadikannya sahabat setia para penyelam di kedalaman samudra.</p>
            
        </div>
        <img src="submarinner.jpg" alt="Sunshine Bay Residence" class="image">
    </div>
    <div class="container1 " id="project2">
        <img src="daytona.jpg" alt="Sunshine Bay Residence" class="image">
        <div class="content1 elemen">
        <h1 class="title">Daytona: The legend on the race track</h1>
            <p class="description">Di arena balap yang penuh adrenalin, Daytona menjelma sebagai simbol prestise dan performa tinggi. Dikenal sebagai jam tangan pilihan para pembalap dan pecinta motorsport, Daytona lahir di tahun 1963 dengan desain sporty yang memukau. Bezel tachymeter, dial chronograph yang kompleks, dan tombol chronograph yang mudah diakses menjadikannya alat bantu penting bagi para pembalap untuk mengukur waktu dan strategi.</p></div>
    </div>
    <div class="container1 " id="project3">
        <div class="content1 elemen">
            <h1 class="title">Datejust: A symbol of timeless elegance</h1>
            <p class="description">Sejak debutnya di tahun 1945, Datejust telah memikat hati para pecinta jam tangan dengan desainnya yang klasik dan elegan. Kesederhanaan dan keanggunan Datejust membuatnya cocok untuk pria dan wanita, serta berbagai acara, dari formal hingga kasual. Datejust bukan hanya jam tangan, tetapi juga simbol kemewahan dan keanggunan yang tak lekang oleh waktu.</p>
            
        </div>
        <img src="datejust.jpg" alt="Sunshine Bay Residence" class="image">
    </div>
    <div class="container1 " id="project3">
        <div class="content1 elemen">
        <main>
            <h1>Contact Us - Rolex</h1>
                <form  id="contact">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </main>
            
        </div>
        <img src="bckk.jpg" alt="Sunshine Bay Residence" class="image">
    </div>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Form validation
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var subject = document.getElementById('subject').value.trim();
            var message = document.getElementById('message').value.trim();

            if (!name || !email || !subject || !message) {
                alert('Please fill in all fields.');
                return;
            }

            if (!validateEmail(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Display success message
            alert('Thank you for contacting us, ' + name + '. We will get back to you shortly.');
            document.getElementById('contactForm').reset();
        });

        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }
    </script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        .body4 {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('bckkk.jpg');
            background-attachment: fixed;
            color: #fff;
            width: 100%;
        }
        .footer {
            
            padding: 10px 20px;
            text-align: center;
            position: auto;
        }
        .footer img {
            width: 30px;
            margin-bottom: 10px;
        }
        .footer h1 {
            margin: 0;
            font-size: 1.5em;
            font-family: sans-serif;
        }
        .footer p {
            margin: 5px 0;
            font-size: 0.9em;
            font-family: "timesnewroman";
        }
        .social-icons {
            margin: 20px 0;
            
        }
        .social-icons a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
            font-size: 1.5em;
        }
        .credit {
            background-color: gray;
            padding: 10px 0;
            font-size: 0.8em;
        }
        .credit a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <div class="body4 elemen">
    <footer class="footer">
        <div class="logo elemen">
            <br><br><br>
            <img src="logo.png" alt="Logo">
            <h1>ROLEX</h1>
            <p>A Crown for Every Achievement</p>
        </div>
        <hr>
        <div class="social-icons " id="footer">
            <img src="twitter.png"><i class="fab fa-twitter"></i>
            <img src="facebook-app-symbol.png"><i class="fab fa-facebook"></i></=>
            <img src="instagram.png"><i class="fab fa-instagram"></i></img>
            <img src="linkedin.png"><i class="fab fa-linkedin"></i></=>
        </div>
        <div class="logo-elemen">
            <p>&copy;Copyright By Rolex</p></div>
        <br><br>
    </footer>
    
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
