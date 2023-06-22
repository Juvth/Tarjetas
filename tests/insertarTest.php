<?php
use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{
    public function testInsertDataIntoClienteTable()
    {
        // Datos de prueba
        $direccion = '123 Calle Principal';
        $usuario = 'john_doe';
        $telefono = '1234567890';
        $cedula = '123456789';
        $contraseña = 'secreto123';

        // Realizar la inserción en la tabla cliente
        include("Config/conexion.php");
        $sql = "INSERT INTO cliente (direccion, usuario, telefono, cedula, contraseña) VALUES ('$direccion', '$usuario', '$telefono', '$cedula', '$contraseña')";
        $sqr = mysqli_query($conexion, $sql);

        // Verificar si se realizó correctamente la inserción
        $this->assertTrue($sqr);

        // Verificar si se redirecciona correctamente después de la inserción
        $this->assertStringContainsString('location: index.html', implode(' ', headers_list()));
    }
}

