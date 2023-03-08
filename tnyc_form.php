<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="npm i bootstrap@5.2.2">
</head>
<body>
    <div class="container">
    <form action="tnyc_form.php" method="get">
        họ tên <input type="text"name="full_name" placeholder="username"> <br>
        <br>
        email <input type="email" name="email" placeholder="email"> <br>
        <br>
        ngày sinh<input type="date" name="birthday " placeholder="ngày sinh"><br>
        <br>
        giới tính
        <select name="gender" id=""> 
          <option value="1">nam </option>
          <option value="2">nữ</option>
        </select> <br>
        <br>
        trạng thái <br>
        kích hoạt<input type="radio" value="1" ><br>
        không kích hoạt<input type="radio" value="0" ><br>
        <button type="submit">gửi</button>
    </form>
    </div>
</body>
</html>
<?php
//file này nó chạy vào khi nó là action của 1 file 
// có phương thức quy định trong form  để file này nhận dữ liệu người dùng nhập


// Phương thức GET
// $_GET là 1 biến toàn cục , lưu trũ dữ liệu người dung gửi lên 
// là 1 mảng [
            // key là thuộc  tính name
            // value là giá trị người dùng nhập
//           ]
// chỉ cần là gõ đường dẫn vào file sau đó enter cũng là method GET


echo'<pre>';
var_dump($_GET);
var_dump(isset($_GET['full_name']));
// bước 2:nếu trả về true thì mới dữ liệu ra 




// hàm kiểm tra dữ liệu 
// default nếu ko truyền vào thì dùng 'chưa nhập '
function checkData($data,$default='chưa nhập'){
    if(isset($data)){
        return $data;
    }
    return $default;
    // return isset($data)>$data:$defaul;t 
}
?>
<h1>Thông tin người dùng </h1>
<p>Username:<?php echo(isset($_GET['full_name'])
    ?$_GET['full_name']
    :'chưa nhập '
    )
    ?></p>
<p>email <?= checkData($_GET['email']) ?></p>
<p>ngày sinh  <?= checkData($_GET['birthday ']) ?></p>
<p>giới tính  <?= checkData($_GET['gender']) ?></p>
