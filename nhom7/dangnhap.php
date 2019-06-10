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
        <div id="dang"><a href="dangky.php">Đăng ký</a></div>   
    </div>
    <div class="backgroup_dn">
    	<form>
        	<table cellpadding="0px" cellspacing="0px" style="color:#F00; font-size:24px; padding-top:180px; padding-left:80px">
            	<tr>
                	<td>Email:</td>
                    <td><input width="100px" type="text" name="email"></td>
                </tr>
                <tr>
                	<td>Password</td>
                    <td><input width="100px" height="30px" type="password" name="pass"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="ok" value="đăng nhập"></td>
                </tr>
            </table>
        </form>
    </div>
    	<?php 
			include('connect.php');
			if(isset($_POST['ok']))
					{$email=$_POST['email'];
						$pass=$_POST['pass'];
				$query="select * from dangky where email='$email' and pass='$mk'";
				$result=mysqli_query($conn,$query);
				$count=mysqli_num_rows($result);
				if($count);
			header("location:index.php");
			 echo "Thanh cong"; }
			else{echo "<p>dang nhap khong thanh cong</p>";}
		?>
    <marquee direction="left" style="font-size:36px; font-family:Tahoma, Geneva, sans-serif;">Chúng tôi cam kết giầy chuẩn ISO 9001-2008</marquee>
    <div class="ket">
    	<table  cellpadding="0px" cellspacing="0px">
        	<tr>
            	<td><span>Hỗ trợ</span><br>
                	<pre>cứu giúp</pre><br>
                   <pre> trả lại và hoàn tiền</pre><br></td>
                <td><span>Thông tin công ty</span><br>
                	<pre>về chúng tôi</pre><br>
                    <pre>Nghề nghiệp</pre><br>
                </td>
                <td><span>Riêng tư & điều khoản</span><br>
                	<pre>Quyền riêng tư và bảo mật</pre><br>
                   <pre> Các điều khoản và điều kiện khác</pre><br>
                </td>
                <td><span>Quà tặng</span><br>
                	<pre>Kiểm tra số dư</pre><br>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>