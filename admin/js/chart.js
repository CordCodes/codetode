window.onload = function () {
	var chart = new CanvasJS.Chart("chart", {
		title:{
			text: "Sales"
		},
		data: [
		{
			type: "column",
			dataPoints: [
				{ label: "5 Stickers",  y: 10  },
				{ label: "10 Stickers", y: 15  },
				{ label: "20 Stickers", y: 25  },
				{ label: "Code Mug",  y: 30  }
			]
		}
		]
	});
	chart.render();
}
