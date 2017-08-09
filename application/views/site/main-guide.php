<html>
<head>
    <?php $this->load->view('site/head') ?>
</head>

<body onkeydown="return false">
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
  <?php $this->load->view('site/livechat') ?>
<button onclick="scrolltop()" id="myBtn" title="Go to top" style="display: block;">Top</button>
<script language="javascript">
            function scrolltop() 
            {
                var id_button = '#scrolltop';

                // K�o xu?ng kho?ng c�ch 220px th� xu?t hi?n button
                var offset = 220;

                // TH?i gian di tru?t l� 0.5 gi�y
                var duration = 500;

                // Th�m v�o s? ki?n scroll c?a window, nghia l� l�c tru?t s?
                // ki?m tra s? ?n hi?n c?a button
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery(id_button).fadeIn(duration);
                    } else {
                        jQuery(id_button).fadeOut(duration);
                    }
                });

                // Th�m s? ki?n click v�o button d? khi click l� tru?t l�n top
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