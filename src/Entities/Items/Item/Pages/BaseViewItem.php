<?php

namespace Moox\Core\Entities\Items\Item\Pages;

use Filament\Resources\Pages\ViewRecord;
use Moox\Core\Traits\CanResolveResourceClass;

abstract class BaseViewItem extends ViewRecord
{
    use CanResolveResourceClass;

    public function getFormActions(): array
    {
        return [];
    }
}
