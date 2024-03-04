<!-- <link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" /> -->

<!-- <script src="js/msdropdown/jquery.dd.min.js"></script> -->

<!-- <link rel="stylesheet" type="text/css" href="css/msdropdown/flags.css" /> -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet"
    type="text/css" />
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=-x5xndDVLjlz1xkn1VyIKx6en6qXcGvAstHzE9CE6B7LD1Dzpr7id1sFYNWWt8paiullSoKLp-aAK4DhYLTfUOslgd4bbdeUVv6yPEoqJVHUxu62xO6KlG8RjRTQT1MZbunlEQqzS7YIzNxQY-1BwJAy5dvB-XJZQUdU584hwmZaPfyoUWNyfdoOq4mQLe4eO1gSoI9rjGW-iQaFus7fy5lSOmA8xTGSsZ2Xkd3ysxE" charset="UTF-8"></script><script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

<style>
    .flagshref {

        justify-content: flex-start !important;

    }

    .flg-mr {

        margin: 0 12px 0px 0px !important;

    }

    .skiptranslate {

        display: none;

    }

    .flag-ul {
        height: 400px;
        overflow: scroll;
        margin: 0 0 0 -18px;
    }
</style>

<!-- ======= Header ======= -->

<div id="preloader">
        <!-- <img src="assets/img/slide/loader.gif" alt="Loading..."> -->
    </div>

    <!--  -->

<header id="header" class="fixed-top ">

    <div class="container d-flex align-items-center justify-content-lg-between">



        <h1 class="logo me-auto me-lg-0"><a href="index.php"><img src="assets/img/logo.png"></a></h1>



        <nav id="navbar" class="navbar order-last order-lg-0">

            <ul>

                <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down"></i></a>

                    <ul>

                        <?php

                        $articals = mysqli_query($con, "select * from articals where type != 'static'");

                        while ($article = mysqli_fetch_array($articals)) {

                            ?>
                            <li><a href="<? echo $article['link'] ?>">
                                    <? echo $article['topic'] ?>
                                </a></li>
                        <?

                        }

                        ?>

                    </ul>

                </li>

                <li><a class="nav-link scrollto" href="about">About Us</a></li>

                <li><a class="nav-link scrollto" href="services">Services</a></li>
                
                <li><a class="nav-link scrollto " href="customers">Customers</a></li>

                <li><a class="nav-link scrollto" href="contact">Contact Us</a></li>

               
                <li class="dropdown notranslate"><a href="#"><span class="fixed-lang">Select Language</span> <i class="bi bi-chevron-down"></i></a>
                <!-- <li class="dropdown fdfs notranslate"><span class="fixed-lang"><a href="#"><span>Select Language</span>
                            <i class="bi bi-chevron-down"></i></a></span> -->

                            <ul class="flag-ulc notranslate" style="height: 400px;overflow: scroll;">

<li><a href="#" class="flagshref" onclick="translateLanguage('af');"><span class="flg-mr"><img
                src="assets/img/flag/af.png"
                style="width: 30px;height:20px;"></span>Afrikaans</a></li>
<li><a href="#" class="flagshref" onclick="translateLanguage('am');"><span class="flg-mr"><img
                src="assets/img/flag/am.png" style="width: 30px;height:20px;"></span>Amharic</a>
</li>
<li><a href="#" class="flagshref" onclick="translateLanguage('ar');"><span class="flg-mr"><img
                src="assets/img/flag/ar.png" style="width: 30px;height:20px;"></span>Arabic</a>
