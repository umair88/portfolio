$(document).ready(function(){
    var height = $(window).height();
    adjustInitial();
    
    function adjustInitial(){
        $("section#body").css({"margin-top": height - 80 + "px"});
    }
    
    $(document).scroll(function(){
        var scrollTop = $(this).scrollTop();
        var pixels = scrollTop / 70;
        
        if(scrollTop < height){
            $("section#container_general").css({
                "-webkit-filter": "blur(" + pixels + "px)",   "background-position": "center -" + pixels * 10 + "px"
            });
        }
    });
});