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
$deletereviews= '<div class="modal deletereviews" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submit_delete_reviews" class="modal-content">
      <input type="hidden" id="token_deletereviews_manager" name="token_deletereviews_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Delete Review</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="reviews_id" id="reviews_id">
      </div>
      <div class="modal-footer">
        <button type="submit" id="delete_btn_reviews" class="colorbtn width_btn">
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
$hidereviews= '<div class="modal hidereviews" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submit_hide_reviews" class="modal-content">
      <input type="hidden" id="token_hidereviews_manager" name="token_hidereviews_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Hide Review</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="reviews_id_h" id="reviews_id_h">
      </div>
      <div class="modal-footer">
        <button type="submit" id="delete_btn_reviews_h" class="colorbtn width_btn">
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
$showreviews= '<div class="modal showreviews" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submit_shows_reviews" class="modal-content">
      <input type="hidden" id="token_showreviews_manager" name="token_showreviews_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Show Review</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="reviews_id_s" id="reviews_id_s">
      </div>
      <div class="modal-footer">
        <button type="submit" id="delete_btn_reviews_s" class="colorbtn width_btn">
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

$cancelads= '<div class="modal cancelads" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submit_shows_cancelads" class="modal-content">
      <input type="hidden" id="token_cancelads_manager" name="token_cancelads_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Show Review</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="cancelads_id_s" id="cancelads_id_s">
      </div>
      <div class="modal-footer">
        <button type="submit" id="delete_btn_cancelads_s" class="colorbtn width_btn">
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
$deletesubs = '<div class="modal deletesubs" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_delete_sub" class="modal-content">
      <input type="hidden" id="token_delete_manager_subs" name="token_delete_manager_subs" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Subscription</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Canceling Subscription!</p>
        <input type="hidden" name="id_get_subs_d" id="id_get_subs_d" class="id_get_subs_d">
      </div>
      <div class="modal-footer">
        <button type="submit" id="deletemanager_subs" class="colorbtn width_btn">
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