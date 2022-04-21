<?php
  $User = new User;

  $Service = new Service;

  $business_id = $_GET['host_id'];

  $data = $Service->GetReviewTraveler($business_id, $User::STATUS_SHOW);
  

?>

            <?php if($data): ?>
                         <?php foreach($data as $dis): ?>
                            <div class="reviews-container">
                                    <div class="profile-reviews">
                                        <?php 
                                            $iduser = $dis['user_id'];

                                            $userdata = $User->GetUserData($iduser, $User::USER_TYPE_TRAVELER);


                                        ?>
                                    <div class="circle-pro">
                                            <img src="../../images/users/<?php echo $userdata->image ?>" alt="">
                                    </div>
                                    <span><?php 
                                        if($userdata->email==$email){
                                            echo "Me";
                                        }else{
                                            echo $userdata->first_name.' '.$userdata->last_name;
                                        }
                                    ?></span>
                                    </div>
                                    <div class="user-star">
                                        <p><?php echo $dis['star'] ?> <i class="fa-solid fa-star"></i></p>
                                    </div>
                                    <div class="user-message">
                                        <span><?php echo $dis['message'] ?></span>
                                    </div>
                            </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <div class="div2">
                                <div class="boxes2">
                                    <div id="emptys"><i class="fas fa-table"></i><p>No Reviews Show</p></div>
                                    </div>
                                </div>
                            </div>

                            <?php endif;?>