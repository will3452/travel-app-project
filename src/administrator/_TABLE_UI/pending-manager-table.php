                    <?php
                        $User = new User;
                        $email = $_SESSION['administrator'];
                        $userdata = $User->GetUserID($email);
                        $admin_id = $userdata->id;
                        $status = $User::STATUS_PENDING;
                        $type = $User::USER_TYPE_MANAGER;
                        include '_UI_SORTING_FETCHING/manager-fetch.php';
                    ?>
                    <!-- search -->
                    <span class="clearable">
                                            <i class="fas fa-search search_icon"></i>
                        <input class="form-control mr-sm-2" type="text" id="search" placeholder="Search"
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
                            <div>Pending Manager</div>
                            <div class="dropdown-per-page">
                                <button class="btn titleperpage-bn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" id="dropdown" aria-labelledby="dropdownMenuButton1">
                                        <p class="titleperpage">Per Page</p>
                                        <?php 
                                            include '_UI_SORTING_FETCHING/limit-sort-manage-pending.php';
                                        ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card-body-table overflowtables">
                            <?php if($display>0): ?>
                            <table class="tablenew">
                                <thead class="hideafter">
                                    <tr>
                                    <?php if(isset($_GET['search'])): ?>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>ID </span>
                                                <div class="sorted-table">
                                                    <div><a href="?tab=pending&search=<?php echo $_GET['search'] ?>&id=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?tab=pending&search=<?php echo $_GET['search'] ?>&id=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Email</span>
                                                <div class="sorted-table">
                                                    <div><a href="?tab=pending&search=<?php echo $_GET['search'] ?>&email=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?tab=pending&search=<?php echo $_GET['search'] ?>&email=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col"></th>
                                    <?php else: ?>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>ID </span>
                                                <div class="sorted-table">
                                                    <div><a href="?tab=pending&id=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?tab=pending&id=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Email</span>
                                                <div class="sorted-table">
                                                    <div><a href="?tab=pending&email=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?tab=pending&email=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col"></th>
                                    <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody class="hideafter">
                                    <?php foreach ($display as $dis): ?>
                                        <tr class="<?php echo $dis['id']; ?>" id="<?php echo $dis['id']; ?>">
                                            <td id="idss"><?php echo sprintf('%06d', $dis['id'])?></td>
                                            <td>
                                                <div class="circular--landscape"> 
                                                    <img id="vievimage" src="../images/users/<?php echo $dis['image']; ?>" alt="">
                                                </div>
                                            </td>
                                            <td><a href="#"><?php echo $dis['email']; ?></a></td>
                                            <td data-target="name"><?php echo $dis['first_name'].' '.$dis['last_name']; ?></td>
                                            <?php 
                                                $emailmanager = $dis['email'];
                                                $paymentdata = $User->GetPaymentManager($emailmanager);
                                            ?>
                                            <td>
                                                <a href="view/<?php echo $paymentdata->id; ?>"><?php echo $paymentdata->date; ?></a>  
                                            </td>
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
                                                    <span class="tip_delete_container">
                                                        <i class="far fa-trash-alt" id="cancel" data-id="<?php echo $dis['id']; ?>"></i>
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
                            <div class='bottomtable overflowtables'>
                                <div class="pre-nex">
                                    <?php 
                                        include '_UI_SORTING_FETCHING/manager-pending-pagination-fetch.php';    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>