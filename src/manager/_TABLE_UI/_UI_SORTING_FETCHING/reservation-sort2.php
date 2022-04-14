
        <?php if(isset($_GET['search'])):   $search = $_GET['search']; ?>
           

           <?php if(isset($_GET['id'])):  $idsort = $_GET['id']; ?>
               <?php if($idsort==''): ?>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=15';
                   } ?>">15</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=25';
                   } ?>">25</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=50';
                   } ?>">50</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=75';
                   } ?>">75</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=100';
                   } ?>">100</a></li>
               <?php elseif($idsort=='asc'): ?>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=15&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=15';
                   } ?>">15</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=25&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=25';
                   } ?>">25</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=50&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=50';
                   } ?>">50</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=75&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=75';
                   } ?>">75</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=100&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=asc&limit=100';
                   } ?>">100</a></li>
               <?php elseif($idsort=='desc'): ?>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=15&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=15';
                   } ?>">15</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=25&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=25';
                   } ?>">25</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=50&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=50';
                   } ?>">50</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=75&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=75';
                   } ?>">75</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=100&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&id=desc&limit=100';
                   } ?>">100</a></li>
               <?php else: ?>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=15';
                   } ?>">15</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=25';
                   } ?>">25</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=50';
                   } ?>">50</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=75';
                   } ?>">75</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=100';
                   } ?>">100</a></li>
               <?php endif; ?>



        <?php elseif(isset($_GET['date'])):  $datesort = $_GET['date']; ?>
               <?php if($datesort==''): ?>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=15';
                   } ?>">15</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=25';
                   } ?>">25</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=50';
                   } ?>">50</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=75';
                   } ?>">75</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=100';
                   } ?>">100</a></li>
               <?php elseif($datesort=='asc'): ?>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=15&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=15';
                   } ?>">15</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=25&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=25';
                   } ?>">25</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=50&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=50';
                   } ?>">50</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=75&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=75';
                   } ?>">75</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=100&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=asc&limit=100';
                   } ?>">100</a></li>
               <?php elseif($datesort=='desc'): ?>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=15&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=15';
                   } ?>">15</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=25&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=25';
                   } ?>">25</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=50&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=50';
                   } ?>">50</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=75&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=75';
                   } ?>">75</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=100&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&date=desc&limit=100';
                   } ?>">100</a></li>
               <?php else: ?>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=15';
                   } ?>">15</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=25';
                   } ?>">25</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=50';
                   } ?>">50</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=75';
                   } ?>">75</a></li>
                   <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
                   }else{
                       echo '?tab=approved&search='.$_GET['search'].'&limit=100';
                   } ?>">100</a></li>
               <?php endif; ?>
               
               
           <?php else: ?>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
               echo '?tab=approved&search='.$_GET['search'].'&limit=15&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&search='.$_GET['search'].'&limit=15';
               } ?>">15</a></li>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&limit=25&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&search='.$_GET['search'].'&limit=25';
               } ?>">25</a></li>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&limit=50&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&search='.$_GET['search'].'&limit=50';
               } ?>">50</a></li>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&limit=75&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&search='.$_GET['search'].'&limit=75';
               } ?>">75</a></li>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&search='.$_GET['search'].'&limit=100&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&search='.$_GET['search'].'&limit=100';
               } ?>">100</a></li>
           <?php endif; ?>

       <?php else: ?>
           

               <?php if(isset($_GET['id'])):  $idsort = $_GET['id']; ?>
                   <?php if($idsort==''): ?>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&limit=15&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=15';
                       } ?>">15</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=25&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=25';
                       } ?>">25</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=50&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=50';
                       } ?>">50</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=75&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=75';
                       } ?>">75</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=100&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=100';
                       } ?>">100</a></li>
                   <?php elseif($idsort=='asc'): ?>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&id=asc&limit=15&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=asc&limit=15';
                       } ?>">15</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&id=asc&limit=25&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=asc&limit=25';
                       } ?>">25</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&id=asc&limit=50&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=asc&limit=50';
                       } ?>">50</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&id=asc&limit=75&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=asc&limit=75';
                       } ?>">75</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&id=asc&limit=100&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=asc&limit=100';
                       } ?>">100</a></li>
                   <?php elseif($idsort=='desc'): ?>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&id=desc&limit=15&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=desc&limit=15';
                       } ?>">15</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&id=desc&limit=25&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=desc&limit=25';
                       } ?>">25</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&id=desc&limit=50&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=desc&limit=50';
                       } ?>">50</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&id=desc&limit=75&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=desc&limit=75';
                       } ?>">75</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&id=desc&limit=100&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&id=desc&limit=100';
                       } ?>">100</a></li>
                   <?php else: ?>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&limit=15&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=15';
                       } ?>">15</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=25&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=25';
                       } ?>">25</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=50&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=50';
                       } ?>">50</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=75&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=75';
                       } ?>">75</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=100&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=100';
                       } ?>">100</a></li>
                   <?php endif; ?>




            <?php elseif(isset($_GET['date'])):  $datesort = $_GET['date']; ?>
                   <?php if($datesort==''): ?>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&limit=15&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=15';
                       } ?>">15</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=25&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=25';
                       } ?>">25</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=50&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=50';
                       } ?>">50</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=75&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=75';
                       } ?>">75</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=100&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=100';
                       } ?>">100</a></li>
                   <?php elseif($datesort=='asc'): ?>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&date=asc&limit=15&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=asc&limit=15';
                       } ?>">15</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&date=asc&limit=25&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=asc&limit=25';
                       } ?>">25</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&date=asc&limit=50&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=asc&limit=50';
                       } ?>">50</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&date=asc&limit=75&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=asc&limit=75';
                       } ?>">75</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&date=asc&limit=100&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=asc&limit=100';
                       } ?>">100</a></li>
                   <?php elseif($datesort=='desc'): ?>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&date=desc&limit=15&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=desc&limit=15';
                       } ?>">15</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&date=desc&limit=25&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=desc&limit=25';
                       } ?>">25</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&date=desc&limit=50&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=desc&limit=50';
                       } ?>">50</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&date=desc&limit=75&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=desc&limit=75';
                       } ?>">75</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&date=desc&limit=100&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&date=desc&limit=100';
                       } ?>">100</a></li>
                   <?php else: ?>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                       echo '?tab=approved&limit=15&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=15';
                       } ?>">15</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=25&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=25';
                       } ?>">25</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=50&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=50';
                       } ?>">50</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=75&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=75';
                       } ?>">75</a></li>
                       <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                           echo '?tab=approved&limit=100&page='.$_GET['page'];
                       }else{
                           echo '?tab=approved&limit=100';
                       } ?>">100</a></li>
                   <?php endif; ?>


           <?php else: ?>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
               echo '?tab=approved&limit=15&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&limit=15';
               } ?>">15</a></li>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&limit=25&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&limit=25';
               } ?>">25</a></li>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&limit=50&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&limit=50';
               } ?>">50</a></li>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&limit=75&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&limit=75';
               } ?>">75</a></li>
               <li><a class="dropdown-item sort" href="<?php if(isset($_GET['page'])){
                   echo '?tab=approved&limit=100&page='.$_GET['page'];
               }else{
                   echo '?tab=approved&limit=100';
               } ?>">100</a></li>
           <?php endif; ?>
       <?php endif; ?>
