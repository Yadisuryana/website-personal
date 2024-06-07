
<!DOCTYPE html>








    

<!DOCTYPE html>
<html>
<head>
    <title>Laman Menu</title>
   
    <style>
        body {
            background-color: ;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
      overflow-y: auto;

        }

        
    </style>
</head>

<body>

</body>
</html>













<html>
<head>
  <title>Rolex Watch Website</title>
  <style>
    .body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background-color: #111;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow-x: hidden;
      overflow-y: auto;
}
    

   .container {
      
      position: relative;
      width: 100%; /* adjust the width to your liking */
      
      position: relative;
  width: 100%; /* adjust the width to your liking */
  
  margin: 0 auto;
  text-align: center;
  color: white;
  font-family: "golo", "Times New Roman", serif;
  padding: 10px; /* adjust the padding to your liking */
  box-sizing: border-box; /* include padding in the total width */
  
      
    }
    .border {
      
      text-align: center;
      text-decoration: none;
      color: inherit;
     
    
   

}




.no-underline {
  text-decoration: none;
  text-align: center;
  color: inherit;
  border-radius: 40px;
      position: relative;
      background-color: rgba(128, 128, 128, 0.4); /* Ubah background menjadi agak transparan */
      width: 200%;
      height: 100px; /* Tambahkan properti ini untuk menambah tinggi */
      margin: 0 auto;
      display: flex; width: 80px;
  height: 50px;
      
    
      
}


    h5 {
      font-size: 1.2em;
      letter-spacing: px;
      margin-bottom: 0px;
      text-transform: uppercase;
      position: relative; 
      
    }

    h2 {
      font-size: 4em;
      font-weight: bold;
      letter-spacing: 0px;
      margin-bottom: 0px;
    }

    .header {
  background-color: gray;
  padding: 15px;
  text-align: center;
  font-size: 1.2em;
  height: 80px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: top 0.5s; /* Add this to make the header slide in and out smoothly */
  top: -80px; /* Hide the header initially */
  width: 100%; /* Make the header full width */

  
}



.logo-container {
  margin: 0 auto;
}

.logo {
  width: 50px;
  height: 50px;
  margin: 0 auto;
}



   .video-background {
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      height: 100vh;
      object-fit: cover;
      z-index: -1;
      filter: brightness(0.9);
      
    }
  
  </style>


</head>
<body>
<header class="header">
  <div class="logo-container">
    <img src="logo.png" alt="Logo" class="logo">
  </div>
  </header>
  <br><br>
  <div class="container">
    <h5>Koleksi</h5>
    <h2> ROLEX</h2>
   
    <div class="border">
      <p></p>
    <p><a href="mainhome.php" class="no-underline">Lebih Lanjut ></a></p></div></div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    
    <div class="container">
    <h5>Laman Admin</h5>
    <h2>Login</h2>
   
    <div class="border">
      <p></p>
    <p><a href="login.php" class="no-underline">Lebih Lanjut ></a></p></div></div>
    
    <div class="video-background">
      <video src="Rolex Cosmograph Daytona.mp4" autoplay loop muted id="video-1"></video>
      
      
     
      <video src="rolex_video_5.mp4" autoplay loop muted id="video-5"></video>
    </div>
   
    <script>
   const header = document.querySelector('.header');
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  if (scrollTop <script lastScrollTop) { // Scrolling up
    header.classList.add('scrolled');
  } else { // Scrolling down
    header.classList.remove('scrolled');
  }
  lastScrollTop = scrollTop;
});</script>
  

  
    </body>









