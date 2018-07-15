<?php
$pagetitle = 'Strona główna';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap-social.css"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/jquery.timelinr-0.9.7.js"></script>
    <script>
        $(function () {
            $().timelinr({
                autoPlay: 'true',
                autoPlayDirection: 'forward'
            })

            $("a.nav-link[href^='#']").on('click', function(e) {
                // prevent default anchor click behavior
                e.preventDefault();

                // store hash
                var hash = this.hash;

                // animate
                console.log($(hash).offset().top);
                console.log($(hash).offset().top + 50.0);
                var newTop = $(hash).offset().top  - 500;
                $('html, body').animate({
                    scrollTop: newTop
                }, 300, function(){

                    // when done, add hash to url
                    // (default click behaviour)
                    window.location.hash = hash;
                });

            });
        });

    </script>
    <meta charset="UTF-8">
    <title>Dagmara Tęga - CV</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="250">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
        <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
                <a class="nav-link" href="dagmaratega.pl"><span class="fas fa-infinity" aria-hidden="true"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#omnie"><span class="fa fa-user" aria-hidden="true"></span> O&nbsp;mnie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#wyksztalcenie"><span class="fa fa-graduation-cap" aria-hidden="true"></span>
                    Wykształcenie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#doswiadczenie"><span class="fab fa-black-tie" aria-hidden="true"></span>
                    Doświadczenie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#umiejetnosci"><span class="fa fa-wrench" aria-hidden="true"></span>
                    Umiejętności</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#certyfikaty"><span class="fas fa-award" aria-hidden="true"></span>
                    Certyfikaty</a>
            </li>

        </ul>
    </div>
    &nbsp;
    <div class="mx-auto my-2 order-0 order-md-1 position-relative">
        <a class="mx-auto" href="#">
            <img src="/menu.jpg" class="rounded-circle">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
        <ul class="navbar-nav mr-auto text-center">
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="#publikacje"><span class="fa fa-quote-left" aria-hidden="true"></span>
                    Publikacje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#szkolenia"><span class="fa fa-university" aria-hidden="true"></span>
                    Szkolenia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#dzialalnosc"><span class="fab fa-react" aria-hidden="true"></span>
                    Działalność</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#hobby"><span class="fas fa-gamepad" aria-hidden="true"></span> Hobby</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cv"><span class="fa fa-paperclip" aria-hidden="true"></span> CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#kontakt"><span class="fa fa-envelope" aria-hidden="true"></span> Kontakt</a>
            </li>

            &nbsp;
            <li class="nav-iitem">
                <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/dagmara-t%C4%99ga/">
                    <span class="fab fa-linkedin"></span>
                </a>
            </li>
            &nbsp; &nbsp;
            <li class="nav-iitem">
                <a class="btn btn-social-icon btn-github" href="https://github.com/DagaxD">
                    <span class="fab fa-github"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>


<div class="shadow jumbotron text-center navigation-top-padding">

    <h1>Dagmara Tęga </h1><h4>Curriculum Vitae</h4>

</div>

