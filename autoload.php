<?php
spl_autoload_register(function ($class){
    $base_dir = __DIR__.'/';
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    if(file_exists($file)){
        require_once $file;
    }
});

/******************************************************************************************************************
* Linha 02: Essa função, que é padrão do PHP, é executada toda vez eu uma classe é instanciada na aplicação,      *
* sem que seja necessário importá-la manualmente;                                                                 *
*                                                                                                                 *
* Linha 03: Obtemos o diretório do arquivo, que aqui é o diretório raiz da aplicação;                             *
*                                                                                                                 *
* Linha 04: Geramos o nome do arquivo a ser importado, que deve ser o nome da classe com extensão .php;           *
*                                                                                                                 *
* Linha 06: Verificamos se existe o arquivo antes de efetuar sua inclusão;                                        *
*                                                                                                                 *
* Linha 07: Incluímos o arquivo solicitado, que no nosso caso será o caminho completo de uma classe instanciada.  *
* Exemplo: C:\xampp\htdocs\autoload\App\Controllers\VendaController.php.                                          *
*                                                                                                                 *
* Agora basta incluir o arquivo autoload.php uma vez na aplicação. Nesse caso, isso deve ser feito no index.php,  *
* que é o primeiro arquivo executado:                                                                             *
******************************************************************************************************************/