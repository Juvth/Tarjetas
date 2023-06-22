<?php
// tests/acceptance/AdministradorCest.php

class AdministradorCest
{
    public function _before(AcceptanceTester $I)
    {
        // Configuración inicial, si es necesaria
    }

    // Prueba de aceptación para el registro de un administrador
    public function registroAdministrador(AcceptanceTester $I)
    {
        // Ingresar a la página de registro del administrador
        $I->amOnPage('Tarjetas/vista/registrarAdmin.php');

        // Rellenar el formulario con datos de prueba
        $I->fillField('nombreA', 'AdministradorCest');
        $I->fillField('contraseñaA', 'contraseña123');

        // Enviar el formulario
        $I->click('Enviar');

        // Verificar que se redireccionó correctamente después del registro
        $I->seeInCurrentUrl('Tarjetas/Admin.html');

        // Verificar que se haya insertado el administrador en la base de datos
        $I->seeInDatabase('administrador', [
            'nombre' => 'Nombre de prueba',
            'contraseña' => 'contraseña123',
        ]);
    }
}

