<?php
use PHPUnit\Framework\TestCase;

class eliminarClienteTest extends TestCase
{
    public function testDeleteCliente()
    {
        // Preparar los datos para la prueba
        $Numcedula = '0604511171'; // Cédula de ejemplo
        $expectedLocation = '../Admin.html';

 

        // Incluir el archivo de conexión
        include("../Config/conexion.php");

 

        // Verificar si la conexión se estableció correctamente
        if ($conexion === false) {
            $this->fail('Error al conectar a la base de datos');
        }

 

        // Ejecutar la consulta
        $sql = "DELETE from cliente where cedula='$Numcedula'";
        $sqr = mysqli_query($conexion, $sql);

 

        // Verificar el resultado de la consulta
        if ($sqr) {
            // Comprobar que se redirige a la ubicación esperada
            $this->assertStringContainsString($expectedLocation, implode('', xdebug_get_headers()));
        } else {
            // Comprobar que se muestra un mensaje de error
            $this->fail('Error al eliminar');
        }
    }
}