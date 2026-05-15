<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Devoluciones.php';
// Controlador para el módulo de devoluciones.
class DevolucionesController extends Controller {
    // Método por defecto. 
    public function index(): void {
        //Mientras que no inicio sesión - que le envie al login
        if(!isset($_SESSION['usuario'])){
            header("Location: " . BASE_URL ."/login"); 
            exit(); //por precausión
        } 

        //Instanciamos el objeto de la clase DEVOLUCIONES;
        $modelo = new Devolucion();
        $variable_devoluciones = $modelo->obtenerDevoluciones();
        $this->view('devoluciones/reportes',[
            'usuario' => $_SESSION['usuario'],
            'devoluciones' =>$variable_devoluciones
        ]);
    }
}   