<div class="content_left">
    <ul id="listnew">
        <?php if (!empty($list)): ?>
            <?php $i = 1; ?>
            <?php foreach ($list as $row): ?>
                <?php if ($i <= 5): ?>
                    <li>
                        <div class="item_news">
                            <div class="div_images">
                                <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><img
                                        src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a>
                            </div>
                            <div class="div_content">
                                <h2><a class="title_new" href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a></h2>
                                <div class="date"><?php echo date("d/m/Y", strtotime($row->createTime)) ?></div>
                                <div class="description">

                                         <?php echo trim_text($row->description,400) ?>                              </div>
                            </div>
                        </div>
                    </li>
                <?php else : ?>
                    <li>
                        <div class="item_news">
                            <div class="div_images">
                                <a href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>">
                                    <img src="<?php echo public_url('uploads/news/' . $row->images) ?>"></a>
                            </div>
                            <div class="div_content">
                                <a class="title_new" href="<?php echo base_url('bai-viet/' . $row->seoLink . '-' . $row->id) ?>"><?php echo $row->title ?></a>
                                <div class="date"><?php echo date("d/m/Y", strtotime($row->createTime)) ?></div>
                                <div class="description">
                                        <?php echo trim_text($row->description,400) ?>                                </div>
                            </div>
                        </div>
                    </li>
                <?php endif ?>
                <?php $i++ ?>
            <?php endforeach; ?>
        <?php endif ?>
    </ul>
    <?php if ($count > 5): ?>
        <div class="pagination">
        </div>
    <?php endif; ?>
    <input type="hidden" id="popup" value="<?php echo $popup?>">
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
       <a href="<?php echo $linkpopup?>" target="_blank"> <img src="<?php echo public_url('site/images/likeshare_nhancode.png') ?>"></a>
    </div>

</div>
<script>
 // Get the modal
    var modal = document.getElementById('myModal');
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    $(document).ready(function () {
        Pagging();
        if($("#popup").val()=="1"){
        popunder();
        }
    });
    function Pagging() {
        var items = $("#listnew li");
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
//xu ly popup hien thi 1 lan 1 ngay theo ip
function Set_Cookie(name, value, expires, path, domain, secure) {
        var today = new Date();
        today.setTime(today.getTime());
        var expires_date = new Date(today.getTime() + (expires));

        document.cookie = name + "=" + escape(value) +
            ((expires) ? ";expires=" + expires_date.toGMTString() : "") +
            ((path) ? ";path=" + path : "") +
            ((domain) ? ";domain=" + domain : "") +
            ((secure) ? ";secure" : "");
    }

    function Get_Cookie(name) {

        var start = document.cookie.indexOf(name + "=");
        var len = start + name.length + 1;
        if ((!start) &&
            (name != document.cookie.substring(0, name.length))) {
            return null;
        }
        if (start == -1) return null;
        var end = document.cookie.indexOf(";", len);
        if (end == -1) end = document.cookie.length;
        return unescape(document.cookie.substring(len, end));
    }

    function Delete_Cookie(name, path, domain) {
        if (Get_Cookie(name)) document.cookie = name + "=" +
            ((path) ? ";path=" + path : "") +
            ((domain) ? ";domain=" + domain : "") +
            ";expires=Mon, 11-November-1989 00:00:01 GMT";
    }

    function popunder() {

        if (Get_Cookie('vinplay') == null) {
            Set_Cookie('vinplay', 'vinplay Popunder', '1', '/', '', '');
            modal.style.display = "block";
        }

    }
</script>
