<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bar Chart Example</title>
	<script data-require="jquery@2.0.3" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="d3@3.4.1" data-semver="3.4.1" src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.2/d3.min.js"></script>
	
	<style>
		.chart {
			background: #fff;
			margin: 5px;
			border:solid 1px #ccc;
			padding:22px;
		}
		
		.chart rect {
			stroke: none;
			fill: steelblue;
		}
		
		.chart text {
			fill: white;
			font-family:arial;
		}
		
		.chart text.name {
			fill: #000;
		}
		
		.chart text.score {
			font-size:80%;
		}
		
		.chart line {
			stroke: #cccccc;
		}
		
		.chart .rule {
			fill: #000;
		}
	
		#chart .chart rect:hover {
			fill: #64707D;
		}
	</style>

</head>

<body>
    <div id="chart"></div>
</body>

	<script type="text/javascript">
	
		jQuery(function($) {
			var names = [
				'BCBS (Bronze)', 
				'BCBS (Bronze+)', 
				'BCBS (Silver)', 
				'BCBS (Gold)', 
				'BCBS (Platinum)',
				'Aetna (Bronze)',
				'Aetna (Bronze+)',
				'Aetna (Silver)',
				'Aetna (Gold)',
				'Aetna (Platinum)',
				'UnitedHealthCare (Bronze)',
				'UnitedHealthCare (Bronze+)',
				'UnitedHealthCare (Silver)',
				'UnitedHealthCare (Gold)',
				'UnitedHealthCare (Platinum)'
				
			],
				cost = [8, 4, 9 , 12, 11, 15, 10, 9, 7, 14, 11, 6, 8, 10, 11],
				chart,
				width = 900,
				bar_height = 30,
				gap = 2,
				height = bar_height * names.length;
			
			var x, y;
			x = d3.scale.linear()
			.domain([0, d3.max(cost)])
			.range([0, width]);
			y = function(i) { return bar_height * i; }
			var left_width = 220;
			var gap = 6, yRangeBand;
			
			// redefine y for adjusting the gap
			yRangeBand = bar_height + 2 * gap;
			y = function(i) { return yRangeBand * i; };
			
			chart = d3.select($("#chart")[0])
				.append('svg')
				.attr('class', 'chart')
				.attr('width', left_width + width + 40)
				.attr('height', (bar_height + gap * 2) * names.length + 30)
				.append("g")
				.attr("transform", "translate(10, 20)");
			
			chart.selectAll("line")
				.data(x.ticks(d3.max(cost)))
				.enter().append("line")
				.attr("x1", function(d) { return x(d) + left_width; })
				.attr("x2", function(d) { return x(d) + left_width; })
				.attr("y1", 0)
				.attr("y2", (bar_height + gap * 2) * names.length);
			
			chart.selectAll(".rule")
				.data(x.ticks(d3.max(cost)))
				.enter().append("text")
				.attr("class", "rule")
				.attr("x", function(d) { return x(d) + left_width; })
				.attr("y", 0)
				.attr("dy", -6)
				.attr("text-anchor", "middle")
				.attr("font-size", 12)
				.text(String);
			
			chart.selectAll("rect")
				.data(cost)
				.enter().append("rect")
				.attr("x", left_width)
				.attr("y", function(d, i) { return y(i) + gap; })
				.attr("width", x)
				.attr("height", bar_height);
			
			chart.selectAll("text.score")
				.data(cost)
				.enter().append("text")
				.attr("x", function(d) { return x(d) + left_width; })
				.attr("y", function(d, i) { return y(i) + yRangeBand/2;})
				.attr("dx", -5)
				.attr("dy", ".36em")
				.attr("text-anchor", "end")
				.attr('class', 'score')
				.text(String);
			
			chart.selectAll("text.name")
				.data(names)
				.enter().append("text")
				.attr("x", left_width - 10)
				.attr("y", function(d, i){ return y(i) + yRangeBand/2; } )
				.attr("dy", ".36em")
				.attr("text-anchor", "end")
				.attr('class', 'name')
				.text(String);
		
		}(jQuery));
	</script>
</html>