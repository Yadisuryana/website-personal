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
            left: 0; /* Set left ke 0 agar sidebar selalu terlihat */
            background-color: #111;
            padding-top: 60px;
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
            background-color: #575757;
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
            margin-left: 250px; /* Tambahkan margin kiri sesuai lebar sidebar */
        }

        .logo-container {
            margin: 0 auto;
        }

        .logo {
            width: 50px;
            height: 50px;
            margin: 0 auto;
        }

        .back-button {
            display: block;
            text-align: left;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            margin-left: 3px;
        }

        .back-button:hover {
            text-decoration: underline;
        }

        .body1 {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            margin-left: 250px; /* Tambahkan margin kiri sesuai lebar sidebar */
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        img {
            display: block;
            margin: 0 auto 20px auto;
            max-width: 100%;
            height: auto;
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
        <li><a href="tambahdata.php" class="back-button">Kembali</a></li>
    </ul>
</div>

<?php
require 'koneksi.php';

$id = $_GET['id'];
$rows = mysqli_query($koneksi, "select * from tb_update where id=$id");
$row = mysqli_fetch_assoc($rows);

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $description = $_POST["description"];
    $image = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $image);
    $imageExtension = strtolower(end($imageExtension));

    if(!in_array($imageExtension, $validImageExtension)){
        echo "<script> alert('Invalid Image Extension'); </script>";
    }
    else if ($fileSize > 1000000){
        echo "<script> alert('image is too large'); </script>";
    } else {
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;

        move_uploaded_file($tmpName, 'img/'. $newImageName);
        copy('img/'. $newImageName, '../img/'. $newImageName);
        $query = "UPDATE tb_update SET name='$name', description='$description', image='$newImageName' WHERE id=$id";
        mysqli_query($koneksi, $query);

        echo "<script>
        alert ('Succesfully Updated');
        document.location.href = 'tambahdata.php';
        </script>";
    }
}
?>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
</head>
<body>
<div class="body1">
    <div class="container">
        <h2>Halaman Admin</h2>

        <h4>Edit Data Produk.</h4>

        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" required value="<?php echo $row["name"]; ?>">

            <label for="description">Description :</label>
            <textarea name="description" id="description" rows="4" cols="50"><?php echo $row["description"]; ?></textarea>

            <label for="image">Image :</label>
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">

            <img src="img/<?php echo $row['image']; ?>" width="200" title="<?php echo $row['image']; ?>">

            <button type="submit" name="submit">Submit</button>
        </form>

        <a href="tambahdata.php" class="back-button">Kembali</a>
    </div>
</div>
</body>
</html>
