<html>
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body class="html front not-logged-in no-sidebars page-node ltr wide bg1 lightbox-processed">
 <?php $this->load->view('site/header') ?>
 <div class="dexp-body-inner default">
 <section class="dexp-section" id="section-banner">

<div class="dexp-container">
    <div class="row">
        <div class="region region-banner col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div id="block-block-112" class="block block-block">
<div class="content">
<div class="col-md-6">
  <?php echo $bannerText?>
</div>
<div class="col-md-6">
<hr>
  <?php echo $bannerText1?>
</div>
</div>
</div>
<div id="block-dexp-layerslider-dexp-layerslider-block-1" class="block block-dexp-layerslider hidden-xs">
<div class="content">
<div id="dexp-layerslider" class="layerslider-bannercontainer tp-simpleresponsive" style="max-height: 328px; overflow: visible;">
<div id="slider1" class="layerslider-banner">
  <ul> 
    <?php if (!empty($list2)) :?>
      <?php foreach ($list2 as $row): ?>
   <li data-transition="slidedown"> 
     <div class="tp-caption News-Title" 
        data-x="10"  
        data-y="20"  
        data-speed="500"
         data-start="1000"
        data-easing="easeOutExpo"><?php echo $bannerText ?></div>
         <div class="tp-caption News-Title" 
        data-x="750" data-y="20"
         data-speed="500" 
         data-start="1000" 
         data-easing="easeOutExpo"
          ><?php echo $bannerText1 ?></div>
   </li>
   <?php endforeach ?>
    <?php endif ?>    
   
  </ul> 
 </div>

</div>
</div>  
</div>
    </div>
  </div>
