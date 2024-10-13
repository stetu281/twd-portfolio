<?php
/**
 * Title: Blog Vorschau
 * Slug: TWD-Portfolio/frontpage-blog
 * Categories: text
 * Description: Intro und Blog Artikel Vorschau für die Startseite
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Blog"},"className":"blog","style":{"spacing":{"padding":{"top":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group blog" style="padding-top:var(--wp--preset--spacing--90)"><!-- wp:group {"align":"wide","className":"blog__intro","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide blog__intro"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size">"And now for something completely different..."</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Obwohl es nicht so ganz hier hin passt, habe ich mich entschieden hier einige Artikel zu meiner weiteren Leidenschaft, dem Laufen, zu schreiben.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":30,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Raster"},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"blog__grid","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"className":"blog__card","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"black-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog__card has-black-light-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"align":"wide","style":{"border":{"width":"0px","style":"none","radius":"20px"}}} /-->

<!-- wp:group {"align":"wide","className":"blog__textContainer","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|40","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide blog__textContainer" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"format":"j. F Y","style":{"color":{"text":"#9271ed"},"elements":{"link":{"color":{"text":"#9271ed"}}}},"fontSize":"base"} /-->

<!-- wp:post-title {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|20"}}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"excerptLength":21,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30"}}}} /-->

<!-- wp:read-more {"content":"Artikel lesen...","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"paragraph-base"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->