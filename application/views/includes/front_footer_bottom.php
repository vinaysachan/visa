<footer>
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2016-<?= date('Y') . ' www.' . strtolower(SITE_NAME) ?>.com | All rights reserved.</small>
                <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                    <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                    <li>
                        <a target="_blank" href="https://www.facebook.com/e-touristvisacom-187000095076726/">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
<!--                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
                    <!--<li class="row-end"><a href="#"><i class="fa fa-rss"></i></a></li>-->
                </ul>
            </div>
        </div>
    </div>
</footer>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4969755637814953",
    enable_page_level_ads: true
  });
</script>
<?= /* Page JS */ (!empty($js)) ? $this->util->jsList($js) : '' ?>
