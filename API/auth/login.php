<?php require_once('./user.php') ?>
<?php



header('Acces-Control-Allow-Origin: *');
header('Acces-Control-Allow-Methods: POST');
header('Acces-Control-Allow-Headers: *');
header('Content-type: application/json; charset=UTF-8');



$data = json_decode(file_get_contents('php://input'));


$username = '';
$password = '';

if(isset($data)){
    $username = $data -> username;
    $password = $data -> password;
}
//comprueba si el login es correcto y si es asi inicia sesion
http_response_code(200);
if($username && $password){
    $user = new User();
    $json = $user->login($username, $password);

    if($json){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['loged'] = true;
        echo $json;
    }else{
        http_response_code(400);
        echo json_encode([
            'error'=>true,
            'message'=>'Usuario o contraseña incorrecta.'
        ]);
    }
}else{
    echo json_encode([
        'error'=>true,
        'message'=>'Falta información'
    ]);
}

?>