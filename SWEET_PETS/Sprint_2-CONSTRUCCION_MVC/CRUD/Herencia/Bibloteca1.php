<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>HERENCIA CON METODOS</title>
</head>
<body>

    <section>
    <?php
include ('produccion.php');
use Bibloteca as GlobalBibloteca;

class Material{
    //ctrl + d seleccionar 
    protected $tipoMaterial;
    protected $codigo;
    protected $autor;
    protected $titulo;
    protected $año;

    function __construct($tipoMaterial,$codigo,$autor,$titulo,$año)
    {
        $this->tipoMaterial=$tipoMaterial;
        $this->codigo=$codigo;
        $this->autor=$autor;
        $this->titulo=$titulo;
        $this->año=$año;

    }

    function AltaMaterial()
    {
        print "Alta Material";
    }   

    function BajaMaterial()
    {
        print "Baja Material";
    }

    function CambiarMaterial()
    {
        print "Cambiar Material";
    }

    

    function setTipoMaterial($tipoMaterial){
        $this->tipoMaterial = $tipoMaterial;
    }

    function getTipoMaterial(){
        return $this->tipoMaterial;
    }


    function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    function getCodigo(){
        return $this->codigo;
    }


    function setAutor($autor){
        $this->autor = $autor;
    }

    function getAutor(){
        return $this->autor;
    }


    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    function getTitulo(){
        return $this->titulo;
    }


    function setAño($año){
        $this->año = $año;
    }

    function getAño(){
        return $this->año;
    }


    


