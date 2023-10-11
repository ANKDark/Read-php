<body>
    <?php 
        $connect = new mysqli('localhost', 'root', '', 'K22CNT4_day09');
        $sql = "SELECT * FROM SINHVIEN WHERE 1=1";
        $result_TMD = $connect->query($sql);
    ?>
    <h1>DANH SÁCH SINH VIÊN</h1>
    <hr>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>Mã sinh sinh</th>
                <th>Họ tên</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Mã khoa</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $stt = 0;
            if($result_TMD->num_rows) {
                while($row = $result_TMD->fetch_array()) {
                    $stt++;
        ?>
        <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $row["MASV"]; ?></td>
            <td><?php echo $row["HOTEN"]; ?></td>
            <td><?php echo $row["TEN"]; ?></td>
            <td><?php echo $row["NGSINH"]; ?></td>
            <td><?php echo $row["GT"]; ?></td>
            <td><?php echo $row["DIACHI"]; ?></td>
            <td><?php echo $row["DT"]; ?></td>
            <td><?php echo $row["EMAIL"]; ?></td>
            <td><?php echo $row["TRANGTHAI"]; ?></td>
            <td><?php echo $row["MAKH"]; ?></td>
        </tr>
        <?php 
            }
        }else {
        ?>
        <tr>
            <td colspan="10">Chua co sinh vien nao</td>
        </tr>
        <?php 
        }
        ?>
        </tbody>
    </table>
</body>
</html>