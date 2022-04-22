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
                $display = new Promotion();
                $display = $display->AdsSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $iduser);
    
                $count = new Promotion();
                $idnumber = $count->AdsSearchPageSort($search, $iduser);
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
                $display = new Promotion();
                $display = $display->AdsSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $iduser);
    
                $count = new Promotion();
                $idnumber = $count->AdsSearchPageSort($search, $iduser);
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
                $display = new Promotion();
                $display = $display->AdsSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $iduser);
    
                $count = new Promotion();
             $idnumber = $count->AdsSearchPageSort($search, $iduser);
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
                $display = new Promotion();
                                    
                $display = $display->AdsSearchFetchSort($limit, $start, $idsort, $nameofsorting, $search, $iduser);
    
                $count = new Promotion();
             $idnumber = $count->AdsSearchPageSort($search, $iduser);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
                     
        }
    }elseif(isset($_GET['date'])){
        $namesort = $_GET['date'];
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
                $display = new Promotion();
                $display = $display->AdsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser);
    
                $count = new Promotion();
             $idnumber = $count->AdsSearchPageSort($search, $iduser);
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

                $nameofsorting = "schedule_at";
                $display = new Promotion();
                $display = $display->AdsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser);
    
                $count = new Promotion();
             $idnumber = $count->AdsSearchPageSort($search, $iduser);
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

                $nameofsorting = "schedule_at";
                $display = new Promotion();
                $display = $display->AdsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser);
    
                $count = new Promotion();
             $idnumber = $count->AdsSearchPageSort($search, $iduser);
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
                $display = new Promotion();
                $display = $display->AdsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser);
    
                $count = new Promotion();
             $idnumber = $count->AdsSearchPageSort($search, $iduser);
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
        $display = new Promotion();
        $display = $display->AdsSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser);

        $count = new Promotion();
        $idnumber = $count->AdsSearchPageSort($search, $iduser);
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
            $display = new Promotion();
            $display = $display->AdsFetctSort($limit, $start, $idsort, $nameofsorting, $iduser);
                
            $count = new Promotion();
            $idnumber = $count->AdsPageSort($iduser);
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
                $display = new Promotion();
                $display = $display->AdsFetctSort($limit, $start, $idsort, $nameofsorting, $iduser);
                    
                $count = new Promotion();
                $idnumber = $count->AdsPageSort($iduser);
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
                $display = new Promotion();
                       $display = $display->AdsFetctSort($limit, $start, $idsort, $nameofsorting, $iduser);
                    
                $count = new Promotion();
                $idnumber = $count->AdsPageSort($iduser);
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
            $display = new Promotion();
                   $display = $display->AdsFetctSort($limit, $start, $idsort, $nameofsorting, $iduser);
                
            $count = new Promotion();
            $idnumber = $count->AdsPageSort($iduser);
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }
    }
    //for name sorting
    elseif(isset($_GET['date'])){
        $namesort = $_GET['date'];
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
                $display = new Promotion();
                $display = $display->AdsFetctSort($limit, $start, $namesort, $nameofsorting, $iduser);
                
                $count = new Promotion();
                $idnumber = $count->AdsPageSort($iduser);
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
                $nameofsorting = "schedule_at";
                $start = ($page - 1) * $limit;
                $display = new Promotion();
                $display = $display->AdsFetctSort($limit, $start, $namesort, $nameofsorting, $iduser);
                
                $count = new Promotion();
                $idnumber = $count->AdsPageSort($iduser);
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
                $nameofsorting = "schedule_at";
                $start = ($page - 1) * $limit;
                $display = new Promotion();
                $display = $display->AdsFetctSort($limit, $start, $namesort, $nameofsorting, $iduser);
                
                $count = new Promotion();
                $idnumber = $count->AdsPageSort($iduser);
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
                $display = new Promotion();
                $display = $display->AdsFetctSort($limit, $start, $namesort, $nameofsorting, $iduser);
                
                $count = new Promotion();
                $idnumber = $count->AdsPageSort($iduser);
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
        $display = new Promotion();
        $display = $display->AdsFetctSort($limit, $start, $namesort, $nameofsorting, $iduser);
        
        $count = new Promotion();
        $idnumber = $count->AdsPageSort($iduser);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}