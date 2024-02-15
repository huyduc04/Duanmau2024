<div class="row mb">
    <div class="boxtrai mr">
        <?php extract($onesp); ?>
        <div class="row mb spct ">
            <div class="boxtitle">
                <?php echo $name; ?>
            </div>
            <div class=" row boxcontent">
                <?php
                $img = $img_path . $img;
                echo "<img src='$img' width='300'>";
                echo "<p>$mota</p>";
                ?>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>,
                });
            });
        </script>
        <div class="row" id="binhluan">

        </div>

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class=" row boxcontent">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) :
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>