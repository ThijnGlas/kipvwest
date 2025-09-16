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
                    <li><a href="#over-ons">Over ons</a></li>
                    <li><a href="#producten">Onze productlijst</a></li>
                    <li><a href="#contact">Contact</a></li>
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
                    <li><a href="#over-ons">Over ons</a></li>
                    <li><a href="#producten">Onze productlijst</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

        </div>

    </div>
    <header>

        <div class="header-content">
            <h1>Kip van West</h1>
            <a class="btn" href="#producten">Bekijk onze prijslijst</a>
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
        <a href="https://wa.me/31614777845" target="_blank">
            <img src="{{ asset('images/whatsapp.svg') }}" alt="">

        </a>
        <div class="main-content">
            <div class="intro">
                <h2 id="over-ons">Familiebedrijf met hoge kwaliteit rundvlees en kip.</h2>
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

                        <a href="tel:0299633787" class="btn-intro btn">Bestel nu</a>
                    </div>
                    <img src="{{ asset('images/intro.png') }}" alt="">
                </article>
            </div>
            <div class="productenlijst">
                <h2 id="producten">Bekijk hier onze prijslijst</h2>
                <form action="{{ url('/') }}" method="GET">
                    <input class="search-producten" placeholder="Zoek producten..." type="text" name="search"
                        value="{{ request('search') }}">
                    <button type="submit">Zoeken</button>
                </form>
                <div class="productencards" id="results">
                    @foreach($categories as $category)
                        {{-- toon alleen categorieën die producten hebben --}}
                        @if($category->products->isNotEmpty())
                            <div class="{{ strtolower($category->name) }}">
                                <h3>{{ $category->name }}</h3>
                                <div class="producten-wrapper">
                                    @foreach($category->products as $product)
                                        <div>
                                            <p>{{ $product->name }}</p>
                                            <div class="prijs">
                                                <p>€{{ number_format($product->price, 2, ',', '.') }}</p>
                                                <p class="per">per {{ $product->amount }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="iframe-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1757518572392!6m8!1m7!1sCAoSFkNJSE0wb2dLRUlDQWdJRFJtN0NJQmc.!2m2!1d52.5108024838655!2d4.941031953095342!3f14.880671032857363!4f-10.351344400360617!5f0.4" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>
        </div>
    </main>
    <footer>
        <div class="footer-wrapper">
            <div class="footer-content">
                <div class="footer-left">
                    <h2 id="contact">Contact gegevens</h2>
                    <a href="https://maps.app.goo.gl/EnPapwWhLwfiqyb67">Neckerstraat 39,</a>
                    <a href="https://maps.app.goo.gl/EnPapwWhLwfiqyb67">1441 KT Purmerend</a>
                    <a class="phone-number" href="tel:0299633787"><img class="phone" src="{{ asset('images/phone.svg') }}" alt="">
                        <p>0299 633 787</p>
                    </a>
                    <div>
                        <a href="https://www.instagram.com/kip_vanwestpurmerend?utm_source=ig_web_button_share_sheet&igsh=MmJ0cXFvNHBldWVi"><img src="{{ asset('images/instagram.svg') }}" alt=""></a>
                        <a href="https://www.facebook.com/kipvanwest"><img src="{{ asset('images/facebook.svg') }}" alt=""></a>
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
                <a href="https://thijnjulius.nl">made by www.thijnjulius.nl</a>
                <a href="">Copyright © 2025 kipvanwest.nl - All rights reserved</a>
                <a href="">Algemene voorwaarden</a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/scroll.js') }}"></script>
</body>

</html>