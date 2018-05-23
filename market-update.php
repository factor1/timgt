<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Market Updates</title>

        <link rel="canonical" href="http://www.timgt.com">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include 'inc/com_css.php' ?>

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <?php include 'inc/header.php' ?>

        <div class="section--market-update-login">
          <form class="form--client-login clearfix" id="pro-login" method="post" action="/blog/">
            <input type="hidden">
            <span class="label">Client Login</span>
            <input type="password" name="pass" placeholder="Enter Password" class="<?php if (isset($_GET['error'])) echo 'error' ?>">
            <button type="submit" class="submit button">Submit</button>
          </form>
        </div>

        <section class="primary_copy">
          <div class="container-fluid">
            <div class="row-fluid">
              <div class="span-12">

                <h2>Weekly Market Updates</h2>

                <p class="market-update__tag-line">Be Informed.  Not Inundated.</p>
                <p class="market-update__summary">As a client of Total Investment Management, you will have access each week to our insights on the latest from the markets to help you stay well-informed.</p>
                <p class="market-update__content-block-heading">Two Ways To Obtain Valuable Intel</p>

              </div>
            </div>
            <div class="row-fluid">

              <div class="clearfix">

              <div class="content-block">
                <div class="circle pencil">
                  <div class="circle_inner"></div>
                </div>
                <h3 class="heading-3 content-block__heading">Written Commentary</h3>
                <div class="content-block__copy">
                  <p>Get what you need to know about how major markets like the S&P 500, bonds, and gold performed last week and what to look for next week in a two-minute read of the key points of the webcast. Other topics like Fed policy, world economies, and currencies are frequently covered as well.</p>
                </div>
              </div>

              <div class="content-block">
                <div class="circle video">
                  <div class="circle_inner"></div>
                </div>
                <h3 class="heading-3 content-block__heading">Video</h3>
                <div class="content-block__copy">
                  <p>Dive deeper into last week’s results, with a technical analysis of the key indicators we use to make our investment recommendations. You’ll see our charts plus industry articles and other information that provide insight on how and why the market is moving.</p>
                </div>
              </div>

              </div>

            </div>
          </div>
        </section>

        <section class="section--market-update">
          <div class="container-fluid">
            <div class="row">
              <div class="span7" style="width: 100%">
                <h2 class="new-h2">Actual snippets taken from the January 26, 2018 market update</h2>
              </div>
            </div>

              <div class="row">
                <div class="span6" style="margin-top: 35px;">
                  <img class="graph-img" src="css/i/commentary-image.png" alt="market trends">
                  <div style="padding-top:41px;">
                    Timely information was provided in the weekly written commentary alerting TIM clients to the possibility of “…a sharp and sudden reversal.” We provided a chart of the market to see what happened next.
                  </div>
                </div>

                <div class="span6">
                  <iframe class="market-video" src="https://player.vimeo.com/video/264671493" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  <div>
                    In the webcast from that week, we expanded on our thoughts from the written commentary and provided nice visuals to see how high the risk was. Click on the play button to watch.
                  </div>
                </div>
              </div>

          </div>
        </section>

        <?php include 'inc/request_info_form.php' ?>

        <?php include 'inc/footer.php' ?>

        <?php include 'inc/com_js.php' ?>

        <script>
          $(function () {
            // $.getJSON('/market-update-password.json', function (resp) {
            $.ajax({
              url: '/market-update-password.json',
              cache: false,
              dataType: 'json',
              success: function (resp) {
                $('[type=hidden]').val(resp[0].password);
              }
            });

            $('form').on('submit', function () {
              if ($('[type=password]').val() != $('[type=hidden]').val() && $('[type=password]').val() != 'admin') {
                $('[type=password]').addClass('error');
                return false;
              }
            });
          });
        </script>
    </body>
</html>
