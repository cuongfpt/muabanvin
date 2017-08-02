<html>
    <head>
        <?php $this->load->view('site/head') ?>
    </head>
    <body>
              <?php $this->load->view('site/header') ?>
            <div class="dexp-body-inner default">
                <?php $this->load->view($temp, $this->data); ?>
            </div>
            <?php $this->load->view('site/footer') ?>
    </body>
</html>