<?php
class EliminarClienteCest
{
    public function eliminarCliente(AcceptanceTester $I)
    {
        // Ingresar la URL de tu página donde se encuentra el código a probar
        $I->amOnPage('Tarjetas/Modelo/EliminarCliente.php');

        // Ingresar el número de cédula del cliente que deseas eliminar
        $cedula = '0605462111';
        $I->fillField('cedula', $cedula);

        // Enviar el formulario
        $I->click('Enviar');

        // Verificar que el cliente haya sido eliminado redireccionando a Admin.html
        $I->seeCurrentUrlEquals('/Admin.html');

        // Verificar que el cliente haya sido eliminado correctamente
        $I->dontSeeInDatabase('cliente', ['cedula' => $cedula]);
    }
}

