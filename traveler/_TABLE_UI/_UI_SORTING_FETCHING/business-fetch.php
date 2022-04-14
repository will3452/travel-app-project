<?php



if(isset($_GET['search'])){
    $search = $_GET['search'];
    if(isset($_GET['category'])){
        $category = $_GET['category'];
        if($category==''){
            $limit = 10;
            if(!empty($_GET['page'])){
                    $page = $_GET['page'];
            }
            else{
                    $page = 1;
            }
            $namesort = "asc";
            $nameofsorting = "name";
            $start = ($page - 1) * $limit;
            
            $display = new User();
             $display = $display->BusinessFetctSortWithSearch($limit, $start, $search, $namesort, $nameofsorting);
            
            $count = new User();
            $idnumber = $count->BusinessPageSortWithSearch($search);
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }else{
            $limit = 10;
            if(!empty($_GET['page'])){
                    $page = $_GET['page'];
            }
            else{
                    $page = 1;
            }
            $namesort = "asc";
            $nameofsorting = "name";
            $start = ($page - 1) * $limit;
            
            $display = new User();
            $display = $display->BusinessFetctSortWithSearchAndCategory($limit, $start, $search, $category, $namesort, $nameofsorting);
            
            $count = new User();
            $idnumber = $count->BusinessPageSortWithSearchAndCategory($search, $category);
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }

    }else{
        $limit = 10;
        if(!empty($_GET['page'])){
                $page = $_GET['page'];
        }
        else{
                $page = 1;
        }
        $namesort = "asc";
        $nameofsorting = "name";
        $start = ($page - 1) * $limit;
        
        $display = new User();
         $display = $display->BusinessFetctSortWithSearch($limit, $start, $search, $namesort, $nameofsorting);
        
        $count = new User();
        $idnumber = $count->BusinessPageSortWithSearch($search);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}
else{
    if(isset($_GET['category'])){
        $category = $_GET['category'];
        if($category==''){
            $limit = 10;
            if(!empty($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page = 1;
            }
            $namesort = "asc";
            $nameofsorting = "name";
            $start = ($page - 1) * $limit;
        
            $display = new User();
            $display = $display->BusinessFetctSortWithCategory($limit, $start, $category, $namesort, $nameofsorting);
        
            $count = new User();
            $idnumber = $count->BusinessPageSortWithCategory($category);
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }else{
            $limit = 10;
            if(!empty($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page = 1;
            }
            $namesort = "asc";
            $nameofsorting = "name";
            $start = ($page - 1) * $limit;
        
            $display = new User();
            $display = $display->BusinessFetctSortWithCategory($limit, $start, $category, $namesort, $nameofsorting);
        
            $count = new User();
            $idnumber = $count->BusinessPageSortWithCategory($category);
            $pages = ceil($idnumber / $limit);
            $previous = $page-1;
            $Next = $page+1;
        }
    }else{
        $limit = 10;
        if(!empty($_GET['page'])){
            $page = $_GET['page'];
        }
        else{
            $page = 1;
        }
        $namesort = "asc";
        $nameofsorting = "name";
        $start = ($page - 1) * $limit;
    
        $display = new User();
        $display = $display->BusinessFetctSort($limit, $start, $namesort, $nameofsorting);
    
        $count = new User();
        $idnumber = $count->BusinessPageSort();
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}