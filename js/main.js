let button = document.querySelectorAll(".pequisa-imoveis-buttonb");

for(let i = 0; i < button.length; i++){
    button[i].onclick = () => {
        button[i].classList.add("active-pesquisa");
        
    }
}



