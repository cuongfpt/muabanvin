
<div class="break-crum">
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
