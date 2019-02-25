<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form class="form-horizontal" role="form" method="post" action="./functions/login.php">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="SRN" class="col-sm-3 control-label">SRN</label>
                    <div class="col-sm-9">
                        <input type="text" name="user_id" placeholder="SRN" class="form-control" autofocus>
                        <span class="help-block">USN, SRN, eg.: 01F...., PES0...</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password"  placeholder="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
 </form> <!-- /form -->
 </div>
