<!-- <div class="break-crum">
  <div class="text-crum"><?php echo $info->title ?></div>
  <div class="star">
    <?php
    if($info_rate!=null){
    for($i = 1; $i <= 5; $i++) {
    if($i <= $info_rate[0]->rating) {
    ?>
    <span class="star_rated" onclick="ratestar(<?php echo $info_rate[0]->news_id; ?>, <?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2-hover.png"></span>
    <?php }  else {  ?>
    <span  onclick="ratestar(<?php echo $info->id ?>,<?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2.png"></span>
    <?php  }
    }
    }
    else {  for($i = 1; $i <= 5; $i++) { ?>
    <span  onclick="ratestar(<?php echo $info->id ?>,<?php echo $i; ?>)"><img src="<?php echo public_url('site') ?>/images/rate-btn2.png"></span>
    <?php } }?>
    <span style="float: left;color: #fff"> <?php echo $result_rate ?></span>
  </div>
  <div style="width: 13%;float: left;color: #fff">
    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
  </div>
  <div style="width: 20%;float: left;">
    <div class="a2a_kit a2a_default_style">
      <a class="a2a_button_google_plus_share"></a>
    </div>
  </div>
  <div class="list_cate">
    <div class="content_left" style="color: #fff">
      <?php echo $info->content ?>
      <div class="content_news_other_footer">
        <?php echo $sign ?>
      </div>
      <?php if ($list != false): ?>
      <div class="content_news_other">
        <span> Các tin khác</span>
        <ul>
          <?php $i = 1; ?>
          <?php foreach ($list as $row): ?>
          <?php if ($i <= 5): ?>
          <li><a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a></li>
          <?php endif ?>
          <?php $i++ ?>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif ?>
    </div>
    <?php $this->load->view('site/right') ?>
  </div>
  <script type="text/javascript">
  $("document").ready(function(){
  var url      = window.location.href;
  $(".fb-like").attr("data-href",url);
  });
  function ratestar($id,$rate){
  $.ajax({
  type: 'POST',
  url: '<?php echo base_url("home/updateRate")?>',
  data:{'id':$id,'rate':$rate},
  success: function(data) {
  location.reload();
  }
  });
  }
  </script>
  <script async src="//static.addtoany.com/menu/page.js"></script>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  -->
  <!-- <div class="break-crum">
    <div class="text-crum"><span><?php echo $catetitle ?></span></div>
  </div>
  <div class="list_cate">
    <div class="content_left">
      <ul id="listnew">
        <?php if (!empty($list)): ?>
        <?php foreach ($list as $row): ?>
        <li>
          <div class="item_news">
            <div class="div_images">
              <a href="  <?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><img
              src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a>
            </div>
            <div class="div_content">
              <a class="title_new" href="  <?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a>
              <div class="date"><?php echo date("d/m/Y", strtotime($row->createTime)) ?></div>
              <div class="description">
                <?php echo trim_text($row->description,400) ?>
              </div>
            </div>
          </div>
        </li>
        <?php endforeach; ?>
        <?php else: ?>
        <li><h3 style="color: wheat">
          Đang cập nhật .....
        </h3></li>
        <?php endif ?>
      </ul>
      <?php if($count > 5): ?>
      <div class="pagination">
      </div>
      <?php endif; ?>
    </div>
    <?php $this->load->view('site/right') ?>
  </div>
  <script>
  $(document).ready(function () {
  Pagging();
  });
  function Pagging() {
  var items = $("#listnew li");
  var numItems = items.length;
  $("#num").html(numItems);
  var perPage = 5;
  // only show the first 2 (or "first per_page") items initially
  items.slice(perPage).hide();
  // now setup pagination
  $(".pagination").pagination({
  items: numItems,
  itemsOnPage: perPage,
  cssStyle: "",
  onPageClick: function (pageNumber) { // this is where the magic happens
  // someone changed page, lets hide/show trs appropriately
  var showFrom = perPage * (pageNumber - 1);
  var showTo = showFrom + perPage;
  items.hide() // first hide everything, then show for the new page
  .slice(showFrom, showTo).show();
  }
  });
  }
  </script> -->
  <section class="dexp-section" id="section-page-title">
    <div class="container">
      <div class="row">
        <div class="region region-page-title col-xs-12 col-sm-12 col-md-7 col-lg-7">
          <div id="block-dexp-page-elements-dexp-page-elements-page-title" class="block block-dexp-page-elements">
            <div class="content">
              <div class="page_title_no_sub"><h1 class="page_title"><?php echo $info->title ?></h1></div>
            </div>
          </div>
        </div>
        <div class="region region-breadcrumb col-xs-12 col-sm-12 col-md-5 col-lg-5">
          <div id="block-dexp-page-elements-dexp-page-elements-breadcrumb" class="block block-dexp-page-elements">
            <div class="content">
              <h2 class="element-invisible">Bạn đang ở đây</h2><div class="breadcrumb"><a href="/">Nhà</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="dexp-section" id="section-main-content">
    <div class="container">
      <div class="row">
        <div class="region region-content col-xs-12 col-sm-12 col-md-9 col-lg-9">
          <div class="tabs"></div><div id="block-system-main" class="block block-system">
          <div class="content">
            <p><b><?php echo $info->description ?></b></p>
            <p><?php echo $info->content ?></p>
          </div>
        </div>
      </div>
      <div class="region region-right-sidebar col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div id="block-block-107" class="block block-block">
          <h3 class="headline">
          Hotline giao dịch  </h3>
          <span class="brd-headling"></span>
          <div class="clearfix">&nbsp;</div>
          <div class="content">
            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="../public/site/images/12_Hotline.png" style="width: 15px; height: 15px;">Hotline</strong></span>: <strong><?php echo $hotline?></strong></p>
            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="../public/site/images/support_operator-512.png" style="width: 15px; height: 15px;">CSKH:</strong></span>&nbsp;<strong><?php echo $CSKH?></strong></p>
            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="../public/site/images/logo-zalo-1_1.png" style="width: 20px; height: 9px;">Zalo:</strong></span> <strong><?php echo $Zalo?></strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>