<?php if(isset($_GET['search'])): $search = $_GET['search']; ?>

    <?php if(isset($_GET['category'])): ?>
         <?php if($page>1): ?>
                        <a href="?category=<?php echo $_GET['category']; ?>&search=<?php echo $_GET['search']; ?>&page=<?php echo $previous; ?>" class="pagess2">Previous</a>
            <?php else: ?>
                        <p class="nomore2">Previous</p>
            <?php endif; ?>
                                    
            <p class="pagess22">Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

            <?php if($page<$pages): ?>
                <a href="?category=<?php echo $_GET['category']; ?>&search=<?php echo $_GET['search']; ?>&page=<?php echo $Next; ?>" class="pagess2">Next</a>
            <?php else: ?>
                <p class="nomore2">Next</p>
            <?php endif; ?>

    <?php else: ?>
            <?php if($page>1): ?>
                        <a href="?search=<?php echo $_GET['search']; ?>&page=<?php echo $previous; ?>" class="pagess2">Previous</a>
            <?php else: ?>
                        <p class="nomore2">Previous</p>
            <?php endif; ?>
                                    
            <p class="pagess22">Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

            <?php if($page<$pages): ?>
                <a href="?search=<?php echo $_GET['search']; ?>&page=<?php echo $Next; ?>" class="pagess2">Next</a>
            <?php else: ?>
                <p class="nomore2">Next</p>
            <?php endif; ?>
    <?php endif; ?>

<?php else: ?>

    <?php if(isset($_GET['category'])): ?>

            <?php if($page>1): ?>
                        <a href="?category=<?php echo $_GET['category']; ?>&page=<?php echo $previous; ?>" class="pagess2">Previous</a>
            <?php else: ?>
                        <p class="nomore2">Previous</p>
            <?php endif; ?>
                                    
            <p class="pagess22">Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

            <?php if($page<$pages): ?>
                <a href="?category=<?php echo $_GET['category']; ?>&page=<?php echo $Next; ?>" class="pagess2">Next</a>
            <?php else: ?>
                <p class="nomore2">Next</p>
            <?php endif; ?> 
                
    <?php else: ?>

    
            <?php if($page>1): ?>
                        <a href="?page=<?php echo $previous; ?>" class="pagess2">Previous</a>
            <?php else: ?>
                        <p class="nomore2">Previous</p>
            <?php endif; ?>
                                    
            <p class="pagess22">Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

            <?php if($page<$pages): ?>
                <a href="?page=<?php echo $Next; ?>" class="pagess2">Next</a>
            <?php else: ?>
                <p class="nomore2">Next</p>
            <?php endif; ?> 

    <?php endif; ?> 
<?php endif; ?>