<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        HEADER
    </header>
    <main>
        <!-- 
            NAME trong input là để làm key lấy đi
            action ở form là nơi tiếp nhận dữ liệu
            khi action để trống thì chính là file
         -->
        <form action="tnyc_form.php" method="get">
            <input type="text"
            placeholder="Username "
            name="name"
            >
            <input type="password"
            placeholder="password"
            name="pwd"
            >
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        FOOTER
    </footer>
</body>
</html>
<!-- tạo 1 form gồm các thông tin  -->
<!-- 
    -họ tên
    -Email
    -ngày sinh
    -Lựa chọn giới tính bằng select
    -radio chọn trạng thái (kích hoạt/không kích hoạt)
 -->