function light() {
    let check = $("body").hasClass("light-mode");
    if (check == true) {
        $("body").removeClass("light-mode");
        $("nav").addClass("navbar-dark");
        $("nav").removeClass("navbar-light");
        $(".card-body").removeClass("card-body-light");
        $("h4").removeClass("text-light");
        $("h2").removeClass("text-light");
        $("marquee").removeClass("text-light");
        $("hr").css("color", "white");
        $(".navbar").removeClass("hover-light");
    } else {
        $("body").addClass("light-mode");
        $("nav").removeClass("navbar-dark");
        $("nav").addClass("navbar-light");
        $(".card-body").addClass("card-body-light");
        $("h4").addClass("text-light");
        $("h2").addClass("text-light");
        $("marquee").addClass("text-light");
        $("hr").css("color", "black");
        $(".navbar").addClass("hover-light");
    }
}

function display() {
    let check1 = $(".mainpage").hasClass("display-block");
    if (check1 == true) {
        $(".mainpage").removeClass("display-block");
        $(".mainpage").addClass("display-none");

        $("#text-tech").addClass("text-muted");
    } else {
        $(".mainpage").addClass("display-block");

        $(".mainpage").removeClass("display-none");
        $("#text-tech").removeClass("text-muted");
        $("#text-tech").addClass("text-active");
    }
    let check2 = $("#secondpage").hasClass("display-none");
    if (check2 == true) {
        $("#secondpage").removeClass("display-none");
        $("#secondpage").addClass("display-block");
        $("#text-game").removeClass("text-muted");
    } else {
        $("#secondpage").addClass("display-none");
        $("#text-game").addClass("text-muted");
    }
}

function display1() {
    let check3 = $("#thirdpage").hasClass("display-none");
    let checkTwo = $("#secondpage").hasClass("display-none");
    let checkThree = $(".mainpage").hasClass("display-none");
    if (check3 == true) {
        $("#thirdpage").removeClass("display-none");
        $(".mainpage").removeClass("display-block");
        $(".mainpage").addClass("display-none");
        $("#text-tech").addClass("text-muted");
        $("#secondnpage").removeClass("display-block");
        $("#secondpage").addClass("display-none");
        $("#text-game").addClass("text-muted");
        $("#thirdpage").addClass("display-block");
        $("#text-videos").removeClass("text-muted");
    } else if (checkTwo == true && checkThree == true) {
        $("#thirdpage").addClass("display-none");
        $("#text-videos").addClass("text-muted");
        $(".mainpage").addClass("display-block");
        $(".mainpage").removeClass("display-none");
        $("#text-tech").removeClass("text-muted");
    }
}
