<html>
<head>

    <title>Recibe datos</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/docs.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/miCSS.css">

    <meta charset="UTF-8">
       
</head>

   <div class="container">   
    <div class="row">


<body>
<?php
        /* Recojo los datos del checkbox para formatearlos */
        if (is_array($_POST['micheckbox'])) {
                $selected = '';
                $num_countries = count($_POST['micheckbox']);
                $current = 0;
                foreach ($_POST['micheckbox'] as $key => $value) {
                    if ($current != $num_countries-1)
                        $selected .= $value.', ';
                    else
                        $selected .= $value.'';
                    $current++;
                }
            }

        /* Recojo los datos de la listgroup en javascript para formatearlos */
        $ss = $_POST['EspecialidadesArrayString']; 
        /* La funcion explode convertira la cadena a arreglo */
        $tok = explode(',',$ss); 
        echo $tok;

        /* $myarr=parseJSON($_GET['encapsulado']);
        echo $myarr->bleh; //resultado: blehRealoaded */

        /* Sección Datos Personales */
        $Nombre          = $_POST["Nombre"];
        $ListaCheck      = $_POST["ListaCheck"];

        echo "Nombre: " . $Nombre . " ListaCheck: " . $ListaCheck . " Micheckbox: " . $selected;

?>
        <div class="col-md-12">
            <h1>Proceso de registro</h1>
        </div>

        <hr>
        <br><br>

        <div align="center">
            Su formulario se ha enviado con éxito. Nos pondremos en contacto con usted en el momento lo requiramos. Gracias. <br/> </div>
        </div>

        <hr>
        <br><br>

        <div align="center">
            <!-- Volver apantalla inicial -->
            <input class="btn btn-default" type="button" value="Volver a la web" onclick="location.href='CheckGroup.html'">
            <br><br>
        </div>
   
        </div>
      </div>  

    </body>
</html>