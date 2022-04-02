
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

            <?php elseif(isset($_GET['email'])):  $emailsort = $_GET['email']; ?>
                <?php if($emailsort==''): ?>
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
                <?php elseif($emailsort=='asc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&email=asc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=asc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&email=asc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=asc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&email=asc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=asc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&email=asc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=asc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&email=asc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=asc&limit=100';
                    } ?>">100</a></li>
                <?php elseif($emailsort=='desc'): ?>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                    echo '?search='.$_GET['search'].'&email=desc&limit=15&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=desc&limit=15';
                    } ?>">15</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&email=desc&limit=25&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=desc&limit=25';
                    } ?>">25</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&email=desc&limit=50&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=desc&limit=50';
                    } ?>">50</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&email=desc&limit=75&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=desc&limit=75';
                    } ?>">75</a></li>
                    <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?search='.$_GET['search'].'&email=desc&limit=100&page='.$_GET['page'];
                    }else{
                        echo '?search='.$_GET['search'].'&email=desc&limit=100';
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
            <?php elseif(isset($_GET['email'])):  $emailsort = $_GET['email']; ?>
                    <?php if($emailsort==''): ?>
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
                    <?php elseif($emailsort=='asc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?email=asc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?email=asc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?email=asc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?email=asc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?email=asc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?email=asc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?email=asc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?email=asc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?email=asc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?email=asc&limit=100';
                        } ?>">100</a></li>
                    <?php elseif($emailsort=='desc'): ?>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                        echo '?email=desc&limit=15&page='.$_GET['page'];
                        }else{
                            echo '?email=desc&limit=15';
                        } ?>">15</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?email=desc&limit=25&page='.$_GET['page'];
                        }else{
                            echo '?email=desc&limit=25';
                        } ?>">25</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?email=desc&limit=50&page='.$_GET['page'];
                        }else{
                            echo '?email=desc&limit=50';
                        } ?>">50</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?email=desc&limit=75&page='.$_GET['page'];
                        }else{
                            echo '?email=desc&limit=75';
                        } ?>">75</a></li>
                        <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                            echo '?email=desc&limit=100&page='.$_GET['page'];
                        }else{
                            echo '?email=desc&limit=100';
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
