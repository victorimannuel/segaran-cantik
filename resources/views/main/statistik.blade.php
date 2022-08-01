@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">
           @include('main.components.header')

            <section class="mx-5 align-self-center d-flex justify-content-center">

                @include('main.components.cards')

                <div class="container mw-100 mx-0 my-5 card">
                    {{-- canva starts here --}}
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        const labels = [
                          'January',
                          'February',
                          'March',
                          'April',
                          'May',
                          'June',
                        ];
                      
                        const data = {
                          labels: labels,
                          datasets: [{
                            label: 'My First dataset',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [0, 10, 5, 2, 20, 30, 45],
                          }]
                        };
                      
                        const config = {
                          type: 'line',
                          data: data,
                          options: {}
                        };
                      </script>
                      <script>
                        const myChart = new Chart(
                          document.getElementById('myChart'),
                          config
                        );
                      </script>
                      
                       
                      
                       
                       
                      
                       
                </div>

            </section>


        </main>
    </div>

@endsection
