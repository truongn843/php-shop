<div class="l-sidebar">
	<h2>danh mục sản phẩm</h2>
	<ul id="main-menu">
    <?php
        include_once('./cauhinh/ketnoi.php');
        $sql = "SELECT * FROM dmsanpham";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
    ?>
    	<li><a href="index.php?page_layout=danhsachsp&id_dm=<?php echo $row['id_dm'] ?>&ten_dm=<?php echo $row['ten_dm'] ?>"><?php echo $row['ten_dm'] ?></a></li>
    <?php
        }
    ?>
    </ul>
</div>