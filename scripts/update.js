
  function contentLoaded() {
    window.removeEventListener("DOMContentLoaded", contentLoaded, false);
    var href = window.parent.location.href;
    // frame opened in new tab
    if (href.indexOf("/data") > -1)
      window.document.body.classList.remove("innerFrame")
    else
      window.parent.document.title = window.document.title;

return;
    var title = "";
    if (href.indexOf("changelog") > -1)
      title = "Change Log";
    else if (href.indexOf("troubleshooting") > -1)
      title = "Troubleshooting";

    var topFrame = window.parent.document.getElementById("top-frame");
console.info(topFrame && topFrame.src);
    if (topFrame && topFrame.src.indexOf("?title") == -1 && title)
      window.parent.document.getElementById("top-frame").src += "&title=" + title;
  }

  window.addEventListener("DOMContentLoaded", contentLoaded, false);
