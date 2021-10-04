<!-- Footer
  ============================================= -->
<footer id="footer" class="border-0 page-section"
    style="background: url({{ asset('/beauty/demos/beauty/images/others/footer-bg2.jpg') }}) center top / cover;">

    <div class="container clearfix">

        <!-- Footer Widgets
    ============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row justify-content-between">
                <div class="col-md-5">
                    <img src="{{ asset('beauty/demos/beauty/images/logo@2x.png') }}" alt="Image" width="180">
                    <p class="fw-normal" style="font-size: 13px; line-height: 23px; font-family: var(--font1);">
                        Monotonectally re-engineer optimal architectures without principle-centered markets. Continually
                        synergize B2B channels before ethical.</p>
                    <div class="line line-sm dark"></div>
                    <div class="row justify-content-between clearfix">

                        <div class="col-6">
                            <h5>Address:</h5>
                            <address class="mb-3" style="line-height: 1.7; font-family: var(--font1);">
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                            </address>
                            <h5 class="color fst-italic m-0">Sundays Closed.</h5>
                        </div>

                        <div class="col-6">
                            <div class="fr">
                                <div class="footer-big-contacts">
                                    <span>Call Us:</span>
                                    (1) 22 55412474
                                </div>
                                <div class="footer-big-contacts mt-3">
                                    <span>Send an Email:</span>
                                    info@canvas.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mt-5 mt-md-4">
                    <div id="q-contact" class="widget quick-contact-widget form-widget clearfix">

                        <h4 class="nott ls0">Quick Contact</h4>
                        <div class="form-result"></div>
                        <form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post"
                            class="quick-contact-form mb-0">
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <input type="text" class="required sm-form-control input-block-level"
                                id="quick-contact-form-name" name="quick-contact-form-name" value=""
                                placeholder="Full Name" />
                            <input type="text" class="required sm-form-control email input-block-level"
                                id="quick-contact-form-email" name="quick-contact-form-email" value=""
                                placeholder="Email Address" />
                            <textarea class="required sm-form-control input-block-level short-textarea"
                                id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30"
                                placeholder="Message"></textarea>
                            <input type="text" class="d-none" id="quick-contact-form-botcheck"
                                name="quick-contact-form-botcheck" value="" />
                            <input type="hidden" name="prefix" value="quick-contact-form-">
                            <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit"
                                class="button button-circle button-small nott fw-normal ms-0" value="submit">send
                                email</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

</footer><!-- #footer end -->
