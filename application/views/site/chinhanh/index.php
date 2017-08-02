<section class="dexp-section" id="section-page-title">
    <div class="container">
        <div class="row">
            <div class="region region-page-title col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <div id="block-dexp-page-elements-dexp-page-elements-page-title" class="block block-dexp-page-elements">
                    <div class="content">
                        <div class="page_title_no_sub"><h1 class="page_title">Chi nhánh</h1></div>
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
                    <div class="view view-chi-nhanh view-id-chi_nhanh view-display-id-page view-dom-id-f9539e27f797d48b3d1f29c630d83611">
                    <div class="view-content">
                        <div class="item-list">
                            <ul>
                                <?php if (!empty($list)): ?>
                                <?php foreach ($list as $row): ?>
                                <li class="views-row views-row-1 views-row-odd views-row-first">
                                    <div class="views-field views-field-title">  <span class="field-content"><a href="#"><?php echo $row->name?></a></span>  </div>
                                    <div class="views-field views-field-field-dia-chi">   <span class="views-label views-label-field-dia-chi">Địa chỉ: </span>    <div class="field-content"><?php echo $row->address?></div>  </div>
                                    <div class="views-field views-field-field-sdt">  <span class="views-label views-label-field-sdt">SĐT: </span>
                                    <div class="field-content"><?php echo $row->mobile?> </div>
                                </div>
                                <div class="views-field views-field-body">
                                    <div class="field-content"><p><iframe allowfullscreen="" frameborder="0" height="150" src="<?php echo $row->urlIframe?>" style="border:0" width="300"></iframe></p>
                                </div>
                            </div>
                            <?php endforeach?>
                            <?php endif?>
                        </li>
                        
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div></div>
<div class="region region-right-sidebar col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div id="block-block-107" class="block block-block">
        <h3 class="headline">
        Hotline giao dịch  </h3>
        <span class="brd-headling"></span>
        <div class="clearfix">&nbsp;</div>
        <div class="content">
            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="public/site/images/12_Hotline.png" style="width: 15px; height: 15px;">Hotline</strong></span>: <strong><?php echo $hotline?></strong></p>
            
            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="public/site/images/support_operator-512.png" style="width: 15px; height: 15px;">CSKH:</strong></span>&nbsp;<strong><?php echo $CSKH?></strong></p>
            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="public/site/images/logo-zalo-1_1.png" style="width: 20px; height: 9px;">Zalo:</strong></span> <strong><?php echo $Zalo?></strong></p>
        </div>
    </div>
</div>
</div>
</div>
</section>