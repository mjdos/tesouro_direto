// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 9 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------

$(function() {
    "use strict";
    var options_stacked = {
        series: [{
            name: '',
            data: [5, 4, 3, 7, 5, 10, 3, 5, 4, 3, 7, 10]
        }, {
            name: '',
            data: [2, 6, 5, 3, 4, 9, 6, 7, 3, 8, 10, 6]
        }],
        chart: {
            fontFamily: '"Nunito Sans", sans-serif',
            type: 'bar',
            height: 250,
            stacked: true,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: true
            }
        },
        grid: {
            borderColor: 'rgba(0,0,0,0.1)',
        },
        colors: ['#2962ff', '#4fc3f7', '#414755', '#f62d51'],
        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    position: 'bottom',
                    offsetX: -10,
                    offsetY: 0
                }
            }
        }],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '50%',
            },
        },
        dataLabels: {
            enabled: false,
        },
        grid: {
            show: false
        },
        xaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            labels: {
                style: {
                    colors: ["#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2", "#a1aab2"],
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
        tooltip: {
            theme: "dark",
        },
        legend: {
            show: false
        },
        fill: {
            opacity: 1
        }
    };

    var chart_column_stacked = new ApexCharts(document.querySelector(".notify-chart"), options_stacked);
    chart_column_stacked.render();

    // email campaign
    var visitors = {
        series: [45, 27, 18, 15],
        labels: ["Open", "Un-opened", "Bounced", "Clicked"],
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
                    size: '67',
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
                            fontSize: '13px',
                            color: '#a1aab2',
                            label: 'Ratio',
                        }
                    },
                },
            },
        },
        colors: ['#40c4ff', '#ff821c', '#7e74fb', '#2961ff'],
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

    var chart_pie_donut = new ApexCharts(document.querySelector(".email-campaign"), visitors);
    chart_pie_donut.render();

});