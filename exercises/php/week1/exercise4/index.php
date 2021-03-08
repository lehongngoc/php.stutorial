<!DOCTYPE html>
<html>
<head>
	<title>exercise1</title>
</head>
<body>
<?php
	$Mã_sản_phẩm="EV2009";
	$Tên_sảm_phẩm="Tấm hợp kim nhôm ngoài trời EV2009";
	$Số_lượng="500";
	$Đơn_giá="160000";
	$VAT="0.05";
	echo ("Mã_sản_phẩm:".($Mã_sản_phẩm)."<br/>");
	echo ("Tên_sảm_phẩm:".($Tên_sảm_phẩm)."<br/>");
	echo ("Số_lượng:".($Số_lượng)."<br/>");
	echo ("Đơn_giá:".($Đơn_giá)."<br/>");
	echo ("Thông tin sản phẩm trước khi trừ thuế VAT=".($Số_lượng*$Đơn_giá)."<br/>");
	echo ("Thông tin sản phẩm sau khi trừ thuế VAT=".(($Số_lượng*$Đơn_giá)*$VAT)."<br/>");
?>
</body>
</html>