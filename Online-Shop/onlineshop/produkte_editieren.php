<?php
/*session_start();
if(isset($_SESSION['benutzer']))
{
echo "Benutzer: ".$_SESSION['benutzer'];
}else{
header('Location: index.php');
}*/
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Edit User</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
    $id = $_GET["id"];
    include("dbconnect.php");
    $sql = "SELECT * from produkte where produktID = '".$id."';";
    $res = $conn->query($sql);
    $i = $res->fetch_assoc();
?>
    <div class="container">
        <h1>Benutzer bearbeiten</h1>
        <div class="row">
            <div class="col-sm-6">
                <form method="post" action="update_user.php">
                <input type="hidden" name="id" value="<?php echo $i['id']?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $i['name']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="preis">Preis:</label>
                        <input type="test" name="preis" class="form-control" value="<?php echo $i['preis']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lagerbestand">Lagerbestand:</label>
                        <input type="text" name="lagerbestand" class="form-control" value="<?php echo $i['lagerbestand']?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="shop.php" role="button">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>