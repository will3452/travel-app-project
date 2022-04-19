<?php
if(isset($_GET['search'])){
    $search = $_GET['search']; 
    if(isset($_GET['date'])){
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
                $nameofsorting = "date";
                $display = new Payment();
                $display = $display->RevenueSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Payment();
             $idnumber = $count->RevenueSearchPageSort($search);
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

                $nameofsorting = "date";
                $display = new Payment();
                $display = $display->RevenueSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Payment();
             $idnumber = $count->RevenueSearchPageSort($search);
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

                $nameofsorting = "date";
                $display = new Payment();
                $display = $display->RevenueSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Payment();
             $idnumber = $count->RevenueSearchPageSort($search);
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
                $nameofsorting = "date";
                $display = new Payment();
                $display = $display->RevenueSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Payment();
             $idnumber = $count->RevenueSearchPageSort($search);
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
        $display = new Payment();
        $display = $display->RevenueSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);

        $count = new Payment();
        $idnumber = $count->RevenueSearchPageSort($search);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}else{
    

    //for price sorting
    if(isset($_GET['date'])){
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
                $nameofsorting = "date";
                $start = ($page - 1) * $limit;
                $display = new Payment();
                $display = $display->RevenueFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Payment();
                $idnumber = $count->RevenuePageSort();
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
                $nameofsorting = "date";
                $start = ($page - 1) * $limit;
                $display = new Payment();
                $display = $display->RevenueFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Payment();
                $idnumber = $count->RevenuePageSort();
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
                $nameofsorting = "date";
                $start = ($page - 1) * $limit;
                $display = new Payment();
                $display = $display->RevenueFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Payment();
                $idnumber = $count->RevenuePageSort();
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
                $nameofsorting = "date";
                $start = ($page - 1) * $limit;
                $display = new Payment();
                $display = $display->RevenueFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Payment();
                $idnumber = $count->RevenuePageSort();
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
        $nameofsorting = "date";
        $start = ($page - 1) * $limit;
        $display = new Payment();
        $display = $display->RevenueFetctSort($limit, $start, $namesort, $nameofsorting);
        
        $count = new Payment();
        $idnumber = $count->RevenuePageSort();
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}