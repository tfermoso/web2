var user=document.getElementById("imgUser");
user.onclick=function(){
    var menuUser=document.getElementById("menuUser");
    if(menuUser.style.display=="block"){
        menuUser.style.display="none";
    }else{
        menuUser.style.display="block";
    }
};
var menuMovil=document.getElementById("menuMovil");
menuMovil.onclick=function(){
    var menu=document.getElementById("menu");
    if(menu.style.display=="block"){
        menu.style.display="none";
    }else{
        menu.style.display="block";
    }
};

var papeleras=document.getElementsByClassName("fa-trash");
for (let index = 0; index < papeleras.length; index++) {
    const element = papeleras[index];
    element.onclick=function(e){
        var row=this.closest("tr");
        row.remove();
        //e.target.parentElement.parentElement.remove();
        //alert("borrando "+e.target.parentElement.parentElement.firstElementChild.innerText)
    };   
}

document.getElementById("fecha").value=new Date().toISOString().substring(0,10)

var formulario=document.getElementById("formIncidencias");
formulario.onsubmit=function(e){
    e.preventDefault();
    var incidencia=document.getElementById("descripcion").value;
    var fecha=document.getElementById("fecha").value;
    var tabla=document.getElementById("tbodyIncidencias");
    var tr=document.createElement("tr");
    var td1=document.createElement("td");
    var td2=document.createElement("td");
    var td3=document.createElement("td");
    var td4=document.createElement("td");
    var i=document.createElement("i");
    i.classList.add("fa-solid");
    i.classList.add("fa-trash");
    i.onclick=function(e){
        var row=this.closest("tr");
        row.remove();
    };
    td1.innerText=getNextId("tablaIncidencias");
    td2.innerText=formatearFecha(fecha);
    td3.innerText=incidencia;
    td4.appendChild(i);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tabla.appendChild(tr);
    formulario.reset();
    document.getElementById("fecha").value=new Date().toISOString().substring(0,10)
};

function formatearFecha(fechaOrginal) {
    var datosFecha=fechaOrginal.split("-");
    return datosFecha[2]+"/"+datosFecha[1]+"/"+datosFecha[0];
}

function getNextId(idTabla) {
    var tablaIncidencia = document.getElementById(idTabla);
    var rows = tablaIncidencia.getElementsByTagName('tr');
    var maxId = 0;
    for (var i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
        var id = parseInt(rows[i].getElementsByTagName('td')[0].innerText);
        if (id > maxId) {
            maxId = id;
        }
    }
    return maxId + 1;
}

console.log(getNextId("tablaIncidencias"));