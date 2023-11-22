// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 8 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function() {
    "use strict";
    
    // -----------------------------------------------------------------------
    // month overview
    // -----------------------------------------------------------------------
    var chart_month_overview = {
        series: [
            {
                name: "Iphone",
                data: [0, 5, 6, 8, 25, 9, 8, 24],
            },
            {
                name: "Ipad",
                data: [0, 3, 1, 2, 8, 1, 5, 1],
            },
        ],
        chart: {
            fontFamily: "Nunito Sans,sans-serif",
            height: 250,
            type: "area",
            toolbar: {
                show: false,
            },
        },
        grid: {
            show: true,
            borderColor: "rgba(0,0,0,.1)",
            xaxis: {
                lines: {
                    show: true,
                },
            },
            yaxis: {
                lines: {
                    show: true,
                },
            },
        },
        colors: ["#2962ff", "#4fc3f7"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
            width: 2,
        },
        markers: {
            size: 3,
            strokeColors: "transparent",
        },
        xaxis: {
            categories: ["1", "2", "3", "4", "5", "6", "7", "8"],
            labels: {
                style: {
                    colors: [
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                    ],
                },
            },
        },
        yaxis: {
            labels: {
                style: {
                    colors: [
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                    ],
                },
            },
        },
        tooltip: {
            x: {
                format: "dd/MM/yy HH:mm",
            },
            theme: "dark",
        },
        legend: {
            show: false,
        },
    };

    var chart_area_spline = new ApexCharts(
        document.querySelector(".month-overview"),
        chart_month_overview
    );
    chart_area_spline.render();

    // -----------------------------------------------------------------------
    // revenue charts
    // -----------------------------------------------------------------------
    var options_product = {
        series: [{
            name: 'Site A ',
            data: [ 5, 6, 3, 7, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 8]
        }, {
            name: 'Site B ',
            data: [1, 2, 8, 3, 4, 5, 7, 6, 5, 6, 4, 3, 3, 12, 5, 6, 3]
        }],
        chart: {
            fontFamily: '"Nunito Sans", sans-serif',
            type: 'bar',
            height: 350,
            toolbar: {
                show: false,
            },

        },
        grid: {
            show: false
        },
        colors: ['#2962ff', '#4fc3f7', '#f62d51'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '30%',
                endingShape: 'flat'
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
            type: 'category',
            categories: ['0', '', '2', '', '4', '', '6', '', '8', '', '10', '', '12', '', '14', '', '16'],
            
            
            labels: {
                style: {
                    colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
                },
            },
        },
        yaxis: {
            axisBorder: {
                show: true,
                borderColor: "rgba(0,0,0,0.5)"
            },
            labels: {
                style: {
                    colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
                },
            },
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            theme: "dark",
        },
        legend: {
            show: false
        }
    };

    var chart_column_basic = new ApexCharts(document.querySelector(".revenue-chart"), options_product);
    chart_column_basic.render();

    // -----------------------------------------------------------------------
    // conversation chart
    // -----------------------------------------------------------------------
    var options_rate = {
        chart: {
            height: 280,
            type: "radialBar",
            fontFamily: '"Nunito Sans", sans-serif',
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
            fillSeriesColor: false
        }
    };

    var chart_radial = new ApexCharts(document.querySelector(".conversation-chart"), options_rate);
    chart_radial.render();

    // -----------------------------------------------------------------------
    // session chart
    // -----------------------------------------------------------------------
    var chart_session = {
        series: [65, 17, 15],
        labels: ["Success", "Failed", "Pending"],
        chart: {
            type: 'donut',
            height: 250,
            fontFamily: '"Nunito Sans", sans-serif',
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
                            label: 'Sessions',
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

    var chart_pie_donut_chart_session = new ApexCharts(document.querySelector(".sessions-chart"), chart_session);
    chart_pie_donut_chart_session.render();

    // -----------------------------------------------------------------------
    // device variations
    // -----------------------------------------------------------------------
    var chart_device_variation = {
        series: [60, 40, 28, 12],
        labels: ["None", "Desktop", "Mobile", "Tablet"],
        chart: {
            type: 'donut',
            height: 240,
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
                            offsetY: 10,
                        },
                        value: {
                            show: false,
                        },
                        total: {
                            show: true,
                            fontSize: '13px',
                            color: '#a1aab2',
                            label: 'Variations',
                        }
                    },
                },
            },
        },
        colors: ['#e9edf2', '#40c4ff', '#ff821c', '#2961ff'],
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

    var chart_pie_donut = new ApexCharts(document.querySelector(".device-variations"), chart_device_variation);
    chart_pie_donut.render();

    // -----------------------------------------------------------------------
    // net income
    // -----------------------------------------------------------------------
    var options_net_income = {
        series: [{
            name: 'Income ',
            data: [5, 4, 3, 7, 5, 10, 3]
        }],
        chart: {
            fontFamily: '"Nunito Sans", sans-serif',
            type: 'bar',
            height: 265,
            toolbar: {
                show: false,
            },

        },
        grid: {
            yaxis: {
                lines: {
                    borderColor: 'transparent',
                    show: false
                }
            }
        },
        colors: ['#2962ff'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '40%',
                columnHeight: '100%',
                endingShape: 'flat'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 4,
            colors: ['transparent']
        },
        xaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            categories: ['1-3', '2-4', '3-5', '4-6', '5-7', '6-8', '7-9'],
            labels: {
                style: {
                    colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
                },
            },
        },
        yaxis: {
            labels: {
                style: {
                    colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
                },
            },
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$ " + val
                }
            },
            theme: "dark",
        },
        legend: {
            labels: {
                colors: ["#a1aab2"],
            },
        }
    };

    var chart_column_basic = new ApexCharts(document.querySelector(".net-income"), options_net_income);
    chart_column_basic.render();

    // -----------------------------------------------------------------------
    // sales performance
    // -----------------------------------------------------------------------
    var option_sales = {
        series: [45, 27, 15],
        labels: ["2011", "2013", "2012"],
        chart: {
            type: 'donut',
            height: 115,
            width: 115,
            fontFamily: '"Nunito Sans", sans-serif',
            sparkline: {
                enabled: true
            }
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
                    size: '60',
                    labels: {
                        show: false,
                        name: {
                            show: false,
                            offsetY: 10,
                        },
                        value: {
                            show: false,
                        },
                        total: {
                            show: false,
                        }
                    },
                },
            },
        },
        colors: ['#40c4ff', '#ff821c', '#2961ff'],
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

    var chart_pie_donut = new ApexCharts(document.querySelector(".sales-performance"), option_sales);
    chart_pie_donut.render();

    // -----------------------------------------------------------------------
    // monthly sales
    // -----------------------------------------------------------------------
    var chart_monthly_sales = {
        chart: {
            height: 200,
            width: 130,
            type: "radialBar",
            fontFamily: '"Nunito Sans", sans-serif',
        },
        series: [85],
        colors: ["#2a65ff"],
        plotOptions: {
            radialBar: {
                startAngle: -90,
                endAngle: 90,
                track: {
                    background: '#E0E0E0',
                    startAngle: -90,
                    endAngle: 90,
                },
                hollow: {
                    size: '30%',
                },
                dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        fill: {
            type: "solid",
        },
        stroke: {
            lineCap: "butt"
        },
        labels: ["Monthly sales"],
        tooltip: {
            enabled: true,
            theme: "dark",
            fillSeriesColor: false
        }
    };

    new ApexCharts(document.querySelector(".monthly-sales"), chart_monthly_sales).render();
});