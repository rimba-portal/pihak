<?php

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrgCorps extends ListRecords
{
    protected static string $resource = \Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\OrgCorpResource::class;

    protected static ?string $title = 'Corporate Legal Entities';

    protected ?string $subheading = 'View fundamental identity numbers, identifiers, and corporate profiles.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
