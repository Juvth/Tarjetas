<?php
use PHPUnit\Framework\TestCase;

class buscarClienteTest extends TestCase
{
    public function testBuscarClienteForm()
    {
        // Cargar el contenido del archivo HTML
        $html = file_get_contents('Vista\BuscarClienteVista.php');

        // Crear una nueva instancia de DOMDocument
        $dom = new DOMDocument();

        // Habilitar el manejo de errores al analizar el HTML
        libxml_use_internal_errors(true);

        // Cargar el HTML en el DOMDocument
        $dom->loadHTML($html);

        // Restaurar la manipulación de errores
        libxml_clear_errors();

        // Verificar elementos esperados en el HTML
        $this->assertNotNull($dom->getElementById('frmTarjetaBautizo'));
        $this->assertNotNull($dom->getElementById('cedula'));
        $this->assertNotNull($dom->getElementById('btningresarC'));

        // Puedes agregar más aserciones para verificar otros elementos o contenido del HTML
    }
}