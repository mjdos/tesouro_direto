<script>
        document.addEventListener('DOMContentLoaded', function() {
            var options = {
                series: [{
                    name: {!! json_encode($names) !!},
                    data: {!! json_encode($prices) !!},
                }],
                chart: {
                    type: 'line',
                    height: 200,
                },
                xaxis: {
                    categories: {!! json_encode($minutes) !!},
                },
                colors: ['#5d78ff'],
                stroke: {
                    curve: 'smooth',
                },
                markers: {
                    size: 4,
                },
                grid: {
                    borderColor: '#f1f3fa',
                },
                tooltip: {
                    enabled: true,
                    theme: 'light',
                },
                legend: {
                    show: false,
                },
            };

            var chart = new ApexCharts(document.getElementById('kt_chart_order_statistics_chart'), options);
            chart.render();
        });
    </script>