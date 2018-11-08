<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link rel="canonical" href="https://www.timgt.com/client-application.php">

        <title>Client Application</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include 'inc/com_css.php' ?>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <?php include 'inc/header.php' ?>

        <section class="primary_copy">
            <h2>Investment Management Agreement</h2>

            <p><span style="text-transform:uppercase">Security Note</span><br>Your personal data is transferred via a secure connection using the embedded form below.</p>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span6 offset3">

                      <div id="wufoo-m1fn9cli0k1coff">
                        Fill out our application <a href="https://timgt.wufoo.com/forms/m1fn9cli0k1coff">here</a>.
                      </div>
                      <script type="text/javascript">var m1fn9cli0k1coff;(function(d, t) {
                      var s = d.createElement(t), options = {
                        'userName':'timgt',
                          'formHash':'m1fn9cli0k1coff',
                          'autoResize':true,
                          'height':'9969',
                          'async':true,
                          'host':'wufoo.com',
                          'header':'show',
                          'ssl':true};
                        s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
                        s.onload = s.onreadystatechange = function() {
                          var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                          try { m1fn9cli0k1coff = new WufooForm();m1fn9cli0k1coff.initialize(options);m1fn9cli0k1coff.display(); } catch (e) {}};
                          var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
                      })(document, 'script');</script>

                    </div>
                </div>
            </div>
        </section>

        <?php include 'inc/footer.php' ?>

        <?php include 'inc/com_js.php' ?>
    </body>
</html>
