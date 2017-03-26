<?php
  
  $Title = $_GET['Title'];

  $con = new MongoClient();

  $db = $con->ICMAM;

  $collection = $db->courses;

  $query= $collection->find(array('Title'=>$Title));


  $array_of_results = iterator_to_array($query);

  // print_r($array_of_results);

  // exit;

?>




<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICMAM-PD</title>

    <link href="../../css/icons/styles.css" rel="stylesheet" type="text/css">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
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
                <a href="../../Index.php">Home</a>
              </li>
             
              
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="../Registration.php">Profile</a>
              </li>
              <li>
                <a href="../Login-Page.php" id="login-link">Logout</a>
              </li>
            </ul>
          </div>

        </nav>


        <div class="row adjustment" style="margin-top: 50px;">
            <div class="col-md-12 zeropadding">

              <div class="left-sidebar zeropadding">
                <div class="Admin">
                  <img src="../../assets/Images/Team/user.png" class="admin-img">
                </div>

                <div class="subsection">
                  <ul class="subsection-ul">
                    <a href="Dashboard.php" class="nodecoration"><li><i class="icon-home4 icon-dashboard"></i>Dashboard</li></a>
                    <a href="Courses.php" class="nodecoration"><li ><i class="icon-tree5 icon-dashboard"></i>Training Programmes</li></a>
                    <a href="" class="nodecoration"><li><i class="icon-reading icon-dashboard"></i>Registered Users</li></a>
                    <!-- <a href="" class="nodecoration"><li class="active-ul"><i class="icon-indent-decrease2 icon-dashboard"></i>Lessons</li></a>
                     --><a href="" class="nodecoration"><li><i class="icon-copy icon-dashboard"></i>Assignments</li></a>
                    <a href="" class="nodecoration"><li><i class="icon-task icon-dashboard"></i>Examination</li></a>
                  
                  </ul>
                
                </div>
              </div>

              <div class="right-sidebar zeropadding">

                  <div class="heading-rightsection">
                    <h2 class="nav-title">Training Programmes</h2>
                  </div>
                  <div class="" style="margin-top: 170px">
                    <form action="Functions/upload.php?Title=<?php echo $Title; ?>" enctype="multipart/form-data" method="POST">

                    <input type="file" name="file">
                    <input type="submit" name="submit">

                    </form>
                  </div>

                   <!-- <div class="">
                    <h2 class="add-btn"><a class="btn btn-default add-btn-custom" data-toggle="modal" data-target="#add-modal">Upload-Images</a></h2>
                  </div>
 -->
                  <div class="row admin-courses" style="padding-top: 10px">

                 


                  </div>
              
              </div>
            </div>
          </div>
      </div>

      <!-- Modal -->
    <div class="modal fade" id="add-modal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">..</h4>
          </div>
          <div class="modal-body">
            <p>...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Register</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
  


  <!-- /Modal -->

      <script src="../../js/jquery.min.js"></script>
      <script src="../../js/bootstrap.min.js"></script>
      <script src="../../js/scripts.js"></script>
  </body>

</html>