<?php
namespace App;
class OrderService
{
    private IMailService $mailService;

    public function __constructor(IMailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function create(OrderService $order): void
    {
        // ToDo: código para crear la orden

        // Enviar notificación de la orden creada
        $this->mailService->Send();
    }

    /**
     * Funcion para calcular el total
     *
     * @param integer $precio
     * @param integer $cantidad
     * @param float $iva
     * @return float
     */
    public function setTotal(int $precio, int $cantidad, float $iva){
        $total = ($precio * $cantidad ) * (1+$iva);

        return $total;
    }
}
