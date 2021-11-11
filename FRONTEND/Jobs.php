<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <script src=""></script>
    <title>Jobs</title>
</head>
<body>
    <?php include "Header2.php";
    include "connection.php"?>

    <section id="Jobs">
        <div class="judul">
            <h2>Jobs</h2>
        </div>
    </section>

    <form method="POST">
            <div class="searchhh">
                <input type="text" name="search" class="form-control" id="search" 
                value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Find Jobs">
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
      <th scope="col">Job Name</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        if (isset($_POST["kirim"])){
            $search = $_POST['search'];
            $query = mysqli_query($connection, "select * from jobs
                where job_name like '%".$search."%'");
        }
        else{
            $query = mysqli_query($connection,  "select * from jobs");
        }
			$nomor = 1;
			while ($row = mysqli_fetch_array($query)) 
			{ ?>
                <tr>
                <td><?php echo $row['job_name']; ?></td>
                </tr>
			<?php $nomor = $nomor + 1;?>
			<?php } ?>
  </tbody>
</table>

<?php include "Footer.php"?>
</body>
</html>