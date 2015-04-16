function createPieChart(jsonData) {
	d3.select("#chart").selectAll("*").remove();
	var data = [];
	for (var i = 0; i < jsonData.length; i++) {
		var obj = { "label": jsonData[i][0], "value": jsonData[i][1]};
		data.push(obj);
	}
	var width = 1024, 
		height = 500, 
		radius = Math.min(width, height) / 2,
		labelr = radius - 100;
	var color = d3.scale.category20c();

	var vis = d3.select('#chart')
		.data([data])
		.attr("width", width)
		.attr("height", height)
		.append("svg:g")
		.attr("transform", "translate(" + radius + "," + radius + ")");

	var arc = d3.svg.arc()
		.outerRadius(radius);

	var pie = d3.layout.pie()
		.value(function(d) { return d.value; });

	var arcs = vis.selectAll("g.slice")
		.data(pie)
		.enter()
		.append("svg:g")
		.attr("class", "slice");

	arcs.append("svg:path")
		.attr("fill", function(d, i) { return color(i); })
		.attr("d", arc);

	arcs.append("svg:text")
		.attr("transform", function(d) {
			d.innerRadius = 0;
			d.outerRadius = radius;
			var c = arc.centroid(d),
				x = c[0],
				y = c[1],
				h = Math.sqrt(x*x + y*y);
			return "translate(" + (x/h * labelr) +  ',' + (y/h * labelr) +  ")";
		})
		.attr("text-anchor", function(d) {
			return (d.endAngle + d.startAngle) / 2 > Math.PI ? "end" : "start";
		})
		.text(function(d,i) { return data[i].label + ": " + data[i].value + "%"; });
}