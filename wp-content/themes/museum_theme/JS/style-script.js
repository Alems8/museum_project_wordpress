let social = null;
let buttons = null;
let description = null;


document.addEventListener('DOMContentLoaded', function() {
    description = document.getElementById('sketch-image-description');
    buttons = document.getElementById('controls');
    social = document.getElementsByClassName('sfsi_wicons shuffeldiv');

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
