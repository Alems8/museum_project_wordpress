var canvas;
var context;
var controls;
var coloreSelezionato;
var larghezzaLinea = 5;
var trasparenza = 1;
var tratto = 'round';
var puntoInizioDisegnoX = null;
var puntoInizioDisegnoY = null;
var posizioneCorrenteMouseX = null;
var posizioneCorrenteMouseY = null;
var mouseIsDown = false;

document.addEventListener('DOMContentLoaded', function(){

    canvas = document.getElementById('areaDiDisegno');
    context = canvas.getContext('2d');
    controls = document.getElementById('controls');

    var controlsHeight = controls.offsetHeight;
    var canvasWidth = document.getElementById('sketch-container').offsetWidth;
    var headerHeight = document.getElementById('museum-header').offsetHeight;
    canvas.width = canvasWidth - 100;
    canvas.height = window.innerHeight - headerHeight -70;


    controls.addEventListener('click', function (e){
        var id = e.target.id;
        if (id === 'buttonWhite'){
            coloreSelezionato = 'white';
        }
        if (id === 'bottoneCancella'){
            cancella();
        }
    })

    controls.addEventListener('change', function (e){
        var id = e.target.id;
        if(id === 'buttonColor'){
            coloreSelezionato = e.target.value;
        }
        if(id === 'buttonSize'){
            larghezzaLinea = e.target.value;
        }
        if (id === 'buttonDetails'){
            trasparenza = e.target.value/100;
        }
        if (id === 'circle'){
            tratto = e.target.value;
        }
        if (id === 'square'){
            tratto = e.target.value;
        }
        if (id === 'highlighter'){
            tratto = e.target.value;
        }
    })


    canvas.addEventListener('mousemove', function(e){
        calcolaCoordinate(e);
    });
    canvas.addEventListener('mousedown', function(e){
        calcolaCoordinate(e);
    });
    canvas.addEventListener('mouseup', function(e){
        calcolaCoordinate(e);
    });
    canvas.addEventListener('mouseout', function(e){
        calcolaCoordinate(e);
    });

});


function calcolaCoordinate(e){

    switch(e.type) {
        case 'mousemove':
            if (mouseIsDown) {

                posizioneCorrenteMouseX = e.clientX - canvas.offsetLeft;
                posizioneCorrenteMouseY = e.clientY - canvas.offsetTop;
                disegna();
                puntoInizioDisegnoX = posizioneCorrenteMouseX;
                puntoInizioDisegnoY = posizioneCorrenteMouseY;
            }
            break;
        case 'mousedown':
            mouseIsDown = true;
            puntoInizioDisegnoX = e.clientX - canvas.offsetLeft;
            puntoInizioDisegnoY = e.clientY - canvas.offsetTop;
            break;
        case 'mouseup':
            mouseIsDown = false;
            break;
        case 'mouseout':
            mouseIsDown = false;
            break;
    }
}

function disegna(){
    console.log('disegna');
    context.beginPath();
    context.moveTo(puntoInizioDisegnoX, puntoInizioDisegnoY);
    context.lineTo(posizioneCorrenteMouseX, posizioneCorrenteMouseY);
    context.strokeStyle = coloreSelezionato;
    context.lineWidth = larghezzaLinea;
    context.lineCap = tratto;
    context.globalAlpha = trasparenza;
    context.stroke();
    context.closePath();
}

function cancella(){
    var finestraConferma = confirm('Vuoi davvero cancellare?');
    if(finestraConferma) {
        context.clearRect(0, 0, canvas.width, canvas.height);
    }
}