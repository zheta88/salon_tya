const items = document.querySelectorAll(".bEliminar");

items.forEach(item => {
    item.addEventListener("click", function(){
        const idRESERVAS = this.dataset.idRESERVAS;

        const confirm = window.confirm("Desea eliminar reserva?");

        if(confirm){
            httpRequest("http://localhost/Salon2-master/consultareserva/eliminarReserva/" + idRESERVAS, function(e){
                console.log(this.responseText);
                const tbodys = document.querySelector("#tbody-reservas");
                const fila  = document.querySelector("#fila-" + idRESERVAS);
                if(box.parentElement === fila) { parentBox.removeChild(fila); } 
                tbodys.removeChild(fila);
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