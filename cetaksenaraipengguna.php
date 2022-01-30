<?php
require_once('connection.php');
session_start();
	
$sql = "SELECT daftarpelajar.noic, daftarpelajar.psw, pelajar.noic, pelajar.nama, pelajar.kursus, pelajar.nopelajar, pelajar.notel, pelajar.emel, pelajar.alamat,
				pelajar.poskod, pelajar.daerah, pelajar.negeri  
				FROM pelajar
				INNER JOIN daftarpelajar ON pelajar.noic = daftarpelajar.noic";
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
			echo ' SELAMAT DATANG ' . $_SESSION['User'];
			?>
<br><br>
            </div>
			
        </nav>
		
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
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
                                <a href="semakpermohonan.php"><i class="fa fa-desktop "></i>CETAK</a>

                            </li>
							<li>
                        <a href="login.php"><i class="fa fa-sign-in "></i>LOG KELUAR <br> <?php echo '( ' . $_SESSION['User'];
						?> <?php echo ')'?></a>
                    </li>
							
                          
                </ul>

            </div>	
                          
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
           
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SENARAI PENGGUNA</h1>
					</div>
                       
				<div class='pagination-container col-md-3' >
				<nav>
				  <ul class="pagination ">
            
            <li data-page="prev" >
								     <span> < <span class="sr-only">(current)</span></span>
								    </li>
				   <!--	Here the JS Function Will Add the Rows -->
        <li data-page="next" id="prev">
								       <span> > <span class="sr-only">(current)</span></span>
								    </li>
				  </ul>
				</nav>
			</div>
			<div class="form-group col-md-3"> 	<!--		Show Numbers Of Rows 		-->
				<br>
			 		<select class  ="form-control" name="state" id="maxRows">
						 <option value="5000">Show ALL Rows</option>
						 <option value="5">5</option>
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
						</select>
						</div>
			<div class="form-group col-md-3"> 	<!--		Show Numbers Of Rows 		-->
				<br>
			 		<input id="myInput" class="form-control" type="text" placeholder="Search Keyword">
			</div>
			<div class="form-group col-md-3"> 	<!--		Show Numbers Of Rows 	-->	
				<br>
			 		<a href="cetakpengguna.php" button type="submit" class="btn btn-success">CETAK</a>
			</div>
			</div>
						
                        
		 <div class="table-responsive">
                                <table id="table-id" class="table table-striped table-bordered table-hover">

	<tr>
		
		<th>NAMA</th>
		<th>NOMBOR KAD PENGENALAN</th>
		<th>KATA LALUAN</th>
		
		
	<tbody id="myInput">
	</tr>
		<?php
		$sql = "SELECT daftarpelajar.noic, daftarpelajar.psw, pelajar.noic , pelajar.nama
				FROM daftarpelajar INNER JOIN pelajar
				ON daftarpelajar.noic = pelajar.noic";
		
		$result = $conn->query($sql); 
		while($row = $result->fetch_assoc()){
		echo "
			<tr>
			
			<td>". $row['nama'] ."</td>
			<td>". $row['noic'] ."</td>
			<td>". $row['psw'] ."</td>
					
			
			";
		}
		?>
		
		</tr>
		</tbody>
</table>
</div>
                    
                </div>
                <!-- /. ROW  -->
              
          
					
                </div>
                  
 
            
                <!-- /. ROW  -->

    </div>
            <!-- /. PAGE INNER  -->
    </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
	
    <!-- /. WRAPPER  -->
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
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myInput tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
 getPagination('#table-id');
					//getPagination('.table-class');
					//getPagination('table');

		  /*					PAGINATION 
		  - on change max rows select options fade out all rows gt option value mx = 5
		  - append pagination list as per numbers of rows / max rows option (20row/5= 4pages )
		  - each pagination li on click -> fade out all tr gt max rows * li num and (5*pagenum 2 = 10 rows)
		  - fade out all tr lt max rows * li num - max rows ((5*pagenum 2 = 10) - 5)
		  - fade in all tr between (maxRows*PageNum) and (maxRows*pageNum)- MaxRows 
		  */
		 

function getPagination(table) {
  var lastPage = 1;

  $('#maxRows')
    .on('change', function(evt) {
      //$('.paginationprev').html('');						// reset pagination

     lastPage = 1;
      $('.pagination')
        .find('li')
        .slice(1, -1)
        .remove();
      var trnum = 0; // reset tr counter
      var maxRows = parseInt($(this).val()); // get Max Rows from select option

      if (maxRows == 5000) {
        $('.pagination').hide();
      } else {
        $('.pagination').show();
      }

      var totalRows = $(table + ' tbody tr').length; // numbers of rows
      $(table + ' tr:gt(0)').each(function() {
        // each TR in  table and not the header
        trnum++; // Start Counter
        if (trnum > maxRows) {
          // if tr number gt maxRows

          $(this).hide(); // fade it out
        }
        if (trnum <= maxRows) {
          $(this).show();
        } // else fade in Important in case if it ..
      }); //  was fade out to fade it in
      if (totalRows > maxRows) {
        // if tr total rows gt max rows option
        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
        //	numbers of pages
        for (var i = 1; i <= pagenum; ) {
          // for each page append pagination li
          $('.pagination #prev')
            .before(
              '<li data-page="' +
                i +
                '">\
								  <span>' +
                i++ +
                '<span class="sr-only">(current)</span></span>\
								</li>'
            )
            .show();
        } // end for i
      } // end if row count > max rows
      $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
      $('.pagination li').on('click', function(evt) {
        // on click each page
        evt.stopImmediatePropagation();
        evt.preventDefault();
        var pageNum = $(this).attr('data-page'); // get it's number

        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

        if (pageNum == 'prev') {
          if (lastPage == 1) {
            return;
          }
          pageNum = --lastPage;
        }
        if (pageNum == 'next') {
          if (lastPage == $('.pagination li').length - 2) {
            return;
          }
          pageNum = ++lastPage;
        }

        lastPage = pageNum;
        var trIndex = 0; // reset tr counter
        $('.pagination li').removeClass('active'); // remove active class from all li
        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
        // $(this).addClass('active');					// add active class to the clicked
	  	limitPagging();
        $(table + ' tr:gt(0)').each(function() {
          // each tr in table not the header
          trIndex++; // tr index counter
          // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
          if (
            trIndex > maxRows * pageNum ||
            trIndex <= maxRows * pageNum - maxRows
          ) {
            $(this).hide();
          } else {
            $(this).show();
          } //else fade in
        }); // end of for each tr in table
      }); // end of on click pagination list
	  limitPagging();
    })
    .val(5)
    .change();

  // end of on select change

  // END OF PAGINATION
}

function limitPagging(){
	// alert($('.pagination li').length)

	if($('.pagination li').length > 7 ){
			if( $('.pagination li.active').attr('data-page') <= 3 ){
			$('.pagination li:gt(5)').hide();
			$('.pagination li:lt(5)').show();
			$('.pagination [data-page="next"]').show();
		}if ($('.pagination li.active').attr('data-page') > 3){
			$('.pagination li:gt(0)').hide();
			$('.pagination [data-page="next"]').show();
			for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
				$('.pagination [data-page="'+i+'"]').show();

			}

		}
	}
}

$(function() {
  // Just to append id number for each row
  $('table tr:eq(0)').prepend('<th> ID </th>');

  var id = 0;

  $('table tr:gt(0)').each(function() {
    id++;
    $(this).prepend('<td>' + id + '</td>');
  });
});


</script>

</body>
</html>
