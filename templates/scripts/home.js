
function navbarBackground() { 
    var screenWidth = $(window).width();

    if(screenWidth <= 750) {
        $('#navbar').addClass('background-true');
        $('.img-hidden').hide();
    }
}


$(document).ready(function() {
    navbarBackground();
    $("#curtain").removeClass("img-hidden").addClass("img-view");
    $('.img-view').show();

    $("#products p").hide();
    $("#content-curtains").show();
    $('#btn-next-img').removeClass("btn-hidden");

    var screenWidth = $(window).width();

    if (screenWidth > 767) {
        $('.img-hidden').show();
        $('#btn-next-img').addClass("btn-hidden");
    }
});

$(window).on('load', function() {
    navbarBackground();
    $("#curtain").removeClass("img-hidden").addClass("img-view");
    $('.img-view').show();

    $("#products p").hide();
    $("#content-curtains").show();
    $('#btn-next-img').removeClass("btn-hidden");

    var screenWidth = $(window).width();

    if (screenWidth > 767) {
        $('.img-hidden').show();
        $('#btn-next-img').addClass("btn-hidden");
    }
});

/* Colocar cor de fundo na Barra de Navegação dependendo do 
tamanho da tela, e sumir com 2 imagens para ocupar menos espaço nos 
dispositivos mobile.
*/
$(window).resize(function() {
    var screenWidth = $(window).width();

    // console.log(screenWidth);

    // 975
    if(screenWidth <= 750) {
        $('#navbar').addClass('background-true');
        $('.img-hidden').hide();

        $('#btn-next-img').removeClass("btn-hidden");
    }
    else {
        if ($(this).scrollTop() > 100) {
            $('#navbar').addClass('background-true');
        } 
        else {
            $('#navbar').removeClass('background-true');  
        }

        $('.img-hidden').show();
        $('.img-view').show();
        $('#btn-next-img').addClass("btn-hidden");
    }
})

/* Colocar cor de fundo na Barra de Navegação
depois de passar de determinado ponto da tela.
*/
$(window).scroll(function(){

    var screenWidth = $(window).width();

    if(screenWidth > 800) {
        
        if ($(this).scrollTop() > 50) {
            $('#navbar').addClass('background-true');
        } 
        else {
            $('#navbar').removeClass('background-true');  
        }
    }
    $('.img-view').show();
});


/* Trocar as imagens e textos dos produtos (telas maiores)*/
$(" .img-hidden").click(function(e) {
    if (String(e.target.tagName) == "IMG") {
        
        let imgs = document.getElementsByClassName(" prod-card");

        for(let i=0; i < imgs.length; i++) {
            if (!$(imgs[i]).hasClass(" img-hidden")) {

                $(imgs[i]).removeClass("img-view");
                $(imgs[i]).addClass("img-hidden");
            }
        }

        $(this).removeClass("img-hidden").addClass("img-view");
        $('.img-view').show();

        $("#products p").hide();
        $(`#content-${ String($(this).data("prod")) }`).show();

        $("#more-products").removeClass("curtains");
        $("#more-products").removeClass("wallpapers");
        $("#more-products").removeClass("persiennes");
        
        $("#more-products").addClass(String($(this).data("prod")));

        // console.log("ok");
    }
    
});

var img_index = 0;

/* Trocar as imagens e textos dos produtos 
quando a tela diminuir (mobile)*/
$("#btn-next-img").click(function(e) {
    const imgs = document.getElementsByClassName(" prod-card");
    console.log($(imgs[2]).data("prod"));

    $(".prod-card.img-view").removeClass("img-view").addClass("img-hidden");
    $(imgs[img_index]).removeClass("img-hidden").addClass("img-view");

    $("#products p").hide();
    $(`#content-${ String($(" .img-view").data("prod")) }`).show();

    $(" .img-hidden").hide();
    $(" .img-view").show();

    img_index += 1;

    if(img_index > 2) {
        img_index = 0;
    }
})

$("#more-products").click(function(e) {
    e.preventDefault();

    if($(this).hasClass("curtains")) {
        window.location.href = "cortinas";
    }
    else if($(this).hasClass("wallpapers")) {
        window.location.href = "papeisParede";
    }
    else if($(this).hasClass("persiennes")) {
        window.location.href = "persianas";
    }
})