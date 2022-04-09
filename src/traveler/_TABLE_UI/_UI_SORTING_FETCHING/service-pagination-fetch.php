<?php if(isset($_GET['search'])): $search = $_GET['search']; ?>

    
            <?php if($page>1): ?>
                        <a href="?host_id=<?php echo $_GET['host_id']; ?>&search=<?php echo $_GET['search']; ?>&page=<?php echo $previous; ?>#tabs" class="pagess2">Previous</a>
            <?php else: ?>
                        <p class="nomore2">Previous</p>
            <?php endif; ?>
                                    
            <p class="pagess22">Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

            <?php if($page<$pages): ?>
                <a href="?host_id=<?php echo $_GET['host_id']; ?>&search=<?php echo $_GET['search']; ?>&page=<?php echo $Next; ?>#tabs" class="pagess2">Next</a>
            <?php else: ?>
                <p class="nomore2">Next</p>
            <?php endif; ?>

<?php else: ?>

   

    
            <?php if($page>1): ?>
                        <a href="?host_id=<?php echo $_GET['host_id']; ?>&page=<?php echo $previous; ?>#tabs" class="pagess2">Previous</a>
            <?php else: ?>
                        <p class="nomore2">Previous</p>
            <?php endif; ?>
                                    
            <p class="pagess22">Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

            <?php if($page<$pages): ?>
                <a href="?host_id=<?php echo $_GET['host_id']; ?>&page=<?php echo $Next; ?>#tabs" class="pagess2">Next</a>
            <?php else: ?>
                <p class="nomore2">Next</p>
            <?php endif; ?> 

<?php endif; ?>