<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Stocks.php';
// Controlador para el módulo de stocks.
class StocksController extends Controller {
    // Método por defecto. 
    public function index(): void {
        //Mientras que no inicio sesión - que le envie al login
        if(!isset($_SESSION['usuario'])){
            header("Location: " . BASE_URL ."/login"); 
            exit(); //por precausión
        } 

        //Instanciamos el objeto de la clase STOCKS;
        $modelo = new Stocks();
        $variable_compras = $modelo->obtenerStocks();
        $this->view('stocks/reportes',[
            'usuario' => $_SESSION['usuario'],
            'compras' =>$variable_compras
        ]);
    }
}   