<div class="container container-row">

    <div id="omnie">
        <h3 style="text-align: center;"><span class="fa fa-user" aria-hidden="true"></span> O mnie</h3><br/>
        <div class="row">

            <div class="col-lg-3">
                <img src="images/me.jpg" alt="Placeholder" class="rounded foto">
            </div>

            <div class="col-lg-6">
                <br/>
                <b>Poszukuję pracy jako:</b><br/> Web Developer
                <hr>
                <b>Data urodzenia:</b> <br/>03.02.1993<br/>
                <b>Miejsce zamieszkania: </b> <br/>Szczecin<br/>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12" style="margin-top:30px;">
                Jestem z zawodu nauczycielem matematyki, jednak od około 10 lat pasjonuję się tworzeniem stron
                internetowych oraz blogów. Mam również doświadczenie w edycji sklepu internetowego na platformie
                shoper.pl. Jako, że tworzenie jest nieodłączną częścią mojego życia, to i w dziedzinie programowania
                bardzo chętnie uczę się i poznaję nowe możliwości, wykorzystując je w moich projektach. Często jestem
                uparta, co niekiedy okazuje się być zaletą - nie poddaję się dopóki nie zobaczę zamierzonego efektu.
            </div>
        </div>
        <div class="clear"></div>

    </div>


    <div id="wyksztalcenie">
        <h3 style="text-align: center; margin-top:100px;"><span class="fas fa-graduation-cap" aria-hidden="true"></span>
            Wykształcenie</h3>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top smaller-card-image" src="us.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">2015 - 2017</h4>
                        <hr>
                        <p class="card-text">Uniwersytet Szczeciński<br/>Wydział Matematyczno-Fizyczny<br/><b>Studia
                                2-go stopnia</b><br/>
                        <hr>
                        <b>Kierunek:</b> Matematyka<br/> <b>Specjalność:</b> Nauczycielska</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top smaller-card-image" src="wsb.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">2015 - 2016</h4>
                        <hr>
                        <p class="card-text">Wyższa Szkoła Bankowa w Poznaniu <br/>Wydział Ekonomiczny w Szczecinie<br/>
                            <b>Studia podyplomowe</b>
                        <hr>
                        <b>Kierunek:</b> <br/>Organizacja i Zarządzanie Oświatą</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top smaller-card-image" src="us.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">2012 - 2015</h4>
                        <hr>
                        <p class="card-text"> Uniwersytet Szczeciński<br/>Wydział Matematyczno-Fizyczny<br/><b>Studia
                                1-go stopnia</b><br/>
                        <hr>
                        <b>Kierunek:</b> Matematyka<br/> <b>Specjalność:</b> Nauczycielska</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br/>
    <div id="doswiadczenie">
        <h3 style="text-align: center; margin-top:100px;"><span class="fab fa-black-tie" aria-hidden="true"></span>
            Doświadczenie</h3>
        <div class="parallax"></div>

        <div class="container teacher">

            <h4><span class="fas fa-chalkboard-teacher" aria-hidden="true" style="margin-bottom:20px;"></span> Poprzedni
                zawód</h4>
            <div class="row">
                <div class="col-lg-4 zawod">
                    <i class="fab fa-earlybirds" style="font-size: 101px; margin-bottom:20px;"></i>
                    <br/>
                    <b>2014 - obecnie</b>
                    <hr>
                    Udzielanie korepetycji uczniom <br/>(szkoła podstawowa - liceum)
                </div>
                <div class="col-lg-4 zawod"><img src="55.jpg" style="width:100px;margin-bottom:20px;"><br/><b>01.09.2017
                        – 30.06.2018</b>
                    <hr>
                    Nauczyciel matematyki <br/>w Szkole Podstawowej nr 55
                </div>
                <div class="col-lg-4 zawod"><img src="2+2.png" style="width:166px;margin-bottom:20px;"><br/><b>11.2015 –
                        06.2016</b>
                    <hr>
                    Korepetytor </br>w "Szkole Matematyki 2+2"
                </div>

                <br>
            </div>
        </div>
        <div class="parallax"></div>
    </div>

    <div id="umiejetnosci">

        <h2 style="text-align: center;margin-top:270px; margin-bottom:40px;">
            <span class="fas fa-wrench" aria-hidden="true"></span>
            Umiejętności
        </h2>

        <div class="row">
            <div class="col-lg-12">
                <script>

                    $(function () {

                        var $progressBar = $('.progress-bar');

                        var progress = 0;      // initial value of your progress bar
                        var timeout = 10;      // number of milliseconds between each frame
                        var increment = .5;    // increment for each frame
                        var maxprogress = 60; // when to leave stop running the animation

                        function animate() {
                            setTimeout(function () {
                                progress += increment;
                                $progressBar.text(progress + "%");

                                if (progress < maxprogress) {
                                    $progressBar.css('width', progress + "%");
                                    animate();
                                }
                            }, timeout);
                        };
                        animate();
                    });

                </script>

                HTML
                <div class="progress progress-bar" style="width:0%">0%</div>
                CSS
                <div class="progress progress-bar" style="width:0%">0%</div>
                PHP
                <div class="progress progress-bar" style="width:0%">0%</div>
                BOOTSTRAP
                <div class="progress progress-bar" style="width:0%">0%</div>
                JQUERY
                <div class="progress progress-bar" style="width:0%">0%</div>
            </div>
            <div class="col-lg-6">
                <h4><span class="fab fa-weixin" aria-hidden="true"></span> Języki</h4>
                <p>Język angielski
                <div class="progress">
                    <div class="progress-bar" style="width:67%">B2</div>
                </div>
                <br>
                Język niemiecki
                <div class="progress">
                    <div class="progress-bar" style="width:34%">A2</div>
                </div>
                </p></div>
            <div class="col-lg-6">
                <h4>Umiejętności dodatkowe</h4>
                <ul>
                    <li>prawo jazdy kat. B</li>
                    <li>umiejętności manualne</li>
                    <li>umiejętność organizacji pracy.</li>
                </ul>
            </div>
        </div>
    </div>


    <div id="certyfikaty">
        <h3 style="text-align: center; margin-top:100px; margin-bottom:30px;"><span class="fas fa-award" aria-hidden="true"></span>
            Certyfikaty
        </h3>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="card" style="height:380px;">
                    <img class="card-img-top" src="images/6.png"
                         style="padding-left:80px; padding-right:80px; padding-top:10px; padding-bottom:10px;"
                         alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">IAI PHP CAMP #2</h4>
                        <p class="card-text">Certyfikat uczestnictwa w warsztatach</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="images/udemy.jpg"
                         style="padding-left:80px; padding-right:80px; padding-top:30px;" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Introduction to Databases and SQL Querying</h4>
                        <p class="card-text">Certyfikat ukończenia kursu</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="publikacje">
        <h3 style="text-align: center;margin-top:100px;padding-bottom:20px;"><span class="fas fa-quote-left" aria-hidden="true"></span> Publikacje
        </h3>
        <div class="row">
            <div class="col-lg-6">
                <b>2016</b>
                <hr>
                Poziomy rozumienia pojęć matematycznych uczniów w procesie fotoedukacji / Zeszyt Naukowy Zakładu
                Dydaktyki Matematyki Instytutu Matematyki Wydziału Matematyczno-Fizycznego Uniwersytetu Szczecińskiego:
                X Międzynarodowa Konferencja Naukowa Dydaktyków Matematyki z cyklu: „Matematyka – nasza niedostrzegalna
                kultura”
            </div>
            <div class="col-lg-6">
                <b>2015</b>
                <hr>
                Didactica Mathematicae 37 (2015) / Polskie Towarzystwo Matematyczne: X International Scientific
                Conference of Mathematics instructors: "Mathematic - our imperceptible culture"
                <br/><a target="_blank" href="https://wydawnictwa.ptm.org.pl/index.php/didactica-mathematicae/article/viewDownloadInterstitial/846/856">
                    <button class="btn" style="margin-top:30px;">Pobierz</button>
                </a>
            </div>
        </div>
    </div>

    <div id="szkolenia">
        <h3 style="text-align: center; margin-top:100px;"><span class="fas fa-university" aria-hidden="true"></span>
            Szkolenia</h3>
        <div id="timeline">
            <ul id="dates">

                <li><a href="#1">09.06.2018</a></li>
                <li><a href="#2">29.06.2018</a></li>
                <li><a href="#3">02.07.2018</a></li>
            </ul>
            <ul id="issues">

                <li id="1">
                    <img src="images/5.png"/>
                    <h5 class="coursename">Stwórz swoją pierwszą stronę WWW <br/> bezpłatne warsztaty HTML & CSS</h5>
                    <p>Regionalne Centrum Innowacji i Transferu Technologii<br/>9.06.2018</p>
                </li>
                <li id="2">
                    <img src="images/udemy.jpg"/>
                    <h5 class="coursename">Introduction to Databases and SQL Querying</h5>
                    <p>Udemy<br/>29.06.2018</p>
                </li>
                <li id="3">
                    <img src="images/6.png"/>
                    <h5 class="coursename">IAI PHP CAMP</h5>
                    <p>IAI S.A. <br/>02.07.2018 - 06.07.2018</p>
                </li>

            </ul>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="accordion">

                    <div class="card szkolenia">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Szkolenia pedagogiczne
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <h4>11.02.2015</h4>
                                <p>Inter-Edukacja Ośrodek Szkolenia Nauczycieli:<br/><b>Komunikacja z uczniem. Jak mówić
                                        by słuchał, jak słuchać by mówił. (20h)</b></p>
                                <h4>27.02.2015</h4>
                                <p> Inter-Edukacja Ośrodek Szkolenia Nauczycieli:<br/><b> Sposoby budowania autorytetu
                                        nauczycielskiego.(5h)</b></p>
                                <h4>09.03.2015</h4>
                                <p> Inter-Edukacja Ośrodek Szkolenia Nauczycieli: <br/><b>Sztuka motywowania uczniów -
                                        narzędzia i metody. (20h)</b></p>
                                <h4>16.03 – 25.05.2015 </h4>
                                <p> Specjalistyczne centrum edukacji EDU-MACH: <br/><b>Dyscyplina w klasie. (60h)</b>
                                </p>
                                <h4>16.03 – 25.05.2015</h4>
                                <p>Specjalistyczne centrum edukacji EDU-MACH: <br/><b>Radzenie sobie z trudnym
                                        zachowaniem uczniów (60h)</b></p>
                                <h4>16.03 – 25.05.2015</h4>
                                <p>Specjalistyczne centrum edukacji EDU-MACH: <br/><b>Motywowanie uczniów do nauki.
                                        (60h)</b>
                                </p>
                                <h4>16.03 – 25.05.2015</h4>
                                <p>Specjalistyczne centrum edukacji EDU-MACH: <br/><b>Jak się uczyć? czyli o tym, co
                                        zrobić, by osiągnąć sukces edukacyjny (60h)</b></p>
                                <h4>29.05.2015</h4>
                                <p>SZKOL-MED: <br/><b>Szkolenie z zakresu pierwszej pomocy. (8h)</b></p>
                                <h4>07.11.2015</h4>
                                <p>Macmillan Education: <br/><b>Jak uczy się mózg i co z tego wynika?</b></p>
                                <h4>07.11.2015</h4>
                                <p>Macmillan Education: <br/><b>Jak uczyć i wspierać współpracę w klasie?</b></p>
                                <h4>2017</h4>
                                <p><b>III Międzynarodowa Konferencja „Edukacja Innowacja pt. Człowiek w szkole” oraz
                                        warsztaty metodyczne.</b></p>
                                <h4>2017</h4>
                                <p>Warsztaty nt. <br/><b>”Mapy matematyczne”.</b></p>
                                <h4>2017</h4>
                                <p>Szkolenie pt.<br/><b> ”Myślenie algorytmami. Nauka programowania w klasach 4-7”.</b>
                                </p>
                                <h4>2018</h4>
                                <p>Szkolenie pt. <br/><b>„Jak uniknąć trudnych sytuacji związanych z wykorzystaniem
                                        internetu w szkole”</b></p>
                                <h4>2018</h4>
                                <p>Szkolenie pt. <br/><b>„Teaching Character and Creating Positive Classrooms”</b></p>
                                <h4>2018</h4>
                                <p>Szkolenie pt. <br/><b>„Jak uczyć i wspierać współpracę w klasie?”</b></p>
                                <h4>2018</h4>
                                <p>Szkolenie pt. <br/><b>„Jak zainteresować uczniów - niespodziewane początki
                                        i zaskakujące zakończenia”</b></p>
                                <h4>2018</h4>
                                <p>Szkolenie pt. <br/><b>„Jak sprawić, by uczniowie w klasie czuli się bezpiecznie?”</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="dzialalnosc">
        <h3 style="text-align: center; margin-top:100px; margin-bottom:30px;"><span class="fab fa-react" aria-hidden="true"></span>
            Działalność dodatkowa</h3>

        <h4><i class="far fa-handshake"></i> Członkostwo</h4>

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="card czlonkostwo">
                    <img class="card-img-top logogroups" src="images/kkm.png" alt="Card image" style="width:200px;">
                    <div class="card-body">
                        <h4 class="card-title">2014 - 2017</h4>
                        <p class="card-text">Koło Kultury Matematycznej <br/>Uniwersytetu Szczecińskiego <br/><b>(od 2015 roku
                                prezes koła)</b></p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">


                <div class="card czlonkostwo">
                    <img class="card-img-top logogroups" src="images/na.png" alt="Card image" style="width:200px; margin-top:34px;">
                    <div class="card-body">
                        <h4 class="card-title">2014 - 2015</h4>
                        <p class="card-text">Grupa artystyczna<br/> Nowy Akord <br/><b>(podgrupa poetycka)</b></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-2"></div>
        </div>


        <br>


        <h4><i class="fas fa-bullhorn"></i> Konferencje/organizacja eventów</h4>
