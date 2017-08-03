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
                <div class="hidden-lg hidden-md col-xs-3 col-sm-3"><span class="fa fa-bars menu-toggle"></span></div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3"><a href="/" class="site-logo active">
                    <img src="<?php echo public_url("uploads/adv/".$logo) ?>" alt=""></a>
                </div>    
                <div class="region region-navigation col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div id="block-dexp-menu-dexp-menu-block" class="block block-dexp-menu">
                        <div class="content">
                            <div class="dexp-dropdown">
                                <ul class="menu">
                                   <?php echo $menu_list ?>
                                </ul>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(".menu-toggle").click(function(){
        $("body").addClass('menu-open');
    });
     $(".region-navigation").click(function(){
        $("body").removeClass('menu-open');
    });
   
</script>