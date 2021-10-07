<html>
<body>
    <script>
<p>Họ tên: <?php if(isset($_POST["name"])) { echo $_POST["name"]; } ?></p>
<p>Số Điện Thoại: <?php if(isset($_POST["phone"])) { echo $_POST["phone"]; } ?></p>
<p>Sống Tại <?php if(isset($_POST["address"])) { echo $_POST["address"]; } ?> <?php if(isset($_POST["check_css"])) { echo $_POST["check_css"]; } ?></p>
<p>url zalo <?php if(isset($_POST["ZALO"])) { echo $_POST["ZALO"]; } ?></p>
<p>url facebook<?php if(isset($_POST["facebook"])) { echo $_POST["facebook"]; } ?></p>
<p>thông tin bổ sung <?php if(isset($_POST["story"])) { echo $_POST["story"]; } ?></p>

<?php
$username = "user_tintuc"; // Khai báo username
$password = "123456";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "tintuc";      // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$title = "";
$date = "";
$description = "";
$content = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    <p>Họ tên: <?php if(isset($_POST["name"])) { echo $_POST["name"]; } ?></p>
    <p>Số Điện Thoại: <?php if(isset($_POST["phone"])) { echo $_POST["phone"]; } ?></p>
    <p>Sống Tại <?php if(isset($_POST["address"])) { echo $_POST["address"]; } ?> <?php if(isset($_POST["check_css"])) { echo $_POST["check_css"]; } ?></p>
    <p>url zalo <?php if(isset($_POST["ZALO"])) { echo $_POST["ZALO"]; } ?></p>
    <p>url facebook<?php if(isset($_POST["facebook"])) { echo $_POST["facebook"]; } ?></p>
    <p>thông tin bổ sung <?php if(isset($_POST["story"])) { echo $_POST["story"]; } ?></p>

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO tin_xahoi (title, date, description, content)
    VALUES ('$title', '$date', '$description', '$content')";

    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//Đóng database
$connect->close();
?>
</script></body>
</html>