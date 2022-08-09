<div class="card mx-5 p-5">
    <h1 class="text-center"><b>Jenis Kelamin</b></h1>
    <canvas id="jenisKelaminChart" class="p-5" width=400 height=400></canvas>
</div>
<script>
    const ctx = document.getElementById('jenisKelaminChart').getContext('2d');
    Chart.defaults.font.size = 25;
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Laki - Laki', 'Perempuan'],
            datasets: [{
                label: 'Penduduk',
                data: [
                    {{ $jenis_kelamin['jumlah_laki'] }},
                    {{ $jenis_kelamin['jumlah_perempuan'] }},
                ],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Jenis Kelamin"
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
