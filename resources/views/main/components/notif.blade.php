<!-- Modal -->

<div class="modal fade fs-2" id="notificationModal" tabindex="-1" aria-labelledby="notification" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-scrollable me-5">
        <div class="modal-content ">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title" id="modalLabel"><b>Notifikasi</b></h1>
            </div>
            <div class="modal-body p-0">

                {{-- loop notifikasi disini --}}
                @for($i = 0; $i < 10; $i++)
                    <div  class="notif-container d-flex flex-row p-3" id="">
                        <div class="img h-100">
                            <img src="{{ asset('assets/img/icons/notif-speaker.png') }}" alt="" width="20" height="20">
                        </div>
                        <div class="notif mx-3 my-2">
                            <div class="date fs-4">13 Agustus 2022, 16:45</div>
                            <h1 class="h3 mt-2"><b>Aktivitas</b></h1>
                            <p class="fs-3">Akun kamu tercatat login di perangkat lain nih. Abaikan jika itu kamu, atau login ulang dan ganti PIN kamu segera.</p>
                            
                            <div class="dropdown" hidden>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, sequi.
                            </div>
                        </div>
                    </div>

                    
                @endfor
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

