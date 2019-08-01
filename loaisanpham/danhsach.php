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
print_r($data);die;
?>