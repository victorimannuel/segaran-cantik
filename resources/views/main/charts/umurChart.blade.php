<div class="card mx-5 p-5">
    <h1 class="text-center"><b>Umur</b></h1>
    <canvas id="umurChart" class="m-5 p-4 border rounded" width=400 height=400></canvas>
    
</div>
<script>
    const umur = document.getElementById('umurChart').getContext('2d');
    const umurChart = new Chart(umur, {
        type: 'pie',
        data: {
            labels: ['Balita', 'Anak-Anak', 'Remaja', 'Dewasa', 'Lansia', 'Manula'],
            datasets: [{
                label: 'Penduduk',
                data: [
                    {{ '1000'  }},  /* data balita */
                    {{ '600'  }},   /* data anak2  */
                    {{ '1000'  }},  /* data remaja */
                    {{ '600'  }},   /* data dewasa  */
                    {{ '1000'  }},  /* data lansia */
                    {{ '600'  }},   /* data manula  */
                ],
                backgroundColor: [
                    'rgb(105, 180, 102)',
                    'rgb(42, 76, 151)',
                    'rgb(253, 159, 97)',
                    'rgb(252, 221, 92)',
                    'rgb(234, 110, 120)',
                    'rgb(128, 41, 92)'
                ],
                hoverOffset: 4
            }]
        },
        options: {
            tooltips: {
                enabled: false
            },
            plugins: {
                datalabels: {
                    formatter: function(value, context) {
                        return context.chart.data.labels[context.dataIndex];
                    }
                }
            }
        }
    });
    </script>