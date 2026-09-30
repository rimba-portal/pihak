<?php

declare(strict_types=1);

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\OrgCorpResource;

class ListOrgCorps extends ListRecords
{
    protected static string $resource = OrgCorpResource::class;

    protected static ?string $title = 'Corporate Legal Entities';

    protected ?string $subheading = 'View fundamental identity numbers, identifiers, and corporate profiles.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
