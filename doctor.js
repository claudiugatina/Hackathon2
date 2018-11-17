<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
        $("p").animate({fontSize: "3em"});
    });
    $(".btn2").click(function(){
        $("p").animate({fontSize: "1em"});
    });
});
</script>