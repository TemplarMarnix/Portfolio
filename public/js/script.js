/* Loading screen */
$(window).on("load", function() {
    $(".load-wrapper").fadeOut("slow");
});
/* languages */
$(".active-language, .fa-chevron-down, .inactive-language").click(function(){
    if($(".fa-chevron-down").hasClass("language-open")){
        $(".fa-chevron-down").removeClass("language-open");
        $(".inactive-language").toggle("active-language");
    } else {
        $(".fa-chevron-down").addClass("language-open");
        $(".inactive-language").toggle("active-language");
        $(".english").click(function(){
            $(".active-language").addClass("inactive-language");
            $(".active-language").removeClass("active-language");
            $(".english").addClass("active-language");
            $(".english").removeClass("inactive-language");
        })
        $(".german").click(function(){
            $(".active-language").addClass("inactive-language");
            $(".active-language").removeClass("active-language");
            $(".german").addClass("active-language");
            $(".german").removeClass("inactive-language");
        })
        $(".russian").click(function(){
            $(".active-language").addClass("inactive-language");
            $(".active-language").removeClass("active-language");
            $(".russian").addClass("active-language");
            $(".russian").removeClass("inactive-language");
        })
        $(".dutch").click(function(){
            $(".active-language").addClass("inactive-language");
            $(".active-language").removeClass("active-language");
            $(".dutch").addClass("active-language");
            $(".dutch").removeClass("inactive-language");
        })
    }
});
/* Thumbnail hover */
$(".vignette").mouseover(function(){
    $(".thumbnail").addClass("thumbnail-hover");
    $(".thumbnail-link").addClass("thumbnail-link-hover");
})
$(".vignette").mouseout(function(){
    $(".thumbnail").removeClass("thumbnail-hover");
    $(".thumbnail-link").removeClass("thumbnail-link-hover");
})