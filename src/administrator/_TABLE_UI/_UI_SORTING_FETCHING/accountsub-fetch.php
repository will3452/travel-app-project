<?php
if(isset($_GET['search'])){
    $search = $_GET['search']; 
    if(isset($_GET['id'])){
        $idsort = $_GET['id'];
        if($idsort==''){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $idsort = "desc";
                $nameofsorting = "id";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search);
    
                $count = new User();
                $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;

                
        }elseif($idsort=='asc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $nameofsorting = "id";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search);
    
                $count = new User();
                $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
                  
        }elseif($idsort=='desc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $nameofsorting = "id";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;

        }else{
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $idsort = "desc";
                $nameofsorting = "id";
                $display = new User();
                                    
                $display = $display->SubsSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
                     
        }
    }elseif(isset($_GET['start_date'])){
        $start_datesort = $_GET['start_date'];
        if($start_datesort==''){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $namesort = "desc";
                $nameofsorting = "id";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;

        }elseif($start_datesort=='asc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $nameofsorting = "start";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $start_datesort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($start_datesort=='desc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $nameofsorting = "start";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $start_datesort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }else{
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $namesort = "desc";
                $nameofsorting = "id";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }
    }
    elseif(isset($_GET['expiration_date'])){
        $expiration_datesort = $_GET['expiration_date'];
        if($expiration_datesort==''){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $namesort = "desc";
                $nameofsorting = "id";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;

        }elseif($expiration_datesort=='asc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $nameofsorting = "expiration";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $expiration_datesort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($expiration_datesort=='desc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $nameofsorting = "expiration";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $expiration_datesort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }else{
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;

                $namesort = "desc";
                $nameofsorting = "id";
                $display = new User();
                $display = $display->SubsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new User();
             $idnumber = $count->SubsSearchPageSort($search);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }
    }
    else{
        if(isset($_GET['limit'])){
        $limit = $_GET['limit'];
        }else{
            $limit = 10;
        }
        if(!empty($_GET['page'])){
            $page = $_GET['page'];
        }
        else{
            $page = 1;
        }
        $start = ($page - 1) * $limit;
        $namesort = "desc";
        $nameofsorting = "id";
        $display = new User();
        $display = $display->SubsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);

        $count = new User();
        $idnumber = $count->SubsSearchPageSort($search);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}else{
    //check if get exist
    if(isset($_GET['id'])){
        $idsort = $_GET['id'];
        if($idsort==''){
            if(isset($_GET['limit'])){
            $limit = $_GET['limit'];
            }else{
                $limit = 10;
            }
            if(!empty($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page = 1;
            }
            $idsort = "desc";
            $nameofsorting = "id";
            $start = ($page - 1) * $limit;
            $display = new User();
            $display = $display->SubsFetctSort($limit, $start, $idsort, $nameofsorting);
                
            $count = new User();
            $idnumber = $count->SubsPageSort();
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
            
        }elseif($idsort=='asc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $nameofsorting = "id";
                $start = ($page - 1) * $limit;
                $display = new User();
                $display = $display->SubsFetctSort($limit, $start, $idsort, $nameofsorting);
                    
                $count = new User();
                $idnumber = $count->SubsPageSort();
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($idsort=='desc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $nameofsorting = "id";
                $start = ($page - 1) * $limit;
                $display = new User();
                       $display = $display->SubsFetctSort($limit, $start, $idsort, $nameofsorting);
                    
                $count = new User();
                $idnumber = $count->SubsPageSort();
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }else{
            if(isset($_GET['limit'])){
            $limit = $_GET['limit'];
            }else{
                $limit = 10;
            }
            if(!empty($_GET['page'])){
                    $page = $_GET['page'];
            }
            else{
                    $page = 1;
            }
            $idsort = "desc";
            $nameofsorting = "id";
            $start = ($page - 1) * $limit;
            $display = new User();
                   $display = $display->SubsFetctSort($limit, $start, $idsort, $nameofsorting);
                
            $count = new User();
            $idnumber = $count->SubsPageSort();
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }
    }

    elseif(isset($_GET['start_date'])){
        $start_datesortsort = $_GET['start_date'];
        if($start_datesortsort==''){
            if(isset($_GET['limit'])){
            $limit = $_GET['limit'];
            }else{
                $limit = 10;
            }
            if(!empty($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page = 1;
            }
            $idsort = "desc";
            $nameofsorting = "id";
            $start = ($page - 1) * $limit;
            $display = new User();
            $display = $display->SubsFetctSort($limit, $start, $idsort, $nameofsorting);
                
            $count = new User();
            $idnumber = $count->SubsPageSort();
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
            
        }elseif($start_datesortsort=='asc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $nameofsorting = "start";
                $start = ($page - 1) * $limit;
                $display = new User();
                $display = $display->SubsFetctSort($limit, $start, $start_datesortsort, $nameofsorting);
                    
                $count = new User();
                $idnumber = $count->SubsPageSort();
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($start_datesortsort=='desc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $nameofsorting = "start";
                $start = ($page - 1) * $limit;
                $display = new User();
                       $display = $display->SubsFetctSort($limit, $start, $start_datesortsort, $nameofsorting);
                    
                $count = new User();
                $idnumber = $count->SubsPageSort();
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }else{
            if(isset($_GET['limit'])){
            $limit = $_GET['limit'];
            }else{
                $limit = 10;
            }
            if(!empty($_GET['page'])){
                    $page = $_GET['page'];
            }
            else{
                    $page = 1;
            }
            $idsort = "desc";
            $nameofsorting = "id";
            $start = ($page - 1) * $limit;
            $display = new User();
                   $display = $display->SubsFetctSort($limit, $start, $idsort, $nameofsorting);
                
            $count = new User();
            $idnumber = $count->SubsPageSort();
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }
    }

     elseif(isset($_GET['expiration_date'])){
        $expiration_datesortsort = $_GET['expiration_date'];
        if($expiration_datesortsort==''){
            if(isset($_GET['limit'])){
            $limit = $_GET['limit'];
            }else{
                $limit = 10;
            }
            if(!empty($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page = 1;
            }
            $idsort = "desc";
            $nameofsorting = "id";
            $start = ($page - 1) * $limit;
            $display = new User();
            $display = $display->SubsFetctSort($limit, $start, $idsort, $nameofsorting);
                
            $count = new User();
            $idnumber = $count->SubsPageSort();
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
            
        }elseif($expiration_datesortsort=='asc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $nameofsorting = "expiration";
                $start = ($page - 1) * $limit;
                $display = new User();
                $display = $display->SubsFetctSort($limit, $start, $expiration_datesortsort, $nameofsorting);
                    
                $count = new User();
                $idnumber = $count->SubsPageSort();
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($expiration_datesortsort=='desc'){
            if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
                }else{
                    $limit = 10;
                }
                if(!empty($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $nameofsorting = "expiration";
                $start = ($page - 1) * $limit;
                $display = new User();
                       $display = $display->SubsFetctSort($limit, $start, $expiration_datesortsort, $nameofsorting);
                    
                $count = new User();
                $idnumber = $count->SubsPageSort();
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }else{
            if(isset($_GET['limit'])){
            $limit = $_GET['limit'];
            }else{
                $limit = 10;
            }
            if(!empty($_GET['page'])){
                    $page = $_GET['page'];
            }
            else{
                    $page = 1;
            }
            $idsort = "desc";
            $nameofsorting = "id";
            $start = ($page - 1) * $limit;
            $display = new User();
                   $display = $display->SubsFetctSort($limit, $start, $idsort, $nameofsorting);
                
            $count = new User();
            $idnumber = $count->SubsPageSort();
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }
    }
    //if not sort
    else{   
        if(isset($_GET['limit'])){
            $limit = $_GET['limit'];
        }else{
            $limit = 10;
        }
        if(!empty($_GET['page'])){
            $page = $_GET['page'];
        }
        else{
            $page = 1;
        }
        $namesort = "desc";
        $nameofsorting = "id";
        $start = ($page - 1) * $limit;
        $display = new User();
        $display = $display->SubsFetctSort($limit, $start, $namesort, $nameofsorting);
        
        $count = new User();
        $idnumber = $count->SubsPageSort();
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}