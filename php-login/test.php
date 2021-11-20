<!DOCTYPE html>
<?php require 'dbconfig.php';
session_start();



$ID= $_SESSION["ID"];



//$JID= $_SESSION["jid"];

				
				include 'config.php';
				$ID= $_SESSION["ID"];
				$sql=mysqli_query($conn,"SELECT * FROM users where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
				$sql1=mysqli_query($conn,"SELECT * FROM user_result where u_id='$ID' ");
				$row1  = mysqli_fetch_array($sql1);
				$name = $_SESSION["First_Name"];
            ?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<div class="sidebar">
  
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">AwareYou</div><br>
        <i class='bx bx-menu' id="btn" ></i>
    </div>

    <div class="logo-details">
      <i class='bx icon'></i>
          <h3><div class='logo_name' style="color:white" class="links_name"><?php echo $name; ?></div></h3>
        <i class='bx' id="btn" ></i>
    </div>
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Report Genarator</span>
        </a>
         <span class="tooltip">Report Genarator</span>
      </li>
      <li>
       <a href="fb_detail.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Charts</span>
       </a>
       <span class="tooltip">charts</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Calender</span>
       </a>
       <span class="tooltip">Calender</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">About</span>
       </a>
       <span class="tooltip">About</span>
     </li>
    
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <script src="css/script.js"></script>
 
  
<div class="container text-center">    
  <div class="row">
    
    <div class="col-sm-10">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body"><center>
             <div class="btn-group">
 <button type="button" class="btn btn-primary">&nbsp;&nbsp;Monthly&nbsp;&nbsp;</button>
  <button type="button" class="btn ">&nbsp;&nbsp;Weekly&nbsp;&nbsp;</button>
  <button type="button" class="btn ">&nbsp;&nbsp;Daily&nbsp;&nbsp;</button> 
</div>   </center> <br/><Br/>
<input type="text" class="form-control" list="browsers1" name="station" id="station" value="Select filter" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter train station';}">

<br/><center><button type="button" class="btn btn-success">Filter</button></center>

				<datalist id="browsers1">
					
<option value="Filter 1">
<option value="Filter 2">
<option value="Filter 3">

				  </datalist>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
      
        <div class="col-sm-12">
          <div class="well">
           
		   
		<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">No</a></li>
    <li><a data-toggle="tab" href="#menu1">Time</a></li>
    <li><a data-toggle="tab" href="#menu2">Source</a></li>
	 <li><a data-toggle="tab" href="#menu3">Destination</a></li>
    <li><a data-toggle="tab" href="#menu4">Protocol</a></li>
	 <li><a data-toggle="tab" href="#menu5">Length</a></li>
    <li><a data-toggle="tab" href="#menu6">Info</a></li>
  </ul>
    <div class="tab-content">
	
    <div id="home" class="tab-pane fade in active">
	
      <h3>Charts</h3>
      <p>  <style>
#chartdiv {
  width: 80%;
  height: 400px;
}

</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = [{
  "country": "USA",
  "visits": 2025
}, {
  "country": "China",
  "visits": 1882
}, {
  "country": "Japan",
  "visits": 1809
}, {
  "country": "Germany",
  "visits": 1322
}, {
  "country": "UK",
  "visits": 1122
}, {
  "country": "France",
  "visits": 1114
}, {
  "country": "India",
  "visits": 984
}, {
  "country": "Spain",
  "visits": 711
}, {
  "country": "Netherlands",
  "visits": 665
}, {
  "country": "Russia",
  "visits": 580
}, {
  "country": "South Korea",
  "visits": 443
}, {
  "country": "Canada",
  "visits": 441
}, {
  "country": "Brazil",
  "visits": 395
}];

// Create axes

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;

categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
  if (target.dataItem && target.dataItem.index & 2 == 2) {
    return dy + 25;
  }
  return dy;
});

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueY = "visits";
series.dataFields.categoryX = "country";
series.name = "Visits";
series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
series.columns.template.fillOpacity = .8;

var columnTemplate = series.columns.template;
columnTemplate.strokeWidth = 2;
columnTemplate.strokeOpacity = 1;

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p><br/>Some content in menu 1.<br/>SAdsad<br/>Some content in menu 1.<br/>SAdsad<br/>Some content in menu 1.<br/>SAdsad<br/>Some content in menu 1.<br/>SAdsad</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Some content in menu 2.</p>
    </div>
	<div id="menu3" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Some content in menu 1.</p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Some content in menu 2.</p>
    </div>
	<div id="menu5" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Some content in menu 1.</p>
    </div>
    <div id="menu6" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Some content in menu 2.</p>
    </div>
  </div>
</div>


          </div>
        </div>
      </div>
           
    </div>
    <div class="col-sm-2 well">
         
      <div >
        <p>&nbsp;</p>
      </div>
	  <div >
        <p>&nbsp;</p>
      </div>
	  <div >
        <p>&nbsp;</p>
      </div>
	  

<form name="update" method="post" >
    <button name = "update" type="submit"  class="btn btn-danger "> Generate Report </button>
</form>

<?php
if (isset($_POST['update']))
{
    echo shell_exec("python test.py $ID $name");
}
?>

	  <div >
        <p>&nbsp;</p>
      </div>
	   <div >
        <p>&nbsp;</p>
      </div> <div >
        <p>&nbsp;</p>
      </div>
	   <div >
        <p>&nbsp;</p>
      </div>
	   <div >
        <p>&nbsp;</p>
      </div>
	  
	   <div class="thumbnail" style="background-color:#16BCC8;color:white">
        <p><br/>Notifications</p>
       <hr/>
       
        <p>Some quick example text to build on the card title and make up the bulk of the card's conent.<br/></p>
        
      </div> 
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&nbsp;</p>
</footer>

</body>
</html>
