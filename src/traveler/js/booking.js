window.addEventListener("load", function(){
    $(".loadingss").fadeOut(1000);
    setTimeout(function(){
    $("#emptyss").show();
    $(".hideafter").show();
    $(".tablenew").show();
    $(".bottomtable").show();
    }, 1000);
}); 
var timertable;
    var timeouttable = 1500;
        $('#search').keyup(function(){
            clearTimeout(timertable);
            if ($('#search').val) {
                timertable = setTimeout(function(){
                    //do stuff here e.g ajax call etc....
                    var search = $("#search").val();
                    var booksearch = $("#booksearch").val();

                    $("#search").attr('disabled', true);
                    if(booksearch==''){
                        if(search==''){
                            window.location.href="booking";
                        }else{
                            window.location.href="booking?search="+search;
                        }
                    }else if(booksearch=='book2'){
                        if(search==''){
                            window.location.href="booking?tab=approved";
                        }else{
                            window.location.href="booking?tab=approved&search="+search;
                        }
                    }else if(booksearch=='book3'){
                        if(search==''){
                            window.location.href="booking?tab=history";
                        }else{
                            window.location.href="booking?tab=history&search="+search;
                        }
                    }
                    else{
                        if(search==''){
                            window.location.href="booking";
                        }else{
                            window.location.href="booking?search="+search;
                        }
                    }
                }, timeouttable);
            }
        });
        $("#search").keyup(function(e){
            var search = $("#search").val();
            if(search==''){
                $(".clearable__clear").hide();
            }else{
                $(".clearable__clear").show();
            }
        });
        $(document).on('click','.clearable__clear_search',function(){
            var booksearch = $("#booksearch").val();
            if(booksearch==''){
                window.location.href="booking";
            }else if(booksearch=='book2'){
                window.location.href="booking?tab=approved";
            }else if(booksearch=='book3'){
                window.location.href="booking?tab=history";
            }
            else{
                window.location.href="booking";
            }
           
        });
        $(document).on('click','.clearable__clear',function(){
            $(".clearable__clear").hide();
            $("#search").val("");
        });
        $(document).on('click', "#showinfo", function(){
            var showinfo = $(this).attr("data-id");
            window.location.href="view/booking-data?book_id="+showinfo;
        });