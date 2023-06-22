<?php
use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{
    public function testInsertDataIntoTrjBautizoTable()
    {
        // Establecer la configuración de conexión a la base de datos
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'Tarjetas';

        // Crear una conexión a la base de datos
        $conexion = new mysqli($host, $username, $password, $database);

        // Verificar si la conexión fue exitosa
        if ($conexion->connect_error) {
            $this->fail('Error de conexión a la base de datos: ' . $conexion->connect_error);
        }

        // Datos de prueba
        $idBautizo = '123';
        $iglesia = 'Iglesia de prueba';
        $recepcion = 'Recepción de prueba';
        $edad = 25;
        $nombreTB = 'Nombre de prueba';
        $padrinos = 'Padrinos de prueba';
        $fechaTB = '2023-06-03';
        $horaTB = '10:00';
        $cedula = '123456789';

        // Ejecutar el código de inserción
        $sql = "INSERT into trjbautizo(id_bautizo,iglesia,recepcion,edad,nombre,padrinos,fecha,hora,cedula_cliente) values ('$idBautizo','$iglesia','$recepcion','$edad','$nombreTB','$padrinos','$fechaTB','$horaTB','$cedula')";
        $sqr = $conexion->query($sql);

        // Verificar el resultado de la inserción
        if ($sqr) {
            // Verificar que se haya redirigido a la página correcta
            $this->assertEquals('/TipoDeTarjeta.html', $this->getRedirectedUrl());
        } else {
            $this->fail('Error al insertar datos en la tabla trjbautizo');
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    }

    protected function getRedirectedUrl()
    {
        $headers = xdebug_get_headers();
        foreach ($headers as $header) {
            if (strpos($header, 'Location: ') === 0) {
                return substr($header, strlen('Location: '));
            }
        }
        return null;
    }
}
