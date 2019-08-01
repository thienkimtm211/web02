<?php
    require_once __DIR__ . '/../dbconnect.php';

    $sql = "SELECT * FROM `loaisanpham`;";
    $result = mysqli_query($conn, $sql);

    $data = [];
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = array(
        'lsp_ma' => $row['lsp_ma'],
        'lsp_ten' => $row['lsp_ten'],
        'lsp_mota' => $row['lsp_mota'],
    );
}
//print_r($data);die;
?>
<style>
.rowchan {
    background: red;
}
</style>
<table border="1">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Mô tả</th>
        <th>Chức năng</th>
    </tr>
    <?php 
        $bienDem = 1;
    ?>
    <?php foreach($data as $row) : ?>
    <tr class="<?php echo ($bienDem % 2 == 0 ? 'rowchan' : '')?>">
        <td><?php echo $row['lsp_ma']; ?></td>
        <td><?= $row['lsp_ten']; ?></td>
        <td><?= $row['lsp_mota']; ?></td>
        <!-- Truyền dữ liệu GET trên URL, theo dạng ?KEY1=VALUE1&KEY2=VALUE2 -->
        <td><a href="/web02/loaisanpham/sua.php?khoachinh=<?= $row['lsp_ma'];?>&khoabimat=1234">Sửa</a></td>
    </tr>
<?php $bienDem++ ;?>
<?php endforeach; ?>
</table>