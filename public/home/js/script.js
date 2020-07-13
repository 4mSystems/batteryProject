var language = null;
(function () {
    if (localStorage.getItem("language") != null) {
        $.ajax({
            url: config.trans.lang_path+'/' + localStorage.getItem('language') + '.json',
            dataType: 'json', async: false, dataType: 'json',
            success: function (lang) { language = lang }
        });
        $("#langVal").text("عربى");
        $("#langVal2").text("عربى");
        $(".iletisim_adres_yer p").css({
            "text-align":"left",
            "font-family":"arial",
            "line-height":"24px",
            "font-size":"18px"
        });
        $(".menu li").css({
            "float":"left"
        })
    }else{
        console.log( $("#langVal").text());
    }
}());

function setLanguage() {
    if (localStorage.getItem("language") == null) {
        localStorage.setItem('language', "English");
    } else if (localStorage.getItem("language") == "English") {
        localStorage.clear();
    }
    window.location.reload(true);
}

$(document).ready(function () {
    if (language != null) {
        /******* Start nav bar section  **************/
        $('#link1').text(language.home);
        $('#link7').text(language.home);

        $('#link2').text(language.product);
        $('#link8').text(language.product);
        $('#products_title').text(language.product);

        $('#link3').text(language.about);
        $('#link9').text(language.about);
        $("#about-us").text(language.about);

        $('#link5').text(language.quality);
        $('#link11').text(language.quality);
        $('#quality').text(language.quality);

        $('#link6').text(language.contact);
        $('#link12').text(language.contact);
        $('#contact').text(language.contact);

        $('#link4').text(language.RD);
        $('#link10').text(language.RD);
        $('#RD').text(language.RD);
        /******* End nav bar section  **************/
        $(".btShow").text(language.btShow);
        /******* Start prodcut  section  **************/

        $('#products_des').text(language.product_des);
        /******* End prodcut  section  **************/

        /*************** Start sliders paragraph ******* */
        $("#slider-paragraph1-1").text(language.slider_paragraph1_1);
        $("#slider-paragraph1-2").text(language.slider_paragraph1_2);
        $("#slider-paragraph2-1").text(language.slider_paragraph2_1);
        $("#slider-paragraph2-2").text(language.slider_paragraph2_2);
        $("#slider-paragraph3-1").text(language.slider_paragraph3_1);
        $("#slider-paragraph3-2").text(language.slider_paragraph3_2);
        $("#slider-paragraph4-1").text(language.slider_paragraph4_1);
        $("#slider-paragraph4-2").text(language.slider_paragraph4_2);
        /*************** End  sliders paragraph ******* */

        /*************** Start About us ******* */
        $("#aboutP1").text(language.aboutP1);
        $("#aboutP2").text(language.aboutP2);
        $("#aboutP3").text(language.aboutP3);
        $("#aboutP4").text(language.aboutP4);
        /*************** End About us ******* */

         /*************** Start why we ******* */
         $("#whyP1").text(language.whyP1);
         $("#whyP2").text(language.whyP2);
         $("#whyP3").text(language.whyP3);
         /*************** End why we ******* */

          /*************** Start Vision ******* */
        $("#visionP1").text(language.visionP1);
        $("#visionP2").text(language.visionP2);
        $("#visionP3").text(language.visionP3);
        $("#visionP4").text(language.visionP4);
        /*************** End Vision ******* */

           /*************** Start contact ******* */
           $("#contact1").text(language.contact1);
           $("#contact_address").text(language.contact_address);
           $("#contact2").text(language.contact2);
           $("#contact3").text(language.contact3);
           $("#contact4").text(language.contact4);
           $("#copy_rights").text(language.copy_rights);
           /*************** End contact ******* */
    }
    $(".parent").fadeOut();
    $("body").fadeIn();
});
/****************************************************** End Language ********************************************************************/

/************************************************** Start pop up dialog  ***************************************************************** */
function openModal(id) {
    $('#mainSlide').html('');
    $('#column').html('');
                                  $.ajax({
                                    url: "product_view/" + id + "/view",
                                    dataType: "json",
                                    success: function (html) {
                                         $('#main_image img').attr('src', html.main_image);
                                        $('#main_column img').attr('src', html.main_image);
var counter=2;
                                        for (i = 0; i < html.data.length; ++i) {
                                           var data="<div class='mySlides'><img src="+html.data[i].detail_image+" width='100%' height='500px'> </div>";
                                           var column="<div class='column'><img class='demo cursor' src="+html.data[i].detail_image+" width='100px' height='30px' onclick='currentSlide("+counter+")' alt='Nature and sunrise'></div>";
                                             $('#mainSlide').append(data);
                                            $('#column').append(column);
                                            counter++;
                                        }

                                    }

                                });

    document.getElementById("myModal").style.display = "block";
  }

  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
     showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
/************************************************** End pop up dialog  ***************************************************************** */
