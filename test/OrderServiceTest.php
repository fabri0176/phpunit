<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class OrderServiceTest extends TestCase
{

    public function testSetTotalValid(): void
    {

        $OrderService = new App\OrderService(new App\MailChimpService);
        $precio = 100;
        $cantidad = 2;
        $iva = 0.19;
        $total = $OrderService->setTotal($precio,$cantidad,$iva);

        $this->assertSame(238.0, $total);
    }

    public function testSetTotalNotValid(): void
    {

        $OrderService = new App\OrderService(new App\MailChimpService);
        $precio = 100;
        $cantidad = 1;
        $iva = 0.19;
        $total = $OrderService->setTotal($precio,$cantidad,$iva);

        $this->assertNotSame(238.0, $total);
    }


}
