<?php
                        $User = new User;

                        $Service = new Service;

                        $GetUserID = $User->GetUserID($email);

                        $iduser = $GetUserID->id;

                        $GetBusinessManager = $User->GetBusinessManager($iduser);

                        if($GetBusinessManager){

                            $business_id = $GetBusinessManager->id;
                        }else{
                            $business_id='';
                        }

                        $status = $User::STATUS_PENDING;
                        
                        include '_UI_SORTING_FETCHING/reservation-fetch.php';
                    ?>
                    <!-- search -->
                    <span class="clearable">
                                            <i class="fas fa-search search_icon"></i>
                        <input class="form-control mr-sm-2" type="text" id="search" placeholder="Search Date"
                        value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>"
                        aria-label="Search">
                        <?php if(isset($_GET['search'])): ?>
                            <i class="clearable__clear_search">&times;</i>
                        <?php else: ?>
                            <i class="clearable__clear">&times;</i>
                        <?php endif; ?>
                    </span>  
                    <!-- table -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <div>Reservation Table</div>
                            <div class="dropdown-per-page">
                                <button class="btn titleperpage-bn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" id="dropdown" aria-labelledby="dropdownMenuButton1">
                                        <p class="titleperpage">Per Page</p>
                                        <?php 
                                                    include '_UI_SORTING_FETCHING/reservation-sort.php';
                                        ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card-body-table overflowtables">
                            <?php if($display): ?>
                            <table class="tablenew">
                                <thead class="hideafter">
                                    <tr>
                                    <?php if(isset($_GET['search'])): ?>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>ID </span>
                                                <div class="sorted-table">
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&id=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&id=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Date </span>
                                                <div class="sorted-table">
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&date=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&date=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Time</th>
                                        <th scope="col"></th>
                                    <?php else: ?>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>ID </span>
                                                <div class="sorted-table">
                                                    <div><a href="?id=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?id=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Date </span>
                                                <div class="sorted-table">
                                                    <div><a href="?date=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?date=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Time</th>
                                        <th scope="col"></th>
                                    <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody class="hideafter">
                                <?php foreach ($display as $dis): ?>
                                        <tr class="<?php echo $dis['id']; ?>" id="<?php echo $dis['id']; ?>">
                                            <td id="idss"><?php echo sprintf('%06d', $dis['id'])?></td>
                                            <?php 
                                                $travelerid = $dis['user_id'];
                                                $userdatas = $User->GetUserData($travelerid, $User::USER_TYPE_TRAVELER);
                                                $business_id = $dis['business_id'];
                                                //get service info
                                                $businessdata = $User->GetBusinessData($business_id);
                                            ?>
                                            <td>
                                                <div class="circular--landscape"> 
                                                    <img id="vievimage" src="../images/users/<?php echo $userdatas->image; ?>" alt="">
                                                </div>
                                            </td>
                                            <td><a href="view/traveler-data?traveler_id=<?php echo $dis['user_id']; ?>"><?php echo $userdatas->email;?></a></td>
                                            <td data-target="name"><?php echo $userdatas->first_name.' '.$userdatas->last_name;; ?></td>
                                            <td><?php echo $dis['reserved_at']; ?></td>
                                            <td><?php echo date("h:i A", strtotime($dis['time'])); ?></td>
                                            <td id="btn">
                                                <div class="d-flex">
                                                    <span class="tip_view_container">
                                                        <i class="fa-solid fa-eye btns" id="showinfo" data-id="<?php echo $dis['id']; ?>"></i>
                                                        <span class="tip_view">View</span>
                                                    </span>
                                                    <span class="tip_accept_container">
                                                        <i class="fas fa-check-circle btns" id="accept" data-id="<?php echo $dis['id']; ?>"></i>
                                                        <span class="tip_accept">Accept</span>
                                                    </span>
                                                    <span class="tip_update_container">
                                                        <i class="far fa-edit btns" id="update" data-id="<?php echo $dis['id']; ?>"></i>
                                                        <span class="tip_update">Update</span>
                                                    </span>
                                                    <span class="tip_delete_container">
                                                        <i class="far fa-trash-alt" id="delete" data-id="<?php echo $dis['id']; ?>"></i>
                                                        <span class="tip_delete">Cancel</span>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else: ?>
                                <!-- if table empty -->
                                <div id="emptyss"><i class="fa-solid fa-table-list"></i><p>No Data</p></div>
                            <?php endif; ?>

                            <!--table loading-->
                            <div class="loadingss">
                                <div class="center-table">
                                    <div class="span1load-table"></div>
                                    <div class="span2load-table"></div>
                                    <div class="span3load-table"></div>
                                </div>
                            </div> 
                        </div>
                        <div class='bottomtable overflowtables'>
                                <div class="pre-nex">
                                    <?php 
                                        include '_UI_SORTING_FETCHING/reservation-pagination-fetch.php';    
                                    ?>
                                </div>
                            </div>
                    </div>