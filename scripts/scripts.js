/* exported toggleMenu */

function toggleMenu(id) {
  "use strict";
  var elm = document.getElementById(id);
  if (elm.hasAttribute("collapsed")) {
    elm.removeAttribute("collapsed");
  } else {
    elm.setAttribute("collapsed", true);
  }
}
