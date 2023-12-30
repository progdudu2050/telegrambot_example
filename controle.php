<?php 
//Made by dudu2050
//Verifica se o arquivo de configuração existe. Se não existir você terá qeu cria-lo baseado no config_example
if(@!file_exists(__DIR__."/config.php")){
    echo "Crie o arquivo config.php";
    exit;
}

require __DIR__."/config.php";
//Forma a url
$url = "https://api.telegram.org/bot".$bot_token."/";
// Adiciona o parametro de updates
$url_updates = $url."getUpdates";

// Faz o request
$updates_request = file_get_contents($url_updates);
//Caso o request traga um JSON valido
if(@json_decode($updates_request, 1)){
    //Joga numa variavel
    $updates = json_decode($updates_request, 1);
    // Caso a api tenha retornado ok
    if($updates["ok"] == true){
        // Traz o resultado para variavel
        $resultWork = $updates["result"];
        // Trabalhe aqui com o resultado num loop
        var_dump($resultWork);
    }
}