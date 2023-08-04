<?php
    $cari = $_POST['cari'];

    $makanan = [];
    $minuman = [];
    switch($cari){
        case 'Menu' :
            $arr = array();
            $request_body = file_get_contents('http://tes-web.landa.id/intermediate/menu');
            $data = json_encode($request_body, true);
            echo json_decode($data);
        break;
        case 'Data' :
            $tahun = $_POST['tahun'];
            $request_body = file_get_contents('http://tes-web.landa.id/intermediate/transaksi?tahun='.$tahun);
            $data = json_decode($request_body, true);
            echo json_encode($data);            
            break;
    }
    
    
?>
