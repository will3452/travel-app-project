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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $userid);
    
                $count = new User();
                $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $userid);
    
                $count = new User();
                $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
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
                                    
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
                     
        }
    }
    
    elseif(isset($_GET['start_date'])){
        $namesort = $_GET['start_date'];
        if($namesort==''){
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;

        }elseif($namesort=='asc'){
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($namesort=='desc'){
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }
    }
    elseif(isset($_GET['expiration_date'])){
        $namesort = $_GET['expiration_date'];
        if($namesort==''){
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;

        }elseif($namesort=='asc'){
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($namesort=='desc'){
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
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
                $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);
    
                $count = new User();
             $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
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
        $display = $display->SubsManagerSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $userid);

        $count = new User();
        $idnumber = $count->SubsManagerSearchPageSort($search, $userid);
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
            $display = $display->SubsManagerFetctSort($limit, $start, $idsort, $nameofsorting, $userid);
                
            $count = new User();
            $idnumber = $count->SubsManagerPageSort($userid);
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
                $display = $display->SubsManagerFetctSort($limit, $start, $idsort, $nameofsorting, $userid);
                    
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
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
                       $display = $display->SubsManagerFetctSort($limit, $start, $idsort, $nameofsorting, $userid);
                    
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
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
                   $display = $display->SubsManagerFetctSort($limit, $start, $idsort, $nameofsorting, $userid);
                
            $count = new User();
            $idnumber = $count->SubsManagerPageSort($userid);
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }
    }

    //for date sorting
    elseif(isset($_GET['start_date'])){
        $namesort = $_GET['start_date'];
        if($namesort==''){
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
                $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
                
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($namesort=='asc'){
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
                $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
                
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($namesort=='desc'){
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
                $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
                
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
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
                $namesort = "desc";
                $nameofsorting = "id";
                $start = ($page - 1) * $limit;
                $display = new User();
                $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
                
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }
    }
    elseif(isset($_GET['expiration_date'])){
        $namesort = $_GET['expiration_date'];
        if($namesort==''){
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
                $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
                
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($namesort=='asc'){
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
                $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
                
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($namesort=='desc'){
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
                $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
                
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
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
                $namesort = "desc";
                $nameofsorting = "id";
                $start = ($page - 1) * $limit;
                $display = new User();
                $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
                
                $count = new User();
                $idnumber = $count->SubsManagerPageSort($userid);
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
        $display = $display->SubsManagerFetctSort($limit, $start, $namesort, $nameofsorting, $userid);
        
        $count = new User();
        $idnumber = $count->SubsManagerPageSort($userid);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}