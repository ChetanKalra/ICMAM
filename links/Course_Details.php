<?php
  
  $Title = $_GET['Title'];
  $Course_Title = rawurldecode($Title);

  $con = new MongoClient();

  $db = $con->ICMAM;

  $collection = $db->courses;

  $query= $collection->find(array('Title'=>$Title));


  $array_of_results = iterator_to_array($query);


  $res[0] = current($array_of_results);
  // print_r($array_of_results[0]['Img_Path']);

  // print_r($res);
  // exit;

  $query1 = $collection->find()->sort(array('UsersRegistered'=>-1))->limit(4);
	//$query1->sort(array('UsersRegistered'=>-1))->limit(6);
	$results1 = iterator_to_array($query1);
	$size = sizeof($results1);
	$array_of_results1[0] = current($results1);
	
	for($i=1;$i<$size;$i++)
	{
		$array_of_results1[$i] = next($results1);
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICMAM-PD</title>

    
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="js/jquery.quick.pagination.min.js"></script> -->


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
							<a href="../Index.php">Home</a>
						</li>
						<li>
							<a href="Courses-users.php">Courses</a>
						</li>
						<li>
							<a href="About.html">About Us</a>
						</li>
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="Registration.php">Register</a>
						</li>
						<li>
							<a href="Login-Page.php" id="login-link">Login</a>
						</li>
					</ul>
				</div>
				
			</nav>
		

			<div class="row margin-top-60px courses-heading-users">
				 <div class="col-md-12 ">
				 	<h3 style="padding-bottom: 10px;"><?php print_r($res[0]['Title']) ?>:</h3>
				 </div>
			</div>

	
	<div class="row margin-top-40px">
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12 text-align-center">
					<h3 class="text-align-center" class="textcolor">
						Lessons
					</h3>

					<div class="row margin-top-30px">
						<div class="col-sm-6 col-md-12 default-padding iPad-resp">
							<div href="#" class="thumbnail custom-thumbnail sidebar-responsive zeropadding Course_Detail_lesson">
							
								<ul class="lessons-list">

									<li class="Title">Welcome</li>
									<li class="Title">Introduction</li>
									<li class="Title">What is ...?</li>
									
									<li class="Title">Lesson1</li>
									<li class="Title">Lesson2</li>
									<li class="Title">Lesson3</li>
									<li class="Title">Lesson4</li>
									<li class="Title">Lesson5</li>
									<li class="Title">Lesson6</li>
									<li class="Title">Lesson7</li>
									<li class="Title">Lesson8</li>
									<li class="Title">Lesson9</li>
									<li class="Title">Lesson10</li>
									<li class="Title">Lesson11</li>
									<li class="Title">Lesson12</li>
									<li class="Title">Lesson13</li>
									<li class="Title">Lesson14</li>
									<li class="Title">Lesson15</li>
									<li class="Title">Lesson16</li>


								</ul>
								
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
						Course Detail
					</h3>
				</div>
			</div>
			
			<div class="row margin-top-20px ">
				<div class="col-md-12 default-padding">
					
					<div class="row">
					
						<div class="col-md-12" style="border: 1px solid #ddd; height: 700px; padding-top: 15px;">
							<div class="col-md-4 zeropadding">
								<img src=../<?php print_r($res[0]['Img_Path'])?> class="course-img">
							</div>
							<div class="col-md-8" >
								 <h3 class="margin-top-0px">Description:</h3>
                       			 <p><?php print_r($res[0]['Description']) ?></p>
                       			 <div class="margin-top-20px">
								
									<button class="form-control custom-reg-btn">Register</button>
									
								</div>
							</div>

						</div>
					  
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-left: 15px;">
					
			<div class="col-md-12" style="border: 1px solid #ddd;  padding-top: 15px; padding-bottom: 15px;">
					<h3 class="text-align-center">Related Courses</h3>
					<div class="row margin-top-30px" id="related-course">
						
						<a class="thumbnail-anchor" data-toggle="modal" data-target="#Course" onclick="Set('<?php print_r($array_of_results1[0]['Title'])?>','<?php print_r($array_of_results1[0]['Description']) ?>')">
					 <div class="col-sm-6 col-md-3">
					    <div class="thumbnail">
					      <div class="overflow-hidden relative-pos"><img src=../<?php print_r($array_of_results1[0]['Img_Path']) ?> alt="..." class="img-dim"><span class="Preview">Preview</span></div>
					      <div class="caption">
					        <!-- <h4 class="textcolor ellipsis_oneline">Satellite Oceanography</h4> -->
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results1[0]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results1[0]['Prof_Assigned']) ?> <span class="alttextcolor"> | <?php print_r($array_of_results1[0]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div></a>



						<a class="thumbnail-anchor" data-toggle="modal" data-target="#Course" onclick="Set('<?php print_r($array_of_results1[1]['Title'])?>','<?php print_r($array_of_results1[1]['Description']) ?>')">
						 <div class="col-sm-6 col-md-3">
						    <div class="thumbnail">
						      <div class="overflow-hidden relative-pos"><img src=../<?php print_r($array_of_results1[1]['Img_Path']) ?> alt="..." class="img-dim"><span class="Preview">Preview</span></div>
						      <div class="caption">
						        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results1[1]['Title']) ?></h4>
						        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results1[1]['Prof_Assigned'])?> <span class="alttextcolor"> | <?php print_r($array_of_results1[1]['Start_Date']) ?> </span></p>
						        
						      </div>
						    </div>
						 </div></a>


						  <a class="thumbnail-anchor" data-toggle="modal" data-target="#Course" onclick="Set('<?php print_r($array_of_results1[2]['Title'])?>','<?php print_r($array_of_results1[2]['Description']) ?>')">
					 <div class="col-sm-6 col-md-3 ">
					    <div class="thumbnail">
					      <div class="overflow-hidden relative-pos"><img src=../<?php print_r($array_of_results1[2]['Img_Path']) ?> alt="..." class="img-dim"><span class="Preview">Preview</span></div>
					      <div class="caption">
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results1[2]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results1[2]['Prof_Assigned']) ?> <span class="alttextcolor"> | <?php print_r($array_of_results1[2]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div></a>


					 <a class="thumbnail-anchor" data-toggle="modal" data-target="#Course" onclick="Set('<?php print_r($array_of_results1[3]['Title'])?>','<?php print_r($array_of_results1[3]['Description']) ?>')">
					 <div class="col-sm-6 col-md-3">
					    <div class="thumbnail">
					      <div class="overflow-hidden relative-pos"><img src=../<?php print_r($array_of_results1[3]['Img_Path']) ?> alt="..." class="img-dim"><span class="Preview">Preview</span></div>
					      <div class="caption">
					        <h4 class="textcolor ellipsis_oneline"><?php print_r($array_of_results1[3]['Title']) ?></h4>
					        <p class="textcolor ellipsis_oneline"><?php print_r($array_of_results1[3]['Prof_Assigned']) ?> <span class="alttextcolor"> | <?php print_r($array_of_results1[3]['Start_Date']) ?> </span></p>
					        
					      </div>
					    </div>
					 </div></a>
					</div>
			</div>
					  
		</div>


	</div>


	<div class="row margin-top-30px footer-row adjustment">
		<div class="col-md-12 padding-25px">
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

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>

    
  
  </body>
</html>