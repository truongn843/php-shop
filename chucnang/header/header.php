<link rel="stylesheet" type="text/css" href="chucnang/header/header.css" />
<div id="page-header">
    <div id="contact-bar">
        Hotline Mua Hàng: 0973 285 886 | Hotline CSKH: 1900 886 803 - Ext 1 | Email CSKH: web@360boutique.vn
    </div>
    <div id="header-content">
        <a href="index.php"><img src="anh/hcmut.png" alt="" id="header-logo"/></a>
        <form method="post" name="sform" action="index.php?page_layout=danhsachtimkiem" id="header-search">
            <input type="text" name="stext" placeholder="Tìm kiếm sản phẩm..."/>
            <input type="submit" name="sbutton" value="" />
        </form>
        <a href="#">
            <img src="anh/user-icon.png" alt="" id="header-user"/>
        </a>
        <a href="index.php?page_layout=giohang">
            <img src="anh/shopping-bag.png" alt="" id="header-shopping-bag"/>
            <span id="header-num-items">
            <?php
                if(isset($_SESSION['giohang'])){
                    echo count($_SESSION['giohang']);
                }else{
                    echo 0;
                }
            ?>
            </span>
        </a>
    </div>
</div>