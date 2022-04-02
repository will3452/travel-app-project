<?php
date_default_timezone_set('Asia/Manila');  
$acceptpendingmanager = '<div class="modal acceptpendingmanager" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal" class="modal-content">
      <input type="hidden" id="token_accept_manager" name="token_accept_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Accept Manager Account</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Manager Name: <span class="name_here"></span></p>
        <input type="hidden" name="id_get" id="id_get" class="id_get">
      </div>
      <div class="modal-footer">
        <button type="submit" id="acceptmanager" class="colorbtn width_btn">
            <span class="span_modal">Process</span>
            <div class="center-loading-3">
                        <div class="span5load2"></div>
                        <div class="span6load2"></div>
                        <div class="span7load2"></div>
                    </div>
        </button>
      </div>
    </div>
  </form>
</div>';
$deletependingmanager = '<div class="modal deletependingmanager" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_cancel" class="modal-content">
      <input type="hidden" id="token_cancel_manager" name="token_cancel_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Manager Account</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Manager Name: <span class="name_here"></span></p>
        <input type="hidden" name="id_get_cancel" id="id_get_cancel" class="id_get_cancel">
      </div>
      <div class="modal-footer">
        <button type="submit" id="deletemanager" class="colorbtn width_btn">
            <span class="span_modal">Process</span>
            <div class="center-loading-3">
                        <div class="span5load2"></div>
                        <div class="span6load2"></div>
                        <div class="span7load2"></div>
                    </div>
        </button>
      </div>
    </div>
  </form>
</div>';