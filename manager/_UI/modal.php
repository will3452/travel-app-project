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
$acceptreservation= '<div class="modal acceptreservation" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_acc_res" class="modal-content">
      <input type="hidden" id="token_Acceptreservation_manager" name="token_Acceptreservation_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Accept Reservation</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="res_id" id="res_id" class="res_id">
      </div>
      <div class="modal-footer">
        <button type="submit" id="resacc_btn" class="colorbtn width_btn">
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
$deletereservation= '<div class="modal deletereservation" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_acc_res_de" class="modal-content">
      <input type="hidden" id="token_deletereservation_manager" name="token_deletereservation_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Reservation</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="res_id_d" id="res_id_d" class="res_id">
      </div>
      <div class="modal-footer">
        <button type="submit" id="resacc_btn_d" class="colorbtn width_btn">
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
$deleteallnotif= '<div class="modal deleteallnotif" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitdeleteallnotif" class="modal-content">
      <input type="hidden" id="token_deleteallnotif_manager" name="token_deleteallnotif_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete All Notifications</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Process: <span class="name_here">Notifications</span></p>
      </div>
      <div class="modal-footer">
        <button type="submit" id="delete_btn_n" class="colorbtn width_btn">
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
$deletenotif= '<div class="modal deletenotif" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submit_delete_notif_manager" class="modal-content">
      <input type="hidden" id="token_deletenotif_manager" name="token_deletenotif_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Delete Notifications</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Process: <span class="name_here">Notifications</span></p>
        <input type="hidden" name="notif_ids" id="notif_ids" notif_ids="res_id">
      </div>
      <div class="modal-footer">
        <button type="submit" id="delete_btn_n" class="colorbtn width_btn">
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
$deletecategory= '<div class="modal deletecategory" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submit_delete_categ_manager" class="modal-content">
      <input type="hidden" id="token_categorydelete_manager" name="token_categorydelete_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Category Name: <span class="name_here"></span></p>
        <p style="color:red;">Note: <i>Category Cannot Be Delete if Already Use</i></p>
        <input type="hidden" name="categ_id" id="categ_id">
      </div>
      <div class="modal-footer">
        <button type="submit" id="delete_btn_n" class="colorbtn width_btn">
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
