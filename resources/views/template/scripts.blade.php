<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script type="text/javascript">
function downloadJSAtOnload() {
var element = document.createElement("script");
var link  = document.createElement('link');
element.src = "assets/js/all.min.js";
link.href = "assets/css/all.min.css"; //cambiar por all en prod
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
<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-89940020-3', 'auto');
    ga('send', 'pageview');

</script>