<?php

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgUnits\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrgUnits extends ListRecords
{
    protected static string $resource = \Rimba\Organization\Http\UI\Admin\Resources\OrgUnits\OrgUnitResource::class;

    protected static ?string $title = 'Organizational Units';

    protected ?string $subheading = 'Structure functional reporting branches and structural parent groups. Departments and divisions';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
