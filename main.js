function fade(element) {
    var op = 0;
    var timer = setInterval(function () {
        if (op >= 1) clearInterval(timer);
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.2 || 0.2;
    }, 150);
}
var back = document.getElementById("videoHolder");
back.style.opacity = 0;
fade(back);