</li>
<li><a href="#" class="flagshref" onclick="translateLanguage('hy');"><span class="flg-mr"><img
                src="assets/img/flag/ad.png"
                style="width: 30px;height:20px;"></span>Armenian</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('as');"><span class="flg-mr"><img
                src="assets/img/flag/as.png"
                style="width: 30px;height:20px;"></span>Assamese</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('az');"><span class="flg-mr"><img
                src="assets/img/flag/az.png"
                style="width: 30px;height:20px;"></span>Azerbaijani</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('bm');"><span class="flg-mr"><img
                src="assets/img/flag/bm.png" style="width: 30px;height:20px;"></span>Bambara</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('eu');"><span class="flg-mr"><img
                src="assets/img/flag/eu.png" style="width: 30px;height:20px;"></span>Basque</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('be');"><span class="flg-mr"><img
                src="assets/img/flag/be.png"
                style="width: 30px;height:20px;"></span>Belarusian</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('bn');"><span class="flg-mr"><img
                src="assets/img/flag/in.png" style="width: 30px;height:20px;"></span>Bengali</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('bs');"><span class="flg-mr"><img
                src="assets/img/flag/bs.png" style="width: 30px;height:20px;"></span>Bosnian</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('bg');"><span class="flg-mr"><img
                src="assets/img/flag/bg.png"
                style="width: 30px;height:20px;"></span>Bulgarian</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('ca');"><span class="flg-mr"><img
                src="assets/img/flag/ca.png" style="width: 30px;height:20px;"></span>Catalan</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('zh-CN');"><span
            class="flg-mr"><img src="assets/img/flag/cn.png"
                style="width: 30px;height:20px;"></span>Chinese </a></li>

<!-- <li><a href="#" class="flagshref" onclick="translateLanguage('zh-TW');"><span
            class="flg-mr"><img src="assets/img/flag/tw.png"
                style="width: 30px;height:20px;"></span>Chinese </a></li> -->

                <li><a href="#" class="flagshref" onclick="translateLanguage('en');"><span class="flg-mr"><img
                    src="assets/img/flag/uk.png" style="width: 30px;height:20px;"></span>English</a>
    </li>

<li><a href="#" class="flagshref" onclick="translateLanguage('ee');"><span class="flg-mr"><img
                src="assets/img/flag/ee.png" style="width: 30px;height:20px;"></span>Ewe</a>
</li>
<li><a href="#" class="flagshref" onclick="translateLanguage('et');"><span class="flg-mr"><img
                src="assets/img/team-member/france.webp"
                style="width: 30px;height:20px;"></span>Estonia</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('tl');"><span class="flg-mr"><img
                src="assets/img/flag/tl.png"
                style="width: 30px;height:20px;"></span>Filipino</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('fi');"><span class="flg-mr"><img
                src="assets/img/flag/fi.png" style="width: 30px;height:20px;"></span>Finnish</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('fr');"><span class="flg-mr"><img
                src="assets/img/flag/fr.png" style="width: 30px;height:20px;"></span>French</a>
</li>


<li><a href="#" class="flagshref" onclick="translateLanguage('gl');"><span class="flg-mr"><img
                src="assets/img/flag/gl.png"
                style="width: 30px;height:20px;"></span>Galician</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('de');"><span class="flg-mr"><img
                src="assets/img/flag/de.png" style="width: 30px;height:20px;"></span>German</a>
</li>



<li><a href="#" class="flagshref" onclick="translateLanguage('gn');"><span class="flg-mr"><img
                src="assets/img/flag/gn.png" style="width: 30px;height:20px;"></span>Guarani</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('gu');"><span class="flg-mr"><img
                src="assets/img/flag/in.png"
                style="width: 30px;height:20px;"></span>Gujarati</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('hi');"><span class="flg-mr"><img
                src="assets/img/flag/in.png" style="width: 30px;height:20px;"></span>Hindi</a>
</li>
<li><a href="#" class="flagshref" onclick="translateLanguage('zh-TW');"><span
            class="flg-mr"><img src="assets/img/team-member/north.webp"
                style="width: 30px;height:20px;"></span>Hong Kong</a></li>




<li><a href="#" class="flagshref" onclick="translateLanguage('hu');"><span class="flg-mr"><img
                src="assets/img/flag/hu.png"
                style="width: 30px;height:20px;"></span>Hungarian</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('id');"><span class="flg-mr"><img
                src="assets/img/flag/id.png"
                style="width: 30px;height:20px;"></span>Indonesian</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('ga');"><span class="flg-mr"><img
                src="assets/img/flag/ga.png" style="width: 30px;height:20px;"></span>Irish
        Gaelic</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('it');"><span class="flg-mr"><img
                src="assets/img/flag/it.png" style="width: 30px;height:20px;"></span>Italian</a>
</li>



<li><a href="#" class="flagshref" onclick="translateLanguage('kn');"><span class="flg-mr"><img
                src="assets/img/flag/in.png" style="width: 30px;height:20px;"></span>Kannada</a>
