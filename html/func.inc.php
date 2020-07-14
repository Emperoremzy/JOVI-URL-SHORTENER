<?php



function is_min($url){
   
    return(preg_match("/jovi\.bz/i",$url))? true :false;
}
function gen_code(){

    $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        return substr(str_shuffle($charset), 0, 6);

}
function code_exists($conn, $code){
    $code = mysqli_real_escape_string($conn ,$code);
    $query= "SELECT url_link, code FROM url where code = '$code'";
    $code_exists= mysqli_query($conn, $query);
    
    if(mysqli_num_rows($code_exists)) {
            return true;
    }else{
        return false;
    }
      

   
}

function shorten($conn, $url, $code){
    
    $url = mysqli_real_escape_string($conn, $url);
    $code = mysqli_real_escape_string($conn, $code);
    $ins_q =mysqli_query($conn, "INSERT into url (url_link , code) VALUES ('$url','$code')");
    if($ins_q){
       
    }else{
        echo mysqli_error($conn);
    }
  return $code; 
}
?>