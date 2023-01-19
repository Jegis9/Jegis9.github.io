var rango = document.querySelector("#rango")
var texto = document.querySelector("#texto")

rango.oninput = () =>{
    texto.innerHTML = rango.value
}




