<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Compra.php';
// Controlador para el módulo de compras.
class ComprasController extends Controller {
    // Método por defecto. 
    public function index(): void {
        //Mientras que no inicio sesión - que le envie al login
        if(!isset($_SESSION['usuario'])){
            header("Location: " . BASE_URL ."/login"); 
            exit(); //por precausión
        } 

        //Instanciamos el objeto de la clase COMPRAS;
        $modelo = new Compra();
        $variable_compras = $modelo->obtenerCompras();
        $this->view('compras/reportes',[
            'usuario' => $_SESSION['usuario'],
            'compras' =>$variable_compras
        ]);
    }
}   