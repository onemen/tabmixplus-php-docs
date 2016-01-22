/* exported contentLoaded */

function contentLoaded() {
  "use strict";
  window.removeEventListener("DOMContentLoaded", contentLoaded, false);
  var href = window.parent.location.href;
  // frame opened in new tab
  if (href.indexOf("viewpage.php") > -1) {
    window.document.body.classList.remove("innerFrame");
  }

  window.parent.document.title = document.getElementById("title").textContent;
}

window.addEventListener("DOMContentLoaded", contentLoaded, false);
