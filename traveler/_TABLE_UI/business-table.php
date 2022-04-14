<?php
    $User = new User;
    include '_UI_SORTING_FETCHING/business-fetch.php';
?>
    <div class="title-sorting">
        <p>Category: <span><?php if(isset($_GET['category'])){
            echo $_GET['category'];
        }else{
            echo "ALL";
        } ?></span></p>
    </div>
                    <div class="div1">
                        <?php if($display): ?>
                            <?php foreach($display as $businesdisplay):  ?>
                            <div class="boxes" id="showinfo" data-id="<?php echo $businesdisplay['id']; ?>">
                                <div class="body-boxes">
                                    <div><img src="../user/assets/logo/<?php echo $businesdisplay['logo']; ?>" alt=""></div>
                                </div>
                                <div class="title">
                                    <p data-target="name"><?php echo $businesdisplay['name']; ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php else: ?>
                            <div class="div2">
                                <div class="boxes2">
                                    <div id="emptys"><i class="fas fa-table"></i><p>No Host List Available</p></div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class='bottomtable2 overflowtables'>
                            <div class="pre-nex2">
                                <?php 
                                    include '_UI_SORTING_FETCHING/business-pagination-fetch.php';    
                                ?>
                                <!-- <p class="nomore2">Previous</p>
                                <p  class="pagess2">Page 1-1</p>
                                <p class="nomore2">Next</p> -->
                            </div>
                        </div>