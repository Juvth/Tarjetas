function registrarTCu(){
    $(document).ready(function(){
        $('#btnIngresarTCu').click(function(){
            let datosTCu = $('#frmTarjetaCumple').serialize();
            $.ajax({
                type:"POST",
                url:"../Modelo/insertarTCu.php",
                data: datosTCu,
                success: function(rTCu){
                if(rTCu!=1){
                    alert('ingresado correctamente');
                }else
                    alert('fallo al ingresar');
                }
            });
            return false
        });
    });
}