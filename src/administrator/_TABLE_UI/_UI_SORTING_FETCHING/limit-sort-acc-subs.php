
        <?php if(isset($_GET['search'])):   $search = $_GET['search']; ?>
            <?php if(isset($_GET['id'])): $idsort = $_GET['id'];?>
                <?php if($idsort==''): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=100';
                    } ?>">100</a></li>
                <?php elseif($idsort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&id=asc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=asc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&id=asc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=asc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&id=asc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=asc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&id=asc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=asc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&id=asc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=asc&limit=100';
                    } ?>">100</a></li>
                <?php elseif($idsort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&id=desc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=desc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&id=desc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=desc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&id=desc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=desc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&id=desc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=desc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&id=desc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&id=desc&limit=100';
                    } ?>">100</a></li>
                <?php else: ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=100';
                    } ?>">100</a></li>
                <?php endif; ?>

            <?php elseif(isset($_GET['start_date'])):  $start_datesort = $_GET['start_date']; ?>
                <?php if($start_datesort==''): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=100';
                    } ?>">100</a></li>
                <?php elseif($start_datesort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&start_date=asc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=asc&limit=100';
                    } ?>">100</a></li>
                <?php elseif($start_datesort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&start_date=desc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&start_date=desc&limit=100';
                    } ?>">100</a></li>
                <?php else: ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=100';
                    } ?>">100</a></li>
                <?php endif; ?>

            <?php elseif(isset($_GET['expiration_date'])):  $expiration_datesort = $_GET['expiration_date']; ?>
                <?php if($expiration_datesort==''): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=100';
                    } ?>">100</a></li>
                <?php elseif($expiration_datesort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&expiration_date=asc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=asc&limit=100';
                    } ?>">100</a></li>
                <?php elseif($expiration_datesort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&expiration_date=desc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&expiration_date=desc&limit=100';
                    } ?>">100</a></li>
                <?php else: ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&limit=100';
                    } ?>">100</a></li>
                <?php endif; ?>

            <?php else: ?>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                echo '?search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                }else{
                    echo '?search='.$_GET['search'].'&limit=15';
                } ?>">15</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                }else{
                    echo '?search='.$_GET['search'].'&limit=25';
                } ?>">25</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                }else{
                    echo '?search='.$_GET['search'].'&limit=50';
                } ?>">50</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                }else{
                    echo '?search='.$_GET['search'].'&limit=75';
                } ?>">75</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                }else{
                    echo '?search='.$_GET['search'].'&limit=100';
                } ?>">100</a></li>
            <?php endif; ?>
        <?php else: ?>
            <?php if(isset($_GET['id'])): $idsort = $_GET['id'];?>
                    <?php if($idsort==''): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?limit=15&page='.$_GET['page'];
                        }else{
                            echo '?limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=25&page='.$_GET['page'];
                        }else{
                            echo '?limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=50&page='.$_GET['page'];
                        }else{
                            echo '?limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=75&page='.$_GET['page'];
                        }else{
                            echo '?limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=100&page='.$_GET['page'];
                        }else{
                            echo '?limit=100';
                        } ?>">100</a></li>
                    <?php elseif($idsort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?id=asc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?id=asc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?id=asc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?id=asc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?id=asc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?id=asc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?id=asc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?id=asc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?id=asc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?id=asc&limit=100';
                        } ?>">100</a></li>
                    <?php elseif($idsort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?id=desc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?id=desc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?id=desc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?id=desc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?id=desc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?id=desc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?id=desc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?id=desc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?id=desc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?id=desc&limit=100';
                        } ?>">100</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?limit=15&page='.$_GET['page'];
                        }else{
                            echo '?limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=25&page='.$_GET['page'];
                        }else{
                            echo '?limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=50&page='.$_GET['page'];
                        }else{
                            echo '?limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=75&page='.$_GET['page'];
                        }else{
                            echo '?limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=100&page='.$_GET['page'];
                        }else{
                            echo '?limit=100';
                        } ?>">100</a></li>
                    <?php endif; ?>
            <?php elseif(isset($_GET['start_date'])):  $start_datesort = $_GET['start_date']; ?>
                    <?php if($start_datesort==''): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?limit=15&page='.$_GET['page'];
                        }else{
                            echo '?limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=25&page='.$_GET['page'];
                        }else{
                            echo '?limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=50&page='.$_GET['page'];
                        }else{
                            echo '?limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=75&page='.$_GET['page'];
                        }else{
                            echo '?limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=100&page='.$_GET['page'];
                        }else{
                            echo '?limit=100';
                        } ?>">100</a></li>
                    <?php elseif($start_datesort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?start_date=asc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?start_date=asc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?start_date=asc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?start_date=asc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?start_date=asc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?start_date=asc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?start_date=asc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?start_date=asc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?start_date=asc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?start_date=asc&limit=100';
                        } ?>">100</a></li>
                    <?php elseif($start_datesort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?start_date=desc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?start_date=desc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?start_date=desc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?start_date=desc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?start_date=desc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?start_date=desc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?start_date=desc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?start_date=desc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?start_date=desc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?start_date=desc&limit=100';
                        } ?>">100</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?limit=15&page='.$_GET['page'];
                        }else{
                            echo '?limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=25&page='.$_GET['page'];
                        }else{
                            echo '?limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=50&page='.$_GET['page'];
                        }else{
                            echo '?limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=75&page='.$_GET['page'];
                        }else{
                            echo '?limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=100&page='.$_GET['page'];
                        }else{
                            echo '?limit=100';
                        } ?>">100</a></li>
                    <?php endif; ?>

                <?php elseif(isset($_GET['expiration_date'])):  $expiration_datesort = $_GET['expiration_date']; ?>
                    <?php if($expiration_datesort==''): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?limit=15&page='.$_GET['page'];
                        }else{
                            echo '?limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=25&page='.$_GET['page'];
                        }else{
                            echo '?limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=50&page='.$_GET['page'];
                        }else{
                            echo '?limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=75&page='.$_GET['page'];
                        }else{
                            echo '?limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=100&page='.$_GET['page'];
                        }else{
                            echo '?limit=100';
                        } ?>">100</a></li>
                    <?php elseif($expiration_datesort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?expiration_date=asc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=asc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?expiration_date=asc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=asc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?expiration_date=asc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=asc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?expiration_date=asc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=asc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?expiration_date=asc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=asc&limit=100';
                        } ?>">100</a></li>
                    <?php elseif($expiration_datesort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?expiration_date=desc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=desc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?expiration_date=desc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=desc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?expiration_date=desc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=desc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?expiration_date=desc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=desc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?expiration_date=desc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?expiration_date=desc&limit=100';
                        } ?>">100</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?limit=15&page='.$_GET['page'];
                        }else{
                            echo '?limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=25&page='.$_GET['page'];
                        }else{
                            echo '?limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=50&page='.$_GET['page'];
                        }else{
                            echo '?limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=75&page='.$_GET['page'];
                        }else{
                            echo '?limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?limit=100&page='.$_GET['page'];
                        }else{
                            echo '?limit=100';
                        } ?>">100</a></li>
                    <?php endif; ?>
            <?php else: ?>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                echo '?limit=15&page='.$_GET['page'];
                }else{
                    echo '?limit=15';
                } ?>">15</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?limit=25&page='.$_GET['page'];
                }else{
                    echo '?limit=25';
                } ?>">25</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?limit=50&page='.$_GET['page'];
                }else{
                    echo '?limit=50';
                } ?>">50</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?limit=75&page='.$_GET['page'];
                }else{
                    echo '?limit=75';
                } ?>">75</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?limit=100&page='.$_GET['page'];
                }else{
                    echo '?limit=100';
                } ?>">100</a></li>
            <?php endif; ?>
        <?php endif; ?>
