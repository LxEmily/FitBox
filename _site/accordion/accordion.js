var acc = document.getElementsByClassName("accordionBtn");
var i;

for (i = 0; i < acc.length; i += 1) {
    acc[i].addEventListener("click", function () {
    this.classList.toggle("accordionActiveBtn");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
          panel.style.maxHeight = null;
    } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
    } 
    });
}
