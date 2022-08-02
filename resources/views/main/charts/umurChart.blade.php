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
                    {{ $kategori_umur['balita'] }},  /* data balita */
                    {{ $kategori_umur['anak'] }},   /* data anak2  */
                    {{ $kategori_umur['remaja'] }},  /* data remaja */
                    {{ $kategori_umur['dewasa'] }},   /* data dewasa  */
                    {{ $kategori_umur['lansia'] }},  /* data lansia */
                    {{ $kategori_umur['manula'] }},   /* data manula  */
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
