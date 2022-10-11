document.addEventListener('DOMContentLoaded', function(){
    configurar();
})

function configurar() {
    const btnConsultar = document.querySelector('#btnConsultar');
    btnConsultar.addEventListener('click', consultar);
}

async function consultar(){
    const url = "data/cliente.php?accion=listar";
    const respuesta =await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){
        const data = resultado.data;
        let html = "";
        data.forEach(cliente => {
            html += "<tr>";
            html += "<td>" + cliente.id +"</td>";
            html += "<td>" + cliente.titulo +"</td>";
            html += "<td>" + cliente.precio +"</td>";
            html += "<td>" + cliente.descripcion +"</td>";
            html += "<td>" + cliente.habitaciones +"</td>";
            html += "<td>" + cliente.estacionamiento +"</td>";
            html += "</tr>";
            
        });

        const tabla=document.querySelector("#tblData");
        tabla.h
        tabla.innerHTML = html
        //console.log(html);
    }
}