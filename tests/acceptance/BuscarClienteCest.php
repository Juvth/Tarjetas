<?php
class BuscarClienteCest
{
    public function buscarCliente(AcceptanceTester $I)
    {
        // Ingresar la URL de tu página donde se encuentra el código a probar
        $I->amOnPage('Tarjetas/vista/BuscarClienteVista.php');

        // Verificar que la página contenga el título correcto
        $I->see('Buscar Cliente');

        // Verificar que el formulario de búsqueda esté presente
        $I->seeElement('form');

        // Ingresar la cédula del cliente que deseas buscar
        $cedula = '123456789';
        $I->fillField('cedula', $cedula);

        // Enviar el formulario
        $I->click('Buscar');

        // Verificar que se haya redirigido a la página de búsqueda de clientes
        $I->seeCurrentUrlEquals('Tarjetas/Modelo/BuscaClienteVista.php');

        // Verificar que la cédula del cliente buscado esté presente en la página
        $I->see($cedula);
    }
}