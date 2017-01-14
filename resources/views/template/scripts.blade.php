<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
var link  = document.createElement('link');
element.src = "assets/js/all.min.js";
link.href = "assets/css/all.min.css";
link.rel  = 'stylesheet';
link.type = 'text/css';
link.media = 'all';
document.body.appendChild(element);
document.body.appendChild(link);
}
if (window.addEventListener)
window.addEventListener("load", downloadJSAtOnload, false);
else if (window.attachEvent)
window.attachEvent("onload", downloadJSAtOnload);
else window.onload = downloadJSAtOnload;
</script>


<!-- Page JS Plugins + Page JS Code -->
