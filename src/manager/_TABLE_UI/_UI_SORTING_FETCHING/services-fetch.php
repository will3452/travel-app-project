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
                $display = $display->ServiceSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
                $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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
                $display = $display->ServiceSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
                $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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
                $display = $display->ServiceSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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
                                    
                $display = $display->ServiceSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
                     
        }
    }elseif(isset($_GET['name'])){
        $namesort = $_GET['name'];
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
                $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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

                $nameofsorting = "name";
                $display = new Service();
                $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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

                $nameofsorting = "name";
                $display = new Service();
                $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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
                $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }
    }
    
    elseif(isset($_GET['price'])){
        $namesort = $_GET['price'];
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
                $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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

                $nameofsorting = "price";
                $display = new Service();
                $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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

                $nameofsorting = "price";
                $display = new Service();
                $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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
                $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);
    
                $count = new Service();
             $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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
        $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $businessid);

        $count = new Service();
        $idnumber = $count->ServiceSearchPageSort($search, $businessid);
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
            $display = $display->ServiceFetctSort($limit, $start, $idsort, $nameofsorting, $businessid);
                
            $count = new Service();
            $idnumber = $count->ServicePageSort($businessid);
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
                $display = $display->ServiceFetctSort($limit, $start, $idsort, $nameofsorting, $businessid);
                    
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
                       $display = $display->ServiceFetctSort($limit, $start, $idsort, $nameofsorting, $businessid);
                    
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
                   $display = $display->ServiceFetctSort($limit, $start, $idsort, $nameofsorting, $businessid);
                
            $count = new Service();
            $idnumber = $count->ServicePageSort($businessid);
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }
    }
    //for name sorting
    elseif(isset($_GET['name'])){
        $namesort = $_GET['name'];
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
                $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
                $nameofsorting = "name";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
                $nameofsorting = "name";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
                $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }
    }

    //for price sorting
    elseif(isset($_GET['price'])){
        $namesort = $_GET['price'];
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
                $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
                $nameofsorting = "price";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
                $nameofsorting = "price";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
                $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
                
                $count = new Service();
                $idnumber = $count->ServicePageSort($businessid);
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
        $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $businessid);
        
        $count = new Service();
        $idnumber = $count->ServicePageSort($businessid);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}