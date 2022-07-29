<!-- Modal -->

<div class="modal fade fs-2" id="notificationModal" tabindex="-1" aria-labelledby="notification" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-scrollable me-5">
        <div class="modal-content px-2">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title" id="modalLabel"><b>Notifikasi</b></h1>
            </div>
            <div class="modal-body">

                {{-- for loop notifikasi disini --}}
                @for($i = 0; $i < 10; $i++)
                    <div id="notif-container mb-5 d-flex flex-row" class="notif">
                        <div class="img h-100">
                            <img src="{{ asset('assets/img/icons/notif-speaker.png') }}" alt="" width="20" height="20">
                        </div>
                        <div class="notif">
                            <div class="date fs-4 mb-2">13 Agustus 2022, 16:45</div>
                            <h1 class="h3"><b>INFO</b></h1>
                            <p class="fs-3">Akun kamu tercatat login di perangkat lain nih. Abaikan jika itu kamu, atau login ulang dan ganti PIN kamu segera.</p>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#notificationModal').modal('show');
    });
</script>

