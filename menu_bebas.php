<html>
<head>
    <title>Laman Menu</title>
   
    <style>
        body {
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
      overflow-y: auto;

        }

        .menu-bar {
            background-color: teal;
            color: white;
            padding: 15px;
            cursor: pointer;
            font-size: 18px;
            text-align: left;
            position: fixed;
            top: 0;
            left: 0;
            width: 2%;
            z-index: 1000;
            border-radius: 8px; /* Tambahkan properti ini untuk memperhalus pinggiran sudut */
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: #111;
            padding-top: 60px;
            transition: 0.7s;
            z-index: 999;
            font-family: "Garamond", "Times New Roman", serif;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            backg
            round-color: #575757;
        }

        .header {
  background-color: teal;
  padding: 15px;
  text-align: center;
  font-size: 1.2em;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.logo-container {
  margin: 0 auto;
}

.logo {
  width: 50px;
  height: 50px;
  margin: 0 auto;
}


    </style>
</head>
<body>


<header class="header">
  <div class="logo-container">
    <img src="logo.png" alt="Logo" class="logo">
  </div>
  </header>




    <div class="menu-bar" onclick="toggleSidebar()">☰</div>
   
<div id="sidebar" class="sidebar">
  <ul>
    <li><a href="home.php" target="kanan">Home</a></li>
    <li><a href="produk.php" target="kanan">Produk</a></li>
    <li><a href="profil.php" target="kanan">Profil Perusahaan</a></li>
    <li><a href="menu_bebas.php" target="kanan">Menu Bebas</a></li>
    <li><a href="login.php" target="kanan">Login</a></li>
  </ul>
</div>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            if (sidebar.style.left === '-250px') {
                sidebar.style.left = '0';
            } else {
                sidebar.style.left = '-250px';
            }
        }
    </script>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex Daytona Chronograph Watch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
            border-radius: 5px;
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
<body>
    <div class="container">
        <header>
            <h1>Rolex Daytona Chronograph Watch</h1>
        </header>
        <section class="watch-profile">
            <img src="Rolex-Daytona-Platinum-Diamond-Baguette-116576-TBR-(5) (1).jpg" alt="Rolex Daytona Chronograph Watch" class="watch-image">
            <div class="details">
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
        <section class="video-section">
            <button id="videoButton" onclick="toggleVideo()">Lihat Video</button>
            <video id="daytonaVideo" controls>
                <source src="Rolex Cosmograph Daytona.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section> <center><a href="index.php" class="back-button">Home</a></center>
        
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
    </script>
</body>
</html>
