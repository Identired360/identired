<?php include('header.html') ?>

    <section class="row ban-inicio"  style="background-image: url('img/blog.jpg');">
        <div class="col-container">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
                <!-- Background -->
                <rect x="0" y="0" fill="transparent" width="100%" height="100%" />
                <!-- Text using the #pattern in defs as the fill -->
                <text x="50%" text-anchor="middle" y="50%" dy="0.4em" fill="url(#pattern)" font-family="Amaranth" font-size="7em">Nuestro blog</text>
                <defs>  
                    <!-- Da gradient -->
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0">
                        <stop offset="0%" style="stop-color:#237485;"/>
                        <stop offset="25%" style="stop-color:#2B8C48;"/>
                        <stop offset="50%" style="stop-color:#5FCF80;"/>
                        <stop offset="75%" style="stop-color:#44B6CE;"/>
                        <stop offset="100%" style="stop-color:#216C7C;"/>
                    </linearGradient>
                    <!-- Stitch 2 gradients together for seamless animation  -->
                    <pattern id="pattern" x="0" y="0" width="300%" height="100%" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="150%" height="100%" fill="url(#gradient)">
                            <animate attributeType="XML"
                                     attributeName="x"
                                     from="0" to="150%"
                                     dur="7s"
                                     repeatCount="indefinite"/>
                        </rect>
                        <rect x="-150%" y="0" width="150%" height="100%" fill="url(#gradient)">
                            <animate attributeType="XML"
                                     attributeName="x"
                                     from="-150%" to="0"
                                     dur="7s"
                                     repeatCount="indefinite"/>
                        </rect>
                    </pattern>
                    <font horiz-adv-x="500" >
                        <font-face font-family="sonos-logoregular" units-per-em="2048" ascent="1920" descent="-128" />
                        <missing-glyph horiz-adv-x="500" />
                        <glyph unicode="&#xd;" horiz-adv-x="682" />
                        <glyph unicode=" " />
                        <glyph unicode="N" horiz-adv-x="812" d="M0 412h150v636l662 -664v1000h-148v-640l-664 664v-996z" />
                        <glyph unicode="O" horiz-adv-x="1946" d="M470 896q0 210 150 364q148 148 362 148t362 -148q150 -154 150 -364q0 -212 -150 -362t-362 -150t-362 150t-150 362zM620 896q0 -152 106 -258q104 -108 256 -108q154 0 256 108q108 108 108 258q0 148 -108 260q-104 108 -256 108q-148 0 -256 -108 q-106 -110 -106 -260z" />
                        <glyph unicode="S" horiz-adv-x="674" d="M0 1124q0 -58 26 -110q28 -52 80 -90q32 -26 86 -52q68 -30 124 -46q124 -40 174 -84q34 -30 34 -74q0 -52 -48 -92q-56 -42 -138 -42q-62 0 -122 26q-38 16 -72 40l-118 -80q0 -4 24 -24q24 -24 60 -46q108 -66 228 -66q70 0 132 22q66 24 108 62q44 38 72 92 q24 54 24 110q0 54 -26 110q-28 52 -78 90q-34 28 -88 52q-38 18 -122 46q-122 36 -174 82q-36 32 -36 74q0 54 50 92q54 44 138 44q60 0 120 -26q32 -12 72 -40l120 80q-2 0 -24 24q-18 18 -62 46q-104 64 -226 64q-74 0 -132 -20t-110 -62q-48 -44 -70 -92 q-26 -56 -26 -110z" />
                        <glyph unicode="&#xa0;" />
                        <glyph unicode="&#x2000;" horiz-adv-x="704" />
                        <glyph unicode="&#x2001;" horiz-adv-x="1408" />
                        <glyph unicode="&#x2002;" horiz-adv-x="704" />
                        <glyph unicode="&#x2003;" horiz-adv-x="1408" />
                        <glyph unicode="&#x2004;" horiz-adv-x="469" />
                        <glyph unicode="&#x2005;" horiz-adv-x="352" />
                        <glyph unicode="&#x2006;" horiz-adv-x="234" />
                        <glyph unicode="&#x2007;" horiz-adv-x="234" />
                        <glyph unicode="&#x2008;" horiz-adv-x="176" />
                        <glyph unicode="&#x2009;" horiz-adv-x="281" />
                        <glyph unicode="&#x200a;" horiz-adv-x="78" />
                        <glyph unicode="&#x202f;" horiz-adv-x="281" />
                        <glyph unicode="&#x205f;" horiz-adv-x="352" />
                        <glyph unicode="&#x25fc;" horiz-adv-x="1000" d="M0 0z" />
                    </font>
                </defs>
            </svg>
            <div class="text-centb">
                <h2>Artículos que te ayudárán a mejorar tu presencia en internet</h2>
            </div>
        </div>
        <img class="img-bann" src="img/ground.png"> 
    </section>

    <section class="row back-cel sec-imp2">
        <div class="col-container">
            <div class="small-up-1 medium-up-2 large-up-3 articles">
                <div class="column">
                    <article class="card">
                        <div class="card__thumb">
                            <a href="tu-pagina-web-un-canal-de-ventas-para-tu-negocio.php" title="Cómo hacer de tu Página Web un Canal de Ventas para tu negocio"><img title="Cómo hacer de tu Página Web un Canal de Ventas para tu negocio" src="img/articulos/pagina-canal-ventas.jpg" ></a>
                        </div>
                        <div class="card__body">
                            <div class="card__category"><a href="javascript:void(0)">Notas</a></div>
                            
                            <a href="tu-pagina-web-un-canal-de-ventas-para-tu-negocio.php" title="Cómo hacer de tu Página Web un Canal de Ventas para tu negocio" class="card-sec">
                                <h2>Cómo hacer de tu Página Web un Canal de Ventas para tu negocio</h2>
                                <p>Tu página web debe formar parte de tu fuerza de ventas.</p>
                                <div class="bot-p bot-cel bot-art">Ver artículo</div>
                            </a>    
                        </div>
                        <div class="card__footer">
                            <span class="icon icon--time">02/09/2016</span>
                        </div>
                    </article>
                </div>
                <div class="column">
                    <article class="card">
                        <div class="card__thumb">
                            <a href="pagina-vendedora.php" title="Las Landing Pages como Páginas Vendedora"><img title="Las Landing Pages como Páginas Vendedora" src="img/articulos/pagina-vendedora.jpg" ></a>
                        </div>
                        <div class="card__body">
                            <div class="card__category"><a href="javascript:void(0)">Notas</a></div>
                            
                            <a href="pagina-vendedora.php" title="Las Landing Pages como Páginas Vendedora" class="card-sec">
                                <h2>Las Landing Pages como Páginas Vendedoras</h2>
                                <p>Estrategia para conseguir clientes a través de tu página web.</p>
                                <div class="bot-p bot-cel bot-art">Ver artículo</div>
                            </a>    
                        </div>
                        <div class="card__footer">
                            <span class="icon icon--time">02/09/2016</span>
                        </div>
                    </article>
                </div>
                <div class="column">

                </div>
            </div> 
        </div>
    </section>

<?php include('footer.html') ?>

</body>
</html>
