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
                $display = new Reservation();
                $display = $display->ReservationSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser, $status);
    
                $count = new Reservation();
             $idnumber = $count->ReservationSearchPageSort($search, $iduser, $status);
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

                $nameofsorting = "reserved_at";
                $display = new Reservation();
                $display = $display->ReservationSearchFetchSort($limit, $start, $datesort, $nameofsorting, $search, $iduser, $status);
    
                $count = new Reservation();
             $idnumber = $count->ReservationSearchPageSort($search, $iduser, $status);
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

                $nameofsorting = "reserved_at";
                $display = new Reservation();
                $display = $display->ReservationSearchFetchSort($limit, $start, $datesort, $nameofsorting, $search, $iduser, $status);
    
                $count = new Reservation();
             $idnumber = $count->ReservationSearchPageSort($search, $iduser, $status);
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
                $display = new Reservation();
                $display = $display->ReservationSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser, $status);
    
                $count = new Reservation();
             $idnumber = $count->ReservationSearchPageSort($search, $iduser, $status);
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
        $display = new Reservation();
        $display = $display->ReservationSearchFetchSort($limit, $start, $namesort, $nameofsorting, $search, $iduser, $status);

        $count = new Reservation();
        $idnumber = $count->ReservationSearchPageSort($search, $iduser, $status);
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
                $display = new Reservation();
                $display = $display->ReservationFetctSort($limit, $start, $namesort, $nameofsorting, $iduser, $status);
                
                $count = new Reservation();
                $idnumber = $count->ReservationPageSort($iduser, $status);
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
                $nameofsorting = "reserved_at";
                $start = ($page - 1) * $limit;
                $display = new Reservation();
                $display = $display->ReservationFetctSort($limit, $start, $datesort, $nameofsorting, $iduser, $status);
                
                $count = new Reservation();
                $idnumber = $count->ReservationPageSort($iduser, $status);
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
                $nameofsorting = "reserved_at";
                $start = ($page - 1) * $limit;
                $display = new Reservation();
                $display = $display->ReservationFetctSort($limit, $start, $datesort, $nameofsorting, $iduser, $status);
                
                $count = new Reservation();
                $idnumber = $count->ReservationPageSort($iduser, $status);
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
                $display = new Reservation();
                $display = $display->ReservationFetctSort($limit, $start, $namesort, $nameofsorting, $iduser, $status);
                
                $count = new Reservation();
                $idnumber = $count->ReservationPageSort($iduser, $status);
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
        $display = new Reservation();
        $display = $display->ReservationFetctSort($limit, $start, $namesort, $nameofsorting, $iduser, $status);
        
        $count = new Reservation();
        $idnumber = $count->ReservationPageSort($iduser, $status);
        $pages = ceil($idnumber / $limit);
        $previous = $page-1;
        $Next = $page+1;
    }
}