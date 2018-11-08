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
                        <a href="https://www.timgt.com/" class="home-link">TIMGT.COM</a>
                    </div>
                    <div class="span6">
                        <p class="vol-num">VOL 2.</p>
                    </div>
                </div>
            </header>

            <article class="periodical">
   
                <div class="row-fluid">
                    <section class="partners_header head">
                       <img src="../img/pilot-face.svg" style="margin-top:-115px">
                       <img src="../img/did-you-know.png" style="display:block;margin:40px auto;width:200px;padding-bottom:20px;border-bottom:1px solid #76b0da;">
                       <p class="vol-num small">VOL 2.</p>
                       <h1>Why is the average Investor’s<br>investment return so low?</h1>
                    </section>
                </div>

                <section style="border-top:10px solid #fff;background:#fefef6;border-bottom:1px solid #76b0da;">
                    <div class="row-fluid">
                       <div class="span10 offset1">
                           <div class="content-wrapper">
                               <p>It has been known for some time now that individual investors do not typically fare well in their efforts at do-it-yourself investing. This idea has been tested and validated by a number of studies. According to the most recent data on investor returns, the average investor in an allocation of stocks and bonds returned only a 2.6%* annualized rate of return for the 10 years ended December 31, 2013.</p>
                               <p>It is plain to see from the chart below that the average investor has greatly underperformed most asset classes over the past 20 years and has barely exceeded the rate of inflation. Why does this happen?</p>
                           </div>
                       </div>
                    </div>
                </section>
            
                <section style="background:#f9f9f9;border-bottom:1px solid #a5d5ea;">
                    <div class="row-fluid">
                        <div class="span12">

                            <figure id="chart">
                                <img src="graph.png" style="display:block;margin:0 auto">
                            </figure>
                        
                        </div>
                    </div>
                </section>

                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <h3>Emotions</h3>
                                <p>Investors may only have themselves to blame. When we let our emotions get out of check, we can make bad decisions  when it comes to money. If these bad decisions compound, the chances of that perfect retirement you are currently envisioning might not come to fruition. Humans are rational beings but money reinforces two very powerful emotions that directly relate to the stock market: fear and greed. Remember when everyone wanted technology stocks in 2000? Or real estate in 2006? That greed can cause you to buy an asset after its value has gone up substantially. If there is no one left to buy because everyone already owns the asset when you are trying to sell, then it must come down in price to find it’s supply/demand balance. Obviously, you don’t want to be the last person to the trading party because big losses can result.</p>
                                <p>Alternatively, fear can be just as strong of an emotion. When we are scared, we may not act rationally and may make a poor decision with our money. Even during normal corrections in the market, the media reports can prey on fear, and fear sells. If you were to react to every concern the financial media or  ‘experts’ reported, gains in your retirement account could erode as you get whip-sawed trading in and out of the market.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="quote">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <blockquote>
                                <p>Bull markets are born on pessimism, grow on skepticism, mature on optimism, and die on euphoria. The time of maximum pessimism is the best time to buy, and the time of maximum optimism is the best time to sell.</p>
                                <cite>
                                    <p>Sir John Templeton</p>
                                    Famous Investor
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                </section>

                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <h3>Herd Behavior</h3>
                                <p>While it feels good when your friends, family and co-workers agree with you or have a similar opinion, when investing, doing what everyone else is doing is not always the best course of action. In 2000, everyone was trading stocks. In 2007, everyone was a real estate tycoon. We all know how those two situations worked out. Doing the opposite of the herd was the smart course of action. Not only did this observation work on the upside (or “greed cycles”) but also during bear markets (”fear cycles”). Everyone wanted to sell stocks in late 2008/early 2009, the bottom of this most recent bull market.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="quote">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <blockquote>
                                <p>If you want to have a better performance than the crowd, you must do things differently from the crowd.</p>
                                <cite>
                                    <p>Sir John Templeton</p>
                                    Famous Investor
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                </section>

                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">

                                <h3>What To Do?</h3>
                                <p>Although sound investing habits can be learned, for most people, investing their own money is very difficult. Between keeping emotions in check and resisting the urge to follow what everyone else is doing, staying on track to achieve retirement goals can be challenging. To properly invest, you need the time and the emotional fortitude to stick with your financial plan. If you have difficulty emotionally detaching yourself from your money, you may want to hire an advisor or money manager to add some objectivity to your financial decision making process.</p>
                                <p>Additionally, since most individual investors have jobs and a family to manage, they may not have the time and therefore the  financial expertise to excel at investing. In a 2012 study*** by the Financial Industry Regulatory Authority (FINRA), the brokerage industry’s self-regulatory body, the average US adult correctly answered only 2.9 out of 5 basic financial questions about topics like risk, inflation, interest rates and mortgages. Only 14% answered all 5 questions correctly.</p>
                                <p>Finding a qualified and experienced advisor to help keep you grounded during turbulent periods can do wonders for your financial plan (not to mention your emotional health). If you can find an advisor with reasonable fees, even better for your bottom line.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">

                                <strong style="font-size:12px">Sources:</strong>
                                <ul style="list-style:none;font-size:10px;padding:0;marign-top:10px;">
                                    <li style="margin-bottom:5px">* 2014 Dalbar’s Quantitative Analysis of Investor Behavior (QAIB)</li>
                                    <li style="margin-bottom:5px">** Richard Bernstein Advisors LLC., Bloomberg, MSCI, Standard & Poor’s, Russell, HFRI, BofA Merrill Lynch, Dalbar, FHFA, FRB, FTSE. Total Returns in USD. </li>
                                    <li style="margin-bottom:5px">Average Investor is represented by Dalbar’s average asset allocation investor return, which utilizes the net aggregate mutual fund sales, redemptions and exchanges each month as a measure of investor behavior. For index descriptors, see “Index Descriptions” at the end of document.</li>
                                    <li style="margin-bottom:5px">*** Financial Capability in the United States – Report of Findings from the 2012 National Financial Capability Study. May 2013</li>
                                </ul>

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
                                    <h3>Sign Up to get Vol 3.</h3>
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
