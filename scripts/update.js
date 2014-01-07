
  function contentLoaded() {
    window.removeEventListener("DOMContentLoaded", contentLoaded, false);
    var href = window.parent.location.href;
console.log(href);
    // frame opened in new tab
    if (href.indexOf("common/viewpage.php") > -1)
      window.document.body.classList.remove("innerFrame")

    window.parent.document.title = "Tab Mix Plus - " + document.getElementById("title").textContent;
  }

  window.addEventListener("DOMContentLoaded", contentLoaded, false);
