function openTab(e, tab) {
    var elements = document.getElementsByClassName("tab");
    var li = document.getElementsByClassName("tab-active");

    for (let index = 0; index < elements.length; index++) { elements[index].style.display = "none"; }
    for (let index = 0; index < li.length; index++) { li[index].classList.remove('tab-active'); }

    document.getElementById(tab).style.display = "flex";
    e.currentTarget.className += "tab-active";
    
}

function validateIp(e) {
    const re = /^(\d{0,3}\.\d{0,3}\.\d{0,3}\.\d{0,3})$/;

    console.log(e.value);

    if(!re.test(e.value)) {
        e.style = "border: 1px solid red;";
    } else {
        e.style = "border: 0.5px solid #e8e8e8;";
    }
}