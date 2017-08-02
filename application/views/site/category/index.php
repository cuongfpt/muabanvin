
<section class="dexp-section" id="section-page-title">
    <div class="container">
        <div class="row">
            <div class="region region-page-title col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <div id="block-dexp-page-elements-dexp-page-elements-page-title" class="block block-dexp-page-elements">
                    <div class="content">
                        <div class="page_title_no_sub"><h1 class="page_title"><?php echo $catetitle ?></h1></div>
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
                    <div class="view view-blog view-id-blog view-display-id-page_3 view-dom-id-f49b89082805087a37ea85521f95b06d">
                        <div class="view-content">
                            <?php $i=1;?>
                            <?php if (!empty($list)): ?>
                            <?php foreach ($list as $row): ?>
                            <?php if($i==1):?>
                            <div class="views-row views-row-<?php echo $i?> views-row-odd views-row-first">
                                <div id="node-89" style="margin-top:30px;" class="node node-article node-teaser clearfix post medium" about="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>" typeof="sioc:Item foaf:Document">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
                                            <div class="post-img media">
                                                <div class="mediaholder">
                                                    <section class="date">
                                                        <span class="day"><?php echo $row->createTime ?></span>
                                                        
                                                    </section>
                                                    <div class="field field-name-field-media field-type-media field-label-hidden">
                                                        <div class="field-items">
                                                            <div class="field-item even"><img typeof="foaf:Image" alt="" src="<?php echo public_url('uploads/news/' . $row->images) ?>" width="320" height="219"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mediahover"></div>
                                                    <div class="portfolio-image-zoom">
                                                        <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                                                            <span class="fa fa-link"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
                                            <section class="post-content">
                                                <header class="meta">
                                                    <h2><a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                                                    <?php echo $row->title ?></a></h2>
                                                </header>
                                                <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                                    <div class="field-items">
                                                        <?php echo $row->description ?>
                                                    </div>
                                                </div>
                                                <a class="button line-color" href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">Xem thêm</a>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php else:?>
                            <?php if($i%2==0):?>
                            <div class="views-row views-row-<?php echo $i?> views-row-even">
                                <?php else:?>
                                <div class="views-row views-row-<?php echo $i?> views-row-odd">
                                    <?php endif?>
                                    <div id="node-89" style="margin-top:30px;" class="node node-article node-teaser clearfix post medium" about="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>" typeof="sioc:Item foaf:Document">
                                        <div class="row">
                                            <div class="col-md-5 col-lg-5 col-xs-12 col-sm-12">
                                                <div class="post-img media">
                                                    <div class="mediaholder">
                                                        <section class="date">
                                                             <span class="day"><?php echo $row->createTime ?></span>
                                                        </section>
                                                        <div class="field field-name-field-media field-type-media field-label-hidden">
                                                            <div class="field-items">
                                                                <div class="field-item even"><img typeof="foaf:Image" alt="" src="<?php echo public_url('uploads/news/' . $row->images) ?>" width="320" height="219"></div>
                                                            </div>
                                                        </div>
                                                        <div class="mediahover"></div>
                                                        <div class="portfolio-image-zoom">
                                                            <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                                                                <span class="fa fa-link"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
                                                <section class="post-content">
                                                    <header class="meta">
                                                      
                                                        <h2><a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                                                        <?php echo $row->title ?></a></h2>
                                                    </header>
                                                    <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                                    <div class="field-items">
                                                         <?php echo $row->description ?>
                                                    </div>
                                                    </div>    <a class="button line-color" href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">Xem thêm</a>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif?>
                                <?php $i++;?>
                                <?php endforeach; ?>
                                <?php if($count > 5): ?>
                                <div class="pagination">
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>
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
                            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="../public/site/images/12_Hotline.png" style="width: 15px; height: 15px;">Hotline</strong></span>: <strong><?php echo $hotline?></strong></p>
                            
                            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="../public/site/images/support_operator-512.png" style="width: 15px; height: 15px;">CSKH:</strong></span>&nbsp;<strong><?php echo $CSKH?></strong></p>
                            <p class="rtejustify"><span style="color:#FF0000;"><strong><img alt="" src="../public/site/images/logo-zalo-1_1.png" style="width: 20px; height: 9px;">Zalo:</strong></span> <strong><?php echo $Zalo?></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function () {
    Pagging();
    });
    function Pagging() {
    var items = $(".views-row");
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
    </script>