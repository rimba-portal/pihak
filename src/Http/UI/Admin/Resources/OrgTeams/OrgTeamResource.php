<?php

declare(strict_types=1);

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgTeams;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages\ListOrgTeams;
use Rimba\Organization\Models\OrgTeam;
use UnitEnum;

class OrgTeamResource extends Resource
{
    protected static ?string $model = OrgTeam::class;

    protected static string|UnitEnum|null $navigationGroup = 'Organization';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 32;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOrgTeams::route('/'),
            // 'create' => \Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages\CreateOrgTeam::route('/create'),
            // 'view' => \Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages\ViewOrgTeam::route('/{record}'),
            // 'edit' => \Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages\EditOrgTeam::route('/{record}/edit'),
            //
        ];
    }
}
