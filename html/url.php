<?php
include 'db.inc.php';
include 'func.inc.php';

if(isset($_POST['url'])){
 $url = trim($_POST['url']);
    if(empty($url)){
        echo 'NO URL SPECIFID';

        }else if(filter_var($url, FILTER_VALIDATE_URL) === false){
            echo 'INVALID URL';
        }else if(is_min($url)){
            echo 'already a jovi url ';
    }else{
        $code = gen_code();
        if(!code_exists($conn, $code )){
            $code_gen =shorten($conn, $url, $code);
        echo 'http://jovi.bz/'.$code_gen ;
        
        }else{
            echo "code already exist";
        }
    }
}
?>