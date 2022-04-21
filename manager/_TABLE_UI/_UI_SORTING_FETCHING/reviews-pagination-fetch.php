
        <?php if(isset($_GET['search'])): $search = $_GET['search']; ?>
            <?php if(isset($_GET['id'])): $idsort = $_GET['id'];?>
                <?php if($idsort==''): ?>
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($idsort=='asc'): ?>
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&id=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&id=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&id=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&id=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($idsort=='desc'): ?>
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&id=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&id=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&id=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&id=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php endif; ?>
            

            <?php elseif(isset($_GET['star'])): $starsort = $_GET['star']; ?>
                <?php if($starsort==''): ?> 
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($starsort=='asc'): ?>  
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&star=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&star=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&star=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&star=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($starsort=='desc'): ?>  
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&star=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&star=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&star=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&star=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php else: ?>   
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php endif; ?>


            <?php elseif(isset($_GET['status'])): $statussort = $_GET['status']; ?>
                <?php if($statussort==''): ?> 
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($statussort=='asc'): ?>  
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&status=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&status=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&status=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&status=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($statussort=='desc'): ?>  
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&status=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&status=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&status=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&status=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php else: ?>   
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php endif; ?>


            <?php else :?>
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
            <?php endif; ?>



        <?php else: ?>
            <?php if(isset($_GET['id'])): $idsort = $_GET['id'];?>
                    <?php if($idsort==''): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($idsort=='asc'): ?> 
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?id=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?id=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?id=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?id=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($idsort=='desc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?id=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?id=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?id=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?id=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php endif; ?>

            <?php elseif(isset($_GET['star'])):  $starsort = $_GET['star']; ?>
                    <?php if($starsort==''): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($starsort=='asc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?star=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?star=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?star=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?star=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($starsort=='desc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?star=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?star=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?star=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?star=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php endif; ?>
                    


            <?php elseif(isset($_GET['status'])):  $statussort = $_GET['status']; ?>
                    <?php if($statussort==''): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($statussort=='asc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?status=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?status=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?status=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?status=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($statussort=='desc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?status=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?status=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?status=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?status=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php endif; ?>



            <?php else: ?>
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php endif; ?>    
        <?php endif; ?>