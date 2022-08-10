@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        @include('main.components.sidebar')
        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">
           @include('main.components.header')

            <section class="mx-5 align-self-center d-flex justify-content-center">

                @include('main.components.cards')

                <div class="container mw-100 mx-0 my-5" style="min-height: 60vh;">
                    {{-- canva starts here --}}
                    <div class="container d-flex flex-column justify-content-center">
                      <div class="row">
                        <div class="col-md ">
                          @include('main.charts.umurChart')
                        </div>
                        <div class="col-md">

                        @include('main.charts.jenisKelaminChart')
                        </div>

                      </div>
                      <div class="row">
                          <div class="col">

                            @include('main.charts.pekerjaanChart')
                          </div>
                      </div>
                    </div>
                  </div>










                    {{-- canva ends here --}}


            </section>


        </main>
    </div>

@endsection
