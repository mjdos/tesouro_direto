// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 6 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function() {
    "use strict";

    // -----------------------------------------------------------------------
    // earnings
    // -----------------------------------------------------------------------
    var chart_earnings = {
        series: [{
            name: '',
            data: [4, 10, 6, 9, 6, 8, 11, 7, 9, 10, 9, 10, 6, 10, 5, 3, 6]
        }
        ],
        chart: {
            type: 'bar',
            height: 60,
            fontFamily: '"Nunito Sans",sans-serif',
            toolbar: {
                show: false,
            },
            sparkline: {
                enabled: true
            }
        },
        colors: ["#4fc3f7"],
        grid: {
            show: false,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                startingShape: 'flat',
                endingShape: 'flat',
                columnWidth: '80%',
                barHeight: '100%',
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 5,
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

    var chart_column_bar = new ApexCharts(document.querySelector(".earnings-card"), chart_earnings);
    chart_column_bar.render();

    // -----------------------------------------------------------------------
    // revenue statics
    // -----------------------------------------------------------------------
    var option_revenue_statics = {
        series: [{
            name: '',
            data: [4, 10, 9, 11, 9, 10, 6, 10, 9, 11, 7, 10]
        }
        ],
        chart: {
            type: 'bar',
            width: 135,
            height: 75,
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
                columnWidth: '100%',
                barHeight: '100%',
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 6,
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

    var chart_column_revenue = new ApexCharts(document.querySelector(".revenue-statics"), option_revenue_statics);
    chart_column_revenue.render();

    // -----------------------------------------------------------------------
    // page views
    // -----------------------------------------------------------------------
    var views = {
        series: [{
            name: "Views ",
            data: [6, 10, 9, 11, 9, 10, 12]
        }],
        chart: {
            type: 'area',
            height: 45,
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false,
            },
            sparkline: {
                enabled: true
            },
        },
        grid: {
            show: false,
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight',
            width: 1,
            colors: ["rgba(255,255,255,.2)"]
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
        markers: {
            size: 0,
            strokeColors: 'transparent',
            strokeWidth: 2,
            shape: "circle",
            colors: ["#fff"],
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.5,
                opacityTo: 0.5,
                stops: [0, 90, 100]
            },
            colors: ['#fff', '#4fc3f7']
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
            },
            marker: {
                show: false,
            },
            followCursor: true,
        },
        legend: {
            show: false
        }
    };

    var chart_area_basic = new ApexCharts(document.querySelector(".page-views"), views);
    chart_area_basic.render();

    // -----------------------------------------------------------------------
    // result of poll
    // -----------------------------------------------------------------------
    var option_poll = {
        series: [45, 30, 27, 18, 15],
        labels: ["None", "A", "B", "C", "D"],
        chart: {
            type: 'donut',
            height: 170,
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
                    size: '77',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            offsetY: 8,
                        },
                        value: {
                            show: false,
                        },
                        total: {
                            show: true,
                            color: "#a1aab2",
                            fontSize: '13px',
                            label: 'Ans: A',
                        }
                    },
                },
            },
        },
        colors: ["#e9edf2", "#40c4ff", "#ff821c", "#4CAF50", "#2961ff"],
        tooltip: {
            show: true,
            fillSeriesColor: false,
        },
        legend: {
            show: false
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

    var chart_pie_donut = new ApexCharts(document.querySelector(".poll"), option_poll);
    chart_pie_donut.render();


    // -----------------------------------------------------------------------
    // world map
    // -----------------------------------------------------------------------
    $('#usa').vectorMap({
        map: 'us_aea_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        regionStyle: {
            initial: {
                fill: '#4fc3f7'
            }
        },
        markerStyle: {
            initial: {
                r: 5,
                'fill': '#fff',
                'fill-opacity': 1,
                'stroke': '#fff',
                'stroke-width': 1,
                'stroke-opacity': 1
            },
        },
        enableZoom: true,
        hoverColor: '#fff',
        markers: [{
            latLng: [31.96, -99.90],
            name: 'Texas',
            style: { fill: '#fff' }
        }, {
            latLng: [43.07, -107.29],
            name: 'Wyoming',
            style: { fill: '#fff' }
        }, {
            latLng: [40.63, -89.39],
            name: 'Illinois',
            style: { fill: '#fff' }
        }],
    });
});