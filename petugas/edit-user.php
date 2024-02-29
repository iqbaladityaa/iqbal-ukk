<?php
 
if(isset($_POST['update']))
{	
	$id = $_GET['userID'];
	
	$name=$_POST['name'];
	$level=$_POST['level'];
	$password= md5($_POST['password']);

	// update user data
	$result = mysqli_query($koneksi, "UPDATE user SET NamaUser='$name', Password='$password', Level='$level' WHERE UserID=$id");
	
	header("Location: index.php?page=user");
    echo "<script>alert('berhasil')</script>";
}


$id = $_GET['userID'];

$result1 = mysqli_query($koneksi, "SELECT * FROM user WHERE userID=$id");
 
while($data = mysqli_fetch_array($result1))
{
	$name = $data['Username'];
	$password = $data['Password'];
}
?>

<div class="row well">
        <div class="col-md-4">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Update User</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" value="<?php echo $name; ?>" placeholder="Enter Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" value="<?php echo $password; ?>" placeholder="Enter password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="Level" class="form-label">Level<span style="color: red;"> *</span></label>
                            <select class="form-control" name="Level" id="Level">
                                <?php if ($data['Level'] == "Admin") { ?>
                                    <option value="Admin">admin</option>
                                    <option value="Petugas">petugas</option>
                                <?php } else { ?>
                                    <option value="Petugas">petugas</option>
                                    <option value="Admin">admin</option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
