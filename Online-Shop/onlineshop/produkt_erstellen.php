<?php
    include("isAdmin.php");
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">

<div class="container">
    <h1>Produkt Bearbeiten</h1>
    <div class="row">
        <div class="col-sm-6">
            <form method="post" action="produkt_hinzufuegen.php">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="" required>
                </div>
                <div class="form-group">
                    <label for="preis">Preis:</label>
                    <input type="test" name="preis" class="form-control" value="" required>
                </div>
                <div class="form-group">
                    <label for="lagerbestand">Lagerbestand:</label>
                    <input type="text" name="lagerbestand" class="form-control" value="" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="shop.php" role="button">Back</a>
            </form>
        </div>
    </div>
</div>