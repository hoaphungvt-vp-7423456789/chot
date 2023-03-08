<a href="test-form.php"><button>back</button></a>
<form action="" method="post">
    <input 
    placeholder="Tên sản phẩm "
    name="name">
    <input type="number"
    placeholder="giá sản phẩm  "
    name="price">
    <input 
    placeholder="mô tả  "
    name="mo_ta">
    <input type="number"
    placeholder="số lượng tồn kho "
    name="so_luong">
    <button type="submit">Gửi</button>
</form>

<?php
//dữ liệu gửi bằng method get sẽ đẩy vào biến #_GET 
var_dump($_POST);
function checkData($data, $default = 'Chưa nhập')
{
    if (!isset($data) || $data === '') {
        return $default;
    }
    return $data;
    //return isset($data) ? $data : $default;
}


?>
<?php
if (count($_POST) != 0) { ?>

    <!-- NHẬN KQ KHẢO SÁT VÀ HIỂN THỊ -->
    <p>Tên sản phẩm: <?= isset($_POST['name']) ? $_POST['name'] : 'Chưa nhập' ?></p>
    <p>Giá sản phẩm: <?= checkData($_POST['price']) ?></p>
    <p>Mô tả: <?= checkData($_POST['mo_ta']) ?></p>
    <p>Số lượng tồn kho: <?= checkData($_POST['so_luong']) ?></p>

<?php } ?>

