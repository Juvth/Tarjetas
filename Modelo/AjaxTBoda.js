function registrarTBoda(){
    $(document).ready(function(){
        $('#btnIngresarTBoda').click(function(){
            var datosTBoda = $('#frmTarjetaBoda').serialize();
            $.ajax({
                type:"POST",
                url:"../Modelo/insertarTBoda.php",
                data: datosTBoda,
                success: function(rTBoda){
                if(rTBoda!=1){
                    alert('ingresado correctamente');
                }else
                    alert('fallo al ingresar');
                }
            });
            return false
        });
    });
}