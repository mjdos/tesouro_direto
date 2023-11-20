<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('myChart').getContext('2d');

        // Dados passados pelo controlador
        var data = {
            labels: {
                !!json_encode($minutes) !!
            }, // Rótulos dos minutos
            datasets: [{
                label: 'Preço do Bitcoin'
                , data: {
                    !!json_encode($prices) !!
                }, // Valores dos minutos
                borderColor: 'rgba(75, 192, 192, 1)'
                , borderWidth: 1
                , fill: false
            }]
        };

        var myChart = new Chart(ctx, {
            type: 'line'
            , data: data
            , options: {
                scales: {
                    x: [{
                        type: 'linear'
                        , position: 'bottom'
                    }]
                }
            }
        });
    });

</script>
