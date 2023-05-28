<?php

class AdministradorCest
{
    public function _before(AcceptanceTester $I)
    {
    }

     // tests
     public function registroAdmin(AcceptanceTester $I)
     {
         // Ingresar a la página de registro admin
         $I->amOnPage('/ruta-del-formulario-de-registro-admin');
 
         // Rellenar el formulario con datos de prueba
        
         $I->fillField('nombre', 'DennysM');
         $I->fillField('contraseña', '12345');
        
 
         // Enviar el formulario
         $I->click('Enviar');
 
         // Verificar que se redireccionó correctamente después del registro
         $I->seeInCurrentUrl('/Admin.html');
 
         // Verificar que se haya insertado el grado en la base de datos
         $I->seeInDatabase('administrador', [
             
             'nombre' => 'DennysM',
             'contraseña' => '12345',
         ]);
     }
}
