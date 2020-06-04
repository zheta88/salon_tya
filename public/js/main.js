const items = document.querySelectorAll(".bEliminar");

items.forEach(item => {
    item.addEventListener("click", function(){
        const nro_documento = this.dataset.nro_documento;

        const confirm = window.confirm("Realmente desea eliminar el registro?");

        if(confirm){
            httpRequest("http://localhost/Salon2-master/consulta/eliminarPersona/" +nro_documento, function(e){
                console.log(this.responseText);
                const tbody = document.querySelector("#tbody-personas");
                const fila  = document.querySelector("#fila-" + nro_documento);
                tbody.removeChild(fila);
            })
        }
    });
});


function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}