<?php

declare(strict_types=1);

use Orchid\Platform\Http\Controllers\Systems\TagsController;
use Orchid\Platform\Http\Controllers\Systems\CacheController;
use Orchid\Platform\Http\Controllers\Systems\SystemController;
use Orchid\Platform\Http\Controllers\Systems\WidgetController;
use Orchid\Platform\Http\Controllers\Systems\AttachmentController;
use Orchid\Platform\Http\Controllers\Systems\NotificationController;

/*
|--------------------------------------------------------------------------
| Systems Web Routes
|--------------------------------------------------------------------------
|
| Base route
|
*/

$this->router->get('/', [SystemController::class, 'index'])
    ->name('systems.index');

$this->router->get('cache', [CacheController::class, 'store'])
    ->name('systems.cache');

$this->router->post('notification/read', [NotificationController::class, 'markAllAsRead'])
    ->name('notification.read');

$this->router->post('notification/remove', [NotificationController::class, 'remove'])
    ->name('notification.remove');

$this->router->post('files', [AttachmentController::class, 'upload'])
    ->name('systems.files.upload');

$this->router->post('files/sort', [AttachmentController::class, 'sort'])
    ->name('systems.files.sort');

$this->router->delete('files/{id}', [AttachmentController::class, 'destroy'])
    ->name('systems.files.destroy');

$this->router->post('files/get', [AttachmentController::class, 'getFilesByIds'])
    ->name('systems.files.getFilesByIds');

$this->router->put('files/post/{id}', [AttachmentController::class, 'update'])
    ->name('systems.files.update');

$this->router->get('tags/{tags?}', [TagsController::class, 'show'])
    ->name('systems.tag.search');

$this->router->post('widget/{widget}/{key?}', [WidgetController::class, 'index'])
    ->name('systems.widget');
