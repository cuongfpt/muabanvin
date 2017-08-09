<button onclick="scrolltop()" id="myBtn" title="Go to top" style="display: block;">Top</button>
<div class="chat_face">
    <div class="title"><i class="fa fa-commenting" aria-hidden="true"></i> Chat với chúng tôi</div>
	<div class="fb-page" data-href="<?php echo $linkfacegroup?>" data-tabs="messages" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
		<blockquote cite="<?php echo $linkfacegroup?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $linkfacegroup?>">Facebook</a></blockquote>
	</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>
<script type="text/javascript">
	   $(document).ready(function() {
            $('.chat_face .title').on('click',function() {
                if($('.chat_face').toggleClass('show_chat_box').hasClass('show_chat_box')){
                    $('.chat_face .title').html('<i class="fa fa-times-circle" aria-hidden="true"></i> Đóng')
                }else{
                  $('.chat_face .title').html('<i class="fa fa-commenting" aria-hidden="true"></i> Chat với chúng tôi')
                }
            });
             scrolltop() ;
        });
	   function scrolltop() 
            {
                var id_button = '#myBtn';
                // Kéo xu?ng kho?ng cách 220px thì xu?t hi?n button
                var offset = 220;
                var duration = 500;

                // Thêm vào s? ki?n scroll c?a window, nghia là lúc tru?t s?
                // ki?m tra s? ?n hi?n c?a button
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery(id_button).fadeIn(duration);
                    } else {
                        jQuery(id_button).fadeOut(duration);
                    }
                });

                // Thêm s? ki?n click vào button d? khi click là tru?t lên top
                jQuery(id_button).click(function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                });
            }
</script>