<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <title>Weapons</title>
</head>
<?php include "Header.php";
    include "connection.php"?>
<body>
    <section id="Monsters">
        <div class="judul">
            <h3>Weapons</h3>
        </div>
    </section>

    <div class="container">
    <form method="POST">
        <div class="form-group row">
        <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <input type="text" name="search" class="form-control" id="search" 
                value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Find Weapons">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Find">
        </div>
        <div class="col-sm-4"></div>
    </form>
    </div>
    <div class="row">
    <div class="col-sm-4">
    </div>
	<div class="col-sm-4">
    <table class="table table-hover">
		<thead class="thead-dark">
			<tr>
                <th>Weapon Name</th>
				<th>Weapon Atk</th>
				<th>Job</th>
			</tr>
		</thead>

		<tbody>
        <?php 
        if (isset($_POST["kirim"])){
            $search = $_POST['search'];
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
        </div>
    </div>
    <?php include "Footer.php"?>
    </body>
</html>