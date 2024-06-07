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
    <li><a href="home.php" target="kanan">Home</a></li>
    
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
    <title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('bck.jpg') no-repeat center center fixed; /* Ganti 'background.jpg' dengan nama file gambar Anda */
            background-size: cover;
        }

        .container {
            width: 100%;
            max-width: 500px;
            margin: auto;
            padding-top: 50px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form table {
            margin: auto;
        }

        .login-form tr td {
            padding: 10px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .login-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .login-form input[type="submit"]:hover {
            background-color: #555;
        }

        .notification {
            text-align: center;
            margin-bottom: 20px;
        }

        .notification p {
            color: red;
        }

        .notification p.success {
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-header">
            <h2>Masuk Sebagai Admin</h2>
        </div>
        <!-- cek pesan notifikasi -->
        <div class="notification">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<p>Login gagal! username dan password salah!</p>";
            }else if($_GET['pesan'] == "logout"){
                echo "<p class='success'>Anda telah berhasil logout</p>";
            }else if($_GET['pesan'] == "belum_login"){
                echo "<p>Anda harus login untuk mengakses halaman admin</p>";
            }
        }
        ?>
        </div>
        <div class="login-form">
            <form method="post" action="cek_login.php">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" placeholder="Masukkan username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" placeholder="Masukkan password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="LOGIN"></td>
                    </tr>
                </table>            
            </form>
        </div>
    </div>
</body>
</html>
