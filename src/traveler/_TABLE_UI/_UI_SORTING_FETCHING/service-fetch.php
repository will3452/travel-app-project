<?php



if(isset($_GET['search'])){
        $search = $_GET['search'];
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
        $display = $display->ServiceSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $business_id);
        
        $count = new Service();
        $idnumber = $count->ServiceSearchPageSort($search, $business_id);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
}
else{
   
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