    /*function mensaje()
    {
       echo "Tipo de Material: {$this->tipoMaterial}.
       <br><br> Codigo: {$this->codigo}.
       <br><br> Autor: {$this->autor}.
       <br><br> Titulo: {$this->titulo}.
       <br><br> año: {$this->año}.";
    }*/


    
}   




    /*$obj = new Material("Libro","Aventura",123456,"Luis Gomez","Las Aventuras",2003);
    echo "<br> Metodos: <br><br>";
    $obj->AltaMaterial();
    echo "<br><br>";
    $obj->BajaMaterial();
    echo "<br><br>";
    $obj->CambiarMaterial();
    echo "<br><br><br> Caracteristicas: <br><br>";
    $obj->mensaje();*/
    
    
    
    class Libro extends Material implements Produccion{

        private $editorial;

        function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$editorial)
        {
            parent:: __construct($tipoMaterial,$codigo,$autor,$titulo,$año);
            $this->editorial=$editorial;
            // $this->tipoMaterial=$tipoMaterial;
            // $this->codigo=$codigo;
            // $this->autor=$autor;
            // $this->titulo=$titulo;
            // $this->año=$año;            
        }

        function publicar(){
            if ($this->año>2010) {
                echo 'Libro candidato a ser digitalizado';
            } else {
                echo 'Por antiguedad NO digitalizar';
            }
            
        }

        function conservar(){  }

        function setter($atributo,$valor){
            $this->$atributo=$valor;
        }


        function getter($nombreAtributo){
            return $this->$nombreAtributo;
        }

        /*function setTipoMaterial($tipoMaterial){
            $this->tipoMaterial = $tipoMaterial;
        }
    
        function getTipoMaterial(){
            return $this->tipoMaterial;
        }
    
    
        function setCodigo($codigo){
            $this->codigo = $codigo;
        }
    
        function getCodigo(){
            return $this->codigo;
        }
    
    
        function setAutor($autor){
            $this->autor = $autor;
        }
    
        function getAutor(){
            return $this->autor;
        }
    
    
        function setTitulo($titulo){
            $this->titulo = $titulo;
        }
    
        function getTitulo(){
            return $this->titulo;
        }
    
    
        function setAño($año){
            $this->año = $año;
        }
    
        function getAño(){
            return $this->año;
        }


        function setEditorial($editorial){
            $this->editorial = $editorial;
        }
    
        function getEditorial(){
            return $this->editorial;
        }



        function mensaje()
        {
            echo "Tipo de Material: {$this->tipoMaterial}.
            <br><br> Codigo: {$this->codigo}.
            <br><br> Autor: {$this->autor}.
            <br><br> Titulo: {$this->titulo}.
            <br><br> año: {$this->año}.
            <br><br> Editorial: {$this->editorial}";
        }*/


        
    }
    
    
    /*$obj = new Libro("Libro",123456,"Luis Gomez","Las Aventuras",2003,"anonimo");
    echo "<br> Material: <br><br>";
    $obj->AltaMaterial();
    echo "<br><br>";
    $obj->BajaMaterial();
    echo "<br><br>";
    $obj->CambiarMaterial();
    echo "<br><br><br> Caracteristicas: <br><br>";
    $obj->mensaje();*/




    $obj = new Libro("Libro",123456,"Luis Gomez","Las Aventuras",2015,"anonimo");
    //modificar directamente el atributo
    //si es private no se puede
    //$obj->editorial="norma";    
    $obj->setter("editorial","norma");
    echo $obj->getter("editorial").' sin private pero con setter<br>';
    echo "<br> Material: <br><br>";
    $obj->AltaMaterial();
    echo "<br><br>";
    $obj->BajaMaterial();
    echo "<br><br>";
    $obj->CambiarMaterial();
    echo "<br><br><br> Caracteristicas: <br><br>";

    //uso de getter abreviado
    echo "Tipo de Material: ";
    echo $obj->getter("tipoMaterial").'<br><br>';
    echo "Codigo: ";
    echo $obj->getter("codigo").'<br><br>';
    echo "Autor: ";
    echo $obj->getter("autor").'<br><br>';
    echo "Titulo : ";
    echo $obj->getter("titulo").'<br><br>';
    echo "Año: ";
    echo $obj->getter("año").'<br><br>';
    echo "Editorial: ";
    echo $obj->getter("editorial").'<br><br>';
    echo '<br>000000000000000000000000000000<br>';
    echo $obj->publicar();



    //echo "<br>Modificacion: <br><br> ";
    //uso de setters abreviados
    //Definir Modificaciones
    // $obj->setter("tipoMaterial","Revista");
    // $obj->setter("codigo",2142329);
    // $obj->setter("autor","Anonimo");
    // $obj->setter("titulo","Revista Tu");
    // $obj->setter("año",2004);
    // $obj->setter("editorial","anonimo");


    // echo "Tipo de Material: ";
    // echo $obj->getter("tipoMaterial").'<br><br>';
    // echo "Codigo: ";
    // echo $obj->getter("codigo").'<br><br>';
    // echo "Autor: ";
    // echo $obj->getter("autor").'<br><br>';
    // echo "Titulo : ";
    // echo $obj->getter("titulo").'<br><br>';
    // echo "Año: ";
    // echo $obj->getter("año").'<br><br>';
    // echo "Editorial: ";
    // echo $obj->getter("editorial").'<br><br>';
    
    class Bibloteca
    {
    // es una colección de materiales
     private $coleccion;//llenar con libros y revistas.   
    
     function __construct(){
         $this->coleccion= array();             
     }

     function adicionarLibro($libro){
        array_push($this->coleccion,$libro);
     }

     function verLibros(){
        for ($i=0; $i <count($this->coleccion); $i++) { 
            echo '*******'. $this->coleccion[$i]->getter("autor");
         }
     }
    
}

$biblio=new Bibloteca();
$biblio->adicionarLibro($obj);
//$tipoMaterial,$codigo,$autor,$titulo,$año,$editorial
$obj1 = new Libro("Libro",123457,"Gabo","100 años de soledad",1978,"planeta");
$biblio->adicionarLibro($obj1);
$biblio->verLibros();

class Revista extends Material implements Produccion{
    public $volumen;
    function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$volumen)
    {
        parent:: __construct($tipoMaterial,$codigo,$autor,$titulo,$año);
        $this->volumen=$volumen;    
    }
    function publicar(){
        if ($this->volumen>10) {
            echo 'se digitaliza';
        } else {
            echo 'no se digitaliza';
        }
        
    }
    function conservar()
    {
        
    }

}


    ?>
    </section>
</body>
</html>