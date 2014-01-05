
  function contentLoaded() {
    window.removeEventListener("DOMContentLoaded", contentLoaded, false);
    var href = window.parent.location.href;
    // frame opened in new tab
    if (href.indexOf("/data") > -1)
      window.document.body.classList.remove("innerFrame")
    else
      window.parent.document.title = window.document.title;
  }

  window.addEventListener("DOMContentLoaded", contentLoaded, false);
