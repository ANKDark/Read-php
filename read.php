<?php 
    // 1. Kết nối đến máy chủ csdl(mysqli)

    // 2. Tạo truy vấn đọc dữ liệu từ bảng

    // 3. Thực thi câu lệnh truy vấn ($mysqli->query) => Trả về 1 tập kết quả

    // 4. Duyệt dữ liệu trong tập kết quả => Hiển thị(fetch)

    //================== Thực hiện

        // 1. Kết nối đến máy chủ csdl(mysqli)
        $connect = new mysqli('localhost', 'root', '', 'K22CNT4_day09');
        // 2. Tạo truy vấn đọc dữ liệu từ bảng
        $sql = "SELECT * FROM KHOA WHERE 1=1";
        // 3. Thực thi câu lệnh truy vấn ($mysqli->query) => Trả về 1 tập kết quả
        $resultSet = $connect->query($sql);
        // print_r($resultSet);
        // 4. Duyệt dữ liệu trong tập kết quả => Hiển thị(fetch)
        while($row = $resultSet->fetch_array()) {
            echo "<p>".$row[0] . "===" .$row["TENKH"];
        }

?>