<!--        próba-->

        <section class="p-0" id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters popup-gallery">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="images/2017.png">
                            <img class="img-fluid" src="images/2017.png" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <b>16.03 – 19.03.2017</b>
                                    </div>
                                    <div>
                                        <small>Uczestnictwo oraz współorganizacja XII Międzynarodowej Konferencji Naukowej
                                        Dydaktyków Matematyki "Matematyka - nasza niedostrzegalna kultura", poprowadzenie teleturnieju
                                            matematycznego "Awantura o matmę" oraz warsztatu pt. "Tangramy"</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="images/filharmonia.jpg">
                            <img class="img-fluid" src="images/filharmonia.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <b>12.01.2016</b>
                                    </div>
                                    <div>
                                        <small>Prowadzenie i współorganizacja wernisażu wystawy fotograficznej konkursu "Matematyka w Obiektywie" w Filharmonii</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="images/2016.jpg">
                            <img class="img-fluid" src="images/2016.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <b>11.03 – 13.03.2016</b>
                                    </div>
                                    <div>
                                        <small> Uczestnictwo oraz współorganizacja XI Międzynarodowej Konferencji Naukowej Dydaktyków Matematyki "Matematyka – nasza niedostrzegalna kultura" oraz poprowadzenie teleturnieju matematycznego "Awantura o matmę"</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="images/kolo.jpg">
                            <img class="img-fluid" src="images/kolo.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <b>21.05.2015</b>
                                    </div>
                                    <div>
                                        <small>Organizacja warsztatu pt. "Inne Oblicze Matematyki" na międzywydziałowym spotkaniu "Koło Nauki"</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="images/2015.jpg">
                            <img class="img-fluid" src="images/2015.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <b>13.03 - 15.03.2015</b>
                                    </div>
                                    <div>
                                        <small>Uczestnictwo oraz współorganizacja X Międzynarodowej Konferencji Naukowej Dydaktyków Matematyki "Matematyka - nasza niedostrzegalna kultura" oraz poprowadzenie teleturnieju matematycznego "Awantura o matmę"</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="images/wernisaz.jpg">
                            <img class="img-fluid" src="images/wernisaz.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        <b>2014 – 2017</b>
                                    </div>
                                    <div>
                                        <small>Współorganizacja konkursu Matematyka w Obiektywie (m.in. prowadzenie finałów konkursu)
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <div id="hobby">
        <h3 style="text-align: center; margin-top:100px; margin-bottom:40px;"><span class="fas fa-gamepad" aria-hidden="true"></span> Hobby
        </h3>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-2"><i class="fas fa-compact-disc" style="font-size:100px;"></i><h6 class="top-margin">Muzyka</h6>
                <hr>
                Bez dobrej muzyki nie wyobrażam sobie życia.
            </div>
            <div class="col-lg-2"><i class="fas fa-feather-alt" style="font-size:100px;"></i><h6 class="top-margin">
                    Poezja</h6>
                <hr>
                Na swoim koncie mam już ponad 100 napisanych wierszy.
            </div>
            <div class="col-lg-2"><i class="fab fa-hire-a-helper" style="font-size:100px; "></i>
                <h6 class="top-margin">Starożytny Egipt</h6>
                <hr>
                Uwielbiam pogłębiać swą wiedzę w tym temacie.
            </div>
            <div class="col-lg-2"><i class="fas fa-code" style="font-size:100px; "></i><h6 class="top-margin">Web
                    design</h6>
                <hr>
                Odkąd pamiętam tworzyłam różne blogi i strony internetowe.
            </div>
            <div class="col-lg-2">
                <i class="fab fa-pushed" style="font-size:100px; "></i>
                <h6 class="top-margin">
                    Origami</h6>
                <hr>
                Jak tylko mam czas i chęci, to zabieram się za składanie modułów, które później scalam w różne
                kształty.
            </div>
        </div>


    </div>

    <div id="cv">
        <h3 style="text-align: center; margin-top:100px; margin-bottom:30px;"><span class="fas fa-paperclip" aria-hidden="true"></span>
            Curriculum Vitae</h3>

        <a class="btn btn-lg btn-primary" href="#"><i class="far fa-file-pdf" style="font-size:60px; text-align: center"></i> Pobierz</a>



        <br/>
    </div>

