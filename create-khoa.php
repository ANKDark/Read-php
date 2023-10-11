<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới thông tin khoa</title>
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
            $MAKH = $_POST['MAKH'];
            $TENKH = $_POST['TENKH'];
            $TRANGTHAI = $_POST['TRANGTHAI'];
            
            // 3. Tạo câu lệnh truy vấn thêm mới (INSERT)
            $sql = "INSERT INTO KHOA (MAKH, TENKH, TRANGTHAI) VALUES ('$MAKH', '$TENKH', '$TRANGTHAI')";
            // echo $sql;
            // die();
            if ($connect->query($sql)) {
                header("Location: read-khoa.php");
                exit();
            } else {
                $error = "Lỗi thêm mới, " . $connect->error;
            }
        }
    ?>
    <form action="" name="frm" method="post">
        <h1>Thêm mới thông tin khoa</h1>
        <table border="1px" width="80%" align="center">
            <tbody>
                <tr>
                    <td>Mã khoa</td>
                    <td><input type="text" name="MAKH"></td>
                </tr>
                <tr>
                    <td>Tên khoa</td>
                    <td><input type="text" name="TENKH"></td>
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
                    <td></td>
                    <td>
                        <input type="submit" value="Thêm mới" name="btnTMDThemmoi">
                    </td>
                </tr>
            </tbody>
        </table>
        <div><?php echo $error; ?></div>
        <a href="read-khoa.php">Danh sách khoa</a>
    </form>
</body>
</html>