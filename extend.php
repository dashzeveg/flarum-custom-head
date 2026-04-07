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
use Flarum\Frontend\Document;
use Flarum\Settings\SettingsRepositoryInterface;
use Psr\Http\Message\ServerRequestInterface;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/dist/forum.js')
        ->css(__DIR__ . '/less/forum.less')
        ->content(function (Document $document, ServerRequestInterface $request) {
            $settings = resolve(SettingsRepositoryInterface::class);
            $customHead = $settings->get('dashzeveg-custom-head.custom_head_html', '');

            if (!empty($customHead)) {
                $document->head[] = $customHead;
            }
        }),
    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js')
        ->css(__DIR__ . '/less/admin.less'),
    new Extend\Locales(__DIR__ . '/locale'),
];
