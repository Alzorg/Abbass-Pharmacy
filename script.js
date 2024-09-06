document.getElementById("xmark").addEventListener("click", function () {
  document.body.style.cssText = "overflow: auto";
  document.getElementById("about").style.cssText = "visibility: hidden";
});
document.getElementById("propose").addEventListener("click", function () {
  document.body.style.cssText = "overflow: hidden";
  document.getElementById("about").style.cssText = "visibility: visible";
});
