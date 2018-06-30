<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<script src="dist/js/jquery-slim.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<link href="dist/css/style.css" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">


        <A class="btn btn-primary" href="logout.php" >Logout</A>
       <br>

      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info ">
            <div class="panel-heading alert alert-success">
              <h3 class="panel-title " role="alert"><?php echo $_SESSION["session_nama"] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="dist/Penguins.jpg" class="img-circle img-responsive"> </div>
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username:</td>
                        <td><?php echo $_SESSION["uname_login"] ?></td>
                      </tr>
                      <tr>
                        <td>NIM</td>
                        <td><?php echo $_SESSION["session_nim"] ?></td>
                      </tr>
                      <tr>
                        <td>Prodi</td>
                        <td><?php echo $_SESSION["session_prodi"] ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Fakultas</td>
                        <td><?php echo $_SESSION["session_fakultas"] ?></td>
                      </tr>
                        <tr>
                        <td>Universitas</td>
                        <td><?php echo $_SESSION["session_universitas"] ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td><?php echo $_SESSION["session_alamat"] ?></td>
                      </tr>
                        
                     
                    </tbody>
                  </table>
                  
                 
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
</body>
</html>