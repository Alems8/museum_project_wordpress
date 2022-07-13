let canvas;
let context;
let controls;
let coloreSelezionato;
let larghezzaLinea = 5;
let trasparenza = 1;
let tratto = 'round';
let puntoInizioDisegnoX = null;
let puntoInizioDisegnoY = null;
let posizioneCorrenteX = null;
let posizioneCorrenteY = null;

let mouseIsDown = false;


document.addEventListener('DOMContentLoaded', function(){

    canvas = document.getElementById('areaDiDisegno');
    context = canvas.getContext('2d');
    controls = document.getElementById('controls');

    const canvasWidth = document.getElementById('sketch-container').offsetWidth;
    const headerHeight = document.getElementById('museum-header').offsetHeight;
    canvas.width = canvasWidth - 100;
    canvas.height = window.innerHeight - headerHeight -70;


    controls.addEventListener('click', function (e){
        const id = e.target.id;
        if (id === 'buttonWhite'){
            coloreSelezionato = 'white';
        }
        if (id === 'bottoneCancella'){
            cancella();
        }
    })

    controls.addEventListener('change', function (e){
        let id = e.target.id;
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
        calcolaCoordinateDesktop(e);
    });
    canvas.addEventListener('mousedown', function(e){
        calcolaCoordinateDesktop(e);
    });
    canvas.addEventListener('mouseup', function(e){
        calcolaCoordinateDesktop(e);
    });
    canvas.addEventListener('mouseout', function(e){
        calcolaCoordinateDesktop(e);
    });



    canvas.addEventListener('touchmove', function(e){
        calcolaCoordinateMobile(e);
    });

    canvas.addEventListener('touchstart', function(e){
        calcolaCoordinateMobile(e);
    });

    canvas.addEventListener('touchend', function(e){
        calcolaCoordinateMobile(e);
    });

});


function calcolaCoordinateDesktop(e){

    switch(e.type) {
        case 'mousemove':
            if (mouseIsDown) {

                posizioneCorrenteX = e.clientX - canvas.offsetLeft;
                posizioneCorrenteY = e.clientY - canvas.offsetTop;
                disegna();
                puntoInizioDisegnoX = posizioneCorrenteX;
                puntoInizioDisegnoY = posizioneCorrenteY;
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

function calcolaCoordinateMobile(e){
    console.log(e);

    switch(e.type) {
        case 'touchmove':
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent('mousemove', {
                clientX: touch.pageX,
                clientY: touch.pageY
            });
            canvas.dispatchEvent(mouseEvent);
            e.preventDefault();

            break;
        case 'touchstart':
            puntoInizioDisegnoX = e.touches[0].pageX - canvas.offsetLeft;
            puntoInizioDisegnoY = e.touches[0].pageY - canvas.offsetTop;

            var touch = e.touches[0];
            var mouseEvent = new MouseEvent('mousedown', {
                clientX: touch.pageX,
                clientY: touch.pageY
            });
            canvas.dispatchEvent(mouseEvent);
            break;

        case 'touchend':
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
            break;
        default:
            console.log("no touch event");
    }
}


function disegna(){
    console.log('disegna');
    context.beginPath();
    context.moveTo(puntoInizioDisegnoX, puntoInizioDisegnoY);
    context.lineTo(posizioneCorrenteX, posizioneCorrenteY);
    context.strokeStyle = coloreSelezionato;
    context.lineWidth = larghezzaLinea;
    context.lineCap = tratto;
    context.globalAlpha = trasparenza;
    context.stroke();
    context.closePath();
}

function cancella(){
    const finestraConferma = confirm('Vuoi davvero cancellare?');
    if(finestraConferma) {
        context.clearRect(0, 0, canvas.width, canvas.height);
    }
}
