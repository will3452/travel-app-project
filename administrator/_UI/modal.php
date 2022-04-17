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
$bantemp = '<div class="modal bantemp" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_temp" class="modal-content">
      <input type="hidden" id="token_Bantemp_manager" name="token_Bantemp_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ban Temporary Account</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="id_get" id="id_get" class="id_get">
      </div>
      <div class="modal-footer">
        <button type="submit" id="bantempbtn" class="colorbtn width_btn">
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
$unbantemp = '<div class="modal unbantemp" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_unban" class="modal-content">
      <input type="hidden" id="token_Unbantemp_manager" name="token_Unbantemp_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UnBan Account</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="id_get_un" id="id_get_un" class="id_get_un">
      </div>
      <div class="modal-footer">
        <button type="submit" id="unbantempbtn" class="colorbtn width_btn">
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
$banperm= '<div class="modal banperm" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_perm" class="modal-content">
      <input type="hidden" id="token_Panperm_manager" name="token_Panperm_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ban Permanently Account</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Name: <span class="name_here"></span></p>
        <input type="hidden" name="id_get_2" id="id_get_2" class="id_get_2">
      </div>
      <div class="modal-footer">
        <button type="submit" id="banpermbtn" class="colorbtn width_btn">
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
$deletepop= '<div class="modal deletepop" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_POP" class="modal-content">
      <input type="hidden" id="token_Delete_POP_manager" name="token_Delete_POP_manager" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Proof of Payment</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Date: <span class="name_here"></span></p>
        <input type="hidden" name="pop" id="pop" class="service_id">
      </div>
      <div class="modal-footer">
        <button type="submit" id="popbtn" class="colorbtn width_btn">
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
$acceptadssubs = '<div class="modal acceptadssubs" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_ads" class="modal-content">
      <input type="hidden" id="token_accept_acceptadssubs" name="token_accept_acceptadssubs" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Accept Ads Subs Account</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Manager Name: <span class="name_here"></span></p>
        <input type="hidden" name="adssub_id" id="adssub_id" class="id_get">
      </div>
      <div class="modal-footer">
        <button type="submit" id="acceptadssubsbtn" class="colorbtn width_btn">
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
$doneadssubs = '<div class="modal doneadssubs" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_ads_done" class="modal-content">
      <input type="hidden" id="token_accept_doneadssubs" name="token_accept_doneadssubs" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Done Ads Subs Account</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p id="name_title">Manager Name: <span class="name_here"></span></p>
        <input type="hidden" name="adssub_iddone" id="adssub_iddone" class="adssub_iddone">
      </div>
      <div class="modal-footer">
        <button type="submit" id="doneadssubsbtn" class="colorbtn width_btn">
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
$deleteadssubs = '<div class="modal deleteadssubs" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog closemodal" role="document">
    <form id="submitmodal_ads_delete" class="modal-content">
      <input type="hidden" id="token_accept_deleteadssubs" name="token_accept_deleteadssubs" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Ads Subs Account</h5>
        <p class="close_modal">+</p>
      </div>
      <div class="modal-body">
        <p style="color:red;">Note: <i>Deleting Ads also will delete the payment record</i></p>
        <p id="name_title">Manager Name: <span class="name_here"></span></p>
        <input type="hidden" name="adssub_iddelete" id="adssub_iddelete" class="adssub_iddelete">
      </div>
      <div class="modal-footer">
        <button type="submit" id="deleteadssubsbtn" class="colorbtn width_btn">
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
      <input type="hidden" id="token_deleteallnotif_admin" name="token_deleteallnotif_admin" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
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
    <form id="submit_delete_notif_admin" class="modal-content">
      <input type="hidden" id="token_deletenotif_admin" name="token_deletenotif_admin" value='.password_hash(Date('Y-m-d').'token-ps', PASSWORD_BCRYPT).'> 
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