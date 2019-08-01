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
<table border="1">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Mô tả</th>
    </tr>
    <?php foreach($data as $row) : ?>
    <tr>
        <td><?php echo $row['lsp_ma']; ?></td>
        <td><?= $row['lsp_ten']; ?></td>
        <td><?= $row['lsp_mota']; ?></td>
    </tr>
<?php endforeach; ?>
</table>