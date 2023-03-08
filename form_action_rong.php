<form action="" method="get">
    <!--tên ,tuổi ,địa chỉ ,có bao nhiêu người yêu cũ 
 khi action để tronosng 
-->
    <input placeholder="Họ tên"
    name="ho_ten">
    <input type="number"
    placeholder="tuổi"
    name="tuoi"
    >
    <input 
    placeholder="địa chỉ"
    name="dia_chi"
    >
    <input type="number"
    placeholder="số người yêu cũ"
    name="nyc"
    >
    <button type="submit">gửi khảo sát </button>
</form>
<?php
var_dump($_GET);///dữ liệu gửi bằng method get sẽ đẩy vào biến $_getfu
function checkData($data,$default='chưa nhập '){
    return isset($data)?$data:$default;
}
?>

<!-- nhận kết quả khảo sát và hiện thị ra  -->
<?php if(count($_GET)!=0){?>
<p>Họ tên:
    <?php echo isset($_GET['ho_ten']) ? $_GET['ho_ten']:'chưa nhập'?>
</p>

 <p>tuổi:<? checkDate($_GET['tuoi'])?></p>
 <p>địa chỉ <? checkDate($_GET['dia_chi'])?></p>
 <p>số người yêu cũ :<? checkDate($_GET['nyc'])?></p>
 <?php } ?>