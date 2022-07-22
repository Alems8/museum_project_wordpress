let social = null;
let buttons = null;
let description = null;
let bi = null;
let back_Div = null;
let works = null;


document.addEventListener('DOMContentLoaded', function() {
    description = document.getElementById('sketch-image-description');
    buttons = document.getElementById('controls');
    social = document.getElementsByClassName('sfsi_wicons shuffeldiv');
    bi = document.querySelector('img').src;
    back_Div = document.getElementById('back-image');
    works = document.getElementsByClassName('works');

    for (let i = 0; i<works.length;i++){
        let currentimg = works[i].getElementsByTagName('img');
        let currentimgw = currentimg[0].clientWidth;
        let currentimgh = currentimg[0].clientHeight;
        if (currentimgw > currentimgh){
            currentimg[0].style.maxWidth = '90%';
            currentimg[0].style.height = 'auto';
        }
        else{
            currentimg[0].style.maxHeight = '80%';
            currentimg[0].style.width = 'auto';
        }
    }

    back_Div.style.backgroundImage = "url('"+bi+"')";

    social[1].addEventListener('click', function (){
        buttons.style.display = 'none';
        description.style.display = 'block';
        context.save();
    })
    social[0].addEventListener('click', function (){
        buttons.style.display = 'none';
        description.style.display = 'block';
        context.save();
    })

})
