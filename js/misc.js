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

function createBarChart(jsonData, table) {
	d3.select("#barChart").selectAll("*").remove();
	var rangeScale = 0;
	if (table === "Genre") {
		rangeScale = 5;
	}
	else if (table === "Show") {
		rangeScale = 20;
	}
	else if (table === "Location") {
		rangeScale = 1;
	}

	var margin = {top: 30, right: 20, bottom: 60, left: 40},
		width = 960 - margin.left - margin.right,
		height = 500 - margin.top - margin.bottom;

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

	var svg = d3.select("#barChart")
		.attr("width", width + (2*margin.left) + margin.right)
		.attr("height", height + margin.top + margin.bottom)
		.append("g")
		.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

	x.domain(jsonData.map(function(d) { return d.L; }));
	y.domain([0, d3.max(jsonData, function(d) { return parseFloat(d.C);})]);

	svg.append("g")
		.attr("class", "x axis")
		.attr("transform", "translate(0," + height + ")")
		.call(xAxis)
		.selectAll("text")
		.style("text-anchor", "end")
		.attr("dx", "-.8em")
		.attr("dy", ".15em")
		.attr("transform", function(d) { return "rotate(-65)"});

	svg.append("g")
		.attr("class", "y axis")
		.call(yAxis)
		.append("text")
		.attr("transform", "rotate(-90)")
		.attr("y", -10)
		.attr("dy", ".71em")
		.style("text-anchor", "end")
		.text("Count/Sum");

	svg.selectAll(".bar")
		.data(jsonData)
		.enter()
		.append("rect")
		.attr("class", "bar")
		.attr("x", function(d) { return x(d.L); })
		.attr("width", x.rangeBand())
		.attr("y", function(d) { return y(parseFloat(d.C)); })
		.attr("height", function(d) { return height - y(parseFloat(d.C)); });
}