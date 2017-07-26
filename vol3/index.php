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
                        <p class="vol-num">VOL 3.</p>
                    </div>
                </div>
            </header>

            <article class="periodical">
   
                <div class="row-fluid">
                    <section class="partners_header head">
                       <img src="../img/pilot-face.svg" style="margin-top:-115px">
                       <img src="../img/did-you-know.png" style="display:block;margin:40px auto;width:200px;padding-bottom:20px;border-bottom:1px solid #76b0da;">
                       <p class="vol-num small">VOL 3.</p>
                       <h1>Risk Reduction in a Bear Market Can Drive<br>Positive Long-Term Results</h1>
                    </section>
                </div>

                <section style="border-top:10px solid #fff;background:#fefef6;border-bottom:1px solid #76b0da;">
                    <div class="row-fluid">
                       <div class="span10 offset1">
                           <div class="content-wrapper">
                               <p>Many stock market studies show that “timing the market” doesn’t really work. An often misunderstood concept, market timing is defined by the mutual fund industry and financial media as the process of attempting to perfectly time your buying (at market bottoms) and selling (at market tops) activity. Of course, no one can perfectly time the market consistently, so mutual fund companies have developed marketing strategies that illustrate the impact of “misses.”</p>
                               <p>To add credibility to their argument, they show how missing the best up days in the market can lead to sub-par results (see the blue line). This is true. However, perhaps more important is what happens when you miss the worst days in the market (see the red line).</p>
                           </div>
                       </div>
                    </div>
                </section>
            
                <section style="background:#f9f9f9;border-bottom:1px solid #a5d5ea;">
                    <div class="row-fluid">
                        <div class="span12">

                            <figure id="chart">
                                <img src="graph.png" style="margin:0 auto">
                                <img src="graph-m.png" style="margin:0 auto" class="mobile">
                            </figure>
                            <p style="font-size:10px;margin:30px auto 0;width:90%;max-width:500px;">Total Investment Management, Inc. offers this commentary strictly to educate, inform and share our thoughts on the markets. Nothing here should be construed as investment advice.  Past performance is no guarantee of future results.</p>
                        
                        </div>
                    </div>
                </section>

                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <p>Of course, mutual fund companies have a vested interest in keeping investors in the market at all times. Why you ask? Simply put, to collect fees. </p>
                                <p>Rather than hoping to buy and sell at the precise bottom and top of the curve respectively, it makes sense to use a different approach to market timing. We think of the concept more broadly as a way to reduce risk in a rapidly declining, or bear, market. As the market moves between bull and bear cycles, it is possible to minimize the damage of the biggest down days, weeks or even months and generate much higher risk-adjusted returns - not to mention preserving your sanity when markets are tanking.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="quote">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <blockquote>
                                <p>There are really only two good feelings in investing. One is being in the market when it is going up, and the other is being out when the market is going down.</p>
                                <cite>
                                    <p>Jim Rohrbach</p>
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                </section>

                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <p>What’s more, missing big down days, weeks or months during bear markets can help you recoup losses faster. Few do-it-yourself investors realize that when you experience big losses, it takes a great deal of time and even bigger gains to make back the deficit.</p>
                                <p>For example, a share of stock declining 20% must then increase 25% just to break even. Here’s why:  A price that decreases 20%, from $100 to $80, must then gain 25% of its present value ($80/$20 = 25%) to get back to the original $100. This concept is outlined below.</p>
                            </div>
                        </div>
                   </div>
                </section>

                <section style="background:#f9f9f9;border-top:1px solid #76b0da;border-bottom:1px solid #a5d5ea;">
                    <div class="row-fluid">
                        <div class="span12">

                            <figure id="chart">
                                <img src="graph-2.png" style="display:block;margin:0 auto">
                            </figure>
                        
                        </div>
                    </div>
                </section>

                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <p>Occasional negative annual returns are part of investing for the long term.  However, in light of the math above, it helps to keep losses to a minimum during big market declines so it takes less time to “break even.”
                                <p>If you are an investor who is close to retirement or recently retired, taking a big hit right before or right after your 65th birthday could drastically affect your retirement. Even investors who have many years until retirement should understand the implications of these numbers.</p>

                                <h3>What To Do?</h3>
                                <p>A much more effective approach than market timing is utilizing risk management techniques to keep losses manageable during difficult market environments. With this strategy, you can protect your investments when market risk is high. Utilizing various long-term technical indicators, you can identify when a bear market is beginning and risk is increasing. You can then reduce risk in your portfolio by selling stocks and raising cash. </p>
                                <p>This not only helps you stay mentally engaged in the market, it also gives you money with which to buy stocks once they become bargains again. This method is not an all-in or all-out decision, which is characteristic of market timing. Rather, it is a calculated reduction in equity risk during the most brutal parts of a bear market.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section style="text-align:left;background:#edf5fc;text-align:center;">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                              At TIM, our investment approach is to stay invested in risk-appropriate, well-diversified, low cost portfolios of stocks and bonds when our long-term indicators are pointing higher (bull markets) and to raise cash to reduce risk and potentially limit losses when our long-term indicators show a downturn (indicative of a bear market).
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
                                    <h3>Sign Up to get Vol 4.</h3>
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

        <script src="/js/parsley.min.js"></script>

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
