
<script src="{{url('public/home/js/jquery-ui.min.js')}}"></script>
<script>
    $(function () {
        $("#datepicker").datepicker({
            isRTL: true
        });
    });
</script>
<script src="{{url('public/home/js/top.js')}}"></script>

<!--//////animate //////////-->
<script>
    $(function () {

        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;

        if (isTouch) {
            $('.revealOnScroll').addClass('animated');
        }

        $window.on('scroll', revealOnScroll);

        function revealOnScroll() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;

            // Showed...
            $(".revealOnScroll:not(.animated)").each(function () {
                var $this = $(this),
                    offsetTop = $this.offset().top;

                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function () {
                            $this.addClass('animated ' + $this.data('animation'));
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            // Hidden...
            $(".revealOnScroll.animated").each(function (index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
                }
            });
        }

        revealOnScroll();
    });
</script>

<!--////// Start tabs //////////-->
<script src="{{url('public/home/js/cbpFWTabs.js')}}"></script>
<script>
    (function () {

        [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
            new CBPFWTabs(el);
        });

    })();
</script>
<!--////// end tabs //////////-->


<!--////// Start Slider //////////-->
<!-- REVOLUTION JS FILES -->
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('public/home/slider/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<script type="text/javascript">
    var tpj = jQuery;
    var revapi4;
    tpj(document).ready(function () {
        if (tpj("#homeslider").revolution == undefined) {
            revslider_showDoubleJqueryError("#homeslider");
        } else {
            revapi4 = tpj("#homeslider").show().revolution({
                sliderType: "standard",
                jsFileLocation: "slider/revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        enable: false,
                    }
                    ,
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "persephone",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "right",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },
                responsiveLevels: [1700, 1367, 1024, 778, 480],
                gridwidth: [1367, 1240, 1024, 778, 480],
                gridheight: [600, 500, 500, 500, 400],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });	/*ready*/
</script>
<!--////// Start Slider //////////-->

<!--////// mobil menü //////////-->
<script type="text/javascript" src="{{url('public/home/js/mobile.js')}}"></script>


<script language="JavaScript">
    function formCheck(formobj) {
        var fieldRequired = Array("ad_soyad", "dogum_yer_tarih", "e_posta", "gsm", "medeni_durum", "adres", "mezun_bit_yil", "cvDosya", "onaykodu");
        var fieldDescription = Array("AD-SOYAD", "DOĞUM YERİ TARİHİ", "E-POSTA ADRESİ", "TELEFON", "MEDENİ DURUMU", "ADRES", "SON MEZUN OLDUĞU OKUL ve BİTİRME YILI", "ÖZGEÇMİŞ EKLE", "GÜVENLİK KODU");
        var alertMsg = "Lütfen aşağıda listesi verilmiş olan form alanlarını doldurunuz:\n";

        var l_Msg = alertMsg.length;

        for (var i = 0; i < fieldRequired.length; i++) {
            var obj = formobj.elements[fieldRequired[i]];
            if (obj) {
                switch (obj.type) {
                    case "select-one":
                        if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].value == "") {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    case "select-multiple":
                        if (obj.selectedIndex == -1) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    case "text":
                    case "textarea":
                        if (obj.value == "" || obj.value == null) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    default:
                        if (obj.value == "" || obj.value == null) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                }
            }
        }
        if (alertMsg.length == l_Msg) {
            submitonce(formobj) // <<=== put call to submitonce here
            return true;
        } else {
            alert(alertMsg);
            return false;
        }
    }

    function submitonce(theform) {
        //if IE 4+ or NS 6+
        if (document.all || document.getElementById) {
            //screen thru every element in the form, and hunt down "submit" and "reset"
            for (i = 0; i < theform.length; i++) {
                var tempobj = theform.elements[i]
                if (tempobj.type.toLowerCase() == "submit" || tempobj.type.toLowerCase() == "reset")
                //disable em
                    tempobj.disabled = true
            }
        }
    }

    //-->
</script>
<script language="JavaScript">

    function formCheck1(formobj) {
        var fieldRequired = Array("ad_soyad", "telefon", "e_posta", "bilgi", "onaykodu1");
        var fieldDescription = Array("AD-SOYAD", "TELEFON", "E-POSTA ADRESİ", "MESAJ", "GÜVENLİK KODU");
        var alertMsg = "Lütfen aşağıda listesi verilmiş olan form alanlarını doldurunuz:\n";

        var l_Msg = alertMsg.length;

        for (var i = 0; i < fieldRequired.length; i++) {
            var obj = formobj.elements[fieldRequired[i]];
            if (obj) {
                switch (obj.type) {
                    case "select-one":
                        if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].value == "") {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    case "select-multiple":
                        if (obj.selectedIndex == -1) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    case "text":
                    case "textarea":
                        if (obj.value == "" || obj.value == null) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    default:
                        if (obj.value == "" || obj.value == null) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                }
            }
        }
        if (alertMsg.length == l_Msg) {
            submitonce(formobj) // <<=== put call to submitonce here
            return true;
        } else {
            alert(alertMsg);
            return false;
        }
    }

    function submitonce(theform) {
        //if IE 4+ or NS 6+
        if (document.all || document.getElementById) {
            //screen thru every element in the form, and hunt down "submit" and "reset"
            for (i = 0; i < theform.length; i++) {
                var tempobj = theform.elements[i]
                if (tempobj.type.toLowerCase() == "submit" || tempobj.type.toLowerCase() == "reset")
                //disable em
                    tempobj.disabled = true
            }
        }
    }

    //-->
</script>
<script language="JavaScript">
    function formCheck2(formobj) {
        var fieldRequired = Array("adi_soyadi", "firma_adi", "e_posta", "onaykodu3");
        var fieldDescription = Array("AD SOYAD", "FİRMA İSMİ", "E-POSTA ADRESİ", "GÜVENLİK KODU");
        var alertMsg = "Lütfen aşağıda listesi verilmiş olan form alanlarını doldurunuz:\n";

        var l_Msg = alertMsg.length;

        for (var i = 0; i < fieldRequired.length; i++) {
            var obj = formobj.elements[fieldRequired[i]];
            if (obj) {
                switch (obj.type) {
                    case "select-one":
                        if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].value == "") {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    case "select-multiple":
                        if (obj.selectedIndex == -1) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    case "text":
                    case "textarea":
                        if (obj.value == "" || obj.value == null) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                        break;
                    default:
                        if (obj.value == "" || obj.value == null) {
                            alertMsg += " - " + fieldDescription[i] + "\n";
                        }
                }
            }
        }
        if (alertMsg.length == l_Msg) {
            submitonce(formobj) // <<=== put call to submitonce here
            return true;
        } else {
            alert(alertMsg);
            return false;
        }
    }

    function submitonce(theform) {
        //if IE 4+ or NS 6+
        if (document.all || document.getElementById) {
            //screen thru every element in the form, and hunt down "submit" and "reset"
            for (i = 0; i < theform.length; i++) {
                var tempobj = theform.elements[i]
                if (tempobj.type.toLowerCase() == "submit" || tempobj.type.toLowerCase() == "reset")
                //disable em
                    tempobj.disabled = true
            }
        }
    }

    //-->
</script>
<script>
    // global app configuration object
    var config = {
        trans: {
            lang_path: "{{url('public/home/lang')}}"
        }
    }
</script>
<script src="{{url('public/home/js/script.js?v=2021')}}"></script>

</body>

</html>
