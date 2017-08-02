
<section class="content-header">
    <h1>
        Quản lý chi nhánh
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-success successful">
                                <?php if (isset($message) && $message): ?>
                                    <?php echo $message ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Địa chỉ</th>
                                     <th>Số điện thoại</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>

                                <?php $i = 1; ?>
                                <?php foreach ($list as $row): ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row->name ?></td>
                                        <td><?php echo $row->address?></td>
                                         <td><?php echo $row->mobile?></td>
                                        <td>
                                            <a href="<?php echo admin_url('chinhanh/edit/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/edit.png"/>
                                            </a>
                                            <a  class="verify_action" href="<?php echo admin_url('chinhanh/delete/' . $row->id) ?>">
                                                <img src="<?php echo public_url('admin') ?>/images/delete.png"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="dialog-confirm" title="Xóa chi nhánh?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:4px 12px 20px 0;"></span><span style="font-size: 15px;color: #ff0000">Bạn có chắc chắn muốn xóa chi nhánh này không ?</span> </p>
</div>
<script>
    $(function() {
        $(".verify_action").click(function(e) {
            e.preventDefault();
            $('#dialog-confirm').dialog('open');
        });

        $( "#dialog-confirm" ).dialog({
            resizable: false,
            height:160,
            modal: true,
            minWidth: 450,
            autoOpen:false,
            buttons: {
                "OK": function() {
                    location.href=$(".verify_action").attr("href");
                },
                Cancel: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
    });
</script>