<style type="text/css">
    #marquee {
   background:#eee;
   overflow:hidden;
   white-space: nowrap;
 }
</style>
<section class="dexp-section hidden-xs hidden-sm" id="section-top-bar">
    <div class="container">
        <div class="row">
          <div class="region region-call-us col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div id="block-block-1" class="block block-block">
                    <div class="content call-us">
                        <ul>
                            <li class="first"><a href="#section-extra-bottom-1">Giao dịch</a></li>
                            <li><a target="_blank" href="<?php echo $linkface ?>">Facebook</a></li>
                        </ul>
                    </div>
            </div> 
         </div>
          <div class="region region-socials col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div id="block-block-2" class="block block-block">
                <div class="content">
                    <div class="pull-right">
                        <ul>
                            <li><?php echo $hotline?></li>
                           
                        </ul>
                    </div>

                </div>
            </div> 
         </div>
        </div>
    </div>
</section>
<div class="sticky-wrapper" style="height: 108px;">
    <section class="dexp-section dexp-sticky" id="section-header">
        <div class="container">
            <div class="row">
                <div class="hidden-lg hidden-md col-xs-2 col-sm-2"><span class="fa fa-bars menu-toggle"></span></div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2"><a href="/" class="site-logo active">
                    <img src="<?php echo public_url("uploads/adv/".$logo) ?>" alt="" style="width:105px;"></a>
                </div>    
                <div class="region region-navigation col-xs-12 col-sm-12 col-md-10 col-lg-10">
                    <div id="block-dexp-menu-dexp-menu-block" class="block block-dexp-menu">
                        <div class="content">
                            <div class="dexp-dropdown">
                                <ul class="menu">
                                   <?php echo $menu_list ?>
                                   <li><a href="https://vinplay.com/vinplay.apk"><img src="public/site/images/app-apk.png"></a></li>
                                   <li><a href="itms-services://?action=download-manifest&url=https://vinplay.com/download/ios/vinplay.plist"><img src="public/site/images/app-ios.png"></a></li>
                                   <li><a href="https://play.google.com/store/apps/details?id=com.vinotp"><img src="public/site/images/app-otp.png"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </section>
</div>
<div id="marquee">
    <?php echo $textRun?>
</div>
<script type="text/javascript">
    $(".menu-toggle").click(function(){
        $("body").addClass('menu-open');
    });
     $(".region-navigation").click(function(){
        $("body").removeClass('menu-open');
    });
window.addEventListener('load', function () {
    function go() {
        i = i < width ? i + step : 1;
        m.style.marginLeft = -i + 'px';
    }
    var i = 0,
        step = 3,
        space = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    var m = document.getElementById('marquee');
    var t = m.innerHTML; //text
    m.innerHTML = t + space;
    m.style.position = 'absolute'; 
    var width = (m.clientWidth + 1);
    m.style.position = '';
    m.innerHTML = t + space + t + space + t + space + t + space + t + space + t + space + t + space;
    m.addEventListener('mouseenter', function () {
        step = 0;
    }, true);
    m.addEventListener('mouseleave', function () {
        step = 3;
    }, true);
    var x = setInterval(go, 50);
}, true);
</script>