<html>
    <head>
        <?php $this->load->view('site/head') ?>
    </head>
    <body class="html front not-logged-in no-sidebars page-node ltr wide bg1 lightbox-processed">
              <?php $this->load->view('site/header') ?>
            <div class="dexp-body-inner default">
                <?php $this->load->view($temp, $this->data); ?>
            </div>
            <?php $this->load->view('site/footer') ?>
              <?php $this->load->view('site/livechat') ?>
    </body>
</html>