window.onload = function () {
	var chart = new CanvasJS.Chart("chart-monitor", {
		data: [
		{
			type: "column",
			dataPoints: [
				{ label: "5 Stickers",  y: 15  },
				{ label: "10 Stickers", y: 17  },
				{ label: "20 Stickers", y: 13  },
				{ label: "Code Mug",  y: 27  }
			]
		}
		]
	});
	chart.render();
}
