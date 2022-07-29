<!-- Modal -->

<div class="modal fade fs-2" id="notificationModal" tabindex="-1" aria-labelledby="notification" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-scrollable me-5">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="modalLabel">Notifikasi</h1>
            </div>
            <div class="modal-body">
                <div id="notif-container" class="notif">
                    @for($i = 0; $i < 10; $i++)
                        <p> 
                            {{  $i }}
                        </p>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>

