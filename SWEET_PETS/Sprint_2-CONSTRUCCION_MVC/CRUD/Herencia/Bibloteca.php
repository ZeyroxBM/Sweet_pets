<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Herencia</title>
</head>
<body>

    <div class="div">
    <?php

    class Bibloteca
    {
        private $Libro;
        private $revista;
    }

    class Libro extends Bibloteca {

        //private $editorial;


        function __construct($Libro,$editorial)
        {
            $this->Libro=$Libro;
            $this->editorial=$editorial;
        }

        function setLibro($Libro){
            $this->Libro = $Libro;
        }

        function getLibro(){
            print $this->Libro;
        }

        function setEditorial($editorial){
            $this->editorial = $editorial;
        }

        function getEditorial(){
            print $this->editorial;
        }

        function mensaje()
        {
           echo "Nombre del Libro: {$this->Libro}. <br><br> Editorial: {$this->editorial}";
        }
        
    }   


    class Revista extends Bibloteca{
        
        //private $editorial;


        function __construct($revista,$categoria)
        {
            $this->revista=$revista;
            $this->categoria=$categoria;
        }

        function setRevista($revista){
            $this->revista = $revista;
        }

        function getRevista(){
            print $this->revista;
        }

        function setcategoria($categoria){
            $this->categoria = $categoria;
        }

        function getcategoria(){
            print $this->categoria;
        }


        function mes()
        {
           echo "<br><br>Nombre de la Revista: {$this->revista}. <br><br> Categoria: {$this->categoria}";
        }
    }
    


    $obj = new Libro("Aventuras","Luz");
    //$obj->setLibro("Hunky");
    $obj->mensaje();
    //$obj->setEditorial("Carlos");  



    $obj = new Revista("Tommy y Jerry","Carlos");
    $obj->mes();
    ?>
    </div>
</body>
</html>