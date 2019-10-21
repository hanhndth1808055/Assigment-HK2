function readmoreInforLogo() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more" + " &nbsp;" + "<i class=\"fa fa-arrow-down\" aria-hidden=\"true\">\n" + "</i>";

        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less &nbsp; <i class=\"fa fa-arrow-up\" aria-hidden=\"true\">\n" +
            "                                       </i>";
        moreText.style.display = "inline";
    }
}

function showSubmit() {
    document.getElementById('showLoading').style.display = "block";
    document.getElementById('showLoading').style = 'float:right';
    document.getElementById('showLoading').style = 'margin-right:1px';
    setTimeout(function () {
        document.getElementById('showLoading').style.display = "none";
    },3000)
}

function clickRegisterSeminar() {
    var x = document.getElementById("registerSeminar");
    if (x.style.display === "none"){
        x.style.display = "block";
    }else{
        x.style.display = "none";
    }
}
