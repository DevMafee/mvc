<!-- Default footer-->
      <footer class="section-relative section-50 section-md-top-90 section-md-bottom-34 page-footer bg-gray-base context-dark">
        <div class="container">
          <div class="row justify-content-md-center text-xl-left">
            <div class="col-md-8 col-lg-12">
              <div class="row justify-content-sm-center justify-content-xl-between">
                <div class="col-sm-12 col-lg-4 col-xl-4 text-lg-left order-lg-3">
                  <h6 class="text-uppercase text-spacing-60 font-weight-bold">Newsletter</h6>
                  <p style="font-size: 15px">Keep up with our always upcoming  product features  and technologies. Enter your e-mail and subscribe to  our newsletter.</p>
                  <div class="offset-top-30">
                    <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-group">
                        <div class="input-group input-group-sm"><span class="input-group-addon"><span class="input-group-icon mdi mdi-email"></span></span>
                          <input class="form-control" placeholder="Enter your E-Mail" type="email" name="email" data-constraints="@Required @Email"/><span class="input-group-btn">
                            <button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span>
                        </div>
                      </div>
                      <div class="form-output" id="form-subscribe-footer"></div>
                    </form>
                  </div>
                </div>
                <div class="col-sm-7 text-sm-left col-lg-4 col-xl-4 order-lg-2 offset-lg-top-0 offset-top-40">
                  <h6 class="text-uppercase text-spacing-60 font-weight-bold">Latest news</h6>
                  <!-- Post Widget-->
                  <article class="post widget-post text-left text-primary"><a href="#">
                      <div class="unit flex-row unit-spacing-xs align-items-center">
                        <div class="unit-body">
                          <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                            <time class="text-darker" datetime="2018-01-01">05/14/2018</time>
                          </div>
                          <div class="post-title">
                            <h6 class="text-regular">Let’s Change the World</h6>
                          </div>
                        </div>
                      </div></a></article>
                  <!-- Post Widget-->
                  <article class="post widget-post text-left text-primary"><a href="#">
                      <div class="unit flex-row unit-spacing-xs align-items-center">
                        <div class="unit-body">
                          <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                            <time class="text-darker" datetime="2018-01-01">05/14/2018</time>
                          </div>
                          <div class="post-title">
                            <h6 class="text-regular">The Meaning of Web Design</h6>
                          </div>
                        </div>
                      </div></a></article>
                </div>
                <div class="col-sm-12 offset-top-60 col-lg-4 col-xl-3 order-lg-1 offset-lg-top-0">
                  <!-- Footer brand-->
                  <div class="footer-brand"><a href="../../index.html"><img class="img-fluid d-inline-block" src="images/logo-dark-197x52.png" width="197" height="52" alt="" style="margin-top: -10px"></a></div>
                  <div class="offset-top-30">
                    <ul class="list-inline">
                      <li class="list-inline-item"><a class="icon fa fa-facebook icon-xxs icon-circle icon-gray-darkest-filled" href="#"></a></li>
                      <li class="list-inline-item"><a class="icon fa fa-twitter icon-xxs icon-circle icon-gray-darkest-filled" href="#"></a></li>
                      <li class="list-inline-item"><a class="icon fa fa-google-plus icon-xxs icon-circle icon-gray-darkest-filled" href="#"></a></li>
                      <li class="list-inline-item"><a class="icon fa fa-linkedin icon-xxs icon-circle icon-gray-darkest-filled" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container offset-top-35">
          <p class="small text-darker">Intense &copy; <span id="copyright-year"></span> . <a href="#">Privacy Policy</a></p>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script src="<?php echo base_url('site_link'); ?>assets/js/core.min.js"></script>
    <script src="<?php echo base_url('site_link'); ?>assets/js/script.js"></script>	
  </body>
</html>