
<div class="header">
    <div class="header_content">
        <div class="header_left">
            <div class="logo">
                <a href="http://vinplay.net"> <img src="<?php echo public_url('site/images/logo.png') ?>"></a>
            </div>
            <div class="game_top">
                <div class="div_game">
                    <ul>
                        <li><a href="http://vinplay.com" class="game_dangian" target="_blank"></a></li>
                        <li><a href="http://vinplay.com" class="game_slot" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
		<div id="search"><form action="<?php echo base_url('search') ?>" method="get"><input type="text" value="Nhập tiêu đề cần tìm"
                                   onblur="if(this.value=='') this.value='Nhập tiêu đề cần tìm'" name="title"
                                   onfocus="if(this.value=='Nhập tiêu đề cần tìm') this.value=''" id="search_keyword"
                                   placeholder="Nhập tiêu đề cần tìm...">
            <button type="submit" id="search_button">Tìm kiếm</button></form></div>
        <div class="header_right">
            <?php if ($userinfo == null): ?>
                <ul>

                    <li><a href="http://vinplay.com/landing3" class="btn_reg" target="_blank"></a></li>
                    <li><a href="http://vinplay.com/landing3" class="btn_login"></a></li>
                </ul>
            <?php elseif ($userinfo != null) : ?>
                <?php foreach ($userinfo as $key => $value): ?>
                    <div class="login-success">
                        <div class="avatar_right">
                            <ul>
                                <li><?php echo $value['nickname'] ?></li>
                                <li class="vippoint"><?php echo $value['vippoint'] ?></li>
                                <li class="vin"><?php echo number_format($value['vin']) ?></li>
                            </ul>
                        </div>
                        <div class="avatar_left">
                            <div class="avatar_login">
                                <?php if ($value['avatar'] == 1): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_1.png') ?>">
                                <?php elseif ($value['avatar'] == 2): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_2.png') ?>">
                                <?php elseif ($value['avatar'] == 3): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_3.png') ?>">
                                <?php elseif ($value['avatar'] == 4): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_4.png') ?>">
                                <?php elseif ($value['avatar'] == 5): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_5.png') ?>">
                                <?php elseif ($value['avatar'] == 6): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_6.png') ?>">
                                <?php elseif ($value['avatar'] == 7): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_7.png') ?>">
                                <?php elseif ($value['avatar'] == 8): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_8.png') ?>">
                                <?php elseif ($value['avatar'] == 9): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_9.png') ?>">
                                <?php elseif ($value['avatar'] == 10): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_10.png') ?>">
                                <?php elseif ($value['avatar'] == 11): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_11.png') ?>">
                                <?php elseif ($value['avatar'] == 12): ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_12.png') ?>">
                                <?php else: ?>
                                    <img src="<?php echo public_url('uploads/avatar/Avatar_1.png') ?>">
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                    <div class="logout">
                        <ul>
                            <li><a href="<?php echo base_url('home/logout') ?>" class="btn_logout"></a></li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
    <div class="nav">
        <div class="nav_content">
            <nav>
                <ul>
                    <li><a class="icon_home" href="<?php echo base_url() ?>"></a></li>
                    <?php echo $menu_list ?>
                </ul>
            </nav>
        </div>
        <div id="box_col_left" class="block_more_info">
            <div class="box_width_common">
                <div class="btn_control_col_left"><img class="icon_total_vne icon_hambermenu"></div>
                <div class="block_scoll_menu">
                    <ul class="list_item_panel">
                        <?php echo $menu_list ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".block_more_info").click(function() {
        if($(this).hasClass('open'))
        {
            $(this).addClass('close').removeClass('open');
        }
        else
        {
            $(this).addClass('open').removeClass('close');
        }

    });

</script>
