<?php
        if(isset($_POST["Lugar"])=="Pais"){
                MostrarPaises();
        }

        if(isset($_POST["Lugar2"])=="Provincia"){
               MostrarProvincias($_POST["IdPais"]);
        }

        if(isset($_POST["Lugar3"])=="Pueblo"){
                MostrarPueblos($_POST["IdPais"],$_POST["IdProvincia"]);
         }
        
        if(isset($_POST["accion"])=="Localizar"){
                MostrarBares();
        }
        function MostrarPaises(){
                require("conexionBD.php");

                $VerPaises="select * from Paises";
                $Consulta=$conexion->prepare($VerPaises);
                $Consulta->execute();
                if($Consulta->rowCount()>0){
                        echo "<select class='form-select text-center' id='IdPais' >
                        <option >Ningun Pais Seleccionado</option>";
                        foreach($conexion->query($VerPaises) as $fila ){
                                echo "<option value=".$fila["IdPais"].">".$fila["NombrePais"]."</option>";
                        }
                        echo "</select>";
                }

        }


        function MostrarProvincias($IdPais){
                require("conexionBD.php");

                $Verprovincias="select * from Provincias where IdPais=$IdPais";
                $Consulta=$conexion->prepare($Verprovincias);
                $Consulta->execute();
                if($Consulta->rowCount()>0){
                        echo "<select class='form-select text-center' id='IdProvincia' >
                        <option >Ninguna Provincia Seleccionada</option>";
                        foreach($conexion->query($Verprovincias) as $fila){
                                echo "<option value=".$fila["IdProvincia"].">".$fila["NombreProvincia"]."</option>";

                        }

                        echo "</select>";
                }
        }

        function MostrarPueblos($IdPais,$IdProvincia){
                require("conexionBD.php");
                $VerPueblos="select * from Pueblos where IdPais=$IdPais and IdProvincia=$IdProvincia";
                $Consulta=$conexion->prepare($VerPueblos);
                $Consulta->execute();
                if($Consulta->rowCount()>0){
                        echo "<select class='form-select text-center' id='IdPueblo' >
                        <option >Ningun Pueblo Seleccionado</option>";
                        foreach($conexion->query($VerPueblos) as $fila){
                                echo "<option value=".$fila["IdPueblo"].">".$fila["NombrePueblo"]."</option>";
                        }
                        echo "</select>";
                }
        }


        function MostrarBares(){
                $Lugares=array();
                require("conexionBD.php");
                $Bares="select * from Bares";
                $Consulta=$conexion->prepare($Bares);
                $Consulta->execute();
                if($Consulta->rowCount()>0){
                        foreach ($conexion->query($Bares) as $fila){
                               array_push($Lugares,[$fila["Latitud"],$fila["Longitud"]]);
                        
                        }
                echo(json_encode($Lugares));
                }
        }
?>


