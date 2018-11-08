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
                    padding: 0 !important;
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
                border: 0;
                padding: 0;
            }

            blockquote:before {
                display: block;
                content: '';
                width: 50px;
                height: 50px;
                background: url(https://www.timgt.com/img/doublequote-left.svg) no-repeat;
                background-size: 100% auto;
                position: absolute;
            }

            blockquote:after {
                display: block;
                content: '';
                width: 50px;
                height: 50px;
                background: url(https://www.timgt.com/img/doublequote-right.svg) no-repeat;
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
                    width: 100% !important;
                }

                blockquote:before,
                blockquote:after {
                    width: 30px;
                    height: 30px;
                }

                blockquote > p {
                    padding: 0 20px !important
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
                background: url(https://www.timgt.com/img/periodical-header.jpg);
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

        <div class="container-fluid periodicals">

            <header class="periodical">
                <div class="row-fluid">
                    <div class="span6">
                        <a href="https://www.timgt.com/" class="home-link">TIMGT.COM</a>
                    </div>
                    <div class="span6">
                        <p class="vol-num">VOL 1.</p>
                    </div>
                </div>
            </header>

            <article class="periodical">
   
                <div class="row-fluid">
                    <section class="partners_header head">
                       <img src="https://www.timgt.com/img/pilot-face.svg" style="margin-top:-115px">
                       <img src="https://www.timgt.com/img/did-you-know.png" style="display:block;margin:40px auto;width:200px;padding-bottom:20px;border-bottom:1px solid #76b0da;">
                       <p class="vol-num small">VOL 1.</p>
                       <h1>401k Turbulence
                       <span>What does it mean?</span></h1>
                    </section>
                </div>

                <section style="border-top:10px solid #fff;background:#fefef6;border-bottom:1px solid #76b0da;">
                    <div class="row-fluid">
                       <div class="span10 offset1">
                           <div class="content-wrapper">
                               <p class="lead">Investors are questioning why the market has been trading wildly since the start of the year.</p>
                               <h3 style="text-align:center;
                                          text-transform:none;
                                          display:inline-block;
                                          font-size:1.2em;
                                          line-height: 1.4;
                                          padding:20px 20px 15px;
                                          border-radius:4px;
                                          margin:0 auto 2em;
                                          background:#e9e9dd">Read this report to get insight on how volatility affects your portfolio</h3>
                               <ul style="max-width:550px;margin-left:auto;margin-right:auto;font-size:1.2em;">
                                   <li>What does volatility mean to you as a stock market investor?</li>
                                   <li>How can you protect your portfolio against volatility?</li>
                                   <li>Is volatility a “fear index” or does it impact long-term market success?</li>
                               </ul>
                           </div>
                       </div>
                    </div>
                </section>
            
                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <p>When the stock market goes up one day, down the next five days, then up again, and then down again, you call that stock market volatility.</p>
                                <p>A good analogy could be car insurance premiums that go up along with the likelihood of risky situations, such as if you have a poor driving record or if you keep the car in a high-theft area.</p>
                                <p>Some say volatility is a polite way of referring to investors’ nervousness. Investors may think volatility indicates a problem. But many analysts believe that increased volatility can indicate a rebound is near.</p>

                                <h3>Volatility as a Leading Indicator</h3>
                                <p>Volatility, as measured by the Chicago Board of Options Exchange (CBOE), is primarily calculated through the CBOE Volatility Index (VIX). The VIX tracks the speed of stocks’ price movements in the S&P 100. It is calculated by taking a weighted average of the estimated volatility of eight stocks every 60 seconds over the CBOE’s trading day. Therefore, it records a great deal of fluctuation.</p>
                                <p>The VIX is sometimes called the ‘fear index’. A high VIX could mean fear is high and therefore most investors have sold allowing the market to rally. Yet seasoned traders who closely monitor the markets usually buy stocks and index options when the VIX is high.</p>
                                <p>When the VIX is low, it usually indicates that investors believe the market will head higher. This could mean investors are being too complacent and that the market may soon head lower because most investors are ‘all in’.</p>
                                <p>Historical data has shown that wild market movements precede a change in the market’s direction.</p>
                                <ul>
                                   <li>A high VIX appears just before a market rally</li>
                                   <li>A low VIX usually foretells a slide</li>
                                </ul>
                                <p>A pick up in volatility similar to what we are seeing now can also mean the market is entering the more mature part of the bull market (economic expansion). This might be a function of the bulls and bears duking it out regarding the perceived health and longevity of the bull market.</p>
                                <h3>A Strategy to Weather Volatility</h3>
                                <p>We started seeing volatility pick up in 2014 with four or five 4-10% corrections. This behavior seems to be continuing into 2015 (<a href="#chart" style="color:#76b0da">see chart</a>). We all know what comes after an economic recovery/expansion and bull market, so this volatility should not be ignored.</p>
                                <p>In the past, this pattern has meant that the market is either in the process of changing trend (in this case, from up to down) or is in a long period of consolidation. From a portfolio management standpoint, overweighting larger capitalization stocks (like the DOW or S&P 500) may help to dampen volatility and could possibly provide better risk-adjusted returns as the bull market enters its final innings.</p>
                                <p>Talk to your financial advisor on what plans they have for a more volatile market. Knowing how your portfolio is positioned to weather that volatility will help you feel more secure.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section style="background:#f9f9f9;border-top:1px solid #a5d5ea;border-bottom:1px solid #a5d5ea;">
                    <div class="row-fluid">
                        <div class="span3 offset1">

                            <p class="chart-caption">For the 6-week time period from the end of December to early February the S&P 500 moved 3.5% (up or down) a total of 6 times.</p>

                        </div>
                        <div class="span6 offset1">

                            <figure id="chart">
                                <img src="https://www.timgt.com/vol1/graph-2.png">
                            </figure>
                        
                        </div>
                    </div>
                </section>
                <br><br>
                <section class="quote">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <blockquote>
                                <p>...volatility is your friend, not your enemy. That's especially true if you believe the economy will continue to improve and inflation will remain modest...If you buy into that, you've got to look at these pullbacks as an opportunity to put cash to work.</p>
                                <cite>
                                    <p>Scott Wren</p>
                                    Senior Global Equity Strategist<br>
                                    Wells Fargo Investment Institute
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                </section>
        
                <section style="text-align:left">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="content-wrapper">
                                <h3 style="margin-top:10px">Volatility and Long Term Success</h3>
                                <p>So what does this volatility mean for you and your money? For starters, remember that success in the market does not depend on predicting the future—predictions only measure the short term.</p>
                                <p>Volatility is more dependent on mass hysteria—fear and greed—than on underlying economic or financial events. Those are not reliable emotions on which to base long-term investment decisions. Therefore, having someone on your financial team who can possibly help to shut out the ‘white noise’ and keep you grounded during volatile periods could be very beneficial to your financial plan and long term success in the market.</p>
                            </div>
                        </div>
                    </div>
                </section>

            </article>
        </div>
