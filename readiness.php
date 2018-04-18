<?php
$filename = '/tmp/readiness';

if (file_exists($filename)) {
    header("HTTP/1.1 500 Internal Server Error");
} else {
    echo "Ok";
}
?>
Você pode criar os dois arquivos pela console do github conforme já fizemos em outros labs.
O resultado final do repositório deve estar conforme imagem abaixo:
