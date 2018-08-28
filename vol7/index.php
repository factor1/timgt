<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Did You Kn?w</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include '../inc/com_css.php' ?>

        <style>
            body {
                background: #ececf1;
                font-size: 16px;
                padding-top: 100px;
            }

            @media (max-width: 767px) {
                body {
                    padding-top: 0;
                }
            }

            .content-wrapper .behavior-img {
              display: inline-block;
              float: right;
              width: 350px;
              margin-left: 15px;
            }

            @media (max-width: 600px) {
              .content-wrapper .behavior-img {
                float: none;
                width: 100%;
                margin-left: 0;
              }
            }

            section.quote {
                border: 1px solid #76b0da;
                border-left: 0;
                border-right: 0;
                background: #fefef6;
            }

            .chart-caption {
              font-size:1em;
              color:#8A9399;
              padding-top: 25%;
            }

            .table-desc {
              padding-right: 30px;
              text-align: left;
              font-size: 14px;
              line-height: 22px;
            }

            figure img {
                max-width: 450px;
            }


            @media (max-width: 767px) {
              #chart img { width:100% }
            }

            @media (max-width: 767px) {
                p.chart-caption {
                    width: 80%;
                    margin: 0 auto 40px;
                    padding: 0;
                }

                figure img {
                    width: 80%;
                    margin: 0 auto
                }

               .table-desc {
                 text-align: center;
                  padding: 0 30px;
                  margin-top: 30px;
               }
            }

            blockquote {
                font: normal 1.3em/1.5 Cala-Light;
                color: #1c2a3f;
                text-align: center;
                width: 80%;
                margin: 30px auto;
                position: relative;
            }

            blockquote:before {
                display: block;
                content: '';
                width: 50px;
                height: 50px;
                background: url(../img/doublequote-left.svg) no-repeat;
                background-size: 100% auto;
                position: absolute;
            }

            blockquote:after {
                display: block;
                content: '';
                width: 50px;
                height: 50px;
                background: url(../img/doublequote-right.svg) no-repeat;
                background-size: 100% auto;
                position: absolute;
                right: 0;
                top: 0;
            }

            blockquote > p {
                padding: 0 80px;
            }

            blockquote cite {
                display: block;
                margin: 15px auto 0;
                padding-top: 20px;
                font: normal .8em/1 Avenir-Light;
                color: #4C5C69;
            }

            blockquote cite p {
                font-size: 1.2em;
            }

            @media (max-width: 767px) {
                blockquote {
                    width: 100%;
                }

                blockquote:before,
                blockquote:after {
                    width: 30px;
                    height: 30px;
                }

                blockquote > p {
                    padding: 0 30px;
                }
            }

            h1 {
                font: 38px/1.1 Avenir-Light;
                color: #fff;
            }
            h1 span {
                display: block;
                font-size: .7em;
            }

            ul li {
                margin-bottom: 10px
            }

            p.lead {
                font-size: 27px;
                line-height: 1.1;
                margin-bottom: 20px;
            }

            .periodical {
                background: #fff;
                border: 15px solid #fff;
                text-align: left;
                margin-top: 100px;
            }

            h3 {
                text-align: left;
                font-size: 1.5em;
                margin-top: 30px;
            }

            .periodical footer.footer {
                box-shadow: none;
                background-color: #515d67;
            }

            .periodical-lower {
                background: #f9f9f9 url(../css/i/wrap-up-top-bg.png) center bottom repeat-x;
                border-top: 1px solid #76b0da;
                padding-bottom: 0;
            }
            .periodical-lower p {
                text-align: left;
                font-size: .9em;
                color: #525c68;
            }

            @media (max-width: 767px) {
                .periodical-lower p {
                    padding: 0 20px;
                }
            }

            .periodical-lower .info_video {
                background: none
            }

            .periodical-lower .info_video h2 {
                font-size: 30px;
            }

            .partners_header {
                background: url(./bg.png);
                background-position: center top;
                background-size: cover;
            }

            .form-wrapper {
                max-width: 500px;
                margin: 0 auto;
            }

            @media (max-width: 767px) {
                .form-wrapper {
                    padding: 0 20px;
                }
            }
            .email-optin {
                background: #819c6a;
                border-bottom: 30px solid #fff;
            }
            .email-optin h3 {
                color: #ffffff;
                margin-top: 0;
                font-size: 32px;
                line-height: 42px;
                text-transform: none;
            }

            @media (max-width: 767px) {
                .email-optin h3 {
                    text-align:center;
                    font-size: 28px;
                }
            }

            .email-optin input {
                background: #a3bb8f;
                border: 0;
                color: #fff;
                margin: 0;
                width: 80%;
                float: left;
            }

            .email-optin input.parsley-error {
                background: #ee7b7b;
                border-color: #9f2626;
                color: #FFF;
            }

            @media (max-width: 767px) {
                .email-optin input {
                    width: 75%;
                    margin: 0 auto;
                    display: block;
                }
            }

            .email-optin button {
                background: #a3bb8f;
                color: #fff;
                text-transform: uppercase;
                border: 0;
                line-height: 46px;
                border-radius: 4px;
                padding: 0 10px;
                float: right;
            }

            h3 {
                text-transform: none;
            }

            .content-wrapper {
                padding: 0 20px;
            }

            .content-wrapper p {
                text-align: justify;
            }

            header.periodical {
                padding: 0 20px;
                background: none;
                border: 0;
                margin: 0 0 -100px;
            }

            .home-link {
                color: #515c67;
                text-decoration: none;
                font-size: 20px;
            }
            .vol-num {
                text-align: right;
                color: #aac1d6;
                font-size: 30px;
                margin: 0;
            }

            .vol-num.small {
                display: none;
                margin-bottom: 20px;
            }

            @media (max-width: 767px) {
                header.periodical {
                    display: none;
                }

                .vol-num.small {
                    display: block
                }
            }

            @media (max-width: 767px) {
                header.periodical {
                    text-align:center;
                    margin: -60px 0 -20px;
                }

               .home-link {
                    text-align: center;
                }

                .vol-num {
                    text-align: center;
                }
            }

            @media (max-width: 767px) {
                .container-fluid.periodicals {
                    padding: 0;
                }
            }

            .periodical footer {
            }
        </style>

        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <div class="container-fluid periodicals">

            <header class="periodical">
                <div class="row-fluid">
                    <div class="span6">
                        <a href="http://www.timgt.com/" class="home-link">TIMGT.COM</a>
                    </div>
                    <div class="span6">
                        <p class="vol-num">VOL 7.</p>
                    </div>
                </div>
            </header>

            <article class="periodical">

                <div class="row-fluid">
                    <section class="partners_header head">
                       <img src="../img/pilot-face.svg" style="margin-top:-115px">
                       <img src="./did-you-know.png" style="display:block;margin:40px auto;width:200px;padding-bottom:20px;border-bottom:1px solid #fff;">
                       <p class="vol-num small">VOL 5.</p>
                       <h1>What is the Behavior Gap?</h1>
                    </section>
                </div>

                <section style="border-top:10px solid #fff;background:#fefef6;border-bottom:1px solid #76b0da;">
                    <div class="row-fluid">
                       <div class="span10 offset1">
                           <div class="content-wrapper">
                            <p>The Behavior Gap is a term that describes the negative impact of poor decisions made by investors.</p>

                            <p>Let’s face it. Investing your hard earned dollars is emotional. This sometimes makes us act irrationally. This doesn’t mean we aren’t smart but financial decision making is heavily impacted by human psychology. We are wired to avoid pain and seek pleasure.</p>
                           </div>
                       </div>
                    </div>
                </section>


                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                              <img src="./behavior-gap-drawing.jpg" class="behavior-img">

                              <h3>Impact on Returns</h3>
                              <p>Over the past 20 years through 2014, the behavior gap has been just under 5%. This means that the average equity investor underperforms the average equity mutual fund by 5%.</p>

                              <h3>Types of Mistakes</h3>
                              <ul>
                              <li>You may want to increase risk when stocks are high because everyone is bragging about making money.</li>
                              <li>You may want to sell when stocks are low and everyone else is freaking out.</li>
                              <li>You are in cash and get a case of “FOMO” (Fear Of Missing Out) when the markets are ripping higher.</li>
                              </ul>

                              <blockquote>
                              <p>“Most people get interested in stocks when everyone else is. The time to get interested is when no one else is. You can’t buy what is popular and do well.”</p>
                              <cite>– Warren Buffett</cite>
                              </blockquote>

                              <h3>How much can an advisor help?</h3>
                              <p>Vanguard recently did a study and proposed that financial advisors can add about a 3% increase in returns over the long-term. Portfolio construction and wealth management (rebalancing and financial planning) make up about 1.5%. Behavioral coaching adds about 1.5%.</p>

                              <h3>How TIM can help</h3>
                              <ul>
                              <li>Create a comprehensive financial plan – this will help you focus on the longer-term. By checking the plan during times of stress, you should begin to realize that shorter term fluctuations will not have a material impact on your long-term goals.</li>
                              <li>Behavioral Coaching – Advisors are here to walk you back from the ledge in times of uncertainty.</li>
                              <li>Communication – By communicating our thoughts on the markets weekly, you will be prepared mentally when big up moves or down moves happen in the market.</li>
                              </ul>

                              <p>If you have more questions about behavioral finance, feel free to give one of our advisors a call. We would be happy to help you prepare a comprehensive financial plan that should help to mitigate the behavior gap.</p>

                              <blockquote>
                              <p>“Be fearful when others are greedy and greedy when others are fearful.”</p>
                              <cite>– Warren Buffett</cite>
                              </blockquote>

                            </div>
                        </div>
                    </div>
                </section>

                <section style="text-align:left;background:#edf5fc;text-align:center;">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                              Total Investment Management, Inc. offers this commentary strictly to educate, inform and share our thoughts on the markets. Nothing here should be construed as investment advice.  Past performance is no guarantee of future results.
                            </div>
                        </div>
                    </div>
                </section>

                <section class="email-optin">
                    <div class="row-fluid">
                        <?php if (isset($_GET['thank-you'])) : ?>
                            <h3>Thank you.  To complete the subscription process, please click the link in the email we just sent you.</h3>
                        <?php else : ?>
                            <form action="https://timgt.us7.list-manage.com/subscribe/post" method="post" data-parsley-validate data-parsley-errors-wrapper="">
                                <input type="hidden" name="u" value="deff6c1033d6648706fb8b26b">
                                <input type="hidden" name="id" value="9b062f9b89">
                                <div class="span4 offset1">
                                    <h3>Sign Up to get Vol 8.</h3>
                                </div>
                                <div class="span6">
                                    <div class="form-wrapper">
                                        <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" value="Email" required>
                                        <button type="submit">Go</button>
                                    </div>
                                </div>
                            </form>
                        <?php endif ?>
                    </div>
                </section>

                <section class="periodical-lower">
                    <div class="row-fluid">
                        <div class="span4">
                            <h3 style="background:url(../img/blue-rings.png) center no-repeat;
                                       text-align:center;
                                       margin:0 auto .6em;
                                       font-size:24px;
                                       font-family: Cala-Light;
                                       text-transform: none;
                                       padding: 40px 0;"><span style="font-size:34px">6 Ways</span><br>Total Investment Management<br>Takes Care of You</h3>
                        </div>
                        <div class="span4">
                            <p>Save money with our uncommonly low fee structure</p>
                            <p>Enjoy more flexibility + less cost with ETFs (Exchange Traded Funds)</p>
                            <p>Staffed by financial experts, founded by ex-aviation professionals, it’s one firm that totally understands your needs</p>
                        </div>
                        <div class="span4">
                            <p>Have a team of accredited experts – CFA<sup>®</sup>, CMT, CFP<sup>®</sup>, AIF<sup>®</sup> – work directly for you</p>
                            <p>Learn how our strategies can help you lower bear market risks</p>
                            <p>Receive weekly email updates and watch the weekly webcast to get our thinking behind the management of your portfolio</p>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span10 offset1">

                            <?php include '../inc/info_video.php' ?>

                        </div>
                   </div>
                </section>

                <div class="row-fluid">
                    <div class="span12">

                        <?php include '../inc/request_info_form_periodicals.php' ?>

                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span12">

                        <?php include '../inc/periodical-footer.php' ?>

                    </div>
                </div>
            </article>
        </div>

        <?php include '../inc/com_js.php' ?>

        <script src="js/parsley.min.js"></script>

        <script>
            $(function () {
                $('input[type=email]').on('focus', function () {
                    if ($(this).val() == 'Email') $(this).val('');
                });

                $('input[type=email]').on('blur', function () {
                    if ($(this).val() == '') $(this).val('Email');
                });
            });
        </script>

    </body>
</html>
