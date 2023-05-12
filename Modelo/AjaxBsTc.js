function buscarTCli()
{
    $(document).ready(function(){
        $('#btnbuscarT').click(function(){
            let datos = $('#frm')
        });

    });
}


function registrarC(){
    $(document).ready(function(){
        $('#btningresarC').click(function(){
            let datos = $('#frmRCliente').serialize();
            $.ajax({
                type:"POST",
                url:"../Modelo/insertar.php",
                data: datos,
                success: function(r){
                if(r!=1){
                    alert('ingresado correctamente');
                }else
                    alert('fallo al ingresar');
                }
            });
            return false
        });
    });
}
