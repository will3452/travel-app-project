
        <?php if(isset($_GET['search'])): $search = $_GET['search']; ?>
            <?php if(isset($_GET['id'])): $idsort = $_GET['id']; ?>
                <?php if($idsort==''): ?> 
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($idsort=='asc'): ?>  
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&id=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&id=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&id=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&id=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($idsort=='desc'): ?>  
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&id=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&id=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&id=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&id=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php else: ?>   
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php endif; ?>



            <?php elseif(isset($_GET['date'])): $datesort = $_GET['date']; ?>
                <?php if($datesort==''): ?> 
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($datesort=='asc'): ?>  
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&date=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&date=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&date=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&date=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php elseif($datesort=='desc'): ?>  
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&date=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&date=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&date=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&date=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php else: ?>   
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
                <?php endif; ?>


            <?php else :?>
                    <?php if($page>1): ?>
                    <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php endif; ?>
                    <?php else: ?>
                        <p class="nomore">Previous</p>
                    <?php endif; ?>
                                    
                    <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                    <?php if($page<$pages): ?>
                            <?php if(isset($_GET['limit'])): ?>
                            <a href="?tab=approved&search=<?php echo $search; ?>&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                            <?php else: ?>
                                <a href="?tab=approved&search=<?php echo $search; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Next</p>
                    <?php endif; ?>
            <?php endif; ?>



        <?php else: ?>
                              


            <?php if(isset($_GET['id'])):  $idsort = $_GET['id']; ?>
                    <?php if($idsort==''): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?tab=approved&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?tab=approved&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($idsort=='asc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&id=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?tab=approved&id=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&id=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?tab=approved&id=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($idsort=='desc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&id=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?tab=approved&id=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&id=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?tab=approved&id=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?tab=approved&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?tab=approved&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php endif; ?>



                <?php elseif(isset($_GET['date'])):  $datesort = $_GET['date']; ?>
                    <?php if($datesort==''): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?tab=approved&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?tab=approved&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($datesort=='asc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&date=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?tab=approved&date=asc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&date=asc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?tab=approved&date=asc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php elseif($datesort=='desc'): ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&date=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?tab=approved&date=desc&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&date=desc&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?tab=approved&date=desc&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                    <?php endif; ?>
                            <?php else: ?>
                                <p class="nomore">Next</p>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if($page>1): ?>
                        <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                <?php else: ?>
                                    <a href="?tab=approved&page=<?php echo $previous; ?>" class="pagess">Previous</a>
                                    <?php endif; ?>
                        <?php else: ?>
                            <p class="nomore">Previous</p>
                        <?php endif; ?>
                                        
                        <p>Page <?php if($idnumber!=0){echo $page;} else{ echo '0';} ?> - <?php echo $pages; ?></p>

                        <?php if($page<$pages): ?>
                                <?php if(isset($_GET['limit'])): ?>
                                <a href="?tab=approved&limit=<?php echo $_GET['limit']; ?>&page=<?php echo $Next; ?>" class="pagess">Next</a>
                                <?php else: ?>
                                    <a href="?tab=approved&page=<?php echo $Next; ?>" class="pagess">Next</a>
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