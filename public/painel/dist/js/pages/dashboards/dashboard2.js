// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 2 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function() {
    "use strict";

    // -----------------------------------------------------------------------
    // wallet balance
    // -----------------------------------------------------------------------
    var balance = {
        series: [{
            name: "Balance ",
            labels: ["2012", "2013", "2014", "2015", "2016", "2017"],
            data: [12, 19, 3, 5, 2, 3]
        }],
        chart: {
            width: 150,
            height: 50,
            type: 'line',
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
        stroke: {
            curve: 'smooth',
            lineCap: 'square',
            colors: ['#4fc3f7'],
            width: 2,
        },
        markers: {
            size: 3,
            colors: ['#4fc3f7'],
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

    var chart_line_basic = new ApexCharts(document.querySelector("#wallet-balance"), balance);
    chart_line_basic.render();

    // -----------------------------------------------------------------------
    // referral earnings
    // -----------------------------------------------------------------------
    var referral_earnings = {
        series: [{
            name: '',
            data: [3, 10, 9, 11, 9, 10, 12]
        }
        ],
        chart: {
            type: 'bar',
            height: 50,
            width: 110,
            toolbar: {
                show: false,
            },
            sparkline: {
                enabled: true
            },
        },
        colors: ["#2962FF"],
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

    var chart_column_basic = new ApexCharts(document.querySelector("#referral-earnings"), referral_earnings);
    chart_column_basic.render();

    // -----------------------------------------------------------------------
    // estimated sales
    // -----------------------------------------------------------------------
    var estimated_sales = {
        chart: {
            type: "radialBar",
            offsetY: -10,
            offsetX: 50,
            width: 200,
            height: 130,
            sparkline: {
                enabled: true,
            }
        },
        series: [60],
        colors: ["#7e74fb"],
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
                    size: '25%',
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
        tooltip: {
            enabled: true,
            theme: "dark",
            fillSeriesColor: false,
            style: {
                fontFamily: '"Nunito Sans", sans- serif',
            }
        },
        labels: ["Estimated Sales"]
    };

    new ApexCharts(document.querySelector("#estimated-sales"), estimated_sales).render();

    // -----------------------------------------------------------------------    
    // Real Time chart
    // -----------------------------------------------------------------------
    var data = [5, 10, 15, 20, 15, 30, 40],
        totalPoints = 100;

    function getRandomData() {
        if (data.length > 0) data = data.slice(1);
        // Do a random walk
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 10,
                y = prev + Math.random() * 10 - 5;
            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }
            data.push(y);
        }
        // Zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
        }
        return res;
    }
    // Set up the control widget
    var updateInterval = 1000;
    $("#updateInterval").val(updateInterval).change(function() {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
            updateInterval = +v;
            if (updateInterval < 1) {
                updateInterval = 1;
            } else if (updateInterval > 3000) {
                updateInterval = 3000;
            }
            $(this).val("" + updateInterval);
        }
    });
    var plot = $.plot("#real-time", [getRandomData()], {
        series: {
            shadowSize: 0, // Drawing is faster without shadows
            lines: { fill: true, fillColor: '#ffe65d' },
        },
        yaxis: {
            min: 0,
            max: 100,
            show: true
        },
        xaxis: {
            show: true
        },
        colors: ["#ffe65d"],
        grid: {
            color: "#AFAFAF",
            hoverable: true,
            borderWidth: 0,
            backgroundColor: 'transparent'
        },
        tooltip: true,
        tooltipOpts: {
            content: "Visits: %x",
            defaultTheme: false
        }
    });
    window.onresize = function(event) {
        $.plot($("#real-time"), [getRandomData()]);
    }

    function update() {
        plot.setData([getRandomData()]);
        // Since the axes don't change, we don't need to call plot.setupGrid()
        plot.draw();
        setTimeout(update, updateInterval);
    }
    update();

    // -----------------------------------------------------------------------
    // active users
    // -----------------------------------------------------------------------
    var active_users = {
        series: [{
                name: '',
                data: [6, 10, 9, 11, 9, 10, 12, 10, 9, 11, 9, 10, 12, 10, 9, 11, 9, 10, 12]
            }
        ],
        chart: {
            type: 'bar',
            width: 220,
            height: 60,
            toolbar: {
                show: false,
            },
            sparkline: {
                enabled: true
            }
        },
        colors: ["#2962FF"],
        grid: {
            show: false,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                startingShape: 'flat',
                endingShape: 'flat',
                columnWidth: '75%',
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

    var chart_column_bar = new ApexCharts(document.querySelector("#active-users"), active_users);
    chart_column_bar.render();

    // -----------------------------------------------------------------------
    // device visit
    // -----------------------------------------------------------------------
    var device_visit = {
        series: [60, 28, 12],
        labels: ["Desktop", "Mobile", "Tablet"],
        chart: {
            type: 'donut',
            height: 230,
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
                            label: 'Visits',
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

    var chart_pie_donut = new ApexCharts(document.querySelector("#device-visit"), device_visit);
    chart_pie_donut.render();    
    
    // -----------------------------------------------------------------------
    // world map
    // -----------------------------------------------------------------------
    jQuery('#visitfromworld').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        borderColor: '#000',
        borderOpacity: 0,
        borderWidth: 0,
        zoomOnScroll: false,
        color: '#93d5ed',
        regionStyle: {
            initial: {
                fill: '#93d5ed',
                'stroke-width': 1,
                'stroke': '#fff'
            }
        },
        markerStyle: {
            initial: {
                r: 5,
                'fill': '#93d5ed',
                'fill-opacity': 1,
                'stroke': '#93d5ed',
                'stroke-width': 1,
                'stroke-opacity': 1
            },
        },
        enableZoom: true,
        hoverColor: '#79e580',
        markers: [{
                latLng: [21.00, 78.00],
                name: 'India : 9347',
                style: { fill: '#2961ff' }
            },
            {
                latLng: [-33.00, 151.00],
                name: 'Australia : 250',
                style: { fill: '#ff821c' }
            },
            {
                latLng: [36.77, -119.41],
                name: 'USA : 250',
                style: { fill: '#40c4ff' }
            },
            {
                latLng: [55.37, -3.41],
                name: 'UK   : 250',
                style: { fill: '#398bf7' }
            },
            {
                latLng: [25.20, 55.27],
                name: 'UAE : 250',
                style: { fill: '#6fc826' }
            }
        ],
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#93d5ed', '#93d5ee'],
        selectedColor: '#c9dfaf',
        selectedRegions: [],
        showTooltip: true,
        onRegionClick: function(element, code, region) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
            alert(message);
        }
    });
});