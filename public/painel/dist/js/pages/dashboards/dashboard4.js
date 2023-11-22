// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 4 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function () {
	"use strict";

	// -----------------------------------------------------------------------
	// Gráfico de Visitas x Favoritos
	// -----------------------------------------------------------------------
	var options_overview = {
		series: [{
			name: "Visitas",
			data: [5, 6, 3, 7, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 8]
		}, {
			name: "Favoritos",
			data: [1, 2, 8, 3, 4, 5, 7, 6, 5, 6, 4, 3, 3, 12, 5, 6, 3]
		}],
		chart: {
			height: 400,
			type: 'line',
			fontFamily: '"Nunito Sans",sans-serif',
			zoom: {
				enabled: false
			},
			toolbar: {
				show: false
			},
		},
		colors: ["#2962ff", "#dadada"],
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: 'straight',
			colors: ["#2962ff", "#dadada"],
			width: 1,
		},
		markers: {
			size: 4,
			colors: ["#2962ff", "#dadada"],
			strokeColors: 'transparent',
		},
		grid: {
			show:  false,
		},
		xaxis: {
			type: 'category',
			categories: [
			  '1',
			  '2',
			  '3',
			  '4',
			  '5',
			  '6',
			  '7',
			  '8',
			  '9',
			  '10',
			  '11',
			  '12',
			  '13',
			  '14',
			  '15',
			  '16',
			  '17',
			],
			labels: {
			  style: {
				colors: '#a1aab2'
			  }
			}
	 	},
	 	yaxis: {
	 		labels: {
			  style: {
				colors: '#a1aab2'
			  }
			}
	 	},
		legend: {
			show: false,
		},
		tooltip: {
			theme: "dark",
		},
	};

	var chart_line_overview = new ApexCharts(document.querySelector(".user-overview"), options_overview);
	chart_line_overview.render();

	// -----------------------------------------------------------------------
	// revenue
	// -----------------------------------------------------------------------
	var option_revenue = {
        series: [45, 27, 18, 15],
        labels: ["Email", "Mobile", "Other", "Website"],
        chart: {
            type: 'donut',
            height: 350,
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 0,
        },
        plotOptions: {
            pie: {
                expandOnClick: true,
                donut: {
                    size: '70',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            offsetY: 10,

                        },
                        value: {
                            show: false,
                        },
                        total: {
                            show: true,
                            color: '#a1aab2',
                            fontSize: '13px',
                            label: 'Revenue',
                        }
                    },
                },
            },
        },
        colors: ['#40c4ff','#ff821c', '#7e74fb', '#2961ff'],
        tooltip: {
            show: true,
            fillSeriesColor: false,
            style: {
			fontFamily: '"Nunito Sans", sans- serif',
		},
        },
        legend: {
            show: true,
            position: 'bottom',
             labels: {
                  colors: "#a1aab2",
              },
              markers: {
                  radius: 0,
              },
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
            }
        }]
    };

    var chart_pie_donut = new ApexCharts(document.querySelector(".revenue"), option_revenue);
    chart_pie_donut.render();

	// -----------------------------------------------------------------------
    	// conversation rate
    	// -----------------------------------------------------------------------
    	var options_conversation = {
        series: [{
            name: "Conversation A",
            data: [5, 6, 3, 7, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 8]
        }, {
            name: "Conversation B",
            data: [1, 2, 8, 3, 4, 5, 7, 6, 5, 6, 4, 3, 3, 12, 5, 6, 3]
        }],
        chart: {
            height: 400,
            type: 'line',
            fontFamily: '"Nunito Sans",sans-serif',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            },
        },
        colors: ["#fb8c00", "#2962ff"],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            colors: ["#2962ff", "#fb8c00"],
            width: 1,
        },
        markers: {
            show: false
        },
        grid: {
            show: false
        },
        xaxis: {
            type: 'category',
            categories: ['0', '', '2', '', '4', '', '6', '', '8', '', '10', '', '12', '', '14', '', '16'],
            axisBorder :{
                show: true,
                color: 'rgba(0,0,0,0.5)',  
            },
            axisTicks: {
                show: true,
                borderType: 'solid',
                color: 'rgba(0,0,0,0.5)',
                height: 6,
                offsetX: 0,
                offsetY: 0
            },
            labels: {
                style: {
                    colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
                },
            },
        },
        yaxis: {
	 		labels: {
			  style: {
				colors: '#a1aab2'
			  }
			}
	 	},
        legend: {
            show: true,
            labels: {
                  colors: "#a1aab2",
              },
              markers: {
                  radius: 0,
              },
        },
        tooltip: {
            theme: "dark",
        },
    };

    	var chart_line_overview = new ApexCharts(document.querySelector(".conversation"), options_conversation);
    	chart_line_overview.render();
	
	// -----------------------------------------------------------------------
	// conversation rate
	// -----------------------------------------------------------------------
	var options_rate = {
        chart: {
            height: 230,
            type: "radialBar",
            fontFamily: '"Nunito Sans",sans-serif',
            sparkline: {
                enabled: true
            }
        },
        series: [85],
        colors: ["#2962ff"],
        fill: {
            opacity: 1
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 15,
                    size: "75%"
                },
                track: {
                    show: true,
                    background: '#dadada',
                    opacity: 1
                },
                dataLabels: {
                    showOn: "always",
                    name: {
                        show: true,
                        offsetY: 10
                    },
                    value: {
                        show: false
                    },
                    total: {
                        show: true,
                        fontSize: '13px',
                        fontWeight: 300,
                        color: '#a1aab2',
                        label: 'Coversation'
                    }
                }
            }
        },
        responsive: [{
            breakpoint: 1200,
            options: {
                height: 80
            }
        }],
        stroke: {
            lineCap: "sqare",
        },
        tooltip: {
            enabled: true,
            theme: "dark",
            fillSeriesColor: false,
        }
    };

    var chart_conversation = new ApexCharts(document.querySelector(".conversation-rate"), options_rate);
    chart_conversation.render();

    	// -----------------------------------------------------------------------
	// active users
	// -----------------------------------------------------------------------
	var activeusers = {
        series: [{
            name: '',
            data: [4, 10, 9, 7, 9, 10, 11, 8, 10, 9, 6, 9, 5]
        }
        ],
        chart: {
            type: 'bar',
            height: 120,
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
                columnWidth: '40',
                barHeight: '100%',
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
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
                fontSize: '12px',
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

    	var chart_active_user = new ApexCharts(document.querySelector("#active-users"), activeusers);
    	chart_active_user.render();
	
	// -----------------------------------------------------------------------
	// earnings
	// -----------------------------------------------------------------------
	var options_earnings = {
        series: [{
            name: "Earnings",
            data: [0, 6, 3, 7, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 8]
        }],
        chart: {
            height: 125,
            type: 'line',
            fontFamily: '"Nunito Sans",sans-serif',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            },
            sparkline: {
                enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#2962ff'],
        stroke: {
            curve: 'smooth',
            colors: "#fff",
            width: 1,
        },
        grid: {
            show: false
        },
        xaxis: {
            show: false
        },
        yaxis: {
            show: false
        },
        tooltip: {
            theme: "dark",
        },
    };

    var chart_line_basic = new ApexCharts(document.querySelector(".total-earnings"), options_earnings);
    chart_line_basic.render();

});