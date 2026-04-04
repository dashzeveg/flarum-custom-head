<?php

/*
 * This file is part of dashzeveg/flarum-custom-head.
 *
 * Copyright (c) 2026 Dashzeveg Galbadrakh.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Dashzeveg\Customhead;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less')
        ->content(function (Document $document, ServerRequestInterface $request) {
            // Inline script
            $document->head[] = "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-55XTWDH9');</script>
<!-- End Google Tag Manager -->";
        }),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),
    new Extend\Locales(__DIR__.'/locale'),
];
