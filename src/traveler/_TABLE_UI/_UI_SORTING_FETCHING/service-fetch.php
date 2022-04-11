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
            
            $display = new Service();
             $display = $display->ServiceFetctSortWithSearch($limit, $start, $search, $namesort, $nameofsorting, $business_id);
            
            $count = new Service();
            $idnumber = $count->ServicePageSortWithSearch($business_id);
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
            
            $display = new Service();
            $display = $display->ServiceFetctSortWithSearchAndCategory($limit, $start, $search, $category, $namesort, $nameofsorting, $business_id);
            
            $count = new Service();
            $idnumber = $count->ServicePageSortWithSearchAndCategory($business_id, $search, $category);
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
        
        $display = new Service();
         $display = $display->ServiceFetctSortWithSearch($limit, $start, $search, $namesort, $nameofsorting, $business_id);
        
        $count = new Service();
        $idnumber = $count->ServicePageSortWithSearch($business_id, $search);
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
        
            $display = new Service();
            $display = $display->ServiceFetctSortWithCategory($limit, $start, $category, $namesort, $nameofsorting, $business_id);
        
            $count = new Service();
            $idnumber = $count->ServicePageSortWithCategory($business_id, $category);
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
        
            $display = new Service();
            $display = $display->ServiceFetctSortWithCategory($limit, $start, $category, $namesort, $nameofsorting, $business_id);
        
            $count = new Service();
            $idnumber = $count->ServicePageSortWithCategory($business_id, $category);
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
    
        $display = new Service();
        $display = $display->ServiceFetctSort($limit, $start, $namesort, $nameofsorting, $business_id);
    
        $count = new Service();
        $idnumber = $count->ServicePageSort($business_id);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}