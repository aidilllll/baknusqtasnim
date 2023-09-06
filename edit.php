<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            Data
        </a>
    </div>
</nav>
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Home</span>
                    </a>
                </div>
            </div>
          <div class="col py-3">
            <div class="card">
                <div class="card-header bg-primary text-white">Edit Data</div>
                <div class="card-body">
                    <form action="" method="post">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nis = $_POST['nis'];
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $telepon = $_POST['telepon'];

                        $id=$_GET['id'];
                        $query = "UPDATE tb_data SET nis='$nis', nama='$nama', alamat='$alamat', telepon='$telepon' WHERE nis='".$id."'";
                        $result = pg_query($db, $query);
                    
                        if ($result) {
                            header("location:index.php");
                        } else {
                            echo "Error: " . pg_last_error();
                        }
                    }
                            $id=$_GET['id'];
                            $query= "SELECT * FROM tb_data WHERE nis='".$id."'";
                            $no = 1;
                            $result = pg_query($db, $query);
                            
                            if (!$result) {
                                die("Error: " . pg_last_error());
                            }
                            while ($row = pg_fetch_assoc($result)) {
                    ?>
                        <div class="form-group">
                            <label for="nama">Nisn</label>
                            <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $row['nis']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="telepone">Telepone</label>
                            <input type="text" class="form-control" id="telepone" name="telepon" value="<?php echo $row['telepon']; ?>">
                        </div>
                        <button type="submit"  onclick = "return confirm('Apakah anda yakin akan merubah data?')" class="btn btn-primary" name="edit">Edit</button>
                        <?php
                            }
                        ?>
                    </form>
                </div>
            </div>
          </div>
    </div>
</div>
</body>
</html>
