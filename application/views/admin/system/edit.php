<section class="content-header">
    <h1>
       cập nhật hệ thống
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <form id="form-news-add" class="form" enctype="multipart/form-data" method="post" action=""
                      novalidate="novalidate">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn facebook:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="linkface" name="linkface" value="<?php echo $info->linkface?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Đường dẫn facebook group:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="linkfacegroup" name="linkfacegroup" value="<?php echo $info->linkfacegroup?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">CodeGA:</label>

                                <div class="col-sm-8">
                                   <textarea cols="175" rows="15" id="codeGa" name="codeGa" value="<?php echo $info->codeGA?>"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề page:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="titlepage" value="<?php echo $info->titlePage?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Keyword:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="keyword" value="<?php echo $info->keyword?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Meta description:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="metadesc" value="<?php echo $info->metaDescription?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Hotline:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="Hotline" value="<?php echo $info->hotline?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Zalo:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="Zalo" value="<?php echo $info->Zalo?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">CSKH:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="cskh" value="<?php echo $info->CSKH?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">sologant:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="sologant" value="<?php echo $info->sologant ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tiêu đề đại lý:</label>
                                <div class="col-sm-8">
                                     <input type="text" class="form-control" name="dailytitle" value="<?php echo $info->titleDaily ?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Bản đồ:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="map" value="<?php echo $info->Map ?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Địa chỉ giao dịch:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="addresstranfer" value="<?php echo $info->AddressTranfer ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" value="<?php echo $info->Email ?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Sign:</label>

                                <div class="col-sm-8">
                                     <textarea id="sign" name="sign" rows="20" cols="80"><?php echo $info->sign ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Địa chỉ:</label>
                                <div class="col-sm-8">
                                     <textarea id="address" name="address" rows="20" cols="80"><?php echo $info->Address ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Hướng dẫn giao dịch:</label>
                                <div class="col-sm-8">
                                     <textarea id="guidtranfer" name="guidtranfer" rows="20" cols="80"><?php echo $info->guidTranfer ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tuyển đại lý:</label>
                                <div class="col-sm-8">
                                     <textarea id="daily" name="daily" rows="20" cols="80"><?php echo $info->Daily ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ngân hàng:</label>
                                <div class="col-sm-8">
                                     <textarea id="bank" name="bank" rows="20" cols="80"><?php echo $info->Bank ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Logo:</label>
                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="images" name="images"><div class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span> </div>
                                         <?php if ($info->logo != null): ?>
                                            <img id="imageselect"
                                                 src="<?php echo public_url("uploads/adv/" . $info->logo) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php else: ?>
                                            <img id="imageselect" src="../../public/admin/images/no-image.png"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif; ?>
                                        <input type="hidden" name="imagevalue" value="<?php echo $info->logo ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Banner:</label>
                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagesbanner" name="imagesbanner"><div class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span> </div>
                                    <?php if ($info->bannerHome != null): ?>
                                            <img id="imageselectbanner"
                                                 src="<?php echo public_url("uploads/adv/" . $info->bannerHome) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php else: ?>
                                            <img id="imageselectbanner" src="../../public/admin/images/no-image.png"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif; ?>
                                        <input type="hidden" name="imagebannervalue" value="<?php echo $info->bannerHome ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh giao dịch:</label>
                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span class="fileinput-new">Chọn file </span> <span
                                                class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imagestranfer" name="imagestranfer"><div class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span> </div>
                                        <?php if ($info->imageTranfer != null): ?>
                                            <img id="imageselecttranfer"
                                                 src="<?php echo public_url("uploads/adv/" . $info->imageTranfer) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php else: ?>
                                            <img id="imageselecttranfer" src="../../public/admin/images/no-image.png"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif; ?>
                                        <input type="hidden" name="imagetranfervalue" value="<?php echo $info->imageTranfer ?>">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Ảnh logo bank:</label>
                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"><span
                                            class="btn btn-primary btn-file"><span class="fileinput-new">Chọn file </span>
                                             <span class="fileinput-exists">ảnh</span>
                                         <input type="file" id="imageslogobank" name="imageslogobank"><div class="ripple-wrapper"></div></span> <span
                                            class="fileinput-filename"></span> </div>
                                   <?php if ($info->logobank != null): ?>
                                            <img id="imageselectbank"
                                                 src="<?php echo public_url("uploads/adv/" . $info->logobank) ?>"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php else: ?>
                                            <img id="imageselectbank" src="../../public/admin/images/no-image.png"
                                                 style="margin-top: 5px;width: 150px">
                                        <?php endif; ?>
                                        <input type="hidden" name="imagebankvalue" value="<?php echo $info->logobank ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <input type="submit" value="Cập nhật" name="updatenews"
                                           class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</section>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
       CKEDITOR.replace('guidtranfer');
        CKEDITOR.replace('address');
        CKEDITOR.replace('sign');
        CKEDITOR.replace('bank');
        CKEDITOR.replace('daily');
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imageselect').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#images").change(function () {
        readURL(this);
    });
</script>