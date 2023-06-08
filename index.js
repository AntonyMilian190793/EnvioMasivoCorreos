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
            console.log(data);
        }
    });
}

init();