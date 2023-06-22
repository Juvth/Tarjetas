<?php
// tests/acceptance/RegistroBautizoCest.php

class RegistroBautizoCest
{
    public function _before(AcceptanceTester $I)
    {
        // Configuración inicial, si es necesaria
    }

    // Prueba de aceptación para el registro de un bautizo
    public function registroBautizo(AcceptanceTester $I)
    {
        // Ingresar a la página de registro de bautizo
        $I->amOnPage('../../Vista/registrarTarjetaBautizo.php');

        // Rellenar el formulario con datos de prueba
        $I->fillField('id_bautizo', '123');
        $I->fillField('iglesia', 'Iglesia de prueba');
        $I->fillField('recepcion', 'Recepción de prueba');
        $I->fillField('edad', '2');
        $I->fillField('nombreTB', 'Nombre de prueba');
        $I->fillField('padrinos', 'Padrinos de prueba');
        $I->fillField('fechaTB', '2023-01-01');
        $I->fillField('horaTB', '10:00');
        $I->fillField('cedula', '1234567890');

        // Enviar el formulario
        $I->click('Enviar');

        // Verificar que se redireccionó correctamente después del registro
        $I->seeInCurrentUrl('/TipoDeTarjeta.html');

        // Verificar que se haya insertado el bautizo en la base de datos
        $I->seeInDatabase('trjbautizo', [
            'id_bautizo' => '123',
            'iglesia' => 'Iglesia de prueba',
            'recepcion' => 'Recepción de prueba',
            'edad' => '2',
            'nombre' => 'Nombre de prueba',
            'padrinos' => 'Padrinos de prueba',
            'fecha' => '2023-01-01',
            'hora' => '10:00',
            'cedula_cliente' => '1234567890',
        ]);
    }
}
