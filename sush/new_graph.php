<!DOCTYPE html>
<html lang="en">
<head><title>Admin-Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <!--<link href="images/icons/favicon.ico" rel="shortcut icon">-->
    <!--Loading bootstrap css-->
    <link type="text/css"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
          href="vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING SCRIPTS FOR PAGE-->
	<link type="text/css" rel="stylesheet" href="vendors/fullcalendar/fullcalendar.css">
    <link type="text/css" rel="stylesheet" href="vendors/fullcalendar/fullcalendar.print.css">
	<!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/style-mango.css" id="theme-style">
    <link type="text/css" rel="stylesheet" href="css/vendors.css">
    <link type="text/css" rel="stylesheet" href="css/themes/default.css" id="color-style">
    <link type="text/css" rel="stylesheet" href="css/style-responsive.css">
    <link rel="shortcut icon" href="http://www.next-themes.com/mango/code/images/favicon.ico">
	
	<style>

h2 {
    
    background-color: #ccc;
    margin-top: 100px;
    padding: 20px;
}

.bar {
  fill: #0000FF;
  fill-opacity: .9;
}

.bar:hover {
  fill: #fec503;
}

.axis {
  font: 16px monospace;
  font-family: Times New Roman;
}

.axis path,
.axis line {
  fill: black;
  width: 2px;
  stroke: #000;
  shape-rendering: crispEdges;
}

.x.axis path {
  display: none;
}
label {
  position: absolute;
  top: 200px;
  right: 600px;
}

.d3-tip {
  line-height: 1;
  font-weight: bold;
  padding: 12px;
  background: rgba(0, 0, 0, 0.8);
  color: #fff;
  border-radius: 2px;
}

/* Creates a small triangle extender for the tooltip */
.d3-tip:after {
  box-sizing: border-box;
  display: inline;
  font-size: 10px;
  width: 100%;
  line-height: 1;
  color: rgba(0, 0, 0, 0.8);
  content: "\25BC";
  position: absolute;
  text-align: center;
}

/* Style northward tooltips differently */
.d3-tip.n:after {
  margin: -1px 0 0 0;
  top: 100%;
  left: 0; 
}

</style>

	
</head>
<body>

	<?php
		///	session_start();
			//if( !(isset($_SESSION['username'])) )
				//header("Location: admin_login.php");
		?>
    <div >
        <!--BEGIN TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
        <!--BEGIN WRAPPER-->
        <div id="wrapper">
            <!--BEGIN TOPBAR-->
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a id="logo" href="admin_home.php" class="navbar-brand" style="font-size:19px">Leave Management System</a></div>
                <div class="topbar-main"><a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>

                    <ul class="nav navbar-top-links navbar-right">
                 
                        <li class="dropdown hi"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img
                                src="images\admin.png"	alt="" class="img-responsive img-circle"/>&nbsp;
                            Admin
                            &nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
                                <li>
                                    <div class="navbar-content">
                                        <div class="row">
                                            <div class="col-md-5 col-xs-5"><img
                                                    src="images\admin.png" alt=""
                                                    class="img-responsive img-circle"/>

                                                
                                            </div>
                                            <div class="col-md-7 col-xs-5"><h3>Admin</h3>
											<div class="divider"></div>

                                               <div align="center" ><a href="#" class="btn btn-primary btn btn-blue">Change
                                                    Password</a></div>
													<br>
                                            <span class="input-group-btn"><a href="adminlogout.php" type="button" class="btn btn-green btn-sm">
                                            Sign out
                                        </a></span>

                                                
                                               
                                        </div>
                                    </div>
                                    <div class="navbar-footer">
                                        <div class="navbar-footer-content">
                                            <div class="row">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--END TOPBAR-->
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">
                        <li class="clock"><strong id="get-date"></strong>

                            <div class="digital-clock">
                                <div id="getHours" class="get-time"></div>
                                <span>:</span>

                                <div id="getMinutes" class="get-time"></div>
                                <span>:</span>

                                <div id="getSeconds" class="get-time"></div>
                            </div>
                        </li>
                        <li class="sidebar-heading"><h4>Main Menu</h4></li>
                        <li><a href="admin_home.php"><i class="fa fa-home fa-fw"></i>&nbsp;
                            Manage Accounts<span class="fa arrow"></span><span class="badge btn-primary">3</span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="admin_create.php">Create User Account</a></li>
                                <li><a href="admin_delete.php">Delete User Account</a></li>
                                <li><a href="admin_modify.php">Modify User Account</a></li>
                            </ul>
						<li><a href="admin_approvals.php">Leave Applications</a></li>
						<li><a href="admin_report.php">Staff Leave Report</a></li>
						<li><a href="admin_graph.php">Graph</a></li>	
                        </li>
					
                    </ul>
                </div>
            </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN PAGE HEADER & BREADCRUMB-->
                <div class="page-header-breadcrumb">
                    <div class="page-heading hidden-xs"><h1 class="page-title">ADMINISTRATOR</h1></div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="admin_home.php">Home</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>

                    </ol>
                </div>
                <!--END PAGE HEADER & BREADCRUMB-->
                <!--BEGIN CONTENT-->
                	<div class="page-content">
					
         
			
	<div class="panel panel-yellow">
         <div class="panel-heading">Leaves Availed Graph</div>
					 <div>
					  	<label><input type="checkbox" align="middle"> Sort values</label>
						</div>
					  <div class="form-body pal" id="graphdiv" >
		
				<script src="http://d3js.org/d3.v3.min.js"></script>
				<script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
					<script>
					

