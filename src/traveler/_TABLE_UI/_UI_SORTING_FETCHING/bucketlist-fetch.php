<?php
if(isset($_GET['search'])){
    $search = $_GET['search']; 
    if(isset($_GET['date'])){
        $datesort = $_GET['date'];
        if($datesort==''){
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
                $display = $display->BucketlistSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser);
    
                $count = new Service();
             $idnumber = $count->BucketlistSearchPageSort($search, $iduser);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;

        }elseif($datesort=='asc'){
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

                $nameofsorting = "date";
                $display = new Service();
                $display = $display->BucketlistSearchFetchSort($limit, $start, $datesort, $nameofsorting, $search, $iduser);
    
                $count = new Service();
             $idnumber = $count->BucketlistSearchPageSort($search, $iduser);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($datesort=='desc'){
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

                $nameofsorting = "date";
                $display = new Service();
                $display = $display->BucketlistSearchFetchSort($limit, $start, $datesort, $nameofsorting, $search, $iduser);
    
                $count = new Service();
             $idnumber = $count->BucketlistSearchPageSort($search, $iduser);
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
                $display = $display->BucketlistSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser);
    
                $count = new Service();
             $idnumber = $count->BucketlistSearchPageSort($search, $iduser);
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
        $display = $display->BucketlistSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser);

        $count = new Service();
        $idnumber = $count->BucketlistSearchPageSort($search, $iduser);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}else{
    //check if get exist
    if(isset($_GET['date'])){
        $datesort = $_GET['date'];
        if($datesort==''){
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
                $display = $display->BucketlistFetctSort($limit, $start, $namesort, $nameofsorting, $iduser);
                
                $count = new Service();
                $idnumber = $count->BucketlistPageSort($iduser);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($datesort=='asc'){
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
                $nameofsorting = "date";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->BucketlistFetctSort($limit, $start, $datesort, $nameofsorting, $iduser);
                
                $count = new Service();
                $idnumber = $count->BucketlistPageSort($iduser);
                $pages = ceil($idnumber / $limit);
                $previous = $page-1;
                $Next = $page+1;
        }elseif($datesort=='desc'){
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
                $nameofsorting = "date";
                $start = ($page - 1) * $limit;
                $display = new Service();
                $display = $display->BucketlistFetctSort($limit, $start, $datesort, $nameofsorting, $iduser);
                
                $count = new Service();
                $idnumber = $count->BucketlistPageSort($iduser);
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
                $display = $display->BucketlistFetctSort($limit, $start, $namesort, $nameofsorting, $iduser);
                
                $count = new Service();
                $idnumber = $count->BucketlistPageSort($iduser);
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
        $display = $display->BucketlistFetctSort($limit, $start, $namesort, $nameofsorting, $iduser);
        
        $count = new Service();
        $idnumber = $count->BucketlistPageSort($iduser);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}