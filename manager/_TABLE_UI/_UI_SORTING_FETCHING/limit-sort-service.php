
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

            <?php elseif(isset($_GET['name'])):  $namesort = $_GET['name']; ?>
                <?php if($namesort==''): ?>
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
                <?php elseif($namesort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&name=asc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=asc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&name=asc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=asc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&name=asc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=asc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&name=asc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=asc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&name=asc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=asc&limit=100';
                    } ?>">100</a></li>
                <?php elseif($namesort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&name=desc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=desc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&name=desc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=desc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&name=desc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=desc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&name=desc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=desc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&name=desc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&name=desc&limit=100';
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


            <?php elseif(isset($_GET['price'])):  $pricesort = $_GET['price']; ?>
                <?php if($pricesort==''): ?>
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
                <?php elseif($pricesort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&price=asc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=asc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&price=asc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=asc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&price=asc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=asc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&price=asc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=asc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&price=asc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=asc&limit=100';
                    } ?>">100</a></li>
                <?php elseif($pricesort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&price=desc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=desc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&price=desc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=desc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&price=desc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=desc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&price=desc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=desc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&price=desc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&price=desc&limit=100';
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
            <?php elseif(isset($_GET['name'])):  $namesort = $_GET['name']; ?>
                    <?php if($namesort==''): ?>
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
                    <?php elseif($namesort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?name=asc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?name=asc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?name=asc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?name=asc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?name=asc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?name=asc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?name=asc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?name=asc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?name=asc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?name=asc&limit=100';
                        } ?>">100</a></li>
                    <?php elseif($namesort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?name=desc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?name=desc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?name=desc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?name=desc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?name=desc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?name=desc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?name=desc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?name=desc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?name=desc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?name=desc&limit=100';
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

                <?php elseif(isset($_GET['price'])):  $pricesort = $_GET['price']; ?>
                    <?php if($pricesort==''): ?>
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
                    <?php elseif($pricesort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?price=asc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?price=asc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?price=asc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?price=asc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?price=asc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?price=asc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?price=asc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?price=asc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?price=asc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?price=asc&limit=100';
                        } ?>">100</a></li>
                    <?php elseif($pricesort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?price=desc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?price=desc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?price=desc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?price=desc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?price=desc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?price=desc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?price=desc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?price=desc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?price=desc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?price=desc&limit=100';
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
