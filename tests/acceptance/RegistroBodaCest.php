<?php
// tests/acceptance/RegistroBodaCest.php

class RegistroBodaCest
{
    public function _before(AcceptanceTester $I)
    {
        // Configuración inicial, si es necesaria
    }

    // Prueba de aceptación para el registro de una boda
    public function registroBoda(AcceptanceTester $I)
    {
        // Ingresar a la página de registro de boda
        $I->amOnPage('/ruta-del-formulario-de-registro-boda');

        // Rellenar el formulario con datos de prueba
        $I->fillField('nombre_Novio', 'Nombre del Novio');
        $I->fillField('nombre_Novia', 'Nombre de la Novia');
        $I->fillField('id_boda', '123');
        $I->fillField('fechaBoda', '2023-01-01');
        $I->fillField('horaBoda', '10:00');
        $I->fillField('padrinosBoda', 'Padrinos de la Boda');
        $I->fillField('cedula', '1234567890');

        // Enviar el formulario
        $I->click('Enviar');

        // Verificar que se redireccionó correctamente después del registro
        $I->seeInCurrentUrl('/TipoDeTarjeta.html');

        // Verificar que se haya insertado la boda en la base de datos
        $I->seeInDatabase('trj_boda', [
            'nombre_Novio' => 'Nombre del Novio',
            'nombre_Novia' => 'Nombre de la Novia',
            'id_boda' => '123',
            'fecha' => '2023-01-01',
            'hora' => '10:00',
            'padrinos' => 'Padrinos de la Boda',
            'cedula_cliente' => '1234567890',
        ]);
    }
}

