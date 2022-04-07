
        <?php if(isset($_GET['search'])):   $search = $_GET['search']; ?>
            <?php if(isset($_GET['id'])): $idsort = $_GET['id'];?>
                <?php if($idsort==''): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15#tabs';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25#tabs';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50#tabs';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75#tabs';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100#tabs';
                    } ?>">100</a></li>
                <?php elseif($idsort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=15&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=15#tabs';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=25&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=25#tabs';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=50&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=50#tabs';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=75&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=75#tabs';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=100&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=asc&limit=100#tabs';
                    } ?>">100</a></li>
                <?php elseif($idsort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=15&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=15#tabs';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=25&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=25#tabs';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=50&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=50#tabs';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=75&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=75#tabs';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=100&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&id=desc&limit=100#tabs';
                    } ?>">100</a></li>
                <?php else: ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15#tabs';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25#tabs';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50#tabs';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75#tabs';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100#tabs';
                    } ?>">100</a></li>
                <?php endif; ?>

            <?php elseif(isset($_GET['date'])):  $datesort = $_GET['date']; ?>
                <?php if($datesort==''): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15#tabs';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25#tabs';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50#tabs';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75#tabs';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100#tabs';
                    } ?>">100</a></li>
                <?php elseif($datesort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=15&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=15#tabs';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=25&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=25#tabs';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=50&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=50#tabs';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=75&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=75#tabs';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=100&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=asc&limit=100#tabs';
                    } ?>">100</a></li>
                <?php elseif($datesort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=15&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=15#tabs';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=25&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=25#tabs';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=50&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=50#tabs';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=75&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=75#tabs';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=100&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&date=desc&limit=100#tabs';
                    } ?>">100</a></li>
                <?php else: ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15#tabs';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25#tabs';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50#tabs';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75#tabs';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100&page='.$_GET['page'].'#tabs';
                    }else{
                        echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100#tabs';
                    } ?>">100</a></li>
                <?php endif; ?>
            <?php else: ?>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=15#tabs';
                } ?>">15</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=25#tabs';
                } ?>">25</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=50#tabs';
                } ?>">50</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=75#tabs';
                } ?>">75</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&search='.$_GET['search'].'&limit=100#tabs';
                } ?>">100</a></li>
            <?php endif; ?>
        <?php else: ?>
            <?php if(isset($_GET['id'])): $idsort = $_GET['id'];?>
                    <?php if($idsort==''): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&limit=15&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=15#tabs';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=25&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=25#tabs';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=50&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=50#tabs';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=75&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=75#tabs';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=100&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=100#tabs';
                        } ?>">100</a></li>
                    <?php elseif($idsort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&id=asc&limit=15&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=asc&limit=15#tabs';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&id=asc&limit=25&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=asc&limit=25#tabs';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&id=asc&limit=50&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=asc&limit=50#tabs';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&id=asc&limit=75&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=asc&limit=75#tabs';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&id=asc&limit=100&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=asc&limit=100#tabs';
                        } ?>">100</a></li>
                    <?php elseif($idsort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&id=desc&limit=15&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=desc&limit=15#tabs';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&id=desc&limit=25&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=desc&limit=25#tabs';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&id=desc&limit=50&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=desc&limit=50#tabs';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&id=desc&limit=75&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=desc&limit=75#tabs';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&id=desc&limit=100&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&id=desc&limit=100#tabs';
                        } ?>">100</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&limit=15&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=15#tabs';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=25&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=25#tabs';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=50&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=50#tabs';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=75&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=75#tabs';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=100&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=100#tabs';
                        } ?>">100</a></li>
                    <?php endif; ?>
            <?php elseif(isset($_GET['date'])):  $datesort = $_GET['date']; ?>
                    <?php if($datesort==''): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&limit=15&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=15#tabs';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=25&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=25#tabs';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=50&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=50#tabs';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=75&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=75#tabs';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=100&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=100#tabs';
                        } ?>">100</a></li>
                    <?php elseif($datesort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&date=asc&limit=15&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=asc&limit=15#tabs';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&date=asc&limit=25&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=asc&limit=25#tabs';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&date=asc&limit=50&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=asc&limit=50#tabs';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&date=asc&limit=75&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=asc&limit=75#tabs';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&date=asc&limit=100&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=asc&limit=100#tabs';
                        } ?>">100</a></li>
                    <?php elseif($datesort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&date=desc&limit=15&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=desc&limit=15#tabs';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&date=desc&limit=25&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=desc&limit=25#tabs';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&date=desc&limit=50&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=desc&limit=50#tabs';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&date=desc&limit=75&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=desc&limit=75#tabs';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&date=desc&limit=100&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&date=desc&limit=100#tabs';
                        } ?>">100</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?manager_id='.$manager_id.'&limit=15&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=15#tabs';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=25&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=25#tabs';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=50&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=50#tabs';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=75&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=75#tabs';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?manager_id='.$manager_id.'&limit=100&page='.$_GET['page'].'#tabs';
                        }else{
                            echo '?manager_id='.$manager_id.'&limit=100#tabs';
                        } ?>">100</a></li>
                    <?php endif; ?>
            <?php else: ?>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                echo '?manager_id='.$manager_id.'&limit=15&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&limit=15#tabs';
                } ?>">15</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&limit=25&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&limit=25#tabs';
                } ?>">25</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&limit=50&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&limit=50#tabs';
                } ?>">50</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&limit=75&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&limit=75#tabs';
                } ?>">75</a></li>
                <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?manager_id='.$manager_id.'&limit=100&page='.$_GET['page'].'#tabs';
                }else{
                    echo '?manager_id='.$manager_id.'&limit=100#tabs';
                } ?>">100</a></li>
            <?php endif; ?>
        <?php endif; ?>
