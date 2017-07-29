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
</body>
</html>