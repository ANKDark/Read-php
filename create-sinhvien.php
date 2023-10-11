<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới thông tin sinh viên</title>
</head>
<body>
    <?php 
        // Xử lý khi người dùng nhấn nút thêm mới
        /* 
            1. Kết nối
            2. Lấy dữ liệu từ form
            3. Tạo câu lệnh truy vấn thêm mới (INSERT)
            4. Thực thi câu lệnh truy vấn
            5. Thông báo / hiển thị danh sách
        */
        $error = '';
        if(isset($_POST['btnTMDThemmoi'])) {
            // 1. Kết nối
            $connect = new mysqli('localhost', 'root', '', 'K22CNT4_day09');
            
            // 2. Lấy dữ liệu từ form
            $MASV = $_POST['MASV'];
            $HOTEN = $_POST['HOTEN'];
            $TEN = $_POST['TEN'];
            $NGSINH = $_POST['NGSINH'];
            $GT = $_POST['GT'];
            $DIACHI = $_POST['DIACHI'];
            $DT = $_POST['DT'];
            $EMAIL = $_POST['EMAIL'];
            $TRANGTHAI = $_POST['TRANGTHAI'];
            $MAKH = $_POST['MAKH'];
            
            // 3. Tạo câu lệnh truy vấn thêm mới (INSERT)
            $sql = "INSERT INTO SINHVIEN (MASV, HOTEN, TEN,NGSINH, GT, DIACHI, DT, EMAIL, TRANGTHAI, MAKH) VALUES ('$MASV', '$HOTEN', '$TEN', '$NGSINH', '$GT', '$DIACHI', '$DT', '$EMAIL', '$TRANGTHAI', '$MAKH')";
            // echo $sql;
            // die();
            if ($connect->query($sql)) {
                header("Location: read-sinhvien.php");
                exit();
            } else {
                $error = "Lỗi thêm mới, " . $connect->error;
            }
        }
    ?>
<form action="" name="frm" method="post">
    <h1>Thêm mới thông tin sinh vien</h1>
    <table border="1px" width="80%" align="center">
        <tbody>
            <tr>
                <td>Mã sinh viên</td>
                <td><input type="text" name="MASV"></td>
            </tr>
            <tr>
                <td>Họ tên</td>
                <td><input type="text" name="HOTEN"></td>
            </tr>
            <tr>
                <td>Tên</td>
                <td><input type="text" name="TEN"></td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="text" name="NGSINH"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td><input type="text" name="GT"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="DIACHI"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="text" name="DT"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="EMAIL"></td>
            </tr>
            <tr>
                <td>Trạng thái</td>
                <td>
                    <select name="TRANGTHAI" id="TRANGTHAI">
                        <option value="1">Hoạt động</option>
                        <option value="2">Tạm dừng</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Mã khoa</td>
                <td><input type="text" name="MAKH"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Thêm mới" name="btnTMDThemmoi">
                </td>
            </tr>
        </tbody>
    </table>
    <div><?php echo $error; ?></div>
    <a href="read-sinhvien.php">Danh sách sinh viên</a>
</form>
</body>
</html>