<?php

class RegistroClienteCest
{
    public function _before(AcceptanceTester $I)
    {
        // Configuración inicial, si es necesaria
    }

    // tests
    public function registroCliente(AcceptanceTester $I)
    {
        // Ingresar a la página de registro clientes
        $I->amOnPage('/ruta-del-formulario-de-registro-cliente');

        // Rellenar el formulario con datos de prueba
        $I->fillField('direccion', 'Avenida simon bolivar y bolivar bonilla');
        $I->fillField('usuario', 'DennysMejia');
        $I->fillField('telefono', '0983476533');
        $I->fillField('cedula', '0605830025');
        $I->fillField('contraseña', '12345');
       

        // Enviar el formulario
        $I->click('Enviar');

        // Verificar que se redireccionó correctamente después del registro
        $I->seeInCurrentUrl('/index.html');

        // Verificar que se haya insertado el grado en la base de datos
        $I->seeInDatabase('cliente', [
            'direccion' => 'Avenida simon bolivar y bolivar bonilla',
            'usuario' => 'DennysMejia',
            'telefono' => '0983476533',
            'cedula' => '0605830025',
            'contraseña' => '12345',
        ]);
    }
}
