<?php   
                      $User = new User;
                      $email = $_SESSION['manager'];
                      $GetUserID = $User->GetUserID($email);
                      $userid = $GetUserID->id;
                      include '_UI_SORTING_FETCHING/subs-fetch.php';
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
                            <div id="tabs">Subscription Table</div>
                            <div class="dropdown-per-page">
                                <button class="btn titleperpage-bn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" id="dropdown" aria-labelledby="dropdownMenuButton1">
                                        <p class="titleperpage">Per Page</p>
                                        <?php 
                                            include '_UI_SORTING_FETCHING/limit-sort-subs.php';
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
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&id=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&id=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Start </span>
                                                <div class="sorted-table">
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&start_date=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&start_date=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Expiration </span>
                                                <div class="sorted-table">
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&expiration_date=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&expiration_date=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Status</th>
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
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Start </span>
                                                <div class="sorted-table">
                                                    <div><a href="?start_date=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?start_date=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Expiration </span>
                                                <div class="sorted-table">
                                                    <div><a href="?expiration_date=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?expiration_date=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody class="hideafter">
                                    <?php foreach ($display as $dis): ?>
                                        <tr class="<?php echo $dis['id']; ?>" id="<?php echo $dis['id']; ?>">
                                            <td id="idss"><?php echo sprintf('%06d', $dis['id'])?></td>
                                            <td><?php echo date("Y-m-d", strtotime($dis['start'])); ?></td>
                                                <td><?php if($dis['expiration']=='0000-00-00 00:00:00'){
                                                    echo '---------';
                                                }else{
                                                    echo date("Y-m-d", strtotime($dis['expiration']));
                                                } ?></td>
                                            <td><?php echo $dis['status']; ?></td>
                                            <td id="btn">
                                                <div class="d-flex">
                                                    <?php if($dis['status']==$User::STATUS_PENDING): ?>
                                                        <span class="tip_delete_container">
                                                            <i class="far fa-trash-alt" id="cance_subs" data-id="<?php echo $dis['id']; ?>"></i>
                                                            <span class="tip_delete">Cancel</span>
                                                        </span>
                                                    <?php elseif($dis['status']==$User::STATUS_ONGOING): ?>
                                                    <?php endif; ?>
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
                                        include '_UI_SORTING_FETCHING/subs-pagination-fetch.php';    
                                    ?>
                                </div>
                            </div>
                    </div>