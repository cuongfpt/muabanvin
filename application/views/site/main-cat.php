<html>
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body>
<div id="container">
    <?php $this->load->view('site/header') ?>
    <div class="content_home">

        <div class="content">
            <div class="content_page">
                <?php $this->load->view($temp, $this->data); ?>
            </div>
        </div>

    </div>
</div>
<?php $this->load->view('site/footer') ?>
<div style="position: fixed; bottom: 50px; right: 50px; display: none" type="button" value="Click" id="scrolltop">
  <img src="../top.png" >
</div>
<script language="javascript">
            function scrolltop() 
            {
                var id_button = '#scrolltop';

                // Kéo xu?ng kho?ng cách 220px thì xu?t hi?n button
                var offset = 220;

                // TH?i gian di tru?t là 0.5 giây
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
            
            // Th?c hi?n
            $(document).ready(function(){
                scrolltop();
            });
        </script>
</body>
</html>