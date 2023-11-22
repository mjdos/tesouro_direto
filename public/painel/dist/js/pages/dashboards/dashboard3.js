// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 3 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function () {
	"use strict";

	// -----------------------------------------------------------------------
	// Crpto card (1)
	// -----------------------------------------------------------------------
	var crypto = {
		series: [{
			name: '',
			data: [4, 8, 6, 9, 7, 8, 12]
		}
		],
		chart: {
			type: 'bar',
			width: 60,
			height: 30,
			toolbar: {
				show: false,
			},
			sparkline: {
				enabled: true
			}
		},
		colors: ["#fff"],
		grid: {
			show: false,
		},
		plotOptions: {
			bar: {
				horizontal: false,
				startingShape: 'flat',
				endingShape: 'flat',
				columnWidth: '50',
				barHeight: '100%',
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 0,
			colors: ['transparent']
		},
		xaxis: {
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},
			labels: {
				show: false,
			},
		},
		yaxis: {
			labels: {
				show: false,
			},
		},
		axisBorder: {
			show: false,
		},
		fill: {
			opacity: 1
		},
		tooltip: {
			theme: "dark",
			style: {
				fontFamily: '"Nunito Sans", sans- serif',
			},
			x: {
				show: false,
			},
			y: {
				formatter: undefined,
			}
		}
	};
	var chart_column_crypto = new ApexCharts(
		document.querySelector(".crypto"),
		crypto
	);
	chart_column_crypto.render();

	// -----------------------------------------------------------------------
	// Crpto card (2)
	// -----------------------------------------------------------------------
	var crypto2 = {
		series: [{
			name: '',
			data: [4, 8, 6, 9, 7, 8, 12]
		}
		],
		chart: {
			type: 'bar',
			width: 60,
			height: 30,
			toolbar: {
				show: false,
			},
			sparkline: {
				enabled: true
			}
		},
		colors: ["#fff"],
		grid: {
			show: false,
		},
		plotOptions: {
			bar: {
				horizontal: false,
				startingShape: 'flat',
				endingShape: 'flat',
				columnWidth: '50',
				barHeight: '100%',
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 0,
			colors: ['transparent']
		},
		xaxis: {
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},
			labels: {
				show: false,
			},
		},
		yaxis: {
			labels: {
				show: false,
			},
		},
		axisBorder: {
			show: false,
		},
		fill: {
			opacity: 1
		},
		tooltip: {
			theme: "dark",
			style: {
				fontFamily: '"Nunito Sans", sans- serif',
			},
			x: {
				show: false,
			},
			y: {
				formatter: undefined,
			}
		}
	};
	var chart_column_crypto2 = new ApexCharts(
		document.querySelector(".crypto2"),
		crypto2
	);
	chart_column_crypto2.render();

	// -----------------------------------------------------------------------
	// Crpto card (3)
	// -----------------------------------------------------------------------
	var crypto3 = {
		series: [{
			name: '',
			data: [4, 8, 6, 9, 7, 8, 12]
		}
		],
		chart: {
			type: 'bar',
			width: 60,
			height: 30,
			toolbar: {
				show: false,
			},
			sparkline: {
				enabled: true
			}
		},
		colors: ["#fff"],
		grid: {
			show: false,
		},
		plotOptions: {
			bar: {
				horizontal: false,
				startingShape: 'flat',
				endingShape: 'flat',
				columnWidth: '50',
				barHeight: '100%',
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 0,
			colors: ['transparent']
		},
		xaxis: {
			axisBorder: {
				show: false,
			},
			axisTicks: {
				show: false,
			},
			labels: {
				show: false,
			},
		},
		yaxis: {
			labels: {
				show: false,
			},
		},
		axisBorder: {
			show: false,
		},
		fill: {
			opacity: 1
		},
		tooltip: {
			theme: "dark",
			style: {
				fontFamily: '"Nunito Sans", sans- serif',
			},
			x: {
				show: false,
			},
			y: {
				formatter: undefined,
			}
		}
	};
	var chart_column_crypto3 = new ApexCharts(
		document.querySelector(".crypto3"),
		crypto3
	);
	chart_column_crypto3.render();

	// -----------------------------------------------------------------------
	// Bitcoin / Ethereum / Ripple
	// -----------------------------------------------------------------------
	var options_btc_eth_rip = {
		series: [
		{
		  name: 'Ripple',
		  data: [0, 15, 15, 38, 8, 40, 20, 100, 70]
		},
		{
		  name: 'Ethereum',
		  data: [0, 35, 30, 60, 20, 80, 50, 180, 150]
		},
		{
		  name: 'Bitcoin',
		  data: [0, 80, 40, 100, 30, 150, 80, 270, 250]
		}
	  ],
		chart: {
			height: 350,
			type: 'area',
			stacked: true,
			fontFamily: '"Nunito Sans",sans-serif',
			zoom: {
				enabled: false
			},
			toolbar: {
				show: false
			}
		},
		colors: ['#1240c2', '#40c4ff', '#f8fafc'],
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'smooth',
			width: '2',
		  },
		fill: {
		type: "solid",
		colors: ['#ffffff', '#86d5f9', '#2052de'],
		opacity: 1
	  },
	  colors: ['#ffffff', '#86d5f9', '#2052de'],
	  legend: {
		show: false,
	  },
	  grid: {
		show: true,
		strokeDashArray: 0,
		borderColor: 'rgba(0,0,0,0.1)',
	  },
		xaxis: {
			axisBorder: {
				  show: false,
				  color: 'rgba(0,0,0,0.5)',
			  },
			  axisTicks: {
				  show: false,
			  },
			categories: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
			labels: {
				style: {
					colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
				},
			},
		},
		yaxis: {
			labels: {
				style: {
					colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
				},
			},
		},
		legend: {
			show: false
		},
		tooltip: {
			theme: "dark",
		},
	};

	var chart_line_overview = new ApexCharts(document.querySelector("#btc-eth-rip"), options_btc_eth_rip);
	chart_line_overview.render();
	
 });