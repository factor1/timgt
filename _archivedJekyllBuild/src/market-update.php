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
            <div class="row-fluid">
      
              <h2>Clear, Concise Information For Busy Aviation Pros<br> <span class="heading--2__sub-heading">Check out these examples of Weekly Market Updates.</span></h2>

              <div class="market-update-card market-update-card--sample-1">
                <h3 class="market-update-card__tab market-update-card--sample-1__tab">July 2nd, 2015</h3>
                <div class="market-update-card__content market-update-card--sample-1__content">
                  <p class="market-update-card__tag-line">“We took some action this week... now we wait.”</p>
                  <div class="clearfix">
<div class="market-update-card__video-wrapper">
                    <div class="market-update-card__video">
                      <iframe src="https://player.vimeo.com/video/156878794" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
</div>
                    <div class="market-update-card__copy">
                      <p>We are thinking that the correction has begun because breaking 2070 caused a lower low and a lower high off the top; the definition of a downtrend. As such, we took some action this week to get a bit more defensive. Now we wait. If the market turns back up and hits new highs, we can always get back in. If the market continues its decline next week (the market closed down over 1% on the week), we are in a good initial position for the correction or next bear market.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="market-update-card market-update-card--sample-2">
                <h3 class="market-update-card__tab market-update-card--sample-2__tab">August 21st, 2015</h3>
                <div class="market-update-card__content market-update-card--sample-2__content">
                  <p class="market-update-card__tag-line">“The action this week could definitely signal the first leg down of the bear market.”</p>
                  <div class="clearfix">
<div class="market-update-card__video-wrapper">
                    <div class="market-update-card__video">
                      <iframe src="https://player.vimeo.com/video/156878793" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                    </div>
</div>
                    <div class="market-update-card__copy">
                      That being said, we have been warning about the possible initiation of the next bear market due to the length of this bull market, valuations reaching full value and negative divergences on a lot of technical indicators. The action this week could definitely signal the first leg down of the bear market but we need to be sure so we don’t get shaken out of our positions on just a ‘normal’ 10% correction. This is where our long-term indicators come into play. As of this writing, our basket of long-term indicators is mixed with some turning bearish and others holding on. We need to wait for the end of the month to see if these monthly indicators trigger. If so, it increases the probability of this being the beginning of the next bear market. We can’t guess about these indicators, we need to wait until the end of the month because the market could easily reverse and negate these indicators with a rally into month end.
                    </div>
                  </div>
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
