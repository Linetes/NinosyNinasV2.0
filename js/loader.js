var myVar1,myVar2,myVar3;

function loadMenu() {
    myVar1 = setTimeout(showG, 1000);
}
function loadCalendar() {
    myVar2 = setTimeout(showC, 1200);
}
function loadAcerca() {
    myVar3 = setTimeout(showA, 1800);
}
function showG() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("menu").style.display = "block";
}
function showC() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("calendar").style.display = "block";
}
function showA() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("acerca").style.display = "block";
}