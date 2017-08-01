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
                max-width: 100%
            }

            #chart img {display:block}
            #chart img.mobile { display:none }

            @media (max-width: 767px) {
              #chart img { display:none }
              #chart img.mobile { display:block }
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
                background: url(./bg.jpg);
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
                        <p class="vol-num">VOL 4.</p>
                    </div>
                </div>
            </header>

            <article class="periodical">
   
                <div class="row-fluid">
                    <section class="partners_header head">
                       <img src="../img/pilot-face.svg" style="margin-top:-115px">
                       <img src="./did-you-know.png" style="display:block;margin:40px auto;width:200px;padding-bottom:20px;border-bottom:1px solid #fff;">
                       <p class="vol-num small">VOL 4.</p>
                       <h1>Gold Making headlines again</h1>
                    </section>
                </div>

                <section style="border-top:10px solid #fff;background:#fefef6;border-bottom:1px solid #76b0da;">
                    <div class="row-fluid">
                       <div class="span10 offset1">
                           <div class="content-wrapper">
                             <p>Gold is beginning to make headlines once again. Since the start of 2016, gold is one of the best performing asset classes in the investing world. Investors are beginning to take notice and are contemplating whether the worst is over for the precious metals.</p>
                             <p>Most people think you turn to gold in times of uncertainty, but that is not always the case. Gold embarked on a historic rise from 2000-2011 that saw the yellow metal rally from $253 an ounce in late 1999 to $1,924 in 2011. Gold did extremely well during this period of “uncertainty” that saw the tech bubble burst in 2000, 9/11 in 2001, and the real estate crash in 2008.</p>
                             <p>However, it suffered greatly after achieving its all time high in 2011. From 2011 until 2015, gold pretty much went straight down even though there was plenty of “uncertainty”; the European financial crisis (PIGS), ISIS’s rise, and Russia flexing its muscles on the global stage. So if crisis or uncertainty isn’t always a good determinant on how gold will perform, what can help investors decipher when gold can be a good complement to a well diversified portfolio?</p>
                           </div>
                       </div>
                    </div>
                </section>
            

                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <h3>Why is Gold Rallying?</h3>

                                <p>Gold is usually bought as a hedge against inflation. Although current inflation is fairly low, that may be about to change. The Thomson Reuters / Core Commodity CRB index is a commodity futures index that tracks commodity prices. The index is up over 20% since the stock market bottom in February, signaling that assets most sensitive to inflation are on the rise. Commodities have been in a severe decline for several years as the fears of deflation have grown. Large debt levels across global economies and China switching gears from building out its infrastructure to consumption have kept inflation low.</p>
                                <p>Inflation has been running so low that some major economies like Japan and Europe have experimented with negative interest rates to spur inflation. Negative rates means that people and institutions are paying the banks to hold their money. If it costs you money to keep cash in the bank, why not invest in something like gold that has the chance of providing some type of return? Negative rates to combat deflationary forces may be one of the reasons why gold may be trying to break free from its recent bear market.</p>
                                <p>All this easy money and negative rates could eventually spur inflation as consumers start to discount higher future interest rates. If consumers start to sense that rates cannot move much lower, it may force them to put into motion projects they have been holding back on. This could cause a surge in economic activity which may increase inflation possibly making gold attractive. </p>

                                <h3>What Drives Inflation?</h3>
                                
                                <p>One of the first places for inflation to show up could be in wages. Wages have been stagnant for years including the most recent expansion. However, strength in job creation may eventually drive up wages as there are fewer qualified people to fill openings. We are seeing some signs of inflation in rents. Annual inflation for rents has been running faster than overall consumer-price growth for over three years. Cost of living inputs such as rent are a big component in the inflation data that the Fed uses to base monetary policy which may impact the direction of the US dollar. </p>
                                <p>It is a good thing that energy prices have declined during this time frame to help lighten the overall increase in inflation. However, with oil looking to have found a bottom and the US dollar’s rise moderating, inflation might be the next thing for stock markets to worry about, which could bode well for further gains in gold.</p>
                                
                                <h3>The Race to the Bottom</h3>
                                
                                <p>The US dollar has a big impact on commodity prices and inflation. Commodities are priced in US dollars so expect them to generally  move in the opposite direction. The US dollar has been rallying very strongly since mid-2014, pressuring commodities and gold. The most likely reason is that the Fed ended its Quantitative Easing (QE) program late that year which acted to tighten monetary policy and made the dollar look more attractive.</p>
                                <p>Europe has been trying to fight off its deflation with negative rates, which has further strengthened the US dollar. The rise in the US dollar has put pressure on the profits of large multinational companies that export their goods and services overseas. A rising US dollar is one of the culprits of the volatility global markets experienced over the past nine months as oil’s rapid decline pressured high-yield bond spreads and large cap profits. This pressure led the Fed to talk down the US dollar by saying there would be fewer rate hikes this year than the market previously anticipated. This has caused the US dollar to weaken recently thereby providing a tailwind for gold.</p>
                                <p>It seems like there is a race to the bottom in global currencies as economies try to weaken their currency with negative or low rates to spur export growth. Whether the US dollar resumes its advance will depend on the Fed and whether they decide to keep rates low for an extended period like global economies or they need to play catch up as inflation ramps up, both of which would have implications for the direction of gold.</p>
                                
                                <h3>What To Do?</h3>
                                
                                <p>If after making a determination on inflation and the US dollar you feel gold has a place in your portfolio, there are several ways to get exposure. You could buy the real thing from a dealer. You could buy an ETF (Exchange Traded Fund) that tracks the price of gold. You could even buy a gold stock that mines gold. There are advantages and disadvantages to them all.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section style="background-color:#d8ebfd">
                    <div class="row-fluid">
                        <div class="span12">
                          <h3 style="text-align:center">Types of Gold Investments: Explained</h3>
                          <br>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">

                            <figure id="chart">
                                <img src="table.png" style="display:block;margin:0 auto">
                            </figure>

                        </div>
                        <div class="span6">

                            <p class="table-desc">Depending on your risk tolerance, gold could make up anywhere between 3-10% of your overall portfolio. It is probably not wise to allocate much more than that because the world is only going to end once and how are you going to collect all those profits if it actually does? We have all seen the TV commercials, “The world is ending – buy gold.” Unfortunately for people who heeded that advice during the past five years, the world is still here and they have big losses. Although no one knows if gold will get back to the all-time highs near $2000, the landscape may be changing for further gains in gold with negative rates, increasing inflation and the US dollar being the main drivers.</p>

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
                                    <h3>Sign Up to get Vol 5.</h3>
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
                                       padding: 40px 0;"><span style="font-size:34px">7 Ways</span><br>Total Investment Management<br>Takes Care of You</h3>
                        </div>
                        <div class="span4">
                            <p>Get answers to specific questions from “live” in-office staff</p>
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

        <script src="/~timgt/js/parsley.min.js"></script>

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
