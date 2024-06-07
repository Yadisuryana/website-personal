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


<?php
require 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .body1 {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 20px;
            width: 300px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .card h2 {
            font-size: 1.5em;
            margin: 10px 0;
        }

        .card p {
            font-size: 1em;
            color: #666;
        }

        .card .actions {
            margin-top: 20px;
        }

        .card .actions a {
            display: inline-block;
            padding: 10px 15px;
            margin: 5px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .card .actions a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body><div class="body1">
    <?php
    $rows = mysqli_query($koneksi, "select * from tb_update ORDER BY id desc");
    ?>
    <?php foreach($rows as $row) :?>
    <div class="card">
        <img src="img/<?php echo $row['image'];?>" alt="<?php echo $row['name'];?>">
        <h2><?php echo $row["name"];?></h2>
        <p><?php echo $row["description"];?></p>
        <div class="actions">
            <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
            <a href="hapus.php?id=<?php echo $row['id'];?>">Hapus</a>
        </div>
    </div>
    <?php endforeach;?></div>
</body>
</html>
