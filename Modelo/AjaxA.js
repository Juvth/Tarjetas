function registrarA(){
    $(document).ready(function(){
        $('#btnIngresarA').click(function(){
            let datosA = $('#frmAdmin').serialize();
            $.ajax({
                type:"POST",
                url:"../Modelo/insertarA.php",
                data: datosA,
                success: function(rA){
                if(rA!=1){
                    alert('ingresado correctamente');
                }else
                    alert('fallo al ingresar');
                }
            });
            return false
        });
    });
}