<?php

class CtrlProducto {

    function consultarProductos() {
        $mdlProducto = new MdlProducto();
        $rs = $mdlProducto->consultarProductos();
        return $rs;
    }

    function buscarProductos($termino) {
        $mdlProducto = new MdlProducto();
        $rs = $mdlProducto->buscarProductos($termino);
        return $rs;
    }
}
