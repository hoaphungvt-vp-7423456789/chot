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