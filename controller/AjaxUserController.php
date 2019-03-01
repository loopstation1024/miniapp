<?php
require_once("db/Db.php");

class AjaxUserController
{
    public function __construct()
    {
        
    }
    
    public function home()
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'){        
            
            try {
                $con = new Db();
            } catch (Exception $e) {
                error_log("Error " . $e->getMessage());
                die();
            }
            
            $query = "SELECT p.id,
                        p.telefono, 
                        p.tarifa,
                        p.cuota_mensual, 
                        p.tipo, c.id AS id_consumo, 
                        c.importe, c.consumo_voz, 
                        c.consumo_datos_megas 
                        FROM producto p
                        LEFT JOIN consumo c ON c.id_producto=p.id
                        WHERE p.id_usuario = 1";
            $stmt = $con->prepare($query);
            
            if($stmt->execute()){

                $response = [];
                
                while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $response[] = $result;     
                }
                
                $response["script"] = 'var items = data; delete items.script; for(var d in items){$("#content").append("<h2>Nº de línea: " + items[d].telefono + "</h2><h3>Tarifa: " + items[d].tarifa + ", cuota mensual: " + items[d].cuota_mensual + ", tipo: " + items[d].tipo + "</h3><ul><li>Importe: " + items[d].importe + "</li><li>Consumo de voz: " + items[d].consumo_voz + "</li><li>consumo de datos(megas): " + items[d].consumo_datos_megas + "</li></ul>");}';
               
                header("Content-type:application/json");
                echo json_encode($response);
            }
            
            $con = null;
        }
    }
}

