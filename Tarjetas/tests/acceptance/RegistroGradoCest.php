<?php
// tests/acceptance/RegistroGradoCest.php

class RegistroGradoCest
{
    public function _before(AcceptanceTester $I)
    {
        // Configuración inicial, si es necesaria
    }

    // Prueba de aceptación para el registro de un grado
    public function registroGrado(AcceptanceTester $I)
    {
        // Ingresar a la página de registro de grado
        $I->amOnPage('/ruta-del-formulario-de-registro-grado');

        // Rellenar el formulario con datos de prueba
        $I->fillField('id_grado', '123');
        $I->fillField('direccionTG', 'Dirección del Grado');
        $I->fillField('fechaTG', '2023-01-01');
        $I->fillField('HoraTG', '10:00');
        $I->fillField('descripcionTG', 'Descripción del Grado');
        $I->fillField('Nombre_grado', 'Nombre del Grado');
        $I->fillField('cedula', '1234567890');

        // Enviar el formulario
        $I->click('Enviar');

        // Verificar que se redireccionó correctamente después del registro
        $I->seeInCurrentUrl('/TipoDeTarjeta.html');

        // Verificar que se haya insertado el grado en la base de datos
        $I->seeInDatabase('trj_grado', [
            'id_grado' => '123',
            'direccion' => 'Dirección del Grado',
            'fecha' => '2023-01-01',
            'hora' => '10:00',
            'descripcion' => 'Descripción del Grado',
            'Nombre_grado' => 'Nombre del Grado',
            'cedula_cliente' => '1234567890',
        ]);
    }
}
