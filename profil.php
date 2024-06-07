
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
    <title>Profil Perusahaan Rolex</title>
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
        }

        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77a6f7 3px solid;
        }

        header .logo {
            float: left;
            margin-left: 10px;
            margin-top: -10px;
        }

        header h1 {
            text-align: center;
            margin: 0;
            font-size: 24px;
        }

        .profile {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .profile h2 {
            text-align: center;
            color: #333;
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


        .profile .building {
            display: block;
            margin: 20px auto;
            width: 100%;
            max-width: 600px;
            height: auto;
        }

        .profile p {
            text-align: justify;
            line-height: 1.6;
            color: #333;
        }

        audio {
            display: block;
            margin: 20px auto;
            width: 100%;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="rolex.jpg" alt="Rolex Logo" class="logo">
            <h1>Rolex</h1>
        </header>
        <section class="profile">
            <h2>Profil Perusahaan</h2>
            <img src="933728.jpg" alt="Rolex Building" class="building">
            <p>
                <strong>Rolex SA</strong> adalah perusahaan pembuat jam tangan mewah Swiss yang didirikan pada tahun 1905 oleh <strong>Hans Wilsdorf</strong> dan <strong>Alfred Davis</strong> di London, Inggris. Rolex dikenal di seluruh dunia karena kualitas, presisi, dan desainnya yang mewah. Sejak pendiriannya, Rolex telah menjadi simbol status dan prestise.
            </p>
            <img src="Hans-Wilsdorf-Ages-300x196.jpg" alt="Founder" class="building">
            <p>
                <strong>Sejarah:</strong><br>
                Pada tahun 1905, Hans Wilsdorf dan Alfred Davis memulai usaha mereka dengan nama "Wilsdorf and Davis" di London. Pada tahun 1908, mereka mendaftarkan merek dagang "Rolex" dan membuka kantor di La Chaux-de-Fonds, Swiss. Pada tahun 1910, Rolex menjadi perusahaan pertama yang memperoleh sertifikat presisi kronometrik Swiss, yang merupakan prestasi luar biasa pada saat itu.
            </p>
            <p>
                Pada tahun 1919, Rolex memindahkan markasnya ke Jenewa, Swiss, yang merupakan pusat pembuatan jam tangan mewah. Sejak saat itu, Rolex terus berinovasi dan memperkenalkan berbagai teknologi dan fitur baru dalam industri jam tangan. Salah satu inovasi terkenal adalah jam tangan tahan air pertama, "Oyster," yang diperkenalkan pada tahun 1926. Selain itu, Rolex juga memperkenalkan "Perpetual rotor" pada tahun 1931, sebuah mekanisme pengisian otomatis yang menjadi dasar untuk semua jam tangan otomatis masa depan.
            </p>
            <p>
                Saat ini, Rolex terus mempertahankan reputasinya sebagai pembuat jam tangan mewah terkemuka di dunia, dengan berbagai koleksi yang mencakup model-model ikonik seperti Submariner, Daytona, dan Datejust. Rolex juga terkenal karena keterlibatannya dalam olahraga dan ekspedisi, mendukung berbagai kegiatan mulai dari balap mobil hingga eksplorasi bawah laut.
            </p>
            <b><p>Rolex History: </p></b>
            <audio controls>
                <source src="Rolex History.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>

            </div> <center><a href="mainhome.php" class="back-button">Home</a></center>
        </section>
    </div>
</body>
</html>




