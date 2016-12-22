<html>
<head>
    <title>TEW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="./assets/js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-9">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">TEW</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <form class="form-horizontal" name="logowanie" action="?task=login&action=login" method="post">
                    <br><br><br>
                    <fieldset>
                        <legend>Logowanie</legend>
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-4 control-label">Email</label>
                            <div class="col-md-4">
                                <input type="email" autofocus="autofocus" class="form-control" id="email"
                                       name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-md-4 control-label">Hasło</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Hasło" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" name="zaloguj" class="btn btn-primary">Zaloguj</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </center>
        </div>
    </div>
</div>
</body>
</html>