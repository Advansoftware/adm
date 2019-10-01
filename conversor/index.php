<html>
<title>Convertendo de doc para pdf</title>
<style>
body{
    background-color: black;
    color: darkgreen;
}
</style>
<body>
<?php
$pasta = 'pdf/';
$pdf = glob("$pasta{*.pdf}", GLOB_BRACE);
$doc = glob("*.doc", GLOB_BRACE);
if(isset($_GET['caminho'])) $caminho = $_GET['caminho'] ;
else $caminho = null;
header("Refresh: 2");
if(count($doc) > 0){
    echo "Convertendo arquivos para pdf";
    exec("Conversor doc para pdf.exe");
}
else if(count($pdf) > 0){
    echo "Movendo arquivos para pasta correta";
    foreach($pdf as $img){
       $imagem = explode("/", $img);
        $destino = $caminho.$imagem[1];
        copy($img, $destino);
        unlink($img);
        echo "Ações concluidas";
        echo "<script>window.close()</script>";
    }

}
else{
    echo "Espereando Arquivos...";
}
?>
</body>
</html>