</li>


<li><a href="#" class="flagshref" onclick="translateLanguage('km');"><span class="flg-mr"><img
                src="assets/img/flag/km.png" style="width: 30px;height:20px;"></span>Khmer</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('rw');"><span class="flg-mr"><img
                src="assets/img/flag/rw.png"
                style="width: 30px;height:20px;"></span>Kinyarwanda</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('ky');"><span class="flg-mr"><img
                src="assets/img/flag/ky.png" style="width: 30px;height:20px;"></span>Kyrgyz</a>
</li>



<li><a href="#" class="flagshref" onclick="translateLanguage('lt');"><span class="flg-mr"><img
                src="assets/img/flag/lt.png"
                style="width: 30px;height:20px;"></span>Lithuanian</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('lb');"><span class="flg-mr"><img
                src="assets/img/flag/lb.png"
                style="width: 30px;height:20px;"></span>Luxembourgish</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('ms');"><span class="flg-mr"><img
                src="assets/img/flag/ms.png" style="width: 30px;height:20px;"></span>Malay</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('ml');"><span class="flg-mr"><img
                src="assets/img/flag/in.png"
                style="width: 30px;height:20px;"></span>Malayalam</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('mt');"><span class="flg-mr"><img
                src="assets/img/flag/mt.png" style="width: 30px;height:20px;"></span>Maltese</a>
</li>


<li><a href="#" class="flagshref" onclick="translateLanguage('mr');"><span class="flg-mr"><img
                src="assets/img/flag/in.png" style="width: 30px;height:20px;"></span>Marathi</a>
</li>



<li><a href="#" class="flagshref" onclick="translateLanguage('mn');"><span class="flg-mr"><img
                src="assets/img/flag/mn.png" style="width: 30px;height:20px;"></span>
        <option value="mn">Mongolian
    </a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('my');"><span class="flg-mr"><img
                src="assets/img/flag/my.png" style="width: 30px;height:20px;"></span>Myanmar
    </a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('no');"><span class="flg-mr"><img
                src="assets/img/flag/no.png"
                style="width: 30px;height:20px;"></span>Norwegian</a></li>

                <li><a href="#" class="flagshref" onclick="translateLanguage('nl');"><span class="flg-mr"><img
                    src="assets/img/flag/nl.png"
                    style="width: 30px;height:20px;"></span>Netherlands</a></li>


<li><a href="#" class="flagshref" onclick="translateLanguage('om');"><span class="flg-mr"><img
                src="assets/img/flag/om.png" style="width: 30px;height:20px;"></span>Oromo</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('ps');"><span class="flg-mr"><img
                src="assets/img/flag/ps.png" style="width: 30px;height:20px;"></span>Pashto</a>
</li>



<li><a href="#" class="flagshref" onclick="translateLanguage('pl');"><span class="flg-mr"><img
                src="assets/img/flag/pl.png" style="width: 30px;height:20px;"></span>Polish</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('pt');"><span class="flg-mr"><img
                src="assets/img/flag/pt.png"
                style="width: 30px;height:20px;"></span>Portuguese</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('ro');"><span class="flg-mr"><img
                src="assets/img/flag/ro.png"
                style="width: 30px;height:20px;"></span>Romanian</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('ru');"><span class="flg-mr"><img
                src="assets/img/flag/ru.png" style="width: 30px;height:20px;"></span>Russian</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('sm');"><span class="flg-mr"><img
                src="assets/img/flag/sm.png" style="width: 30px;height:20px;"></span>Samoan</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('sa');"><span class="flg-mr"><img
                src="assets/img/flag/in.png"
                style="width: 30px;height:20px;"></span>Sanskrit</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('gd');"><span class="flg-mr"><img
                src="assets/img/flag/gd.png" style="width: 30px;height:20px;"></span>Scots
        Gaelic</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('sr');"><span class="flg-mr"><img
                src="assets/img/flag/sr.png" style="width: 30px;height:20px;"></span>Serbian</a>
</li>



