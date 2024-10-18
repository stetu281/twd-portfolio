<?php
/**
 * Title: Fortschritt Laufen
 * Slug: TWD-Portfolio/walking-stats
 * Categories: text
 * Description: Fortschritt Abschnitt der Laufen Seite
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Fortschritt"},"className":"stats","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|80"}}},"backgroundColor":"black-light","layout":{"type":"constrained"}} -->
<section class="wp-block-group stats has-black-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"slider"} -->
<h1 class="wp-block-heading alignwide has-text-align-center has-slider-font-size">Mein Fortschritt<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-blue-color">.</mark></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|40"}}},"textColor":"white"} -->
<p class="has-text-align-left has-white-color has-text-color has-link-color" style="padding-left:var(--wp--preset--spacing--40)">Gelaufene Strecke bisher</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<span class="stats__progress--container"><span class="stats__progress--bar"><p class="stats__progress--percent">32%</p></span></span>
<!-- /wp:html -->

<!-- wp:group {"className":"stats__distance","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group stats__distance"><!-- wp:html -->
<p class="stats__progress--text"><span class="stats__progress--done">727</span>km von <span class="stats__progress--total">2536</span>km </p>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|yellow-light"}}}},"textColor":"yellow-light","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-yellow-light-color has-text-color has-link-color has-large-font-size">Schweiz</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"subtitle"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-subtitle-font-size">254Km von 410Km</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|yellow-light"}}}},"textColor":"yellow-light","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-yellow-light-color has-text-color has-link-color has-large-font-size">Frankreich</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"subtitle"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-subtitle-font-size">473Km von 1180Km</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|yellow-light"}}}},"textColor":"yellow-light","fontSize":"large"} -->
<h3 class="wp-block-heading has-text-align-center has-yellow-light-color has-text-color has-link-color has-large-font-size">Spanien</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"subtitle"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-subtitle-font-size">0Km von 946Km</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:html -->
<iframe width="100%" height="700px" frameborder="0" allowfullscreen allow="geolocation" src="//umap.osm.ch/de/map/strecke_8484?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&editMode=disabled&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=null&onLoadPanel=none&captionBar=false&captionMenus=false&fullscreenControl=null&captionControl=null" class="stats__map"></iframe>
<!-- /wp:html --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
