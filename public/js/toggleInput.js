let toggle = document.querySelectorAll(".toggleInput");

toggle.forEach(element => {
    element.addEventListener("change", function(){
        if(element.value == "1"){
            element.value = "0";
        } else {
            element.value = "1";
        }
    })
});