<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Proveedores.php';
// Controlador para el módulo de stocks.
class ProveedoresController extends Controller {
    // Método por defecto. 
    public function index(): void {
        //Mientras que no inicio sesión - que le envie al login
        if(!isset($_SESSION['usuario'])){
            header("Location: " . BASE_URL ."/login"); 
            exit(); //por precausión
        } 

        //Instanciamos el objeto de la clase STOCKS;
        $modelo = new Proveedores();
        $variable_compras = $modelo->obtenerProveedores();
        $this->view('proveedores/reportes',[
            'usuario' => $_SESSION['usuario'],
            'compras' =>$variable_compras
        ]);
    }
}   