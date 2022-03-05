<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h3>Salidas de texto PHP</h3>
    <?php
        // Salidas de texto

        echo "Hola mundo<br>";
        
        print_r("hola mundo<br>");
        
        print("hola mundo<br>");
    ?>

    <h3>Tipos de variables</h3>
    <?php
        // normales

        $variable = "valor";

        echo $variable;

        echo "<br>";
        // constantes

        define ("CONSTANTE","valor");

        echo CONSTANTE;
    ?>

    <h3>Metodo POST</h3>
    <form action="index.php" method="post">
        <label for="txtnombre">Nombre:</label>
        <input type="text" name="txtNombre" id="" placeholder="nombre">
        <input type="submit" value="Enviar">
    </form>
    <?php
        // Metodo POST para recoleccion de datos
        // Oculta los datos

        if ($_POST) {
            $nombre = $_POST["txtNombre"];
            echo "hola ".$nombre;
        }
    ?>

    <h3>Metodo GET</h3>
    <form action="index.php" method="get">
        <label for="edad">Nombre:</label>
        <input type="number" name="edad" id="" placeholder="edad">
        <input type="submit" value="Enviar">
    </form>
    <?php
        // Metodo POST para recoleccion de datos
        // Muestra los datos en la URL

        if ($_GET) {
            $edad = $_GET["edad"];
            echo "Tienes ".$edad." años";
        }
    ?>

    <h3>Funciones PHP</h3>
    <?php
        function nombreFuncion ($variable) {
            echo "ejemplo de funcion";
        }

        nombreFuncion($variable);
    ?>

    <h3>Arrays</h3>
    <?php
        // arrays normales
        $arreglo = array("hola", "hola2", "hola3");

        print_r($arreglo);

        echo "<br>";
        // arrays asociativos
        $arreglo = array("a"=>"hola", "h"=>"hola2", "random"=>"hola3");

        print_r($arreglo);
    ?>

    <h3>Clases PHP</h3>
    <?php
        class objeto {
            public $variable1;
            private $variable2; // solo uso interno
            protected $variableX; // solo uso interno y en clases heredadas

            public function __construct($variable1 = 0, $variable2 = 0, $variableX = 0) {
                $this -> variable1 = $variable1;
                $this -> variable2 = $variable2;
                $this -> variableX = $variableX;
            }

            public function objetoFuncion ($nuevoValor) {
                $this -> variable1 = $nuevoValor;
            }

            public static function staticFunction () {
                echo "funcion estatica";
            }
        }

        $objeto1 = new objeto("gol", "boca", "jet");
        $objeto1 = new objeto(); //cuando se pone = valor a un argumento de una funcion, lo hace opcional y el valor lo remplaza en caso de no estar
        $objeto1 -> objetoFuncion ("valorObjeto");

        objeto::staticFunction();
        echo "<br>";
        echo $objeto1 -> variable1;
    ?>

    <h3>Herencia PHP</h3>
    <?php
        class objetoHerencia extends objeto {
            public $variable3 = "jeyou";

            private function objetoHerenciaFuncion ($nuevoValor) {
                return 0;
            }
        }

        $Herencia = new objetoHerencia();
        echo $Herencia -> variable3;
    ?>
</body>
</html>