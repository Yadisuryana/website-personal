<!DOCTYPE html>
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
            background-color: gray;
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
  background-color: gray;
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
   <ul style="list-style:none;">
    <li><a href="index.php" target="kanan">Kembali</a></li>
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
<html>
<head>
	<title>Student Profile</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
            background-color: #032B44; /* Deep blue color */
			background-image: url("background_image.jpg"); /* Ganti dengan nama file gambar Anda */
			background-size: cover;
			background-position: center;
		}
		
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 400px;
			margin: auto;
			text-align: center;
			overflow-y: auto; /* Add this to allow vertical scrolling */
			height: 700px; /* Set a fixed height to allow scrolling */
			background-color: transparent; /* Agar background card tidak menutupi gambar */
		}
		
		.title {
			color: #FFFFFF; /* Ubah warna tulisan menjadi putih */
            font-size: 18px;
		}
		
        
    
		button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
		}

        .text-area {
    background-color: #FFFFFF; /* Warna background putih */
    color: #000000; /* Warna font hitam */
}


		
		a {
			text-decoration: none;
			font-size: 22px;
			color: black;
		}
		
		button:hover, a:hover {
			opacity: 0.7;
		}
	</style>

</head>
<body>
	<div class="card">
        <div class="text-area">
		<img src="mhs.jpg" alt="Yadi" style="width:100%">
        <h1>Yadi Suryana</h1>
		<p class="title">Pelajar, Ma'soem University</p>
		<p>Alamat: Dsn.Cibulakan Ds. Sindanggalih Kec.Cimanggung Kab.</p>
		<p>Contact: <a href="mailto:>ydisryna@gmail.com">ydisryna@gmail.com</a></p>
		<p><button>Contact</button></p>
		<a href="#"><i class="fa fa-dribbble"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-facebook"></i></a>
		<!-- Add some extra content to demonstrate scrolling -->
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
	</div></div>
</body>
</html>