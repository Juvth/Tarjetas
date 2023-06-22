<?php
// tests/acceptance/RegistroCumpleCest.php

class RegistroCumpleCest
{
    public function _before(AcceptanceTester $I)
    {
        // Configuración inicial, si es necesaria
    }

    // Prueba de aceptación para el registro de un cumpleaños
    public function registroCumple(AcceptanceTester $I)
    {
        // Ingresar a la página de registro de cumpleaños
        $I->amOnPage('../../Vista/registrarTarjetaCumple.php');

        // Rellenar el formulario con datos de prueba
        $I->fillField('nombre_cumple', 'Nombre del Cumpleañero');
        $I->fillField('id_cumple', '123');
        $I->fillField('direccionTCu', 'Dirección del Cumpleaños');
        $I->fillField('edadTCu', '25');
        $I->fillField('fechaTCu', '2023-01-01');
        $I->fillField('horaTCu', '10:00');
        $I->fillField('cedula', '1234567890');

        // Enviar el formulario
        $I->click('Enviar');

        // Verificar que se redireccionó correctamente después del registro
        $I->seeInCurrentUrl('/TipoDeTarjeta.html');

        // Verificar que se haya insertado el cumpleaños en la base de datos
        $I->seeInDatabase('trj_cumple', [
            'nombre_cumple' => 'Nombre del Cumpleañero',
            'id_cumple' => '123',
            'direccion' => 'Dirección del Cumpleaños',
            'edad' => '25',
            'fecha' => '2023-01-01',
            'hora' => '10:00',
            'cedula_cliente' => '1234567890',
        ]);
    }
}
