<?php
use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{
    public function testLoginPageElements()
    {
        // Cargar el contenido del archivo HTML
        $html = file_get_contents('vista/loginCliente.html');

        // Crear una nueva instancia de DOMDocument
        $dom = new DOMDocument();

        // Habilitar el manejo de errores al analizar el HTML
        libxml_use_internal_errors(true);

        // Cargar el HTML en el DOMDocument
        $dom->loadHTML($html);

        // Restaurar la manipulación de errores
        libxml_clear_errors();

        // Verificar elementos esperados en el HTML
        $this->assertNotNull($dom->getElementById('usuario'));
        $this->assertNotNull($dom->getElementById('contraseña'));
        $this->assertNotNull($dom->getElementById('btningresarC'));
        $this->assertNotNull($dom->getElementById('btnregistrarC'));
        $this->assertNotNull($dom->getElementsByTagName('form'));

        // Puedes agregar más aserciones para verificar otros elementos o contenido del HTML
    }
}

