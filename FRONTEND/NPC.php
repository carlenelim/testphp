<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <title>NPC</title>
</head>
<?php include "Header2.php";
    include "connection.php"?>
<body>
    <section id="NPC">
        <div class="judul">
            <h3>NPC</h3>
        </div>
    </section>

    <form method="POST">
            <div class="searchhh">
                <input type="text" name="search" class="form-control" id="search" 
                value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Find NPC">
            </div>
            <div class="searchhh2" >
                <button type="submit" name="kirim">
                Find
                </button>
            </div>
    </form>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">NPC Name</th>
            <th scope="col">NPC Info</th>
            <th scope="col">NPC Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if (isset($_POST["kirim"])){
                    $search = $_POST['search'];
                    $query = mysqli_query($connection, "select * from npc
                    where npc_name like '%".$search."%'");
                }
                else{
                    $query = mysqli_query($connection,  "select * from npc");
                }
                    $nomor = 1;
                    while ($row = mysqli_fetch_array($query)) 
                    { ?>
                        <tr>
                            <td><?php echo $row['npc_name']; ?></td>
                            <td><?php echo $row['npc_info']; ?></td>       
                            <td>
                                <?php if(is_file("Photos/NPC/".$row['npc_pict']))
                                { ?>
                                    <img src="Photos/NPC/<?php echo $row['npc_pict']?>" width="80">
                                <?php } else 
                                    echo "<img src='./Photos/favicon.ico' width='80'>"
                                ?>
                            </td>                   
                        </tr>
                    <?php $nomor = $nomor + 1;?>
                    <?php } ?>
        </tbody>
    </table>
    <?php include "Footer.php"?>
    </body>
</html>