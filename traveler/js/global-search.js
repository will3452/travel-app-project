var timerglabal;
    var timeoutglobal = 1500;
    $( "#searchglobal" ).keyup(function() {
    $(".loading-content").show();
    $(".dropdown-content").hide();
    $(".noresult-content").hide();
    clearTimeout(timerglabal);
    if ($('#searchglobal').val) {
        timerglabal = setTimeout(function(){
            var searchglobals = $("#searchglobal").val();
            var search_global_token = $("#search_global_token").val();
            if(searchglobals==''){
                $(".dropdown-content").hide();
                $(".noresult-content").hide();
                $("#fetchglobalsearch").hide();
                $(".loading-content").hide();
            }else if(search_global_token==''){
                $(".dropdown-content").hide();
                $(".noresult-content").hide();
                $("#fetchglobalsearch").hide();
                $(".loading-content").hide();
            }
            else{
                $.ajax({
                    url:'process/_global_search.php',
                    method:'post',
                    datatype:'text',
                    data:{
                        seachinside:'seachinside',
                        search_global_token:search_global_token,
                        searchglobals:searchglobals
                    },success:function(d){
                        if($.trim(d) ===''){
                            $(".loading-content").hide();
                            $(".dropdown-content").hide();
                            $("#fetchglobalsearch").html("");
                            $(".noresult-content").show();
                        }else{
                            $(".loading-content").hide();
                            $(".dot-elasticsearch").hide();
                            $(".dropdown-content").show();
                            $("#fetchglobalsearch").html(d);
                        }
                    
                    }
                });
            }
        }, timeoutglobal);
    }
});

//view search mobal
//search global
var timermoba;
var timeoutmoba = 1500;
    $( "#searchglobal-moba" ).keyup(function() {
    $(".loading-content-moba").show();
    $(".dropdown-content-moba").hide();
    $(".noresult-content-moba").hide();
    clearTimeout(timermoba);
    if ($('#searchglobal-moba').val) {
        timermoba = setTimeout(function(){
        var searchglobals = $("#searchglobal-moba").val();
        var search_global_token = $("#search_global_token").val();
        if(searchglobals==''){
                $(".dropdown-content-moba").hide();
                $(".noresult-content-moba").hide();
                $("#fetchglobalsearch-moba").hide();
                $(".loading-content-moba").hide();
        }else if(search_global_token==''){
            $(".dropdown-content").hide();
            $(".noresult-content").hide();
            $("#fetchglobalsearch").hide();
            $(".loading-content").hide();
        }
        else{
            $.ajax({
                    url:'process/_global_search.php',
                    method:'post',
                    datatype:'text',
                    data:{
                        seachinside:'seachinside',
                        search_global_token:search_global_token,
                        searchglobals:searchglobals
                    },success:function(d){
                        if($.trim(d) ===''){
                            $(".loading-content-moba").hide();
                            $(".dropdown-content-moba").hide();
                            $("#fetchglobalsearch-moba").html("");
                            $(".noresult-content-moba").show();
                        }else{
                            $(".loading-content-moba").hide();
                            $(".dot-elasticsearch-moba").hide();
                            $(".dropdown-content-moba").show();
                            $("#fetchglobalsearch-moba").html(d);
                        }
                    }
                });  
            }
        }, timeoutmoba);
    }
});
$("#iconsearch").click(function(){
    $(".text-field-search").show();
});
$(".container-fluid").click(function(){
    $(".dropdown-content").hide();
    $("#fetchglobalsearch").hide();
    $("#searchglobal").val("");
    $(".noresult-content").hide();
    $(".loading-content").hide();

    $(".text-field-search").hide();
    $(".loading-content-moba").hide();
    $(".dropdown-content-moba").hide();
    $("#fetchglobalsearch-moba").hide();
    $("#searchglobal-moba").val("");
    $(".noresult-content-moba").hide();
});
$(".navbar-nav").click(function(){
    $(".dropdown-content").hide();
    $("#fetchglobalsearch").hide();
    $("#searchglobal").val("");
    $(".noresult-content").hide();
    $(".loading-content").hide();

    $(".text-field-search").hide();
    $(".loading-content-moba").hide();
    $(".dropdown-content-moba").hide();
    $("#fetchglobalsearch-moba").hide();
    $("#searchglobal-moba").val("");
    $(".noresult-content-moba").hide();
});
$("#layoutSidenav").click(function(){
    $(".dropdown-content").hide();
    $("#fetchglobalsearch").hide();
    $("#searchglobal").val("");
    $(".noresult-content").hide();
    $(".loading-content").hide();

    $(".text-field-search").hide();
    $(".loading-content-moba").hide();
    $(".dropdown-content-moba").hide();
    $("#fetchglobalsearch-moba").hide();
    $("#searchglobal-moba").val("");
    $(".noresult-content-moba").hide();
});
$(".navbar-brand").click(function(){
    $(".dropdown-content").hide();
    $("#fetchglobalsearch").hide();
    $("#searchglobal").val("");
    $(".noresult-content").hide();
    $(".loading-content").hide();

    $(".text-field-search").hide();
    $(".loading-content-moba").hide();
    $(".dropdown-content-moba").hide();
    $("#fetchglobalsearch-moba").hide();
    $("#searchglobal-moba").val("");
    $(".noresult-content-moba").hide();
});

$(".navbar-burger-size").click(function(){
    $(".dropdown-content").hide();
    $("#fetchglobalsearch").hide();
    $("#searchglobal").val("");
    $(".noresult-content").hide();
    $(".loading-content").hide();

    $(".text-field-search").hide();
    $(".loading-content-moba").hide();
    $(".dropdown-content-moba").hide();
    $("#fetchglobalsearch-moba").hide();
    $("#searchglobal-moba").val("");
    $(".noresult-content-moba").hide();
});