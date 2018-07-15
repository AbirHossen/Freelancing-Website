<?php 
include 'admin_index.php';
?>

<head><title>Logistics | FreelancerBD</title>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "User over the Year"
	},
	axisY: {
		title: "Users"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Month",
		dataPoints: [      
			{ y: 300, label: "January" },
			{ y: 406,  label: "February" },
			{ y: 935,  label: "March" },
			{ y: 1600,  label: "April" },
			{ y: 2365,  label: "May" },
			{ y: 3562, label: "June" },
			{ y: 8652,  label: "July" },
			{ y: 16985,  label: "August" }
            
		
        
        ]
	}]
});
chart.render();

}
    
    
// Load google charts
google.charts.load('current', {'packages':['corechart']});
    
google.charts.setOnLoadCallback(drawChart);
    


// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Ongoing', 9],
  ['Pending', 2],
  ['Completed', 4],
  ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Tasks this Month', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
    
    
     
    </script>
    
    
</head>
<div class="new">

<div class="first_block" id="piechart"></div>
    
    
    

<div class="first_block" id="chartContainer" style="height: 500; width: 60%;"></div>
    
    
    
    
    

    
    
 </div>
