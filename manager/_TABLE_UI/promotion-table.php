<?php
                        include '_UI_SORTING_FETCHING/promotion-fetch.php';
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
                            <div>Promo Ads Table</div>
                            <div class="dropdown-per-page">
                                <button class="btn titleperpage-bn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" id="dropdown" aria-labelledby="dropdownMenuButton1">
                                        <p class="titleperpage">Per Page</p>
                                        <?php 
                                            include '_UI_SORTING_FETCHING/limit-sort-promo.php';
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
                                                <span>Package Name</span>
                                                <div class="sorted-table">
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&name=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&name=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Price</span>
                                                <div class="sorted-table">
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&price=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&price=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Days</th>
                                        <th scope="col"></th>
                                    <?php else: ?>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Package Name</span>
                                                <div class="sorted-table">
                                                    <div><a href="?name=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?name=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Price</span>
                                                <div class="sorted-table">
                                                    <div><a href="?price=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?price=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Days</th>
                                        <th scope="col"></th>
                                    <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody class="hideafter">
                                    <?php foreach ($display as $dis): ?>
                                        <tr class="<?php echo $dis['id']; ?>" id="<?php echo $dis['id']; ?>">
                                            <td><?php echo $dis['name']; ?></td>
                                            <td><?php echo $dis['price']; ?></td>
                                            <td><?php echo $dis['days']; ?> Days</td>
                                            <td id="btn">
                                                <div class="d-flex">
                                                    <span class="tip_view_container">
                                                        <i class="fa-solid fa-eye btns" id="showinfo" data-id="<?php echo $dis['id']; ?>"></i>
                                                        <span class="tip_view">View</span>
                                                    </span>
                                                    <span class="tip_view_container">
                                                        <i class="fa-solid fa-cart-arrow-down btns" id="avail" data-id="<?php echo $dis['id']; ?>"></i>
                                                        <span class="tip_view">Avail</span>
                                                    </span>
                                                </div>
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
                                        include '_UI_SORTING_FETCHING/promo-pagination-fetch.php';    
                                    ?>
                                </div>
                            </div>
                    </div>