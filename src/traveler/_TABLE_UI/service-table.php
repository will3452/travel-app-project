<?php 
    $User = new User;
    $business_id = $_GET['host_id'];
    include '_UI_SORTING_FETCHING/service-fetch.php';
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
                                            <div><img src="../../images/services/<?php echo $businesdisplay['image']; ?>" alt=""></div>
                                        </div>
                                        <div class="title2">
                                            <p data-target="name"><?php echo $businesdisplay['name']; ?> </p>
                                            <p>₱<?php echo $businesdisplay['price']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                        </div>
                            <?php else: ?>
                                <div class="div2">
                                    <div class="boxes2">
                                        <div id="emptys"><i class="fas fa-table"></i><p>No Service Available</p></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <div class='bottomtable2 overflowtables'>
                            <div class="pre-nex2">
                                <?php 
                                    include '_UI_SORTING_FETCHING/service-pagination-fetch.php';    
                                ?>
                            </div>
                        </div>