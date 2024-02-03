<?php
    //GASのウェブアプリURL
    $gas = 'URL';
?>
<?php //GET
	$get_op = array(
        'http' => array(
            'method'=> 'GET',
            'header'=> 'Content-type: application/json; charset=UTF-8'
        )
    );
    $get_context = stream_context_create($get_op);
    $get_raw_data = file_get_contents($gas, false,$get_context);
    $get_data = json_decode($get_raw_data,true);
?>
<?php //POST
	$post_op = array(
        'http' => array(
            'method'=> 'POST',
            'header'=> 'Content-type: application/json; charset=UTF-8',
            'content' => '{"test":"テスト"}'
        )
    );
    $post_context = stream_context_create($post_op);
    $post_contents = file_get_contents($gas, false,$post_context);
    echo $post_contents;
?>