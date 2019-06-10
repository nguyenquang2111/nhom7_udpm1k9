<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="dinhdang.css">
</head>

<body>
<div class="tong">
	<div class="logo">
    	<div id="logo1"><a href="index.php"><img width="123" height="100" src="adidas/logo.jpg"></a></div>
        <div id="menu">
        	<ul>
            	<li><a href="cuahangnam.php">Cửa hàng nam</a></li>
                <li><a href="cuahangnu.php">Cửa hàng nữ</a></li>
                <li><a href="#">Thể loại</a>
                	<ul class="sup_menu">
                    	<li><a href="#">sneaker</a></li>
                        <li><a href="#">đá bóng</a></li> 
                    </ul>
                </li>
            </ul>
        </div> 
        <div id="dang"><a href="dangky.php">Đăng ký</a>|<a href="dangnhap.php">Đăng nhập</a></div>   
    </div>
    <div>
    	<div id="loc">
        	<ul>
            	<li>Thể loại
                	<ul class="sup_loc">
                    	<li><a href="#">sneaker</a></li>
                        <li><a href="#">đá bóng</a></li>
                    </ul></li>
                <li>Kích thước
                	<ul class="sup_loc">
               			<li><a href="#">S</a></li>
                        <li><a href="#">M</a></li>
                        <li><a href="#">L</a></li>
                        <li><a href="#">XL</a></li>
                        <li><a href="#">XXl</a></li>
                        <li><a href="#">XXXL</a></li>
                	</ul></li>
                <li>Giá bán
                	<ul class="sup_loc">
                        <li><a href="#">dưới 20$</a></li>
                        <li><a href="#">20$ --> 50$</a></li>
                        <li><a href="#">50$ --> 100$</a></li>
                        <li><a href="#">trên 100$</a></li>
                    </ul></li>
            </ul>
        </div>
			<?php include('connect.php');?>
			<?php
				$sql="select * from muahang";
				$thucthi=mysqli_query($conn,$sql);
				while ($row=mysqli_fetch_array($thucthi))
					{
						$id=$row['id'];
						$name=$row['name'];
						$img=$row['img'];
						$price=$row['price'];
						$amount=$row['amount'];
			?>
    			 <div style="float:left; padding-left:30px">
        			<img src="adidas/<?php echo $img;?>" alt="" width="200px" height="auto">
         			<p><b>Mã sản phẩm: <?php echo $id;?> </b></p>
         			<p><b>Tên sản phẩm: <?php echo $name;?> </b></p>
         			<p><b>Giá: <?php echo $price;?>.000đ </b></p>
        			<a href="giohang.php?Ma=<?php echo $row['id'];?>"> Mua hàng</a>
         			<a href"'#"> Chi tiết</a>
     			 </div>
        <?php }?>
</div>
</body>
</html>