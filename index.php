<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>PlanteDrømme</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!--Navbar Nadja-->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PlanteDrømme</a>
        <img src="img/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Om os</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt os</a>
                    </li>
        </div>
    </div>
</nav>

<!--Hero Nadja-->
<main>
    <article class="hero">
        <h1>Plantevægge</h1>
        <p>Vil du gerne have en plantevæg i hjemmet. <br> Så har vi det du skal bruge!
        Om det er en kunstig plantevæg eller en lavet af rigtige planter. <br> Kontakt os og så kan vi tage en snak.</p>
    </article>
    <figure class="container-fluid hero-img">
        <img class="img-fluid plant" src="img/sukkulenter.png" alt="sukkulenter">
    </figure>
</main>


<!--Produkt Betül-->
<main class="container py-5">
    <section class="row">
        <!-- Produktbillede -->
        <picture class="col-md-6">
            <img src="img/produkt.jpg" alt="Produktbillede">
        </picture>

        <!-- Produktinformation -->
        <article class="col-md-6">
            <header>
                <h2 id="produkt-titel">Plantevæg til indendørs & udendørs Brug</h2>
                <p id="produkt-pris" class="text-success"><strong>DKK 499,00</strong></p>
            </header>

            <p id="produkt-beskrivelse">
                Skab en smuk grøn væg med vores plantevæg – vælg mellem kunstige og ægte planter.
                Perfekt til både indendørs og udendørs brug, denne vertikale løsning giver dit hjem eller altan et frisk, naturligt look uden besvær.
                <br>
                Produktfordele: <br>
                <br>✅ Vedligeholdelsesfri kunstig plantevæg eller levende planter for et naturligt udtryk
                <br>✅ Nem montering uden brug af specialværktøj
                <br>✅ Fleksibelt moduldesign – tilpas størrelsen efter behov
                <br>✅ UV-bestandige materialer sikrer langvarig holdbarhed
                <br>
                <br>
                Skab din egen grønne oase med minimal indsats! 🌿
            </p>
            <br>
            <!-- Bestilling -->
            <a href="#" class="btn bestil-knap">Bestil nu</a>

            <!-- Læs mere section -->
            <aside>
                <div class="accordion" id="produktAccordion">

                    <!-- Specifikationer -->
                    <article class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Specifikationer
                            </button>
                        </h3>
                        <section id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#produktAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Materiale:</strong> UV-bestandig plast / naturlige planter</li>
                                    <li><strong>Størrelser:</strong> Fås i forskellige moduler, der kan kombineres</li>
                                    <li><strong>Anvendelse:</strong> Indendørs & udendørs</li>
                                    <li><strong>Vedligeholdelse:</strong> Kunstige planter kræver ingen pleje</li>
                                    <li><strong>Montering:</strong> Nem gør-det-selv opsætning uden specialværktøj</li>
                                </ul>
                            </div>
                        </section>
                    </article>

                    <!-- Opsætning og montering -->
                    <article class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Opsætning og montering
                            </button>
                        </h3>
                        <section id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#produktAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li>Modulerne klikkes sammen for at tilpasse størrelsen</li>
                                    <li>Kan monteres på vægge, hegn eller en ramme</li>
                                    <li>Velegnet som plantevæg til stue, altan eller have</li>
                                    <li>Kan kombineres med ægte planter for en personlig touch</li>
                                </ul>
                            </div>
                        </section>
                    </article>

                    <!-- Anvendelsesmuligheder -->
                    <article class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Anvendelsesmuligheder
                            </button>
                        </h3>
                        <section id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#produktAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Indendørs:</strong> Perfekt til stue, spisestue eller badeværelse</li>
                                    <li><strong>Udendørs:</strong> Skaber en hyggelig stemning på terrassen</li>
                                    <li><strong>Altan:</strong> Giver privatliv og et grønt look</li>
                                </ul>
                            </div>
                        </section>
                    </article>

                    <!-- Fordele ved en kunstig plantevæg -->
                    <article class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Fordele ved en kunstig plantevæg
                            </button>
                        </h3>
                        <section id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#produktAccordion">
                            <div class="accordion-body">
                                <ul>
                                    <li>Altid frisk og grøn uden vanding eller beskæring</li>
                                    <li>UV-bestandig – falmer ikke i solen</li>
                                    <li>Perfekt til allergikere og mørke rum</li>
                                    <li>Nem opsætning og vedligeholdelsesfri</li>
                                </ul>
                            </div>
                        </section>
                    </article>

                    <!-- Gør-det-selv: Lav din egen plantevæg -->
                    <article class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Lav din egen plantevæg
                            </button>
                        </h3>
                        <section id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#produktAccordion">
                            <div class="accordion-body">
                                <ol>
                                    <li>Vælg moduler og tilpas størrelsen</li>
                                    <li>Fastgør dem på væggen eller en ramme</li>
                                    <li>Kombiner kunstige og levende planter for et unikt look</li>
                                    <li>Tilføj lys eller dekoration for ekstra effekt</li>
                                </ol>
                            </div>
                        </section>
                    </article>
                </div>
            </aside>
        </article>
    </section>
</main>

<!--footer med kontakt information Betül-->
<footer class="bg-dark text-white text-center py-4">
    <section class="container">
        <p class="mb-1">&copy; 2024 Plantedrømme <br>
            Alle rettigheder forbeholdes
        </p>
        <br>
        <p class="mb-1">Kontakt os: <br>
            <a href="mailto:info@dinvirksomhed.dk" class="text-white">info@plantedroemme.dk</a></p>
        <section
                class="d-flex justify-content-center gap-3">
        </section>
    </section>
</footer>

<!--footer med kontakt information Betül-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
