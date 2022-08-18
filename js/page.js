window.onload = function () {
    document.getElementById("spread").animate(
        {
            height: 0,
            opacity: 0.5
        },
        {
            fill: "forwards",
            duration: 1000,
            easing: "ease-in"
        }
    );
};

// document.querySelector(".square").animate(
document.getElementById("square").animate(
    {
        borderRadius: [
            "50% 50% 50% 70%/50% 50% 70% 60%",
            "80% 30% 50% 50%/50%",
            "40% 40% 50% 40%/30% 50% 40% 80%"
        ]　//角に丸みをつける
    },
    {
        iterations: Infinity, //無限に繰り返す
        direction: "alternate",
        duration: 1000 //アニメーションのスピード
    }
);

$(".rotation").click(function(){
    if($(this).hasClass('is-active')){
        $(this).removeClass('is-active')
    }else{
        $(this).addClass("is-active");
    }
});