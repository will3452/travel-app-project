
        <?php if(isset($_GET['search'])):   $search = $_GET['search']; ?>
           

            <?php if(isset($_GET['date'])):  $datesort = $_GET['date']; ?>
                <?php if($datesort==''): ?>
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
                <?php elseif($datesort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&date=asc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=asc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&date=asc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=asc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&date=asc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=asc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&date=asc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=asc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&date=asc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=asc&limit=100';
                    } ?>">100</a></li>
                <?php elseif($datesort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&date=desc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=desc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&date=desc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=desc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&date=desc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=desc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&date=desc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=desc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&date=desc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&date=desc&limit=100';
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
            

                <?php if(isset($_GET['date'])):  $datesort = $_GET['date']; ?>
                    <?php if($datesort==''): ?>
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
                    <?php elseif($datesort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?date=asc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?date=asc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?date=asc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?date=asc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?date=asc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?date=asc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?date=asc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?date=asc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?date=asc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?date=asc&limit=100';
                        } ?>">100</a></li>
                    <?php elseif($datesort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?date=desc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?date=desc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?date=desc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?date=desc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?date=desc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?date=desc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?date=desc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?date=desc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?date=desc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?date=desc&limit=100';
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
