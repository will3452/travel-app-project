<?php
date_default_timezone_set('Asia/Manila'); 
$deleteservice= '<div class="modal deleteservice" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_service" class="modal-content">
      <input type="hidden" id="token_Delete_Service_manager" name="token_Delete_Service_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Service</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p style="color:red;">Note: <i>Service Cannot Be Delete if Already Use</i></p>
        <p id="name_title">Service Name: <span class="name_here"></span></p>
        <input type="hidden" name="service_id" id="service_id" class="service_id">
      </div>
      <div class="modal-footer">
        <button type="submit" id="servicebtn" class="colorbtn width_btn">
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