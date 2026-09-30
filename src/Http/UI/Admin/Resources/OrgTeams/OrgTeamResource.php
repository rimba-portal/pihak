<?php

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgTeams;

use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrgTeamResource extends Resource
{
    protected static ?string $model = \Rimba\Organization\Models\OrgTeam::class;

    protected static string|UnitEnum|null $navigationGroup = 'Organization';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 32;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema { return $schema->components([]); }

    public static function infolist(Schema $schema): Schema { return $schema->components([]); }

    public static function table(Table $table): Table { return $table->columns([]); }

    public static function getRelations(): array 
    { 
        return [ 
            // 
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages\ListOrgTeams::route('/'),
            // 'create' => \Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages\CreateOrgTeam::route('/create'),
            // 'view' => \Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages\ViewOrgTeam::route('/{record}'),
            // 'edit' => \Rimba\Organization\Http\UI\Admin\Resources\OrgTeams\Pages\EditOrgTeam::route('/{record}/edit'),
            //
        ];
    }
}
