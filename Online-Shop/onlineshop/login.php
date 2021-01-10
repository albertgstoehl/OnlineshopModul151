<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Onlineshop</title>

    <!--Bootstrap wird eingebunden-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
</head>
<body>
    <!--Login Feld-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <div class="card rounded shadow shadow-sm">
                            <div class="card-header">
                                <h3 class="mb-0">Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="benutzer_login.php">
                                    <div class="form-group">
                                        <label for="benutzername">Benutzername</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="benutzername" id="benutzername" required="">
                                        <div class="invalid-feedback">Oops, das hast du wohl vergessen.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="passwort" >Passwort</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" name="passwort" id="passwort" required="">
                                        <div class="invalid-feedback">Gib auch dein Passwort ein!</div>
                                    </div>
                                    <a href="benutzer_registrieren.php">Account erstellen</a>
                                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>