function createPieChart(jsonData) {
	d3.select("#chart").selectAll("*").remove();
	var data = [];
	for (var i = 0; i < jsonData.length; i++) {
		var obj = { "label": jsonData[i][0], "value": jsonData[i][1]};
		data.push(obj);
	}
	var width = 960, 
		height = 500, 
		radius = Math.min(width, height) / 2;
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
			return "translate(" + arc.centroid(d) + ")";
		})
		.attr("text-anchor", "middle")
		.text(function(d,i) { return data[i].label; });
}