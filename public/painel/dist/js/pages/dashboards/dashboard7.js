// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 7 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function() {
    "use strict";

    // -----------------------------------------------------------------------
    // overview of email campaigns
    // -----------------------------------------------------------------------
    var options_campaign = {
        series: [{
            name: 'A',
            data: [3, 8, 2, 3, 2, 5, 6]
        }, {
            name: 'B',
            data: [7, 6, 5, 8, 6, 7, 2]
        }],
        chart: {
            fontFamily: 'Nunito Sans,sans-serif',
            height: 170,
            type: 'area',
            toolbar: {
                show: false,
            },
            sparkline: {
                enabled: true
            }
        },
        grid: {
            borderColor: 'rgba(0,0,0,0.3)',
        },
        colors: ['#2961ff', '#4fc3f7'],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 1
        },
        fill: {
            type: "solid",
            opacity: 0.4
        },
        markers: {
            size: 3,
            colors: ['#2961ff', '#4fc3f7'],
            strokeColors: 'transparent',
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"],
            labels: {
                style: {
                    colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
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
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
            theme: "dark",
        },
        legend: {
            labels: {
                colors: ["#a1aab2"]
            }
        }
    };

    var chart_area_spline = new ApexCharts(document.querySelector(".overview-campaign"), options_campaign);
    chart_area_spline.render();

    // -----------------------------------------------------------------------
   // total visits
   // -----------------------------------------------------------------------
   var option_visits = {
        series: [{
            name: '',
            data: [6, 10, 9, 11, 9, 10, 12, 10, 9, 11, 9, 10, 12, 10, 9, 11, 9, 9, 11, 9, 10, 12, 10]
        }
        ],
        chart: {
            type: 'bar',
            height: 60,
            toolbar: {
                show: false,
            },
            sparkline: {
                enabled: true
            }
        },
        colors: ["#4dd0e1"],
        grid: {
            show: false,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                startingShape: 'flat',
                endingShape: 'flat',
                columnWidth: '60%',
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

    var chart_column_visit = new ApexCharts(document.querySelector(".total-visits"), option_visits);
    chart_column_visit.render();

    // -----------------------------------------------------------------------
    // sales ratio
    // -----------------------------------------------------------------------
    var options_sales_ratio = {
        series: [{
            name: "Ratio ",
            data: [5, 6, 3, 7, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 8, 6, 8, 5]
        }],
        chart: {
            height: 60,
            type: 'area',
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
            width: 2,
        },
        fill: {
            type: 'solid',
            opacity: 0.2
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

    var chart_line_basic = new ApexCharts(document.querySelector(".sales-ratio"), options_sales_ratio);
    chart_line_basic.render();

    // -----------------------------------------------------------------------
    // order status
    // -----------------------------------------------------------------------
    var visitors = {
        series: [45, 27, 15],
        labels: ["Success", "Failed", "Pending"],
        chart: {
            type: 'donut',
            height: 150,
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
                    size: '55',
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            offsetY: 7,

                        },
                        value: {
                            show: false,
                        },
                        total: {
                            show: true,
                            color: '#a1aab2',
                            fontSize: '13px',
                            label: '75%',
                        }
                    },
                },
            },
        },
        colors: ["#4fc3f7", "#fb8c00", "#2962ff"],
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

    var chart_pie_donut = new ApexCharts(document.querySelector(".order-status"), visitors);
    chart_pie_donut.render();

    // -----------------------------------------------------------------------
    // revenue statics
    // -----------------------------------------------------------------------
    var ravenue = {
        series: [{
            name: '',
            data: [20, 55, 44, 30, 61, 48, 20]
        }
        ],
        chart: {
            type: 'bar',
            width: 95,
            height: 100,
            toolbar: {
                show: false,
            },
            sparkline: {
                enabled: true
            },
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
            width: 7,
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

    var chart_column_basic = new ApexCharts(document.querySelector(".revenue"), ravenue);
    chart_column_basic.render();

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
            height: 65,
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
    // bounce rate
    // -----------------------------------------------------------------------
    var bouncerate = {
        series: [{
            name: "Rate ",
            labels: ["2012", "2013", "2014", "2015", "2016", "2017"],
            data: [12, 19, 3, 8, 2, 3]
        }],
        chart: {
            width: 150,
            height: 55,
            type: 'line',
            toolbar: {
                show: false
            },
            sparkline: {
                enabled: true
            },
        },
        fill: {
            type: 'solid',
            opacity: 1,
            colors: ['#2962ff']
        },
        grid: {
            show: false,
        },
        stroke: {
            curve: 'smooth',
            lineCap: 'square',
            colors: ['#2962ff'],
            width: 3,
        },
        markers: {
            size: 3,
            colors: ['#2962ff'],
            strokeColors: 'transparent',
            shape: 'square',
            hover: {
                size: 7,
            }
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
        fill: {
            type: 'solid',
            colors: ['#FDD835'],
        },
        yaxis: {
            labels: {
                show: false,
            },
        },
        tooltip: {
            theme: "dark",
            style: {
                fontFamily: '"Nunito Sans", sans- serif',
            },
            x: {
                show: false
            },
            y: {
                formatter: undefined,
            },
            marker: {
                show: false,
            },
            followCursor: true,
        },
    };

    var chart_line_basic = new ApexCharts(document.querySelector(".bounce-rate"), bouncerate);
    chart_line_basic.render();
});