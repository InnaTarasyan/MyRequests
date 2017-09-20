<html>

<head>
    <title>Laravel Request Usage</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        .red{
          color:red;
          padding-left: 18%;
        }
    </style>
</head>

<body>
<form action = "/user/register" method = "post" class="form-horizontal w3-panel">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <div class="form-group has-feedback control-group ">
        <label class="col-sm-2 control-label" for="name">Name</label>
        <div class="col-sm-8 {{ $errors->has('name') ? 'has-error' : false }}">
            <input type="text" name = "name" class="form-control" >
            <span class="glyphicon  form-control-feedback"></span>
        </div>
        <div class="col-sm-8 red">
          {{ $errors->has('name') ? $errors->first('name') : false }}
        </div>
    </div>
    <div class="form-group has-feedback control-group">
        <label class="col-sm-2 control-label" for="username">Username</label>
        <div class="col-sm-8 {{ $errors->has('username') ? 'has-error' : false }}">
            <input type="text" name = "username" class="form-control" >
            <span class="glyphicon  form-control-feedback"></span>
        </div>
        <div class="col-sm-8 red">
            {{ $errors->has('username') ? $errors->first('username') : false }}
        </div>
    </div>
    <div class="form-group has-feedback control-group">
        <label class="col-sm-2 control-label" for="password">Username</label>
        <div class="col-sm-8 {{ $errors->has('username') ? 'has-error' : false }}">
            <input type="text" name = "password" class="form-control" >
            <span class="glyphicon  form-control-feedback"></span>
        </div>
        <div class="col-sm-8 red">
            {{ $errors->has('password') ? $errors->first('password') : false }}
        </div>
    </div>
    <div class="form-group has-error has-feedback">
        <label class="col-sm-2 control-label" for="password"></label>
        <div class="col-sm-10">
            <input type = "submit" value = "Register" />
        </div>
    </div>
</form>

</body>
<footer>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</footer>
</html>