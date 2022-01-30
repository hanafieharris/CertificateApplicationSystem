<?php
require_once('connection.php');
session_start();	

	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SISTEM PENGURUSAN MAKLUMAT KAKITANGAN</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	  <!--WIZARD STYLES
    <link href="assets/css/wizard/normalize.css" rel="stylesheet" />
    <link href="assets/css/wizard/wizardMain.css" rel="stylesheet" />
    <link href="assets/css/wizard/jquery.steps.css" rel="stylesheet" />-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="img/favicon.ico" rel="icon">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0; background-color: #1976D2;" >
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                			  
            </div>

  
			<div class="col-md-4">

               <br>
&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/JataNegara.png" style="width:120px;height:90px;" /> &nbsp;&nbsp;
						<img src="assets/img/ilpkk.png" style="width:120px;height:90px">
				
            </div>
			<br>
			 <div class="col-md-8">
			
			<h1><b>SISTEM PERMOHONAN PENGAMBILAN TRANSKRIP</b></h1>
				<!-- <a href="message-task.html" class="btn btn-info" title="New Message"><b> </b><i class="fa fa-envelope-o fa-2x"></i></a> -->
                <!--     <a href="message-task.html" class="btn btn-primary" title="New Task"><b> </b><i class="fa fa-bars fa-2x"></i></a> -->
           <!-- <a href="login.html" class="btn btn-danger" title="Logout">LOG KELUAR</a> -->
