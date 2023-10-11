<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khoa</title>
</head>
<body>
    <?php 
        // truy xuất dữ liệu từ cơ sở dữ liệu
        // 1. Kết nối đến máy chủ csdl(mysqli)
        $connect = new mysqli('localhost', 'root', '', 'K22CNT4_day09');
        // 2. Tạo truy vấn đọc dữ liệu từ bảng
        $sql = "SELECT * FROM KHOA WHERE 1=1";
        // 3. Thực thi câu lệnh truy vấn ($mysqli->query) => Trả về 1 tập kết quả
        $resultSet = $connect->query($sql);
        // print_r($resultSet);
        // 4. Duyệt dữ liệu trong tập kết quả => Hiển thị(fetch)
        // while($row = $resultSet->fetch_array()) {
        //     echo "<p>".$row[0] . "===" .$row["TENKH"];
        // }
    ?>
    <h1>DANH SÁCH KHOA</h1>
    <hr>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <td>STT</td>
                <td>Mã khoa</td>
                <td>Tên khoa</td>
                <td>Trạng thái</td>
            </tr>
        </thead>
        <tbody>
        <?php 
            $stt = 0;
            while($row = $resultSet->fetch_array()) {
                $stt++;
        ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $row["MAKH"]; ?></td>
            <td><?php echo $row["TENKH"]; ?></td>
            <td><?php echo $row["TRANGTHAI"]; ?></td>
        </tr>
        <?php 
            }
        ?>
        </tbody>
    </table>
</body>
</html>