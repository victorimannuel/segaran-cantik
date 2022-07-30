@extends('layouts.main')

@section('main-body')

    <div id= "sidebarState" state="aside-open">

        @include('main.components.sidebar')

        <main class="d-flex flex-column position-absolute end-0 top-0 vw-80">
           @include('main.components.header')

            <section class="mx-5 align-self-center d-flex justify-content-center">

                @include('main.components.cards')

                <div class="container mw-100 mx-0 mt-5 card">

                </div>

            </section>


        </main>
    </div>

@endsection
