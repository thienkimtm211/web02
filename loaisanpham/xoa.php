<form id="frmXoa" name="frmXoa" method="post" action="/web02/loaisanpham/xoa.php">
    Nhập id cần xóa: <input id="txtId" name="txtXoa" type="text" />
    <input type="submit" id="btnXoa" name="btnXoa" value="Xóa" />
</form>
<?php
if(isset($_POST['btnXoa'])) {
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'salomon') or die('Thông tin kết nối đến server không đúng!');

    $id = $_POST['txtXoa'];
    $sql = "DELETE FROM `loaisanpham` WHERE lsp_ma = $id";

    mysqli_query($conn, $sql);
    echo 'Xóa thành công';
}
?>
