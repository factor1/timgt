<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js?090315"></script>

<script>
  if (!Modernizr.touch) {
    var CallEmAllWidgetSettings = {
       site: 'timgt.com',
       key: '9B46E77BB41702BF9C030A7CEBB643A4',
       btnColor: '#356AA0',
       txtColor: 'white',
       buttonPos: 'left',
       keywords: 'timgt',
       showF: '0',
       showL: '0',
       showWC: '0',
       WCtext: ''
    };

    (function () {
      function loadCallEmAll () {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.call-em-all.com/widget/widget.js';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
      }

      if (window.attachEvent) {
        window.attachEvent('onload', loadCallEmAll);
      } else {
        window.addEventListener('load', loadCallEmAll, false);
      }
    })();
  }
</script>

<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-42399253-1');ga('send','pageview');
</script>
