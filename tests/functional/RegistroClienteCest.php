<?php
class RegistroClienteCest
{
    public function probarRegistroCliente(FunctionalTester $I)
    {
        // Acceder a la página de registro
        $I->amOnPage('/vista/loginCliente.php');

        // Completar el formulario de registro
        $I->fillField('usuario', 'miusuario');
        $I->fillField('contraseña', 'micontraseña');

        // Enviar el formulario
        $I->click('registrar');

        // Verificar el resultado esperado
        $I->see('Registro exitoso');

    }
}