var margin = {top: 30, right: 20, bottom: 150, left: 100},
    width = 800 - margin.left - margin.right,
    height = 620 - margin.top - margin.bottom;

var x = d3.scale.ordinal()
    .rangeRoundBands([0, width], .1);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .ticks(20);
	
var tip = d3.tip()
  .attr('class', 'd3-tip')
  .offset([-10, 0])
  .html(function(d) {
    return "<strong>Leaves availed:</strong> <span style='color:blue'>" + d.availcl + "</span>" + "<br>" +"Name: <span style='color:red'>" + d.f_name +" "+d.l_name+ "</span>"+
	"<br>"+ "Designation: <span style='color:red'>" + d.designation +"</span>";
  })

var svg = d3.select("#graphdiv").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	  svg.call(tip);
	  
/*d3.json("sample_graph.php", function(error, data) {
    data.forEach(function(d) {
        d.staff_id =d.staff_id;
        d.availcl = d.availcl;
    });	*/
d3.json("graph_data.php", function(error, data) {
 
 
 data.forEach(function(d) {
  x.domain(data.map(function(d) { return d.staff_id; }));
  y.domain([0,15]);//d3.max(data, (function(d) { return d.availcl; }))]);  
 svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
    //  .call(xAxis)
	  .selectAll("text")
      .style("text-anchor", "end")
      .attr("dx", "-.8em")
      .attr("dy", "-.55em")							
      .attr("transform", "rotate(-90)" )
	  .text("Staff ID");  
	  
	 /*  svg.append("g")
      .attr("class", "x axis")
	  .text("transform","rotate(-90)")
      .attr("transform", "translate(0," + height + ")") */
      

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
	  //.attr("transform", "translate(20,0)")
      .attr("y", 16)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Leaves Used");

  svg.selectAll(".bar")
      .data(data)
    .enter().append("rect")
      .attr("class", "bar")
      .attr("x", function(d) { return x(d.staff_id); })
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.availcl); })
      .attr("height", function(d) { return height - y(d.availcl); })
	  .on('mouseover', tip.show)
		.on('mouseout', tip.hide);
  


});

d3.select("input").on("change", change);

  var sortTimeout = setTimeout(function() {
    d3.select("input").property("checked", false).each(change);
  }, 2000);

  function change() {
    clearTimeout(sortTimeout);

    // Copy-on-write since tweens are evaluated after a delay.
    var x0 = x.domain(data.sort(this.checked
        ? function(a, b) { return b.availcl - a.availcl; }
        : function(a, b) { return d3.ascending(a.staff_id, b.staff_id); })
        .map(function(d) { return d.staff_id; }))
        .copy();
		

    var transition = svg.transition().duration(750),
        delay = function(d, i) { return i * 50; };

    transition.selectAll(".bar")
        .delay(delay)
      .attr("x", function(d) { return x0(d.staff_id); });

    transition.select(".x.axis")
        .call(xAxis)
		 .selectAll("text")
      .style("text-anchor", "end")
      .attr("dx", "-.8em")
      .attr("dy", "-.55em")							
      .attr("transform", "rotate(-90)" )
		.selectAll("g")
        .delay(delay);
  }

});

function type(d) {
  d.availcl = +d.availcl;
  return d;
}

		</script>
	</div>
	</div>
	</div>
</div>
				 
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div class="page-footer">
                    <div class="copyright">2014 © LMS</div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
</body>

<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="vendors/jquery-pace/pace.min.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->


<script src="js/transitions.js"></script>
<!--CORE JAVASCRIPT-->
<script src="js/app.js"></script>
<script src="js/main.js"></script>
<script src="js/holder.js"></script>
<script type="text/javascript">(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-145464-11', 'next-themes.com');
ga('send', 'pageview');

</script>


</html>