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
    <li><a href="profilmhs.php" target="kanan">Profil Mahasiswa</a></li>
    <li><a href="tambahdata.php">Data</a></li>
    <li><a href="logout.php" target="kanan">Logout</a></li>
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
<?php
require 'koneksi.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $description = $_POST["description"]; // Add this line
    if($_FILES["image"]["error"] === 4){
        echo
        "<script> alert('Image Does Not Exist'); </script>";
    }
    else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
        $validImageExtension = ['jpg', 'jpeg', 'png' ];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end ($imageExtension));

        if(!in_array($imageExtension, $validImageExtension)){
            echo
            "<script> alert('Invalid Image Extension'); </script>";
        }
        else if ($fileSize > 1000000){
            echo
            "<script> alert('image is too large'); </script>";
        } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/'. $newImageName);
            copy('img/'. $newImageName, '../img/'. $newImageName);
            $query = "INSERT INTO tb_update values('', '$name', '$newImageName', '$description')"; // Add $description here
            mysqli_query($koneksi, $query);
            echo
            "<script>
            alert ('Succesfully Added');
            document.location.href = 'tambahdata.php';
            </script>";
        }
    }
}
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('bck copy.jpg'); /* Warna latar belakang keseluruhan */
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.5); /* Hitam transparan */
            padding: 20px;
            box-shadow: 0px 0px 10px 0px #0000001a;
            border-radius: 10px;
            margin-top: 50px;
            color: black;
        }
        h2 {
            color: white; /* Warna teks judul */
        }
        h4 {
            color:white /* Warna teks pesan selamat datang */
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        td {
            padding: 10px;
        }
        label {
            font-weight: bold;
            color: white; /* Warna teks label */
        }
        input[type="text"], input[type="file"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #cccccc;
            border-radius: 5px;
            
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
        a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>

       
    <div class="container">
    <center><h2>Admin Dashboard</h2>

        

        <h4>Selamat datang! Anda telah login.</h4></center>





        <h4>Masukan Data Produk</h4>

        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="nama">Name : </label></td>
                    <td><input type="text" name="name" id="name" required value=""></td>
                </tr>
                <tr>
                    <td><label for="description">Description : </label></td>
                    <td><input type="text" name="description" id="description" required value=""></td>
                </tr>
                <tr>
                    <td><label for="foto">Image : </label></td>
                    <td><input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <br>
                        <button type="submit" name="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
        
    </div>
</body>
</html>




    
   


