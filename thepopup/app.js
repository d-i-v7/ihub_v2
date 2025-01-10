$(document).ready(function () {
    setTimeout((e)=>{
        $(".popup-container").addClass("show");
        $(".close-btn").click(function (e) { 
            e.preventDefault();
            $(".popup-container").removeClass("show");
        });
        $(".j-f").click(function (e) { 
            e.preventDefault();
            window.location.href="https://ihub.himilouniversity.edu.so/registration/";
        });
        $(".j-w").click(function (e) { 
            e.preventDefault();
            alert("This Bootcamp Closed Now!");
            // window.location.href="https://ihub.himilouniversity.edu.so/registration/";
        });
    },3000)
    
});