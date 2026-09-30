<?php

declare(strict_types=1);

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\OrgTeamResource;

class ListOrgTeams extends ListRecords
{
    protected static string $resource = OrgTeamResource::class;

    protected static ?string $title = 'Teams';

    protected ?string $subheading = 'Setup localized internal team tags linked to corporate hubs.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