<br><br>
            </div>
			
        </nav>
		
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                 <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
					<li>
                           <a href="index.php"><i class="fa fa-desktop "></i>PAPAN MUKA</a>
                    </li>
					<li>
                           <a href="info2.php"><i class="fa fa-desktop "></i>MAKLUMAT PERIBADI</a>
                    </li>             
                    <li>
                        <a href="permohonan.php"><i class="fa fa-desktop "></i>PERMOHONAN TRANSKRIP</a>
                        
                    </li>
                     <!--<li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           -->
                             <li>
                                <a href="semakmohon.php"><i class="fa fa-desktop "></i>STATUS PERMOHONAN</a>
                            </li>
							<li>
                        <a href="login.php"><i class="fa fa-sign-in "></i>LOG KELUAR <br> <?php echo '( ' . $_SESSION['User'];
						?> <?php echo ')'?></a>
                    </li>
							
                          
                </ul>

            </div>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
           
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MAKLUMAT PERIBADI</h1>
                       <!-- <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1> -->

                    </div>
					<br>
                </div>
                <!-- /. ROW  -->
				<?php
		$sql = "SELECT * FROM daftarpelajar WHERE noic='".$_SESSION['User']."'";
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc())
		{
		?>
                <div class="row">
                    <div class="col-md-10">
                         <div class="panel panel-info">
                        
                        <div class="panel-body">
                            <form role="form" action="addmaklumat.php" method="POST">
							<div class="form-group">
                                                <label for="disabledInput">NO. KAD PENGENALAN</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="" name="noic" 
												value="<?php echo $_SESSION['User'];?>" readonly>
                            </div>
                            <div class="form-group">
                                            <label>NAMA</label>
                                            <input class="form-control" type="text" name="nama" onkeyup="this.value = this.value.toUpperCase();" value="" required > 
                                            <p class="help-block">(NAMA DALAM KAD PENGENALAN)</p> 
											
                            </div>
										
								
                          <!--  <div class="form-group">
                                            <label>NO. KAD PENGENALAN</label>
                                            <input class="form-control" type="text">
                                     <p class="help-block">(XXXXXXX-XX-XXXX)</p>
                                        </div> -->
							<div class="form-group">
                                            <label>NO. PELAJAR </label>
                                            <input class="form-control" type="text" name="nopelajar" value="" onkeyup="this.value = this.value.toUpperCase();" >
                                          <p class="help-block">CONTOH (BIXXXXXXXX)</p> 
                            </div>
							<div class="form-group">
									  <label for="sel1">KURSUS PENGAJIAN</label>
									  <select class="form-control" id="sel1" name="kursus"  onkeyup="this.value = this.value.toUpperCase();" >
											<option selected>SILA PILIH KURSUS</option>
											<option>AUTO</option>
											<option>TPM</option>
											<option>TPP</option>
											<option>PPG</option>
											<option>CDM</option>
											<option>CSB</option>
											<option>TEI</option>
											<option>MEKA</option>
											<option>ELEKTRIK</option>
											<option>TKR</option>
											<option>TKS</option>
											<option>IPD</option>
									  </select>
							</div>
							<div class="form-group">
                                            <label>NO. TELEFON</label>
                                            <input class="form-control" type="text" name="notel" value="" >
                                    <!-- <p class="help-block">(CONTOH 010-XXXXXXX)</p> -->
                            </div>
										 <div class="form-group">
                                            <label>EMEL</label>
                                            <input class="form-control" type="text" name="emel" value="" >
                                    <!--        <p class="help-block">( JIKA ADA )</p> -->
                                        </div>
                                       
									
								<div class="form-group" >
                                            <label>ALAMAT</label>
                                            <input class="form-control" rows="4" name="alamat" onkeyup="this.value = this.value.toUpperCase();">
								</div>
								<div class="form-group" >
                                            <label>POSKOD</label>
                                            <input class="form-control" rows="4" name="poskod" onkeyup="this.value = this.value.toUpperCase();"  >
								</div>
								<div class="form-group" >
                                            <label>DAERAH</label>
                                            <input class="form-control" rows="4" name="daerah" onkeyup="this.value = this.value.toUpperCase();" >
								</div>
								<div class="form-group">
									  <label for="sel1">NEGERI</label>
									  <select class="form-control" id="sel1" name="negeri" onkeyup="this.value = this.value.toUpperCase();" >
											<option selected>SILA PILIH KURSUS</option>
											<option>SABAH</option>
											<option>SARAWAK</option>
											<option>KEDAH</option>
											<option>PAHANG</option>
											<option>PERLIS</option>
											<option>KELANTAN</option>
											<option>MELAKA</option>
											<option>JOHOR</option>
											<option>NEGERI SEMBILAN</option>
											<option>TERENGGANU</option>
											<option>PULAU PINANG</option>
											<option>WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
											<option>WILAYAH PERSEKUTUAN PUTRAJAYA</option>
											<option>WILAYAH PERSEKUTUAN LABUAN</option>
									  </select>
							</div>
                                 
                                      
				<center>	 <button type="submit" name="submit" value="submit" class="btn btn-success">KEMASKINI</button>
				  
								  
                            </form>
                            </div>
                        </div>
                    </div>
					<!--
					<div class="col-md-4">
					 <div class="panel panel-info">
                       <div class="panel-heading">
                           <h3><strong>PERHATIAN</strong></h3>   
                        </div>
						
                        <div class="panel-body">
                           
                        <div class="panel-body">
                            <p class="lead">This is an example of lead body copy.</p>
                            <p>This is an example of standard paragraph text. This is an example of <a href="#">link anchor text</a> within body copy.</p>
                            <p>
                                <small>This is an example of small, fine print text.</small>
                            </p>
                            <p>
                                <strong>This is an example of strong, bold text.</strong>
                            </p>
                            <p>
                                <em>This is an example of emphasized, italic text.</em>
                            </p>
                            <br />
                            <h4>Alignment Helpers</h4>
                            <p class="text-left">Left aligned text.</p>
                            <p class="text-center">Center aligned text.</p>
                            <p class="text-right">Right aligned text.</p>
                        </div>
                            </div>
                        </div>
					</div>
					-->
					
                </div>
				 
                 <!-- /. ROW  -->
				 
           
            <!-- /. PAGE INNER  -->

        </div>
		<?php
		}
		
		?>
        <!-- /. PAGE WRAPPER  -->
     
	 
    <!-- /. WRAPPER  -->
   
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
