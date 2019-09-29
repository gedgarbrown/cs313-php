function openNav() {
  document.getElementById("SideNav").style.width = "150px";
  document.getElementById("main").style.marginLeft = "150px";
  document.getElementById("header").style.marginLeft = "150px";
  document.getElementById("footer").style.marginLeft = "150px";
}

function closeNav() {
  document.getElementById("SideNav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("header").style.marginLeft = "0";
  document.getElementById("footer").style.marginLeft = "0";
}