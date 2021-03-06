@include('layout.head')
<!-- ********************* start Products Section ***********************************-->
<section id="products">
    <header class="products_baslik font_xlbold">
        <h1 class="revealOnScroll" data-animation="fadeInUp" data-timeout="400" id="products_title">المنتجات</h1>
        <div class="header_altbaslik revealOnScroll" data-animation="fadeInUp" data-timeout="800">
            <p id="products_des">.من فضلك قم بالضغط على المنتج لإظهار التفاصيل</p>
        </div>
    </header>
    <section class="products_list cd-section" id="cd-team">
        <div class="rows">
            <ul class="grid">

                @foreach($products as $rows)
                    <li class="revealOnScroll" data-animation="fadeInUp" data-timeout="10">
                        <figure class="effect-jazz">
                            <div class="battary_shaps" style="background-image:url({{$rows->Product_image}})">
                            </div>
                            <figcaption class="revealOnScroll" data-animation="fadeInUp">
                                <h2>{{$rows->name}}</h2>
                                <p class="btShow">اضغط هنا لعرض التفاصيل</p>
                                <!-- onclick="openModal();currentSlide(1)"
									view_details -->
                                <a id="product_id" class="fancybox" onclick="openModal('{{$rows->id}}');currentSlide(1)"
                                   class="hover-shadow cursor"></a>

                            </figcaption>
                        </figure>
                    </li>


                @endforeach
            </ul>
        </div>
    </section>
</section>
<!-- ********************* end Products Section ***********************************-->

<!-- ********************* Start About us  Seciton ********************************-->
<section class="fullheight">
    <header class="products_baslik font_xlbold">
        <h1 class="revealOnScroll" data-animation="fadeInUp" data-timeout="400" id="about-us">عن الشركة</h1>
    </header>
    <div class="iletisim_sol">
        <figure class="iletisim_solresim revealOnScroll" data-animation="fadeInUp"
                style="background-image:url({{url('public/home/img/about.png')}})">
        </figure>
        <div class="iletisim_sag">
            <div class="iletisim_adres_yer revealOnScroll" data-animation="fadeInUp" data-timeout="400">
                <p id="aboutP1">الشركة الإيطالية المصرية للصناعات البلاستيكية الرائدة على أعلى مستوى لتصنيع صناديق
                    وأغطية بطاريات السيارات وبطاريات الموتوسيكل بجميع أنواعها و طرازاتها المختلفة</p>

                <p id="aboutP2">بدأت فكرة إنشاء الشركة في عام 2016 وبدأت العمل الفعلي علي أرض الواقع من 2019 بعد
                    استكمال جميع الماكينات والاسطمبات الخاصة بالتصنيع ، وفي خلال هذه الأعوام اكتسبنا الخبرة اللازمة
                    التي تؤهلنا للعمل بقوة في المجال، حيث فى فترة قصيرة نجحنا في كسب ثقة السوق المحلى وتعاملت الشركة
                    المصرية الإيطالية مع جميع شركات تصنيع البطاريات المحلية دون استثناء</p>

                <p id="aboutP3">وأيضا نحن وكلاء شركة <bdi>DAKUMAR</bdi> لتصنيع ماكينات الحقن وتعتبر من أهم الشركات
                    على مستوى العالم</p>

                <p id="aboutP4">ونحن نسعى لترسيخ هذه السمعة من خلال تقديم أفضل جودة للعملاء على مستوى العالم، ونطمح
                    لأن نكون الخيار الأول عندما يتعلق الأمر بالصناعات البلاستيكية لتصنيع صناديق وأغطية بطاريات
                    السيارات والموتوسيكل ، وأن نقدم لشركائنا نجاحاً قيماً يدوم طويلاً</p>
            </div>
        </div>
    </div>
</section>
<!-- ********************* Start About us  Seciton ********************************-->

<!-- ********************* Start R&D  Seciton ********************************-->
<section class="fullheight">
    <header class="products_baslik font_xlbold">
        <h1 class="revealOnScroll" data-animation="fadeInUp" data-timeout="400" id="RD">لماذا نحن</h1>
    </header>
    <div class="iletisim_sol">
        <figure class="iletisim_solresim revealOnScroll" data-animation="fadeInUp"
                style="background-image:url({{url('public/home/img/about.png')}})">
        </figure>
        <div class="iletisim_sag">
            <div class="iletisim_adres_yer revealOnScroll" data-animation="fadeInUp" data-timeout="400">
                <p id="whyP1">فريق عمل ذو خبرة وكفاءة عالية أكثر من 10 عاماً لتقديم اعلى جودة وفقا للمعايير العالمية مع السرعة والدقة فى التنفيذ وكذلك خبره اكثر من 15 عاما في مجال تصنيع بطاريات السيارات مما اعطى لنا خبره واسعه في تقديم المواصفات المناسبه والدقيقه لمصنعي البطاريات</p>

                <p id="whyP2">نقوم بتصنيع جميع المكونات البلاستيكية الخاصة بتصنيع بطاريات السيارات والموتوسيكل بما فيها العين السحرية للبطاريات بجميع مقاساتها</p>

                <p id="whyP3">نعمل بـقوالب حقن تتميز بجودتها العالية والمصنعة بواسطة أفضل الشركات العالمية لتصنيع اسطمبات حقن البلاستيك</p>

            </div>
        </div>

    </div>
</section>
<!-- ********************* Start R&D  Seciton ********************************-->

