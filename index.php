<?php
	
	$con = new MongoClient();

	$db = $con->ICMAM;

	$collection = $db->courses;

	$query = $collection->find();

	$results = iterator_to_array($query);

	$array_of_results[0] = current($results);

	for($i=1;$i<sizeof($results);$i++)
	{
		$array_of_results[$i] = next($results);
	}





	//exit;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICMAM-PD</title>

    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  </head>
  <body>

    <div class="container-fluid">
			
			<nav class="navbar navbar-default navbar-fixed-top custom-nav" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					<!-- </button> <a class="navbar-brand" href="#">ICMAM</a> -->
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="">
							<a href="Index.html">Home</a>
						</li>
						<li>
							<a href="#">Courses</a>
						</li>
						<li>
							<a href="#">About Us</a>
						</li>
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="links/Registration.php">Register</a>
						</li>
						<li>
							<a href="links/Login-Page.php" id="login-link">Login</a>
						</li>
					</ul>
				</div>
				
			</nav>
		
	<div class="row slider-div adjustment">
		<div class="col-md-12 height100p">
			<div class="headings">
				<h3 class="text-center title">
					MINISTRY OF EARTH SCIENCES
				</h3>

				<h4 class="text-align-center subtitle margin-top-20px">Integrated Coastal And Marine Area Management</h4>
			</div>
		</div>
	</div>
	
	<div class="row margin-top-20px">
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12 text-align-center">
					<h3 class="text-align-center" class="textcolor">
						News
					</h3>