</section>
<script type="text/javascript">
    // $(document).ready(function(){
    //     $('.bxslider').bxSlider();
    // });
    jQuery(document).ready(function() { 
   jQuery("#slider1").revolution({
      sliderType:"standard",
      sliderLayout:"auto",
      delay:9000,
      navigation: {
          arrows:{enable:true} 
      }, 
      gridwidth:1230,
      gridheight:720 
    }); 
}); 
</script>
     <section class="dexp-section" id="section-features">
        <div class="container">
            <div class="row">
              <div class="region region-feature-first col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div id="block-block-108" class="block block-block">
                       <h3 class="block-title">FACEBOOK</h3>
                        <div class="content">
                            <p class="rtecenter">
                            <a href="<?php echo $linkface?>" target="_blank">
                            <img alt="" src="public/site/images/fan-page1.png" style="height: 90px; width: 180px;">
                            </a>
                            </p>
                        </div>
                    </div> 
            </div>
            <div class="region region-feature-second col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div id="block-block-109" class="block block-block">
                          <h3 class="block-title">FB FANPAGE</h3>
                    <div class="content">
                        <p>
                            <a href="<?php echo $linkfacegroup?>" target="_blank">
                                <img alt="" src="public/site/images/fan-page.png" style="width: 180px; height: 90px;">
                            </a>
                        </p>
                    </div>
                </div> 
            </div>
            <div class="region region-feature-third col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div id="block-block-110" class="block block-block">
                      <h3 class="block-title">FB GROUP</h3>
                        <div class="content">
                        <p>
                            <a href="<?php echo $linkfacegroup?>" target="_blank">
                                <img alt="" src="public/site/images/fan-page.png" style="width: 180px; height: 90px;">
                            </a>
                        </p>
                        </div>
                </div> 
            </div>
            </div>
        </div>
     </section>
     <section class="dexp-section bg-light-blue" id="section-features-second">
        <div class="dexp-container">
            <div class="row">
                  <div class="region region-feature-fourth col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="block-views-latest-projects-block" class="block block-views main-headline dexp-animate fadeInDownBig animated" data-animate="fadeInDownBig" style="text-align:center">
                        <h3 class="block-title">Dịch vụ của chúng tôi</h3>
                        <p class="sub-block-title">Hãy cùng tham gia</p>
                        <div class="content">
                            <div class="view view-latest-projects view-id-latest_projects view-display-id-block home-featured view-dom-id-d4f63d7083fe3c6ce952c0cbbea2901d">
                                  <div class="view-content">    
                                        <div id="latest-projects-block">
                                        <?php if (!empty($listnewshome)) : ?>
                                            <?php foreach ($listnewshome as $row): ?>
                                                <div class="slide">
                                                    <div class="content">
                                                      <div class="portfolio-image">
                                                              <div class="field field-name-field-portfolio-images field-type-image field-label-hidden">
                                                                    <div class="field-items">
                                                                        <div class="field-item even">
                                                                            <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                                                                                 <img typeof="foaf:Image" alt="" src="<?php echo public_url('uploads/news/' . $row->images) ?>" width="560" height="400">
                                                                            </a>
                                                                        </div>
                                                                     </div>
                                                              </div> 
                                                              <div class="mediaholder"></div>
                                                              <div class="portfolio-image-zoom">
                                                                <a href="<?php echo public_url('uploads/news/' . $row->images) ?>" rel="lightbox[portfolio_22]" class="lightbox-processed"><span class="fa fa-search"></span></a>
                                                              </div>
                                                      </div>
                                                       <div class="item-description">
                                                              <h5><a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a></h5>
                                                              <div class="description">
                                                                  <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                                                        <div class="field-items">
                                                                              <div class="field-item even" property="content:encoded">
                                                                                 <div class="rtejustify"><span></span>
                                                                                 </div>
                                                                              </div>
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            <?php endforeach ?>
                                          <?php endif?>
                                        </div>
                                  </div>
                             </div>
                        </div>
                        </div>
                        </div> 
                 </div>
            </div>
       </section>
    <section class="dexp-section" id="section-extra-bottom-1">
        <div class="container">
            <div class="row">
            <div class="region region-extra-bottom col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div id="block-block-84" class="block block-block main-headline" style="text-align:center">
      <div class="content">
      <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
          <?php echo $guidTranfer ?>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <img alt="" src="<?php echo public_url("uploads/adv/" . $imageTranfer) ?>" style="float: right; width: 310px; height: 448px;"></div>
      <hr style="height:0;border:0">
      </div>
      </div> 
       </div>
            </div>
        </div>
    </section>
    <section class="dexp-section" id="section-extra-bottom-3">
    <div class="container">
        <div class="row">
              <div class="region region-extra-bottom3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="block-block-85" class="block block-block stats-has-border" style="padding:50px 0 0 0">
                  <div class="content">
                  <p><img alt="" src="<?php echo public_url("uploads/adv/" . $bannerHome) ?>" style="width: 1366px; height: 252px;"></p>

                  </div>
              </div>  
            </div>
        </div>
    </div>
</section>
<section class="dexp-section" id="section-extra-bottom-4">
    <div class="container">
        <div class="row">
              <div class="region region-extra-bottom4 col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div id="block-block-111" class="block block-block">
              <h3 class="block-title">TÀI KHOẢN NGÂN HÀNG</h3>
<div class="content">
<div style="width:100%;">
<div class="row">
<div class="col-md-4 col-sm-12 col-lg-4 col-xl-4">
   <?php echo $Address ?>

</div>
<div class="col-md-4 col-sm-12 col-lg-4 col-xl-4">
 <?php echo $Bank ?>
</div>
<div class="col-md-4 col-sm-12 col-ls-4 col-xl-4" style="text-align: center">
  <img alt="" src="<?php echo public_url("uploads/adv/" . $logobank) ?>" style="width: 200px; height: 200px; float: right;">
</div>
</div>
</div>

</div>
</div>  </div>
        </div>
    </div>
</section>
<?php $this->load->view('site/footer') ?>
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
  $('#latest-projects-block').bxSlider({
    slideWidth: 300,
    minSlides: 2,
    maxSlides: 5,
    slideMargin: 10,
    pager:false
  });
});
</script>