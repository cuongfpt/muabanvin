<section class="content-header">
    <h1>
        Cập nhật chi nhánh
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <form id="form-news-add" class="form" enctype="multipart/form-data" method="post" action="" novalidate="novalidate">
                    <fieldset
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Tên:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $info->name?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Địa chỉ:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $info->address?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">số điện thoại:</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $info->mobile?>">
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">urlIframe</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="url" name="url" value="<?php echo $info->urlIframe?>">
                                </div>
                            </div>
                        </div>
                       <div class="form-group">
                            <div class="row">
                                <label class="col-sm-2 control-label">Thứ tự</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="orderNo" name="orderNo" value="<?php echo $info->orderNo?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group">

                                <div class="col-sm-3">
                                    <input type="submit" value="Cập nhật" name="addnews"
                                           class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
<script src="../../public/site/js/validate-adv.js"></script>
<script type="javascript">
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