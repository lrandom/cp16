<?php
if (isset($_POST['action'])) {
    //super global variables
    header('Content-Type:application/json');
    echo json_encode(
        [
            array(
                'name' => "Nguyen Tat Thang"
            ),
            array(
                'name' => 'Tran Thanh Binh'
            )
        ]
    );//biến một mảng thành json
}
?>