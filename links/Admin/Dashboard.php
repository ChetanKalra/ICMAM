<?php
  
    
      session_start();
      $con = new MongoClient();
      $db = $con->ICMAM;

      $collection = $db->courses;

      $query= $collection->find();
      $query->sort(array('UsersRegistered'=>-1));
      $results = iterator_to_array($query);
      //print_r($results);
      $temp=sizeof($results);
       //$_SESSION['$results1']=$results;
      // if($results)
      // {
      //  $display = array();
      //  foreach($results as $rec)
      //  {
      //    $display[]=array($rec);

      //  }
      // }
      // print_r($display[1]);
      // $temp=sizeof($display);
      // echo $temp;
      // exit;

      // print_r($query);
      // $temp1 = $temp->sort($temp);
      //  print_r($temp1);
      // $query1=$collection->findOne();
      // print_r($query1);
      // //$results1 = 
      $array_of_results[0]=current($results);
      //print_r($array_of_results[0]['UsersRegistered']);
      for($i=1; $i<sizeof($results);$i++)
      {
      
          $array_of_results[$i]=next($results);
          echo "<br>";
          //print_r($array_of_results[$i]['UsersRegistered']);

      }
      //exit;
      //print_r($array_of_results['_id']);
      //exit;
      //$_SESSION['$results1']=$array_of_results;
      //$temp1=$_SESSION['CourseTitle'];
      // // $temp2= sort($array_of_results);
      // // print_r($temp2);
      // exit;
      
    // echo '<pre>';
    // while ($query->hasNext()) { 
  //      $friend = $query->getNext();
  //      print_r($friend);
  //        echo PHP_EOL;
  //        exit();
    // }
    // echo '</pre>';
      // for($i=0;i<$temp;$i++)
      // {
      //  print_r($display[i][])
      // }
                      
                      


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
    <!-- Styles -->
    <style>
      #chartdiv {
        width   : 100%;
        height    : 500px;
        font-size : 11px;
      } 
      .amcharts-chart-div a {display:none !important;}

      .amcharts-export-menu, .amcharts-export-menu-top-right, .amExportButton
      {
        display: none !important;
      } 
    </style>

    <!-- Resources -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>



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
                    <a href="Dashboard.php" class="nodecoration"><li class="active-ul"><i class="icon-home4 icon-dashboard"></i>Dashboard</li></a>
                    <a href="Courses.php" class="nodecoration"><li ><i class="icon-tree5 icon-dashboard"></i>Training Programmes</li></a>
                    <a href="Users.php" class="nodecoration"><li><i class="icon-reading icon-dashboard"></i>Registered Users</li></a>
                    <!-- <a href="Lessons.php" class="nodecoration"><li><i class="icon-indent-decrease2 icon-dashboard"></i>Lessons</li></a>
                     --><a href="" class="nodecoration"><li><i class="icon-copy icon-dashboard"></i>Assignments</li></a>
                    <a href="" class="nodecoration"><li><i class="icon-task icon-dashboard"></i>Examination</li></a>
                  
                  </ul>
                
                </div>
              </div>

              <div class="right-sidebar zeropadding">

                  <div class="heading-rightsection">
                    <h2 class="nav-title">Training Programmes</h2>
                  </div>

               
              
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div id="chartdiv"></div>         
                  </div>
                </div>
                <div class="col-md-6">
                  
                </div>
            </div>
          </div>
      </div>

      <script src="../../js/jquery.min.js"></script>
      <script src="../../js/bootstrap.min.js"></script>
      <script src="../../js/scripts.js"></script>
      <script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "dataProvider": [ {
    "CourseTitle": "<?php print_r($array_of_results[0]['Title']) ?>",
    "visits": "<?php print_r($array_of_results[0]['UsersRegistered']); ?>"
  }, {
    "CourseTitle": "<?php print_r($array_of_results[1]['Title']); ?>",
    "visits": "<?php print_r($array_of_results[1]['UsersRegistered']); ?>"
  }, {
    "CourseTitle": "Japan",
    "visits": 1809
  }, {
    "CourseTitle": "Germany",
    "visits": 1322
  }, {
    "CourseTitle": "UK",
    "visits": 1122
  }, {
    "CourseTitle": "France",
    "visits": 1114
  }, {
    "CourseTitle": "India",
    "visits": 984
  }, {
    "CourseTitle": "Spain",
    "visits": 711
  }, {
    "CourseTitle": "Netherlands",
    "visits": 665
  }, {
    "CourseTitle": "Russia",
    "visits": 580
  }, {
    "CourseTitle": "South Korea",
    "visits": 443
  }, {
    "CourseTitle": "Canada",
    "visits": 441
  }, {
    "CourseTitle": "Brazil",
    "visits": 395
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "CourseTitle",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );
</script>

  </body>

</html>