</div>
    <div class="contact bg-dark">
        <div id="kontakt">
            <h3 style="text-align: center; margin-top:100px; margin-bottom:30px; padding-top: 20px;">
                <span class="fas fa-envelope" aria-hidden="true"></span> Kontakt</h3>
            <script>
                $(function () {

                    $("input,textarea").jqBootstrapValidation({
                        preventSubmit: true,
                        submitError: function ($form, event, errors) {
                            // additional error messages or events
                        },
                        submitSuccess: function ($form, event) {
                            event.preventDefault(); // prevent default submit behaviour
                            // get values from FORM
                            var name = $("input#name").val();
                            var email = $("input#email").val();
                            var message = $("textarea#message").val();
                            var firstName = name; // For Success/Failure Message
                            // Check for white space in name for Success/Fail message
                            if (firstName.indexOf(' ') >= 0) {
                                firstName = name.split(' ').slice(0, -1).join(' ');
                            }
                            $.ajax({
                                url: "./mail/form.php",
                                type: "POST",
                                data: {
                                    name: name,
                                    email: email,
                                    message: message
                                },
                                cache: false,
                                success: function () {
                                    // Success message
                                    $('#success').html("<div class='alert alert-success'>");
                                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                        .append("</button>");
                                    $('#success > .alert-success')
                                        .append("<strong>Twoja wiadomość została wysłana. </strong>");
                                    $('#success > .alert-success')
                                        .append('</div>');

                                    //clear all fields
                                    $('#contactForm').trigger("reset");
                                },
                                error: function () {
                                    // Fail message
                                    $('#success').html("<div class='alert alert-danger'>");
                                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                        .append("</button>");
                                    $('#success > .alert-danger').append("<strong>Przepraszam " + firstName + ", wygląda na to, że email nie został wysłany. Spróbuj ponownie później.");
                                    $('#success > .alert-danger').append('</div>');
                                    //clear all fields
                                    $('#contactForm').trigger("reset");
                                },
                            })
                        },
                        filter: function () {
                            return $(this).is(":visible");
                        },
                    });

                    $("a[data-toggle=\"tab\"]").click(function (e) {
                        e.preventDefault();
                        $(this).tab("show");
                    });
                });


                /*When clicking on Full hide fail/success boxes */
                $('#name').focus(function () {
                    $('#success').html('');
                });
            </script>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <form name="sentMessage" class="well" id="contactForm" novalidate>
                            <legend>Napisz do mnie</legend>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="text" class="form-control"
                                           placeholder="Imię i nazwisko" id="name" required
                                           data-validation-required-message="Proszę wpisz swoje imię i nazwisko"/>
                                </div>
                            </div>
                            <br/>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="email" class="form-control" placeholder="Email"
                                           id="email" required
                                           data-validation-required-message="Proszę wpisz swój e-mail"/>
                                </div>
                            </div>
                            <br/>
                            <div class="control-group">
                                <div class="controls">
     <textarea rows="10" cols="100" class="form-control"
               placeholder="Wiadomość" id="message" required
               data-validation-required-message="Proszę wpisz wiadomość" minlength="5"
               data-validation-minlength-message="Wpisz minimum 5 znaków"
               maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <br/>
                            <button type="submit" class="btn btn-primary pull-right">Wyślij</button>
                            <br/>
                        </form>
                    </div>

                    <div class="col-lg-4 contact-info">
                        <b>E-mail:</b> <br>dagmaratega@gmail.com<br>
                        <hr>
                        <b>Telefon:</b><br>666 851 630<br>
                    </div>
                </div>
            </div>
            <footer>
                <hr>
                <a href="https://www.freepik.com/free-vector/dividers-collection-in-calligraphic-style_2382825.htm">Obrazki:
                    Freepik</a>
            </footer>

        </div>
    </div>


</body>

</html>
