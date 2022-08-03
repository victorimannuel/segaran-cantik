<!-- Modal -->

<div class="modal fade fs-2" id="notificationModal" tabindex="-1" aria-labelledby="notification" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable me-5">
        <div class="modal-content px-2">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title" id="modalLabel"><b>Notifikasi</b></h1>
            </div>
            <div class="modal-body">

                {{-- loop notifikasi disini --}}
{{--                @foreach($activityLogGroupBy as $log)--}}
{{--                    @php $userName = \App\Models\User::find($log['causer_id'])->name; @endphp--}}
{{--                    <div id="notif-container mb-5 d-flex flex-row" class="notif">--}}
{{--                        <div class="img h-100">--}}
{{--                            <img src="{{ asset('assets/img/icons/notif-speaker.png') }}" alt="" width="20" height="20">--}}
{{--                        </div>--}}
{{--                        <div class="notif" href="{{ route('main.dashboard') }}">--}}
{{--                            <p class="fs-3">{{ $userName }} mengubah {{ $log['total'] }} data penduduk</p>--}}
{{--                            <div class="date fs-4 mb-2">13 Agustus 2022, 16:45</div>--}}
{{--                            <h1 class="h3"><b>INFO</b></h1>--}}
{{--                            <p class="fs-3">Akun kamu tercatat login di perangkat lain nih. Abaikan jika itu kamu, atau login ulang dan ganti PIN kamu segera.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
                @foreach($arrLog as $log)
                    <div id="notif-container mb-5 d-flex flex-row" class="notif">--}}
                        <div class="img h-100">
                            <img src="{{ asset('assets/img/icons/notif-speaker.png') }}" alt="" width="20" height="20">
                        </div>
                        <div class="notif" href="{{ route('main.dashboard') }}">
                            @foreach($log as $l)
                                <span class="fs-3">{{ $l }}</span>
                            @endforeach
{{--                            <div class="date fs-4 mb-2">13 Agustus 2022, 16:45</div>--}}
{{--                            <h1 class="h3"><b>INFO</b></h1>--}}
{{--                            <p class="fs-3">Akun kamu tercatat login di perangkat lain nih. Abaikan jika itu kamu, atau login ulang dan ganti PIN kamu segera.</p>--}}
                        </div>
                    </div>
                @endforeach
                {{--  --}}

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#notificationModal').modal('show');
    });
</script>

