<?php
                        $User = new User;
                        include '_UI_SORTING_FETCHING/revenue-fetch.php';
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
                            <div id="tabs">Revenue Table</div>
                            <div class="dropdown-per-page">
                                <button class="btn titleperpage-bn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" id="dropdown" aria-labelledby="dropdownMenuButton1">
                                        <p class="titleperpage">Per Page</p>
                                        <?php 
                                            include '_UI_SORTING_FETCHING/limit-sort-revenue.php';
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
                                                <span>Date</span>
                                                <div class="sorted-table">
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&date=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?search=<?php echo $_GET['search'] ?>&date=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Total</th>
                                    <?php else: ?>
                                        
                                        <th scope="col">
                                            <div class="d-flex">
                                                <span>Date</span>
                                                <div class="sorted-table">
                                                    <div><a href="?date=asc"><i class="fas fa-chevron-up"></i></a></div>
                                                    <div><a href="?date=desc"><i class="fas fa-chevron-down"></i></a></div>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col">Total</th>
                                    <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody class="hideafter">
                                    <?php foreach ($display as $dis): ?>
                                        <tr>
                                            <td><?php echo $dis['date']; ?></td>
                                            <td><?php echo $dis['total']; ?></td>
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
                                        include '_UI_SORTING_FETCHING/revenue-pagination-fetch.php';    
                                    ?>
                                </div>
                        </div>
                    </div>