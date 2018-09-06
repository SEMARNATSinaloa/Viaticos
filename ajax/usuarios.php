<?php
    require_once "../modelos/Usuarios.php";

    $usuarios= new Usuarios();

    $idusuario=isset($_POST["idusuario"])?limpiarCadena($_POST["idusuario"]):"";
    $pwd=isset($_POST["pwd"])?limpiarCadena($_POST["pwd"]):"";
    $apellidop=isset($_POST["apellidop"])?limpiarCadena($_POST["apellidop"]):"";
    $apellidom=isset($_POST["apellidom"])?limpiarCadena($_POST["apellidom"]):"";
    $nombre=isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
    $correo=isset($_POST["correo"])?limpiarCadena($_POST["correo"]):"";
    $estado=isset($_POST["estado"])?limpiarCadena($_POST["estado"]):"";
    
    
    switch ($_GET["op"]) {

        case 'guardaryeditar':
            # code...
            if(empty($idusuario))
            {
                echo empty($idusuario);
                $rspta=$usuarios->insertar($pwd, $apellidop, $apellidom, $nombre, $correo);
                echo $rspta?"Cuota registrada.":"Cuota no registrada.";
            }
            else
            {
                $rspta=$cuotas->editar($idusuario, $pwd, $apellidop, $apellidom, $nombre, $correo);
                echo $rspta?"Cuota actualizada.":"Cuota no actualizada.";
            }
        break;

        case 'desactivar':
            # code...
            $rspta=$usuarios->desactivar($idusuario);
            echo $rspta?"Usuario Desactivado.":"Usuario no desactivado.";
            break;

        case 'activar':
            # code...
            $rspta=$usuarios->activar($idusuario);
            echo $rspta?"Usuario activado.":"Usuario no activado.";
        break;

        /*
        case 'eliminar':
            # code...
            $rspta=$cuotas->eliminar($idcuotas);
            echo $rspta?"Cuota eliminada.":"Cuota no eliminada.";
        break;
        */

        case 'mostrar':
            # code...
            $rspta=$usuarios->mostrar($idusuario);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
            break;

        case 'listar':
            # code...
            $rspta=$usuarios->listar();
            //Vamos a declarar un array
            $data=Array();

            while ($reg = $rspta->fetch_object()) {
                $data[]=array(
                    
                    "0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idusuario.')"><i class="fa fa-pencil"></i></button>'." ".
                                        '<button class="btn btn-danger" onclick="desactivar('.$reg->idusuario.')"><i class="fa fa-eye-slash"></i></button>':
                                        '<button class="btn btn-warning" onclick="mostrar('.$reg->idusuario.')"><i class="fa fa-pencil"></i></button>'." ".
                                        '<button class="btn btn-success" onclick="activar('.$reg->idusuario.')"><i class="fa fa-eye"></i></button>',
                    "1"=>$reg->correo,
                    "2"=>$reg->pwd,
                    "3"=>$reg->nombre,
                    "4"=>$reg->apellidop,
                    "5"=>$reg->apellidom,
                    "6"=>($reg->estado)?'<span class="label bg-green">Activo</span>':'<span class="label bg-red">Inactivo</span>'
                );
            }
            $results=array(
                "sEcho"=>1,//Informacion para el datatables
                "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
                "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
                "aaData"=>$data
            );
            echo json_encode($results);        
        break;
    }
?>