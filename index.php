<html>
<head>
    <title>Mini Projeto!</title>
</head>
<body>
    <div >
        <?php
            echo "<body style='background-color:gray'>";
            include_once("topo.php");
            include_once("menu.php");

            if(empty($_SERVER["QUERY_STRING"])){
                $var = "conteudo.php";
                include_once("$var");
            }else{
                $pg = $_GET['pg'];
                include_once("$pg.php");
            }

            include_once("rodape.php");
        ?>
    </div>
</body>
</html>