<li><a href="#" class="flagshref" onclick="translateLanguage('sn');"><span class="flg-mr"><img
                src="assets/img/flag/sn.png" style="width: 30px;height:20px;"></span>Shona</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('sd');"><span class="flg-mr"><img
                src="assets/img/flag/sd.png" style="width: 30px;height:20px;"></span>Sindhi</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('si');"><span class="flg-mr"><img
                src="assets/img/flag/si.png" style="width: 30px;height:20px;"></span>Sinhala</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('sk');"><span class="flg-mr"><img
                src="assets/img/flag/sk.png" style="width: 30px;height:20px;"></span>Slovak</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('sl');"><span class="flg-mr"><img
                src="assets/img/flag/sl.png"
                style="width: 30px;height:20px;"></span>Slovenian</a></li>



<li><a href="#" class="flagshref" onclick="translateLanguage('sv');"><span class="flg-mr"><img
                src="assets/img/flag/sv.png"
                style="width: 30px;height:20px;"></span>Swedish</a></li>

<li><a href="#" class="flagshref" onclick="translateLanguage('tg');"><span class="flg-mr"><img
                src="assets/img/flag/tg.png" style="width: 30px;height:20px;"></span>Tajik</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('ta');"><span class="flg-mr"><img
                src="assets/img/flag/in.png" style="width: 30px;height:20px;"></span>Tamil</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('tt');"><span class="flg-mr"><img
                src="assets/img/flag/tt.png" style="width: 30px;height:20px;"></span>Tatar</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('te');"><span class="flg-mr"><img
                src="assets/img/flag/in.png" style="width: 30px;height:20px;"></span>Telugu</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('th');"><span class="flg-mr"><img
                src="assets/img/flag/th.png" style="width: 30px;height:20px;"></span>Thai</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('tr');"><span class="flg-mr"><img
                src="assets/img/flag/tr.png" style="width: 30px;height:20px;"></span>Turkish</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('tk');"><span class="flg-mr"><img
                src="assets/img/flag/tk.png" style="width: 30px;height:20px;"></span>Turkmen</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('ug');"><span class="flg-mr"><img
                src="assets/img/flag/ug.png" style="width: 30px;height:20px;"></span>Uyghur</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('uz');"><span class="flg-mr"><img
                src="assets/img/flag/uz.png" style="width: 30px;height:20px;"></span>Uzbek</a>
</li>

<li><a href="#" class="flagshref" onclick="translateLanguage('cy');"><span class="flg-mr"><img
                src="assets/img/flag/cy.png" style="width: 30px;height:20px;"></span>Welsh</a>
</li>

</ul>
                </li>






                </li>

            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>







        </nav><!-- .navbar -->



        <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

        <script>

            $(function () {
                const language = navigator.language;
                var url = window.location.href;
                const languageParam = url.split('#')[1];

                if (languageParam && languageParam.includes('googtrans')) {
                    const languages = languageParam.split('(')[1].split(')')[0].split('|');
                    const sourceLanguage = languages[0];
                    const targetLanguage = languages[1];
                    var targetHtml = $('[onclick="translateLanguage(\'' + targetLanguage + '\');"]').prop('outerHTML');
                    $('.fixed-lang').html(targetHtml);
                } else {
                    setTimeout(function () {
                        var default_lang = $('html').attr('lang');
                        // translateLanguage('en')
                        var targetHtml = $('[onclick="translateLanguage(\'' + default_lang + '\');"]').prop('outerHTML');
                        $('.fixed-lang').html(targetHtml);
                    }, 3000);
                }
            });

            $(document).ready(function () {

                setTimeout(function () {

                    $("body").removeAttr("style");

                }, 500);

            });



            function googleTranslateElementInit() {

                new google.translate.TranslateElement({ layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT }, 'google_translate_element');

            }



            function translateLanguage(lang) {

                $("body").removeAttr("style");

                jQuery('.goog-te-combo').val(lang);

                window.location = "#googtrans(en|" + lang + ")";

                location.reload();

            }


            // -----------loader-----------------//

            $(document).ready(function () {
    $("#preloader").show();

    setTimeout(function () {
        $("#preloader").hide();
    }, 3000);
});



        </script>

        <script type="text/javascript"
            src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <!-- <script>

            $(document).ready(function () {

                $("#countries").msDropdown();

            })

        </script> -->

    </div>

</header><!-- End Header -->