function registrarTB(){
    $(document).ready(function(){
        $('#btnIngresarTB').click(function(){
            var datosBT = $('#frmTarjetaBautizo').serialize();
            $.ajax({
                type:"POST",
                url:"insertarTB.php",
                data: datosBT,
                success: function(rTB){
                if(rTB!=1){
                    alert('ingresado correctamente');
                }else
                    alert('fallo al ingresar');
                }
            });
            return false
        });
    });
}