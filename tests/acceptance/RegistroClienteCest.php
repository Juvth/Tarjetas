<?php
// tests/acceptance/RegistroCienteCest.php

class RegistroClienteCest
{
    public function _before(AcceptanceTester $I)
    {
        // Configuración inicial, si es necesaria
    }

    // Prueba de aceptación para el registro de un cliente
    public function registroCliente(AcceptanceTester $I)
    {
        // Ingresar a la página de registro
        $I->amOnPage('/registro.html');

        // Rellenar el formulario con datos de prueba
        $I->fillField('direccion', 'Dirección de prueba');
        $I->fillField('usuario', 'Usuario de prueba');
        $I->fillField('telefono', '123456789');
        $I->fillField('cedula', '1234567890');
        $I->fillField('contraseña', 'contraseña123');

        // Enviar el formulario
        $I->click('Enviar');

        // Verificar que se redireccionó correctamente después del registro
        $I->seeInCurrentUrl('/index.html');

        // Verificar que se haya insertado el cliente en la base de datos
        $I->seeInDatabase('cliente', [
            'direccion' => 'Dirección de prueba',
            'usuario' => 'Usuario de prueba',
            'telefono' => '123456789',
            'cedula' => '1234567890',
            'contraseña' => 'contraseña123',
        ]);
    }
}
