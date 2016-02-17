<!DOCTYPE html>
<html lang="en">
<head>
 <link type="text/css"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
          href="vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
    <link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
	    <link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">
	
<style>


<!--	h2 {
    
    background-color: #ccc;
    margin-top: 100px;
    padding: 20px;
} -->

.bar {
  fill: #0000FF;
  fill-opacity: .9;
}

.bar:hover {
  fill: #fec503;
}

.axis {
  font: 11px monospace;
  font-family: Times New Roman;
}

.axis path,
.axis line {
  fill: none;
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
</body>
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

<label><input type="checkbox"> Sort values</label>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
<script>

var margin = {top: 30, right: 20, bottom: 150, left: 100},
    width = 600 - margin.left - margin.right,
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

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	  svg.call(tip);
	  

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
</body>
</html>