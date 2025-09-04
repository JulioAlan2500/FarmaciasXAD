<?php

class MdlProducto
{

    function consultarProductos()
    {
        try {
            $sql = 'call farmaciasxad.sp_consultarProductos()';
            $cnx = new Conexion();
            $conexion = $cnx->crearConexion();
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $rs = $stmt->fetchAll(PDO::FETCH_CLASS, 'Producto');
            $cnx->cerrarConexion();
            return $rs;
        } catch (Exception $e) {
            echo
            "<script>
                (alert('$e');
                window.location.href='http://localhost/Farmacias_XAD/index.php';
                </script>";
        }
    }

    function buscarProductos($termino)
    {
        try {
            $sql = 'call farmaciasxad.sp_buscarProductos(:termino)';
            $cnx = new Conexion();
            $conexion = $cnx->crearConexion();
            $stmt = $conexion->prepare($sql);
            $stmt->bindValue(':termino', '%' . $termino . '%', PDO::PARAM_STR);
            $stmt->execute();
            $rs = $stmt->fetchAll(PDO::FETCH_CLASS, 'Producto');
            $cnx->cerrarConexion();
            return $rs;
        } catch (Exception $e) {
            error_log("Error en buscarProductos: " . $e->getMessage());
            return [];
        }
    }
}
