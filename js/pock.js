/* Variables globales */
var frame;

$(function(){
    
    /* Funcionalidad de galeria principal */

    setMainGalleryFrame0();
    frame = 0;
    setInterval(animateMainGallery,6000);

});

function setMainGalleryFrame0(){

    $('.main-gallery').css('background','linear-gradient(rgba(0,138,204,0.45), rgba(1, 93, 136, 0.98)), url("img/back_1.jpg")');
    $('.main-gallery').css('background-position','center');
    $('.main-gallery').css('background-size','cover');
    $('.main-gallery').css('background-repeat','no-repeat');

    $('.main-gallery-title').html('Desarrollo de software<br>a la medida');
    $('.main-gallery-description').html('Análizamos las necesidades de tu negocio<br>y desarrollamos el software que necesitas');
    $('.main-gallery-button').html('<a href="servicios.php" class="btn btn-light">Más información</a>');

}

function setMainGalleryFrame1(){

    $('.main-gallery').css('background','linear-gradient(rgba(0,138,204,0.45), rgba(1, 93, 136, 0.98)), url("img/back_2.jpg")');
    $('.main-gallery').css('background-position','center');
    $('.main-gallery').css('background-size','cover');
    $('.main-gallery').css('background-repeat','no-repeat');

    $('.main-gallery-title').html('Potencializamos<br>tu negocio');
    $('.main-gallery-description').html('Innovamos estrategias digitales para<br>dar a conocer tu negocio en internet');
    $('.main-gallery-button').html('<a href="servicios.php" class="btn btn-light">Más información</a>');
    
}

function setMainGalleryFrame2(){

    $('.main-gallery').css('background','linear-gradient(rgba(0,138,204,0.45), rgba(1, 93, 136, 0.98)), url("img/back_3.jpg")');
    $('.main-gallery').css('background-position','center');
    $('.main-gallery').css('background-size','cover');
    $('.main-gallery').css('background-repeat','no-repeat');

    $('.main-gallery-title').html('Equipos de cómputo<br>eficientes y baratos');
    $('.main-gallery-description').html('Ensamblamos tu equipo conforme<br>a tus requerimientos');
    $('.main-gallery-button').html('<a href="servicios.php" class="btn btn-light">Más información</a>');
    
}

function animateMainGallery(){

    switch(frame){
        case 0:
            setMainGalleryFrame1();
            frame = 1;
        break;
        case 1:
            setMainGalleryFrame2();
            frame = 2;
        break;
        case 2:
            setMainGalleryFrame0();
            frame = 0;
        break;
    }

}