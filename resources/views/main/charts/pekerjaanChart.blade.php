<div class="card mx-5 p-5">
    <h1 class="text-center"><b>Pekerjaan</b></h1>
    <canvas id="pekerjaanChart" class="m-5 p-4 border rounded" width=400 height=400></canvas>
</div>
<script>
    const pekerjaan = document.getElementById('pekerjaanChart').getContext('2d');
{{--    console.log({{ $labelPekerjaan }});--}}
    const pekerjaanChart = new Chart(pekerjaan, {
        type: 'bar',
        data: {
            // labels: ['Balita', 'Anak-Anak', 'Remaja', 'Dewasa', 'Lansia', 'Manula'],
{{--            labels: {{ $labelPekerjaan }},--}}
            datasets: [{
                label: 'Penduduk',
                data: [
{{--                    {{ $pekerjaans['WIRASWASTA'] }}--}}
                    1,
                    2,
                    3,
                    4
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
            indexAxis: 'y',
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
