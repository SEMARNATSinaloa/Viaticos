<?php
    require_once "../modelos/Cuotas.php";

    $cuotas= new Cuotas();

    $idcuotas=isset($_POST["idcuotas"])?limpiarCadena($_POST["idcuotas"]):"";
    $tipo_persona=isset($_POST["tipo_persona"])?limpiarCadena($_POST["tipo_persona"]):"";
    $pernocta=isset($_POST["pernocta"])?limpiarCadena($_POST["pernocta"]):"";
    $sinpernocta=isset($_POST["sinpernocta"])?limpiarCadena($_POST["sinpernocta"]):"";
    $estado=isset($_POST["estado"])?limpiarCadena($_POST["estado"]):"";
    
    switch ($_GET["op"]) {
        case 'guardaryeditar':
            # code...
            if(empty($idcuotas))
            {
                echo empty($idcuotas);
                $rspta=$cuotas->insertar($tipo_persona, $pernocta, $sinpernocta);
                echo $rspta?"Cuota registrada.":"Cuota no registrada.";
            }
            else
            {
                $rspta=$cuotas->editar($idcuotas, $tipo_persona, $pernocta, $sinpernocta);
                echo $rspta?"Cuota actualizada.":"Cuota no actualizada.";
            }
        break;
        
        case 'desactivar':
            # code...
            $rspta=$cuotas->desactivar($idcuotas);
            echo $rspta?"Cuota Desactivada.":"Cuota no desactivada.";
            break;

        case 'activar':
            # code...
            $rspta=$cuotas->activar($idcuotas);
            echo $rspta?"Cuota activada.":"Cuota no activada.";
        break;

        case 'eliminar':
            # code...
            $rspta=$cuotas->eliminar($idcuotas);
            echo $rspta?"Cuota eliminada.":"Cuota no eliminada.";
        break;

        case 'mostrar':
            # code...
            $rspta=$cuotas->mostrar($idcuotas);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
            break;

        case 'listar':
            # code...
            $rspta=$cuotas->listar();
            //Vamos a declarar un array
            $data=Array();

            while ($reg = $rspta->fetch_object()) {
                $data[]=array(
                    
                    "0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idcuotas.')"><i class="fa fa-pencil"></i></button>'." ".
                                        '<button class="btn btn-danger" onclick="desactivar('.$reg->idcuotas.')"><i class="fa fa-eye-slash"></i></button>'." ".
                                        '<button class="btn btn-danger" onclick="eliminar('.$reg->idcuotas.')"><i class="fa fa-trash"></i></button>':
                                        '<button class="btn btn-warning" onclick="mostrar('.$reg->idcuotas.')"><i class="fa fa-pencil"></i></button>'." ".
                                        '<button class="btn btn-success" onclick="activar('.$reg->idcuotas.')"><i class="fa fa-eye"></i></button>'." ".
                                        '<button class="btn btn-danger" onclick="eliminar('.$reg->idcuotas.')"><i class="fa fa-trash"></i></button>',
                    "1"=>$reg->tipo_persona,
                    "2"=>$reg->pernocta,
                    "3"=>$reg->sinpernocta,
                    "4"=>($reg->estado)?'<span class="label bg-green">Activo</span>':'<span class="label bg-red">Inactivo</span>'
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