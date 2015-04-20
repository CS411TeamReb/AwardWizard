function createPieChart(jsonData, table, column) {
	d3.select("#pieChart").selectAll("*").remove();
	var data = [];
	for (var i = 0; i < jsonData.length; i++) {
		var obj = { "label": jsonData[i][0], "value": parseFloat(jsonData[i][1])};
		data.push(obj);
	}
	var width = 400, 
		height = 400, 
		radius = 180,
		inner = 70;
	var color = d3.scale.category20c();

	var vis = d3.select('#pieChart')
		.data([data])
		.attr("width", width)
		.attr("height", height)
		.append("svg:g")
		.attr("transform", "translate(" + (radius * 1.1) + "," + (radius * 1.1) + ")");

	var textTop = vis.append("text")
		.attr("dy", ".35em")
		.style("text-anchor", "middle")
		.style("word-wrap", "break-word")
		.style("width", 20)
		.text(table)
		.attr("y", -10);

	var textBottom = vis.append("text")
		.attr("dy", ".35em")
		.style("text-anchor", "middle")
		.text(column)
		.attr("y", 10);

	var arc = d3.svg.arc()
		.innerRadius(inner)
		.outerRadius(radius);

	var arcOver = d3.svg.arc()
		.innerRadius(inner + 5)
		.outerRadius(radius + 5);

	var pie = d3.layout.pie()
		.value(function(d) { return d.value; });

	var arcs = vis.selectAll("g.slice")
		.data(pie)
		.enter()
		.append("svg:g")
		.attr("class", "slice")
		.on("mouseover", function(d) {
			d3.select(this).select("path").transition()
				.duration(200)
				.attr("d", arcOver);

			textTop.text(d3.select(this).datum().data.label)
				.attr("y", -10);

			textBottom.text(d3.select(this).datum().data.value.toFixed(2) + "%")
				.attr("y", 10);
		})
		.on("mouseout", function(d) {
			d3.select(this).select("path").transition()
				.duration(100)
				.attr("d", arc)

			textTop.text(table);
			textBottom.text(column);
		});

	arcs.append("svg:path")
		.attr("fill", function(d, i) { return color(i); })
		.attr("d", arc);
}