function registrarTG(){
    $(document).ready(function(){
        $('#btnIngresarTG').click(function(){
            let datosTG = $('#frmTarjetaGrado').serialize();
            $.ajax({
                type:"POST",
                url:"../Modelo/insertarTG.php",
                data: datosTG,
                success: function(rTG){
                if(rTG!=1){
                    alert('ingresado correctamente');
                }else
                    alert('fallo al ingresar');
                }
            });
            return false
        });
    });
}