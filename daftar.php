<?php 
$hostname = 'localhost';
$username =  'root';
$password = '';
$database = 'sppt';

$conn = mysqli_connect($hostname, $username, $password, $database) or die('connecting to MYSQL failed');


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOG MASUK | SISTEM PERMOHONAN PENGAMBILAN TRANSKRIP</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body> <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #0089FF;" >
                <div class="header-right">
                <!--<a href="message-task.html" class="btn btn-info" title="New Message"> Pentadbir Sistem</a> -->
              

            </div>
			
<style="background-color: #3669ad;">
    <div class="container">
        <div class="row text-center " style="padding-top:90px;">
            <div class="col-md-12">
			   <img src="assets/img/JataNegara.png" style="width:120px;height:100px;"/> <img src="assets/img/ilpkk.png" style="width:170px;height:100px;" />
			     <h3 align="center"><b>INSTITUT LATIHAN PERINDUSTRIAN KOTA KINABALU</b></h3><BR>
			   <h4 align="center"><b>SISTEM PERMOHONAN PENGAMBILAN TRANSKRIP</b></h4>
			  
			   
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
							 <h4 align="center">DAFTAR PELAJAR</h4>
							 <hr />
                             <br />
                                <form role="form">
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="noic" class="form-control" placeholder="No. Kad Pengenalan"  />
                                     </div>
									  
									 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Dalam Kad Pengenalan"  />
                                     </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Kata Laluan"  />
                                     </div>
									  <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                                            <input type="password" name="password2" class="form-control"  placeholder="Sahkan Kata Laluan"  />
                                     </div>
                                   
                                     
                                     
									
                                    <hr />
									<input type="submit" name="submit" class="btn btn-success"  value="Daftar"> <br><br>
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
