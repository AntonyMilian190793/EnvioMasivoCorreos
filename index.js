function init(){
    $("#usuario_form").on("submit", function(e){
        guardar(e);
    });
}

$(document).ready(function() {
});

function guardar(e) {
    e.preventDefault();
    var formData = new FormData ($("#usuario_form")[0]);
    $.ajax({
        url: "controller/usuario.php?op=guardarcorreo",
        type: "POST",
        data: formData,
        contentType: false,
        processData:false,
        success: function(data){
            $("#usu_correo").val('');
            $("#modalsuscribete").modal('hide');

            if(data == 1){
                Swal.fire({
                    icon: 'success',
                    title: 'AntonyMilian',
                    text: "Gracias por suscribirte!",
                    showConfirmButton: false,
                    timer: 2000
                  })
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'AntonyMilian',
                    text: "Correo ya registrado!",
                    showConfirmButton: false,
                    timer: 2000
                  })
            }
        }
    });
}

init();