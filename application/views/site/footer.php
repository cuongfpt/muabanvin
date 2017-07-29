<div class="footer">
    <div class="footer_content">

        <div class="footer_top">
            <div class="footer_menu">
                <div class="nav_footer">
                    <ul>
                        <?php echo $listfooter ?>
                    </ul>
                    <div class="line"></div>
                </div>

            </div>
        </div>
        <div class="footer_menu_bot">
            <div class="footer_pay">
                <div class="div_pay">
                    <div class="div_pay_left">
                        <div class="title_pay">Các phương thức thanh toán</div>
                        <div class="div_pay_images">
                            <img src="<?php echo public_url("site/images/payment.png") ?>">
                        </div>
                    </div>
                    <div class="div_pay_right">
                        <div class="title_pay">Kết nối với chúng tôi</div>
                        <div class="div_pay_images">
                            <ul>
                                <li><a target="_blank" href="<?php echo $linkface ?>"> <img
                                            src="<?php echo public_url("site/images/facebook.png") ?>"></a></li>
                                <li><a target="_blank" href="<?php echo $linkgoogle ?>"> <img
                                            src="<?php echo public_url("site/images/googleplus.png") ?>"></a></li>
                                <li><a target="_blank" href="<?php echo $linktwiter ?>"> <img
                                            src="<?php echo public_url("site/images/twitter.png") ?>"></a></li>
                                <li><a target="_blank" href="<?php echo $linkyoutube ?>"> <img
                                            src="<?php echo public_url("site/images/youtube.png") ?>"></a></li>
                                <li><a target="_blank" href="<?php echo $linkblog ?>"> <img
                                            src="<?php echo public_url("site/images/blog.png") ?>"></a></li>
											<li><a target="_blank" href="http://vuabaidoithuong.blogspot.com/"> <img
                                            src="<?php echo public_url("site/images/blog_1.png") ?>"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="content_polices">
            <?php echo $contact ?>
            </div>
        </div>
    </div>

</div>
<?php echo $codeGA ?>
<h1 style="display: none"><?php echo $h1 ?></h1>
<style type='text/css'>
body{
-webkit-touch-callout: none;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}
</style>
<script type='text/javascript'>
//<![CDATA[
// JavaScript Document
var message="NoRightClicking"; function defeatIE() {if (document.all) {(message);return false;}} function defeatNS(e) {if (document.layers||(document.getElementById&&!document.all)) { if (e.which==2||e.which==3) {(message);return false;}}} if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;} else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;} document.oncontextmenu=new Function("return false")
//]]>
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '483878731961520');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=483878731961520&ev=PageView&noscript=1"
/></noscript>
<script>
<!-- End Facebook Pixel Code -->
// Purchase
// Track purchases or checkout flow completions (ex. landing on "Thank You" or confirmation page)
fbq('track', 'Purchase', {value: '1.00', currency: 'USD'});
// CompleteRegistration
// Track when a registration form is completed (ex. complete subscription, sign up for a service)
fbq('track', 'CompleteRegistration');
</script>

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 870957946;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/870957946/?guid=ON&amp;script=0"/>
</div>
</noscript>
