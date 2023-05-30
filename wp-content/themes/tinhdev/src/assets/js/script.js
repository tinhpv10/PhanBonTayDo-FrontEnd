jQuery(document).ready(function ($) {
    var form_contact = $('#form-contact');
    $('#contact-button').click(function () {
        form_contact.addClass('active');
    });

    $('#close-contact-button').click(function () {
        form_contact.removeClass('active');
    });


    $('.list-features').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });
    $('#model').change(function () {
        window.location.replace($(this).val());
    });
    $('#series').change(function () {
        window.location.replace($(this).val());
    });

    $('input, textarea, select').not('#wp-comment-cookies-consent').not('input[type="checkbox"]').addClass('form-control');
})

$('.boxslider').slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow:"<div class='btn-left'><i class='bx bxs-chevron-left'></i></div>",
    nextArrow:"<div class='btn-right'><i class='bx bxs-chevron-left bx-flip-horizontal' ></i></div>",
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]
});

$('.img-single').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    infinite: true,
    asNavFor: '.box-slider'
});
$('.box-slider').slick({
    slidesToShow: 3,
    infinite: true,
    slidesToScroll: 1,
    asNavFor: '.img-single',
    centerMode: true,
    focusOnSelect: true,
    prevArrow:"<div class='btn-left'><i class='bx bxs-chevron-left'></i></div>",
    nextArrow:"<div class='btn-right'><i class='bx bxs-chevron-left bx-flip-horizontal' ></i></div>",
    
});


var header = document.getElementById("boxId");
var btns = header.getElementsByClassName("box-click");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

//
// function clickTand(){
//     var clickInfo = document.getElementById('info-product');
//     clickInfo.style.display = "block";
//     var clickInger = document.getElementById('inger-product');
//     clickInger.style.display = "none"
//     var clickImage = document.getElementById('image-product');
//     clickImage.style.display = "none";
//     var clickTand = document.getElementById('tand-product');
//     clickTand.style.display = "none";
// }
// function clickImage(){
//     var clickInfo = document.getElementById('info-product');
//     clickInfo.style.display = "none";
//     var clickInger = document.getElementById('inger-product');
//     clickInger.style.display = "block"
//     var clickImage = document.getElementById('image-product');
//     clickImage.style.display = "none";
//     var clickTand = document.getElementById('tand-product');
//     clickTand.style.display = "none";
// }
// function clickInger(){
//     var clickInfo = document.getElementById('info-product');
//     clickInfo.style.display = "none";
//     var clickInger = document.getElementById('inger-product');
//     clickInger.style.display = "none"
//     var clickImage = document.getElementById('image-product');
//     clickImage.style.display = "block";
//     var clickTand = document.getElementById('tand-product');
//     clickTand.style.display = "none";
// }
// function clickInfo(){
//     var clickInfo = document.getElementById('info-product');
//     clickInfo.style.display = "none";
//     var clickInger = document.getElementById('inger-product');
//     clickInger.style.display = "none"
//     var clickImage = document.getElementById('image-product');
//     clickImage.style.display = "none";
//     var clickTand = document.getElementById('tand-product');
//     clickTand.style.display = "block";
// }
