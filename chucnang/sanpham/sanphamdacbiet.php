<div class="prd-block">
    <h2>sản phẩm mới về</h2>
    <div class="pr-list">
    <?php
        include_once('./cauhinh/ketnoi.php');
        $sql = "SELECT * FROM sanpham WHERE dac_biet = 1 ORDER BY id_sp DESC LIMIT 0,6";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
    ?>
        <div class="prd-item">
            <a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp'] ?>"><img width="80" height="144" src="quantri/anh/<?php echo $row['anh_sp'] ?>" /></a>
            <h3><a href="index.php?page_layout=chitietsp&id_sp=<?php echo $row['id_sp'] ?>"><?php echo $row['ten_sp'] ?></a></h3>
            <p>Bảo hành: <?php echo $row['bao_hanh'] ?></p>
            <p>Tình trạng: <?php echo $row['tinh_trang'] ?></p>
            <p class="price"><span>Giá: <?php echo $row['gia_sp'] ?> VNĐ</span></p>
        </div>
    <?php
        }
    ?>
        <div class="clear"></div>
    </div>
</div>