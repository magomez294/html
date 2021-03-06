var listaPasos =document.getElementsByClassName("paso");
var imagenes = [];

for (let index = 0; index < listaPasos.length; index++) {
    desplegar(listaPasos[index]);
    eliminar(listaPasos[index]);
    readURL(listaPasos[index]);
}
function obtenerIndicePaso(paso){
    var listaPasos =document.getElementsByClassName("paso");
    for (let i = 0; i < listaPasos.length; i++) {
        if (paso.children[0].textContent==("Paso "+(i+1))) {
            return i;
        }; 
    };
    return null;
};

function desplegar(paso){
    console.log(paso)
    console.log(paso.children[1].children[0].children[0])
    /* paso.children[1].children[0].children[0].onclick = function(){
        console.log(this.parentNode);
        this.parentNode.children[1].classList.toggle("ocultar");
        if (this.getAttribute('value')=="-") {
            this.setAttribute('value', "+");
        }
        else{
            this.setAttribute('value', "-");
        };
    }; */
};

function eliminar(paso){
    paso.children[1].children[2].onclick = function(){
        var indice = obtenerIndicePaso(paso);
        imagenes.splice(indice, 1);
        console.log(indice);
        paso.remove();
        var listaPasos =document.getElementsByClassName("paso");
        var k;
        for (k = 0; k < listaPasos.length; k++) {
            listaPasos[k].children[0].textContent="Paso "+(k+1);
            listaPasos[k].children[1].children[0].children[0].setAttribute('id', "image"+(k+1));
            listaPasos[k].children[1].children[0].children[1].setAttribute('id', "preview"+(k+1));
            document.getElementById(`image${k+1}`).onchange = function() {readURL(this);};
            /* $("#image"+(k+1)).change(function() {readURL(this);}); */
        };
    };
};

var crear = document.getElementById('nuevo');
//genera un nuevo div con todos los componentes de pasos, y le da funcionalidad a los botones
crear.onclick = function(){
    var todosPasos =document.getElementsByClassName("paso");
    var newDiv = document.createElement("div");
    newDiv.setAttribute('class', "paso");
    var titulo = document.createElement("p");
    var numero=todosPasos.length+1;
    titulo.textContent="Paso "+numero;
    var contenido =document.createElement("div");
    contenido.setAttribute('Class', "contenido");
    var newInput = document.createElement("input");
    newInput.setAttribute('Type', "file");
    newInput.setAttribute('Value', "Imagen");
    newInput.setAttribute('class', "imagen");
    newInput.setAttribute('id', "image"+numero);
    newInput.setAttribute('accept', "image/.jpeg, .jpg, .png");
    var newImage = document.createElement("img");
    newImage.setAttribute('src', "");
    newImage.setAttribute('width', "150px");
    newImage.setAttribute('height', "120px");
    newImage.setAttribute('id', "preview"+numero);
    var imageDiv = document.createElement("div");
    imageDiv.setAttribute('class', "image");
    imageDiv.appendChild(newInput);
    imageDiv.appendChild(newImage);
    var newText = document.createElement("textarea");
    newText.setAttribute('cols', "30");
    newText.setAttribute('rows', "10");
    var newButton = document.createElement("input");
    newButton.setAttribute('type', "button");
    newButton.setAttribute('value', "Eliminar paso");
    newButton.setAttribute('class', "eliminar");
    contenido.appendChild(imageDiv);
    contenido.appendChild(newText);
    contenido.appendChild(newButton);
    var desplegable=document.createElement("input");
    desplegable.setAttribute('type', "button");
    desplegable.setAttribute('class', "desplegar");
    desplegable.setAttribute('value', "-");
    newDiv.appendChild(titulo);
    newDiv.appendChild(contenido);
    newDiv.appendChild(desplegable);
    var listaPasos = document.getElementById("listaPasos");
    listaPasos.appendChild(newDiv);
    desplegar(newDiv);
    eliminar(newDiv);
    document.getElementById(`image${numero}`).onclick = function() {readURL(this);};
   /*  $("#image"+(numero)).click(function() {readURL(this);}); */
    console.log(imagenes);
};

//funcion que comprueba la validez de s imagenes subidas y las previsualiza
function readURL(input) {
    //var input = document.getElementById(id);
    //console.log(id);
    console.log('entra');
    input.onchange = function () {
        var reader = new FileReader();
        if (input.files && input.files[0]) {
            console.log('entra')
            if(input.files[0].size>1024000){
                alert("La imagen no puede superar los 500Kb");
                $("#preview").attr("src","blank");
                $("#preview").hide();  
                $('#imgPrincipal').wrap('<form>').closest('form').get(0).reset();
                $('#imgPrincipal').unwrap(); 
                return false;
            }
            if(input.files[0].type.indexOf("image")==-1){
                $("#preview").attr("src","blank");
                $("#preview").hide();  
                $('#imgPrincipal').wrap('<form>').closest('form').get(0).reset();
                $('#imgPrincipal').unwrap();  
                return false;
            }
            reader.onload = function (e) {
                var pasos =document.getElementsByClassName("paso");
                console.log('entra')
                for (let index = 1; index <= pasos.length; index++) {
                    console.log('entra')
                    if (input.getAttribute('id')=='image'+index) {
                        $('#preview'+index).attr('src', e.target.result);
                        //pasos[index-1].src = e.target.result;
                        imagenes[index-1]=e.target.result;
                        $('#preview'+index).show(); 
                        console.log(imagenes);
                    }
                }
            };
            // read the image file as a data URL.
            reader.readAsDataURL(input.files[0]);
        }
    }; 
};
