"use strict"

let form = document.querySelector ("#form-libro"); 
if (form) { 
    form.addEventListener ("submit", cosnultarCatalogo); 

}

function cosnultarCatalogo (e) { 
    e.preventDefault(); 
    let = new FormData (form); 
    let libro = data.get("libro"); 



    let url = `${libro}/ ${autor}/${genero}`; 

    //llamado ajax 
    let response = await fetch (url); 
    let resultado = await response.text(); 
    document.querySelector ("#resultado").innerHTML = resultado; 

}