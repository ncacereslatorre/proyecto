function init() {

    $("#formulario").on("submit", function(e) {
        guardar(e);
    })
    console.log("cargando");

}

function guardar(e) {

    console.log("Pasa por el guardar");

    e.preventDefault();
    $("#btnGuardar")
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/profesores.php?op=guardar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {

            alert(datos);

        }
    });


}

init();