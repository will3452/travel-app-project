<?php
if(isset($_GET['search'])){
    $search = $_GET['search']; 
    if(isset($_GET['name'])){
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
                $display = new Promotion();
                $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Promotion();
             $idnumber = $count->PromotionSearchPageSort($search);
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
                $display = new Promotion();
                $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Promotion();
             $idnumber = $count->PromotionSearchPageSort($search);
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
                $display = new Promotion();
                $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Promotion();
             $idnumber = $count->PromotionSearchPageSort($search);
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
                $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Promotion();
             $idnumber = $count->PromotionSearchPageSort($search);
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
                $display = new Promotion();
                $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Promotion();
             $idnumber = $count->PromotionSearchPageSort($search);
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
                $display = new Promotion();
                $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Promotion();
             $idnumber = $count->PromotionSearchPageSort($search);
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
                $display = new Promotion();
                $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Promotion();
             $idnumber = $count->PromotionSearchPageSort($search);
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
                $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);
    
                $count = new Promotion();
             $idnumber = $count->PromotionSearchPageSort($search);
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
        $display = $display->PromotionSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search);

        $count = new Promotion();
        $idnumber = $count->PromotionSearchPageSort($search);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}else{
    if(isset($_GET['name'])){
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
                $display = new Promotion();
                $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Promotion();
                $idnumber = $count->PromotionPageSort();
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
                $display = new Promotion();
                $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Promotion();
                $idnumber = $count->PromotionPageSort();
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
                $display = new Promotion();
                $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Promotion();
                $idnumber = $count->PromotionPageSort();
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
                $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Promotion();
                $idnumber = $count->PromotionPageSort();
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
                $display = new Promotion();
                $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Promotion();
                $idnumber = $count->PromotionPageSort();
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
                $display = new Promotion();
                $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Promotion();
                $idnumber = $count->PromotionPageSort();
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
                $display = new Promotion();
                $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Promotion();
                $idnumber = $count->PromotionPageSort();
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
                $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
                
                $count = new Promotion();
                $idnumber = $count->PromotionPageSort();
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
        $display = $display->PromotionFetctSort($limit, $start, $namesort, $nameofsorting);
        
        $count = new Promotion();
        $idnumber = $count->PromotionPageSort();
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}