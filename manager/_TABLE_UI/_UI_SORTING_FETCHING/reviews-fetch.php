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
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
                $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
                $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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
                $display = new Service();
                                    
                $display = $display->ReviewSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
                     
        }
    }
    
    elseif(isset($_GET['star'])){
        $namesort = $_GET['star'];
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
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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

                $nameofsorting = "star";
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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

                $nameofsorting = "star";
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }
    }

    elseif(isset($_GET['status'])){
        $namesort = $_GET['status'];
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
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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

                $nameofsorting = "status";
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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

                $nameofsorting = "status";
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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
                $display = new Service();
                $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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
        $display = new Service();
        $display = $display->ReviewSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);

        $count = new Service();
        $idnumber = $count->ReviewSearchPageSort($search, $businessid);
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
            $display = new Service();
            $display = $display->ReviewsFetctSort($limit, $start, $idsort, $nameofsorting, $businessid);
                
            $count = new Service();
            $idnumber = $count->ReviewPageSort($businessid);
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
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $idsort, $nameofsorting, $businessid);
                    
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
                $display = new Service();
                       $display = $display->ReviewsFetctSort($limit, $start, $idsort, $nameofsorting, $businessid);
                    
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
            $display = new Service();
                   $display = $display->ReviewsFetctSort($limit, $start, $idsort, $nameofsorting, $businessid);
                
            $count = new Service();
            $idnumber = $count->ReviewPageSort($businessid);
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }
    }
    

    //for star sorting
    elseif(isset($_GET['star'])){
        $namesort = $_GET['star'];
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
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
                $nameofsorting = "star";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
                $nameofsorting = "star";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }
    }

     //for star sorting
     elseif(isset($_GET['status'])){
        $namesort = $_GET['status'];
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
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
                $nameofsorting = "status";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
                $nameofsorting = "status";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
                $display = new Service();
                $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ReviewPageSort($businessid);
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
        $display = new Service();
        $display = $display->ReviewsFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
        
        $count = new Service();
        $idnumber = $count->ReviewPageSort($businessid);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}