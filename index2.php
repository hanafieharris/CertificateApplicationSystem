<?php
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
			
			<?php
			echo '<b> SELAMAT DATANG </b> '. $_SESSION['User'] ;
			?>
<br><br>
            </div>
			
        </nav>
		
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
					<li>
                           <a href="index2.php"><i class="fa fa-desktop "></i>PAPAN MUKA</a>
                    </li>
					<li>
                           <a href="senaraipengguna.php"><i class="fa fa-desktop "></i>SENARAI PENGGUNA</a>
                    </li>             
                    <li>
                        <a href="senaraimaklumatpemohon.php"><i class="fa fa-desktop "></i>SENARAI MAKLUMAT</a>
                        
                    </li>
                     <!--<li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           -->
                             <li>
                                <a href="semakpermohonan.php"><i class="fa fa-desktop "></i>SEMAK PERMOHONAN</a>
                            </li>
							<li>
                        <a href="login.php"><i class="fa fa-sign-in "></i>LOG KELUAR <br> <?php echo '( ' . $_SESSION['User'];
						?> <?php echo ')'?></a>
                    </li>
							
                          
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="row">
                    <div class="col-md-12">
					<h1 class="page-head-line">PAPAN MUKA</h1>
                       
                    </div>
                </div>
				<div class="col-md-8">
				<center><h1 >TATACARA PERMOHONAN SIJIL</h1>
				 <img src="assets/img/Tatacara Penggunaan Sistem Sijil.jpg" alt="Service">
				 </div>
				 
				<div class="col-md-4">
                   <div class="panel panel-primary">				
                       <div class="panel-heading">
                           <center> PERHATIAN
                        </div>
						
                           <img src="assets/img/Nota Sistem Tuntutan Sijil.jpg" alt="Service" disabled>
                       
						<!--	
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
						<div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div> -->
                    </div>
                </div>
        <!-- /. PAGE WRAPPER  -->
		</div>
	</div>
    <!-- /. WRAPPER  -->
</div>
</div>
<div id="footer-sec">
         <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-contact">
                                <h2>Alamat</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Institut latihan perindustrian, Jalan 3, KKIP Selatan, 88460, Kota Kinabalu, Sabah </p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>ilpkk@gov.edu.my</p>
                                <div class="footer-social">
									 <div class="topbar-social">
										<a href="https://twitter.com/cessilpkk?lang=en"><i class="fab fa-twitter"></i></a> 
                                        <a href="https://www.facebook.com/ilpkk"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.youtube.com/channel/UCLgxt7TIu5bwLR7UkB-XUDQ"><i class="fab fa-youtube"></i></a> 
                                        <a href="https://www.instagram.com/ilpkk_official/"><i class="fab fa-instagram"></i></a> 
                                       <a href="https://my.linkedin.com/in/ilpkk-sepanggar-b22333152"><i class="fab fa-linkedin-in"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-link">
                                <h2>Pautan</h2>
                                <a href="">About Us</a> <br>
                                <a href="">Our Story</a> <br>
                                <a href="">Our Services</a> <br>
                                <a href="">Our Projects</a> <br>
                                <a href="">Contact Us</a> <br>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="footer-form">
                                <h2>Stay Updated</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <input class="form-control" placeholder="Email here">
                               <center> <button class="btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
   
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
	 <!-- WIZARD SCRIPTS -->
    <script src="assets/js/wizard/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/wizard/jquery.cookie-1.3.1.js"></script>
    <script src="assets/js/wizard/jquery.steps.js"></script>
    


</body>
</html>
