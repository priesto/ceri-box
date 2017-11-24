function openTab(e, tab) {
    var elements = document.getElementsByClassName("tab");
    var li = document.getElementsByClassName("tab-active");

    for (let index = 0; index < elements.length; index++) { elements[index].style.display = "none"; }
    for (let index = 0; index < li.length; index++) { li[index].classList.remove('tab-active'); }

    document.getElementById(tab).style.display = "flex";
    e.currentTarget.className += "tab-active";
    
}