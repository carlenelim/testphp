<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <title>Armory</title>
</head>
<body>
<?php include "Header2.php";
    include "connection.php"?>
    <section id="Armory">
        <div class="judul">
            <h3>Armory</h3>
        </div>
    </section>

    <form method="POST">
            <div class="searchhh">
                <input type="text" name="search" class="form-control" id="search" 
                value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Find Armor">
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
        <th scope="col">Armor Name</th>
        <th scope="col">Armor Def</th>
        <th scope="col">Job</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        if (isset($_POST["kirim"])){
            $search = $_POST['search'];
            $query = mysqli_query($connection, "select armor_id, job_name, armor_name, armor_def 
            from jobs, armors
            where armors.job_id = jobs.job_id and armor_name like '%".$search."%'");
        }
        else{
            $query = mysqli_query($connection,  "select armor_id, job_name, armor_name, armor_def 
            from jobs, armors where armors.job_id = jobs.job_id ");        }
			$nomor = 1;
			while ($row = mysqli_fetch_array($query)) 
			{ ?>
                <tr>
                    <td><?php echo $row['armor_name']; ?></td>
					<td><?php echo $row['armor_def']; ?></td>
                    <td><?php echo $row['job_name']; ?></td>                
                </tr>
			<?php $nomor = $nomor + 1;?>
			<?php } ?>
    </tbody>
        </table>

        <div class="pimg2" id="home">
        <div class="ptext">
            <span class="border">
                Meow Online
            </span>
        </div>
    </div>

        <section id="Armory">
        <div class="judul">
            <h3>Weapon</h3>
        </div>
    </section>

    <form method="POST">
            <div class="searchhh">
                <input type="text" name="searchw" class="form-control" id="search" 
                value="<?php if(isset($_POST['searchw'])) {echo $_POST['searchw'];}?>" placeholder="Find Weapon">
            </div>
            <div class="searchhh2" >
                <button type="submit" name="kirimw">
                Find
                </button>
            </div>
    </form>

    <table class="table">
  <thead class="thead-dark">
    <tr>
        <th scope="col">Weapon Name</th>
        <th scope="col">Weapon Atk</th>
        <th scope="col">Job</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        if (isset($_POST["kirimw"])){
            $search = $_POST['searchw'];
            $query = mysqli_query($connection, "select weapon_id, weapon_name, weapon_atk, job_name 
            from jobs, weapons
            where weapons.job_id = jobs.job_id AND weapon_name like '%".$search."%'");
        }
        else{
            $query = mysqli_query($connection,  "select weapon_id, weapon_name, weapon_atk, job_name 
            from jobs, weapons where weapons.job_id = jobs.job_id ");        
        }
			$nomor = 1;
			while ($row = mysqli_fetch_array($query)) 
			{ ?>
                <tr>
                    <td><?php echo $row['weapon_name']; ?></td>
                    <td><?php echo $row['weapon_atk']; ?></td>
                    <td><?php echo $row['job_name']; ?></td>           
                </tr>
			<?php $nomor = $nomor + 1;?>
			<?php } ?>
    </tbody>
        </table>

    <?php include "Footer.php"?>
    </body>
</html>