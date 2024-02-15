<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <H1>Cập nhật LOẠI HÀNG HÓA</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" id="" disabled>
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai" value="<?=$name?>" required>
            </div>
            <div class="row mb20">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"> <input type="button" value="Danh sách"></a>
            </div>
            <?php
            if(isset($thongbao)){
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>    