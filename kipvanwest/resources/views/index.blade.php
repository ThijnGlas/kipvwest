<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kip van West</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/menu.js') }}"></script>

</head>

<body>
    <div class="navigation-sticky">
        <div class="navigation-wrapper">
        <nav class="navigation">
    <img src="{{ asset('images/logo.png') }}" alt="">

    <ul>
        <li><a href="">Over ons</a></li>
        <li><a href="">Onze productlijst</a></li>
        <li><a href="">Contact</a></li>
    </ul>

    <!-- Hamburger knop -->
    <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<!-- Fullscreen overlay menu -->
<div class="overlay" id="menu">
    <ul>
        <li><a href="">Over ons</a></li>
        <li><a href="">Onze productlijst</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</div>

        </div>

    </div>
    <header>

        <div class="header-content">
            <h1>Kip van West</h1>
            <a class="btn" href="">Bekijk onze prijslijst</a>
        </div>

    </header>
    <main>
        <div class="subtitles">
            <ul>
                <li>Maaltijden</li>
                <li>Gegrilde kip</li>
                <li>luxe rundvlees</li>
                <li>Heerlijke kipspecialiteiten</li>
            </ul>
        </div>
        <div class="main-content">
            <div class="intro">
                <h2>Familiebedrijf met hoge kwaliteit rundvlees en kip.</h2>
                <article>
                    <div class="intro-tekst">
                        <p>Kip van West is een echt familiebedrijf met een rijke geschiedenis in de kip en het vlees. Al
                            generaties lang zit onze familie in het vak, en die passie proef je terug in alles wat we
                            maken. Iedere dag staan wij met liefde in de keuken om te braden, te bakken en te koken –
                            gewoon met eerlijke ingrediënten en veel smaak.</p>

                        <p>Bij ons kun je van maandag tot en met zaterdag terecht voor dagvers vlees, sappige gegrilde
                            kippen van het spit en huisgemaakte kant-en-klare gerechten. Alles wordt met de hand bereid
                            in onze eigen keuken, precies zoals wij het thuis ook zouden eten. Simpel en goed – dat is
                            waar Kip van West voor staat.</p>
                        <p>Geen poespas, gewoon topkwaliteit en lekker eten. Of je nu langskomt voor een heerlijk
                            gegrillde bout, onze roti of een bestelling voor een feest, bij ons ben je aan het juiste
                            adres.</p>

                        <p>Plaats je bestelling online of kom gewoon langs in de winkel. We staan voor je klaar – en de
                            kip is al aan het grillen!</p>

                        <a href="" class="btn-intro btn">Bestel nu</a>
                    </div>
                    <img src="{{ asset('images/intro.png') }}" alt="">
                </article>
            </div>
            <div class="productenlijst">
                <h2>Bekijk hier onze prijslijst</h2>
                <input class="search-producten" placeholder="Zoek producten..." type="text">
                <div class="productencards">
                    <div class="kip">
                        <h3>Kip</h3>
                        <div class="producten-wrapper">
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rund">
                        <h3>Rund</h3>
                        <div class="producten-wrapper">
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="maaltijden">
                        <h3>Maaltijden</h3>
                        <div class="producten-wrapper">
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="specials">
                        <h3>Specials</h3>
                        <div class="producten-wrapper">
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                            <div>
                                <p>Hele Kip van ’t Spit</p>
                                <div class="prijs">
                                    <p>€ 20,00</p>
                                    <p class="per">per 500g</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iframe-wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!4v1683534759462!6m8!1m7!1sCAoSLEFGMVFpcE9JSDVDZ21VRmtCbFFKaV95Q2cxMkhBOWNRZ094TWhMQXFqNGRV!2m2!1d52.510786952912!2d4.9409985959276!3f50.096576475924785!4f-1.4391096423943566!5f0.7820865974627469"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-wrapper">
            <div class="footer-content">
                <div class="footer-left">
                    <h2>Contact gegevens</h2>
                    <a href="">Neckerstraat 39</a>
                    <a href="">1441 KT Purmerend</a>
                    <a class="phone-number" href=""><img class="phone" src="{{ asset('images/phone.svg') }}" alt="">
                        <p>0299 633 787</p>
                    </a>
                    <div>
                        <a href=""><img src="{{ asset('images/instagram.svg') }}" alt=""></a>
                        <a href=""><img src="{{ asset('images/facebook.svg') }}" alt=""></a>
                    </div>
                </div>
                <div class="footer-right">
                    <h2>Openingstijden</h2>
                    <div>
                        <div>
                            <p>maandag</p>
                            <p>dinsdag</p>
                            <p>woensdag</p>
                            <p>donderdag</p>
                            <p>vrijdag</p>
                            <p>zaterdag</p>
                            <p>zondag</p>
                        </div>
                        <div>
                            <p>gesloten</p>
                            <p>gesloten</p>
                            <p>08:00 – 19:00</p>
                            <p>08:00 – 19:00</p>
                            <p>08:00 – 19:00</p>
                            <p>08:00 – 16:00</p>
                            <p>gesloten</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="zwarte-balk">
            <div class="zwart-wrapper">
                <a href="">made by www.thijnjulius.nl</a>
                <a href="">Copyright © 2025 kipvanwest.nl - All rights reserved</a>
                <a href="">Algemene voorwaarden</a>
            </div>
        </div>
    </footer>
</body>

</html>