<!-- ********************* Start Quality  Seciton ********************************-->
<section class="fullheight">
    <header class="products_baslik font_xlbold">
        <h1 class="revealOnScroll" data-animation="fadeInUp" data-timeout="400" id="quality">رؤيتنا و أهدافنا</h1>
    </header>
    <div class="iletisim_sol">
        <figure class="iletisim_solresim revealOnScroll" data-animation="fadeInUp"
                style="background-image:url({{url('public/home/img/about.png')}})">
        </figure>
        <div class="iletisim_sag">
            <div class="iletisim_adres_yer revealOnScroll" data-animation="fadeInUp" data-timeout="400">
                <p id="visionP1">تصنيع صناديق وأغطية بطاريات السيارات والموتوسيكل بجودة ممتازة منافسة للشركات العالمية</p>
                <p id="visionP2">الاحتفاظ الدائم على أعلي مستوي من الجودة لجميع العملاء وكذلك الحفاظ على التطوير المستمر الذي يواكب التطور الدائم في مجالات التصنيع</p>
            </div>
        </div>
    </div>
</section>
<!-- ********************* Start Quality  Seciton ********************************-->


<!-- ********************* Start Contact With Us *********************************-->
 <section class="fullheight">
    <header class="products_baslik font_xlbold">
        <h1 class="revealOnScroll" data-animation="fadeInUp" data-timeout="400" id="contact">تواصل معنا</h1>
    </header>
    <div class="iletisim_sol">
        <figure class="iletisim_solresim revealOnScroll" data-animation="fadeInUp"
                style="background-image:url({{url('public/home/img/about.png')}}">
        </figure>
        <div class="iletisim_sag">
            <div class="iletisim_adres_yer revealOnScroll" data-animation="fadeInUp" data-timeout="400">
                <div class="rows top20"><strong id="contact1">العنوان</strong></div>
                <div class="rows">
                    <a target="blank" id="contact_address"
                       href="https://www.google.com/maps/place/30%C2%B038'36.8%22N+31%C2%B056'57.8%22E/@30.6436889,31.9492478,20z/data=!4m5!3m4!1s0x0:0x0!8m2!3d30.6435626!4d31.9493739?hl=en">الصالحية
                        الجديدة - المنطقة الصناعية الثانية - القطعة 91&93 - محافظة الشرقية - مصر</a>
                </div>
                <div class="rows top20"><strong id="contact2">رقم التليفون الارضى</strong></div>
                <div class="rows"><a href="tel:002553202320">0020553202320</a></div>
                <div class="rows top20"><strong id="contact3">رقم تليفون المبيعات</strong></div>
                <div class="rows"><a href="tel:00201018591759">00201018591759</a></div>
                <div class="rows"><a href="tel:01018591759">00201208421314</a></div>
                <div class="rows top20"><strong id="contact4">البريد الالكترونى</strong></div>
                <div class="rows"><a href="mailto:Sales@ie-battplast.com">Sales@ie-battplast.com</a></div>
                <div class="rows"><a href="mailto:info@ie-battplast.com">info@ie-battplast.com</a></div>
                <div class="rows">
                    <a target="_blank" href="https://www.facebook.com/Italian-Egyptian-Co-for-Plastic-Authorized-agent-of-Dakumar-Group-111590727165401/"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a target="_blank" href="https://twitter.com/IePlast"><i class="fab fa-twitter-square fa-2x"></i></a>
                    <a target="_blank" href="https://www.instagram.com/iebattplast"><i class="fab fa-instagram-square fa-2x"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCOFHFkkSvw1mILH9_4iFVWA/?guided_help_flow=5"><i class="fab fa-youtube fa-2x"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/iebattplast"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a target="_blank" href="https://www.google.com/maps/place/30%C2%B038'36.8%22N+31%C2%B056'57.8%22E/@30.6436889,31.9492478,20z/data=!4m5!3m4!1s0x0:0x0!8m2!3d30.6435626!4d31.9493739?hl=en"><i class="fas fa-map-marked-alt fa-2x"></i></a>
                </div>
            </div>
        </div>

    </div>
    <!-- ********************* end Contact With Us *********************************-->

    <footer id="footer">
        <section class="section">
            <div class="copyright" id="copy_rights"> &copy; جميع الحقوق محفوظة 2020 للشركة المصرية الإيطالية للبلاستيك</div>
            <div class="orbit" ></div>

            <div class="bilgitoplumu">
                <a href="https://www.facebook.com/TitansAdsCompany/"
                                          target="_blank">Designed & Developed by Titans </a> &<a
                    href="https://www.facebook.com/4m.Managers/" target="_blank"> 4M</a>
            </div>
        </section>
        <!-- section / -->
    </footer>
    <!-- footer / -->
</section>

<!-- section / -->

<a href="#0" class="cd-top">Top</a>


<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class="mySlides" id='main_image'>
            <img width='100%' height='500px'>
        </div>

        <div id="mainSlide">

        </div>

        <a class="prev" onclick="plusSlides(-1)" style="color:#0b449b">&#10094;</a>
        <a class="next" onclick="plusSlides(1)" style="color:#0b449b">&#10095;</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>
        <div class="column" id='main_column'>
            <img class="demo cursor" style="width:100%" onclick="currentSlide(1)" width='100px' height='30px'
                 alt="Nature and sunrise">
        </div>
        <div id='column'></div>
    </div>
</div>


@include('layout.foot')

