<div class="card mx-5 p-5">
    <h1 class="text-center"><b>Jenis Kelamin</b></h1>
    <canvas id="jenisKelaminChart" class="m-5 p-4 border rounded" width=400 height=400></canvas>
    
</div>
<script>
  const jenisKelamin = document.getElementById('jenisKelaminChart').getContext('2d');
  const jenisKelaminChart = new Chart(jenisKelamin, {
      type: 'bar',
      data: {
          labels: ['Laki - Laki', 'Perempuan'],
          datasets: [{
              label: 'Penduduk',
              data: [
                {{ '1000'  }},  /* data laki */
                {{ '600'  }}    /* data cw   */
              ],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
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