<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <title>Maps</title>
</head>
<?php include "Header2.php";
    include "connection.php"?>
<body>
    <section id="Skills">
        <div class="judul">
            <h3>Skills</h3>
        </div>
    </section>

    <div class="container">
    <form method="POST">
        <div class="form-group row">
        <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <input type="text" name="search" class="form-control" id="search" 
                value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Find Skills">
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
				<th>Job Name</th>
				<th>Skill Name</th>
			</tr>
		</thead>

		<tbody>
        <?php 
        if (isset($_POST["kirim"])){
            $search = $_POST['search'];
            $query = mysqli_query($connection, "select job_name, skill_name
            from jobs, skills
            where jobs.job_id = skills.job_id AND skill_name like '%".$search."%'");
        }
        else{
            $query = mysqli_query($connection,  "select job_name, skill_name
            from jobs, skills
            where jobs.job_id = skills.job_id");
        }
			$nomor = 1;
			while ($row = mysqli_fetch_array($query)) 
			{ ?>
				<tr>
					<td><?php echo $row['job_name']; ?></td>
					<td><?php echo $row['skill_name']; ?></td>
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