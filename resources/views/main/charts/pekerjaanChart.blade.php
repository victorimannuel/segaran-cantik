<div class="card m-5 p-5">
    <h1 class="text-center"><b>Pekerjaan</b></h1>
    <canvas id="pekerjaanChart" class="m-5 p-4 border rounded" width=400 height=500></canvas>
</div>
<script>
    console.log('test');
    const pekerjaan = document.getElementById('pekerjaanChart').getContext('2d');
    let labelPekerjaan = eval('(' + @json($labelPekerjaan) + ')');
    let countPekerja = eval('(' + @json($countPekerja) + ')');

    const pekerjaanChart = new Chart(pekerjaan, {
        type: 'bar',
        data: {
            labels: labelPekerjaan,
            datasets: [{
                label: 'Penduduk',
                data: countPekerja,
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
                },

                legend: {
                    labels: {
                        // This more specific font property overrides the global property
                        font: {
                            size: 16
                        }
                    },

                }
            }
        }
    });
</script>
