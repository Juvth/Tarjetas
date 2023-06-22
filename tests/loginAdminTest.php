<?php
use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{
    public function testLoginPageElements()
    {
        // Cargar el contenido del archivo HTML
        $html = file_get_contents('vista/loginAdmin.html');

        // Crear una nueva instancia de DOMDocument
        $dom = new DOMDocument();

        // Habilitar el manejo de errores al analizar el HTML
        libxml_use_internal_errors(true);

        // Cargar el HTML en el DOMDocument
        $dom->loadHTML($html);

        // Restaurar la manipulación de errores
        libxml_clear_errors();

        // Verificar elementos esperados en el HTML
        $this->assertNotNull($dom->getElementById('nombreA'));
        $this->assertNotNull($dom->getElementById('contraseñaA'));
        $this->assertNotNull($dom->getElementById('btnIngresarA'));
        $this->assertNotNull($dom->getElementById('btningresar'));
        //$this->assertNotNull($dom->getElementByTagName('form'));

        // Puedes agregar más aserciones para verificar otros elementos o contenido del HTML
    }
}
?>