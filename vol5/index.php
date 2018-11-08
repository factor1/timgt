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
                        <p class="vol-num">VOL 5.</p>
                    </div>
                </div>
            </header>

            <article class="periodical">

                <div class="row-fluid">
                    <section class="partners_header head">
                       <img src="../img/pilot-face.svg" style="margin-top:-115px">
                       <img src="./did-you-know.png" style="display:block;margin:40px auto;width:200px;padding-bottom:20px;border-bottom:1px solid #fff;">
                       <p class="vol-num small">VOL 5.</p>
                       <h1>Benefits of Contributing to your 401(k)</h1>
                    </section>
                </div>

                <section style="border-top:10px solid #fff;background:#fefef6;border-bottom:1px solid #76b0da;">
                    <div class="row-fluid">
                       <div class="span10 offset1">
                           <div class="content-wrapper">
                                <h3>The Missing Leg of the Three-Legged Stool of Retirement</h3>

                                <p>The three-legged stool is a metaphor for how the post-World War II generation looked at planning for retirement. Each leg represented one portion of planned retirement income. The legs were: employer pension, employee savings, and Social Security. The idea was that you needed each one to build a strong retirement foundation. Without any one, the three-legged stool would fall apart. This metaphor is often attributed to Franklin D. Roosevelt, who created the Social Security program.</p>
                                <p>The three-legged stool no longer exists, or, at the least, it looks a lot different. Pensions, or Defined Benefit Plans, that were once offered by most employers, and were a primary component of retirement planning, are rapidly vanishing.</p>
                                <p>Many employers offer 401(k) Defined Contribution Retirement Plans instead. But since employees have to make contributions through their own paychecks, a 401(k) is more a part of the personal savings leg than the old employer pension leg. Fortunately, most airlines contribute considerably more than the average amount to 401k's, so there is still an employer leg for most people in the aviation industry, although it's a lot smaller and weaker than the old Defined Benefit or pension leg. For other employees there is usually an employer 'matching contribution', which is an even smaller and weaker leg.</p>
                           </div>
                       </div>
                    </div>
                </section>


                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <h3>Tax Benefits for 401k Contributions</h3>

                                <p>Here's the good news. For the average pilot, for every $4 contribution to his or her 401k, the IRS gives back $1 in tax reduction. So, a $4 contribution only costs $3.</p>
                                <p>ROTH 401ks are becoming increasingly popular. Although the benefits of a ROTH are far reaching, you need to ask yourself, will you be in a higher or lower tax bracket in retirement. For most of our aviation clients, you will be receiving less income in retirement so the traditional 401k might be a better choice in your high earning years.</p>
                                <p>Bottom line – making traditional 401k contributions actually lowers your taxable income each year so that you pay less in taxes.</p>

                                <h3>When Should I Start Contributing?</h3>

                                <p>There are two primary variables which dictate what your ending 401k balance will be - average cumulative return and the total time of accumulation. The longer you contribute, the more you'll have to use in retirement. For young professionals, with little or no pension benefits, the answer to the above question is: If the time is now 9am, you should start making contributions before taking a bite of lunch.</p>

                                <h3>Should I max out my personal 401k contributions?</h3>
                                <p>In the absence of a Defined Benefit or pension plan, the answer to the above question would be a resounding YES. Since you may have only two sources of income, young folks who have little or no residual PBGC pension benefits, absolutely MUST contribute as much as you possibly can, and max out if at all possible.</p>

                                <h3>How will contributing to my 401k affect my retirement?</h3>
                                <p>Let’s take a 30 year old FO, who is considering whether to make his or her own contributions to his Defined Contribution Plan, 401k, or just let the company contribute the contractual amount.</p>

                                <p>The graph below summarizes projected ending conditions for his or her 401k at the pilot's retirement age, 65:</p>

                                <p>Assumptions:</p>
                                <ul>
                                  <li>The pilot remains as FO for 10 years, then moves to the left seat at age 45.</li>
                                  <li>Average pay rates remain unchanged.</li>
                                  <li>The pilot's 401k is invested in a moderate, balanced portfolio.</li>
                                  <li>The IRS maximum contributions remain at the present level.</li>
                                  <li>Values are adjusted for historical inflation, to give projections in 'today's dollars'.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

               <section style="background:#f9f9f9;border-bottom:1px solid #a5d5ea;">
                   <div class="row-fluid">
                       <div class="span12">

                           <figure id="chart">
                               <img src="graph.png" style="margin:0 auto;">
                           </figure>

                       </div>
                   </div>
               </section>

               <section style="text-align:left">
                   <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">

                                <p>By age 65, under typical investment conditions in a balanced portfolio, he or she would accumulate about $1.7 mm +/- in the 401k from the company contributions, alone. (Bar in blue on left, measured on left Axis.)</p>
                                <p>Using the 4% Rule of Thumb for 'withdrawals under uncertainty', that amount would provide $68,000 +/- in income to the pilot during retirement years. (Red dot at top of blue bar, measured on right Axis.) Adding Social Security income would bring the total to $100,000 +/-.</p>
                                <p>IMPORTANT: Now, let’s look at what personal contributions do to portfolio values and income potential. By contributing the max each year (FYI, the max employee contribution for 2017 is $18,000. If you are over 50, $24,000), the 401k value would increase to $3.1 mm +/-. (Blue bar on right.) The income provided, again using the 4% rule, would amount to $124,000 +/-. Adding Social Security, total income is about $156,000.</p>
                                <p>In summary, personal contributions to your 401k should be right up there near the top of your financial priority list. Is there anything that should be above it in priority? Absolutely – credit card and high interest consumer debt, should be the first thing you tackle. Once your debt is under control, get on-line immediately and adjust your 401k contributions as high as possible.</p>

                                <h3>Strategy</h3>
                                <p>Now that you see how important making your OWN contributions can be towards a successful retirement, a reasonable way to start making contributions if you aren’t doing so already or to try to max out employee contributions is to set up an automatic increase each year. You get a raise almost every year you work. Therefore, increase your contribution rate to the 401k at the same time you get your raise every year. Say you are contributing 5% of your salary currently, next year raise it to 7%, the following year move it to 9%, etc. You will barely notice that your check has changed and you are on your way to maxing contributions over time and putting yourself in good position for a very enjoyable retirement!</p>

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
                                    <h3>Sign Up to get Vol 6.</h3>
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
