let previewImg = document.getElementById("previewImg");
if(previewImg.src != ""){
    previewImg.style.display = 'block'; 
} else {
    previewImg.style.display = 'none'; 
}
function preview() {
    const inputFoto = document.querySelector("#img_input");
    const labelFoto = document.querySelector("#label_foto");

    previewImg.style.display = 'block';
    // labelFoto.textContent = inputFoto.files[0].name;

    const fileFoto = new FileReader();
    fileFoto.readAsDataURL(inputFoto.files[0]);

    fileFoto.onload = function(e) {
        previewImg.src = e.target.result;
    }
}