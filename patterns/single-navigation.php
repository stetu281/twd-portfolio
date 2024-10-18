<?php
/**
 * Title: Blog Navigation
 * Slug: TWD-Portfolio/single-navigation
 * Categories: text
 * Description: Navigation zum vorherigen und nächsten Blog Post
 */
?>

<!-- wp:group {"className":"singleContent__nav","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group singleContent__nav" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-navigation-link {"type":"previous","label":"Vorheriger Artikel\u003cbr\u003e","showTitle":true,"linkLabel":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:post-navigation-link {"label":"Nächster Artikel\u003cbr\u003e","showTitle":true,"linkLabel":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->