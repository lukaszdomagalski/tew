<html>
<head>
    <title>TEW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="./assets/js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row-fluid user-row">
                        <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive"
                             alt="Conxole Admin"/>
                    </div>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" class="form-signin" name="logowanie"
                          action="?task=login&action=login" method="post">
                        <fieldset>
                            <legend><center>Logowanie</center></legend>
                            <label class=" panel-login">
                                <div class="login_result"></div>
                            </label>
                            <input class="form-control" placeholder="E-mail" id="email" type="email" name="email" required>
                            <input class="form-control" placeholder="Hasło" id="password" type="password" name="password"
                                   required>
                            <br></br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Zaloguj"
                                   name="zaloguj">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>