<!-- 
					<div class="col-md-12 margin-top-20px">
						<strong>March Exam Cities</strong>
						<a class="nodecoration">Click Here</a>
					</div>

					<div class="col-md-12 margin-top-20px">
						<strong>April Exam Cities</strong>
						<a class="nodecoration">Click Here</a>
					</div>

					<div class="col-md-12 margin-top-20px">
						<strong>To register for April 2017 exams</strong>
						<a class="nodecoration">Click Here</a>
					</div> -->

					<div class="row margin-top-30px">
						<div class="col-sm-6 col-md-12 default-padding iPad-resp">
							<div href="#" class="thumbnail custom-thumbnail sidebar-responsive">
								<div>
								<strong>March Exam Cities</strong>
								<a class="nodecoration">Click&nbsp;Here</a>
								</div>
								<br>
								<div>
								<strong>April Exam Cities</strong>
								<a class="nodecoration">Click&nbsp;Here</a>
								</div>
								<br>
								<div>
								<strong>To register for April 2017 exams</strong>
								<a class="nodecoration">Click&nbsp;Here</a>
								</div>
							
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/"> -->
				</div>
			</div>
		</div>
		<div class="col-md-9 default-padding">
			<div class="row">
				<div class="col-md-12">
					<h3 id="Featured-courses-title" class="textcolor">
						Featured Courses
					</h3>
				</div>
			</div>
			
			<div class="row margin-top-20px animated fadeInUp">
				<div class="col-md-12 default-padding">
					
					<div class="row">
					 <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="assets/Images/Oceanography1.jpg" alt="..." class="img-dim">
					      <div class="caption">
					        <!-- <h4 class="textcolor ellipsis_oneline">Satellite Oceanography</h4> -->
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results[0]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results[0]['Prof_Assigned']) ?> <span class="alttextcolor"> | <?php print_r($array_of_results[0]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div>

					 <div class="col-sm-6 col-md-4 ">
					    <div class="thumbnail">
					      <img src="assets/Images/Shoreline.jpg" alt="..." class="img-dim">
					      <div class="caption">
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results[1]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results[1]['Prof_Assigned'])?> <span class="alttextcolor"> | <?php print_r($array_of_results[1]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div>

					 <div class="col-sm-6 col-md-4 ">
					    <div class="thumbnail">
					      <img src="assets/Images/GIS.png" alt="..." class="img-dim">
					      <div class="caption">
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results[2]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results[2]['Prof_Assigned']) ?> <span class="alttextcolor"> | <?php print_r($array_of_results[2]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div>

					 <div class="col-sm-6 col-md-4 ">
					    <div class="thumbnail">
					      <img src="assets/Images/Coastal.jpg" alt="..." class="img-dim">
					      <div class="caption">
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results[3]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results[3]['Prof_Assigned']) ?> <span class="alttextcolor"> | <?php print_r($array_of_results[3]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div>

					 <div class="col-sm-6 col-md-4 ">
					    <div class="thumbnail">
					      <img src="assets/Images/Sediment.jpg" alt="..." class="img-dim">
					      <div class="caption">
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results[4]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results[4]['Prof_Assigned']) ?> <span class="alttextcolor"> | <?php print_r($array_of_results[4]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div>

					 <div class="col-sm-6 col-md-4 ">
					    <div class="thumbnail">
					      <img src="assets/Images/Oil_Spill.jpg" alt="..." class="img-dim">
					      <div class="caption">
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results[5]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results[5]['Prof_Assigned']) ?> <span class="alttextcolor"> | <?php print_r($array_of_results[5]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div>

					  
					  
				</div>
			</div>
		</div>
	</div>



	<div class="row adjustment">
		<div class="col-md-12 default-padding margin-top-20px">
			<h3 class="text-center textcolor">
				Latest Courses
			</h3>


			  <div class="panel-group margin-top-30px" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading padding-left-30">
        <h4 class="panel-title ellipsis_oneline">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Applications of GIS in the management of Coastal Critical Habitats</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body padding-left-30">

        	<div class="row">
			 <!-- <div class="col-xs-6 col-md-3"> -->
			    <!-- <a href="#" class="thumbnail">
			      <img src="assets/Images/Coastal.jpg" alt="...">
			    </a> -->
			    <p>Determining the accurate length of the coastline is important for such coastal zone management application as shoreline classification, monitoring erosion, mapping biological resources, habitat assessment and for the planing and response to nature (e.g. storm surges) and man made disasters (e.g. oil spills). Coastal zone management, by definition, is spatial management. Geo referenced spatial data is map data in a digital form which mean that each of the earth’s features that are stored as spatial data has a unique geographic reference such as latitude and longitude. The increasing use of spatial data and GIS (Geographic Information System) by organizations and researchers is a valuable tool to help solve the planning and management issues in the coastal zone.</p>

			    <p class="button-course"><button class="btn btn-default">View Course</button></p>

			  <!-- </div> -->
			  
			</div>

        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading padding-left-30">
        <h4 class="panel-title ellipsis_oneline">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Integrated Coastal Zone Management</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body padding-left-30">

        <p>Integrated coastal zone management (ICZM) or Integrated coastal management (ICM) is a process for the management of the coast using an integrated approach, regarding all aspects of the coastal zone, including geographical and political boundaries, in an attempt to achieve sustainability.
        </p>
        <p class="button-course"><button class="btn btn-default">View Course</button></p>
        </div>
        
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading padding-left-30">
        <h4 class="panel-title ellipsis_oneline">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Sediment Transport in Near Shore Areas</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body padding-left-30">

        <p>Coastal sediment transport (a subset of sediment transport) is the interaction of coastal land forms to various complex interactions of physical processes. The primary agent in coastal sediment transport is wave activity (see Wind wave), followed by tides and storm surge (see Tide and Storm surge), and near shore currents. Wind-generated waves play a key role in the transfer of energy from the open ocean to the coastlines. In addition to the physical processes acting upon the shore, the size distribution of the sediment is a critical determination for how the beach will change (see Grain size determination). These various interactions generate a wide variety of beaches.</p>
        <p class="button-course"><button class="btn btn-default">View Course</button></p>

        </div>
      </div>

    </div>

    <div class="panel panel-default">
      <div class="panel-heading padding-left-30">
        <h4 class="panel-title ellipsis_oneline">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Shoreline Management</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body padding-left-30">

        <p>A Shoreline Management Plan (SMP) provides a large-scale assessment of the risks associated with coastal evolution and presents a policy framework to address these risks to people and the developed, historic and natural environment in a sustainable manner. In doing so, an SMP is a high-level document that forms an important part of the Department for Environment, Food and Rural Affairs (Defra) strategy for flood and coastal defence (Defra, 2001). 

		The SMP is a non-statutory, policy document for coastal defence management planning. It takes account of other existing planning initiatives and legislative requirements, and is intended to inform wider strategic planning. It does not set policy for anything other than coastal defence management. 
        </p>
        <p class="button-course"><button class="btn btn-default">View Course</button></p>
        </div>
        
      </div>
    </div>
  </div> 
</div>

		</div>
	</div>





	<div class="row margin-top-20px margin-bottom-20px">
		<div class="col-md-12">
			<div class="row">
				<div class="clearfix col-sm-6 col-md-4 default-padding">
					<div class="clearfix FooterFirstCol">
						<div class="col-xs-6 col-md-6"> 
						<p>
							 <strong>Related Links<br></strong>
						</p>
						

						<ul class="list-unstyled">
						<li>IIITMI</li>
						<li>ICMLREI</li>
						<li>IINCOISI</li>
						<li>IIMDI</li>
						<li>INCAORI</li>
						</ul>
						</div>

						<div class="col-xs-6 col-md-6">
						<p><br></p>
						<ul class="list-unstyled">
						<li>INCMRWFI</li>
						<li>INIOTI</li>
						<li>IMoESI</li>
						</ul>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4 FooterSecondCol flex-display">

					<div class="FooterSecondCol-child margin-auto">
						<ul class="list-unstyled">
							<p><strong>About Us<br></strong></p>
							<li>About</li>
							<li>Exams</li>
							<li>Recruitment Notice</li>
							<li>Tender Notice</li>
							<li>Right to Info. Act</li>

						</ul>
					</div>
				</div>
				<div class=" col-sm-6 col-md-4 FooterThirdCol flex-display" >
					 
					<address class="margin-auto">
						 <p><strong>ICMAM Project Directorate</strong><br></p>
						 2nd Floor, NIOT Campus,<br> Velacherry-Tambaram Main Road,<br>Pallikkaranai,Chennai - 600100, India,
						 <br>Tel: +91 44 66783599 Fax: +91 44 66783487
						 <br>Email: icmam@icmam.gov.in
					</address>
				</div>
			</div>
		</div>
	</div>


	<!-- <div class="footer-div default-padding adjustment">

	</div> -->
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    

  </body>
</html>