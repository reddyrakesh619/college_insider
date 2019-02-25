<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form class="form-horizontal" role="form" method="post" action="./functions/register.php">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="SRN" class="col-sm-3 control-label">SRN</label>
                    <div class="col-sm-9">
                        <input type="text" name="user_id" placeholder="SRN" class="form-control" autofocus>
                        <span class="help-block">USN, SRN, eg.: 01F...., PES0...</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="fname" placeholder="First Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lname" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lname" placeholder="Last Name" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="Email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="mobile" class="col-sm-3 control-label">Mobile No</label>
                    <div class="col-sm-9">
                        <input type="number" name="mobile_no" placeholder="Mobile number" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
           <!--      <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthDate" class="form-control">
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="department" class="col-sm-3 control-label">Deparment</label>
                    <div class="col-sm-9">
                        <select name="dept" class="form-control">
                            <option>MCA</option>
                            <option>B.TECH</option>
                            <option>MBA</option>
                            <option>BBA</option>
                            <option>Ecuador</option>
                            <option>Fiji</option>
                            <option>Gabon</option>
                            <option>Haiti</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="Unknown">Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label for="College_id" class="col-sm-3 control-label">College ID</label>
                    <div class="col-sm-9">
                        <input type="file" name="fileupload" value="fileupload" name="fileupload"> <label for="fileupload"> Select a file to upload</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->