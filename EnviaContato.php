<?php

/* 
 * @author Thyago Henrique Pacher - thyago.pacher@gmail.com
 */
$pasta          = 'arquivos';
$name           = $pasta.'/arquivo'.date("YmdHis").'.xml';
$chaveGoogle    = '';

if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}
 
/**criando o arquivo xml*/
$text = "<?xml version='1.0' encoding='UTF-8'?>";
$text .= "<moduledata>";
$text .= "<entity tablename='Ent' formatname='faleconosco'>";
$text .= "<SigaFiles Text='SQG'>";
$text .= "<Dados>";
$variables = (strtolower($_SERVER['REQUEST_METHOD']) == 'GET') ? $_GET : $_POST;
foreach($variables as $key => $value){
    if(isset($_POST[$key]) && $_POST[$key] != NULL && $_POST[$key] != ""){
        $text .= "<attribute domainname='{$key}'><![CDATA[{$_POST[$key]}]]></attribute>";
    }    
}   

$text .= "</Dados>";
$text .= "</SigaFiles>";
$text .= "</entity>";
$text .= "</moduledata>";
$file  = fopen($name, 'a');
fwrite($file, $text);
fclose($file);

/**fazendo upload do arquivo*/
if(isset($_FILES["arquivo"]) && $_FILES["arquivo"] != NULL && $_FILES["arquivo"] != ""){
    include "Upload.php";
    $upload = new Upload();
    $upload->pasta = $pasta;
    $upload->upload($_FILES["arquivo"]);
}

$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$chaveGoogle}&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
$resposta = json_decode($resposta);

if ($resposta->success) {
    die(json_encode(array('mensagem' => "Contato enviado com sucesso!", 'situacao' => true)));
}else{
    die(json_encode(array('mensagem' => "Usuário mal intencionado detectado. A mensagem não foi enviada.!", 'situacao' => false)));
}