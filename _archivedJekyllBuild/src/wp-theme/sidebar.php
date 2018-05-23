				<div id="sidebar1" class="fluid-sidebar sidebar" role="complementary">
                                  <div class="subscribe blog">
                                    <img src="img/circle-icon-txt.png" alt="">
                                    <h3>Subscribe</h3>
                                    <div class="wrapped">
                                      <p>Timely TIM Information Sent Directly to Your Phone</p>
                                      <p>Text ‘<span>timgt</span>’ to <span>292929</span> to be Instantly Subscribed</p>
                                      
                                      <div class="small-print">
                                        <p>Check with your carrier as normal messaging and data rates may apply.</p>
                                        <p>To opt out, please contact our office.</p>
                                      </div>
                                    </div>
                                  </div>

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-message">

							<p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>

						</div>

					<?php endif; ?>

				</div>
