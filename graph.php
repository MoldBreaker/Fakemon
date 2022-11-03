<?php
 
$dataPoints = array(
	array("label"=> "HP", "y"=> $getMon['hp']),
	array("label"=> "Atk", "y"=> $getMon['atk']),
	array("label"=> "Def", "y"=> $getMon['def']),
	array("label"=> "Sp.Atk", "y"=> $getMon['spatk']),
	array("label"=> "Sp.Def", "y"=> $getMon['spdef']),
	array("label"=> "Speed", "y"=> $getMon['speed'])
);
	
?>

<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Base Stat:"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, column, etc
		indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }
    </style>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 50%;" class="center"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   