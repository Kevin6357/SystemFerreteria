<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Recibidos.php';
// Controlador para el módulo de recibidos.
class RecibidosController extends Controller {
    // Método por defecto. 
    public function index(): void {
        //Mientras que no inicio sesión - que le envie al login
        if(!isset($_SESSION['usuario'])){
            header("Location: " . BASE_URL ."/login"); 
            exit(); //por precausión
        } 

        //Instanciamos el objeto de la clase RECIBIDOS;
        $modelo = new Recibidos();
        $variable_compras = $modelo->obtenerRecibidos();
        $this->view('recibidos/reportes',[
            'usuario' => $_SESSION['usuario'],
            'compras' =>$variable_compras
        ]);
    }
}   