<?php

declare(strict_types=1);

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgUnits;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Rimba\Organization\Http\UI\Admin\Resources\OrgUnits\Pages\ListOrgUnits;
use Rimba\Organization\Models\OrgUnit;
use UnitEnum;

class OrgUnitResource extends Resource
{
    protected static ?string $model = OrgUnit::class;

    protected static string|UnitEnum|null $navigationGroup = 'Organization';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 33;

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
            'index' => ListOrgUnits::route('/'),
            // 'create' => \Rimba\Organization\Http\UI\Admin\Resources\OrgUnits\Pages\CreateOrgUnit::route('/create'),
            // 'view' => \Rimba\Organization\Http\UI\Admin\Resources\OrgUnits\Pages\ViewOrgUnit::route('/{record}'),
            // 'edit' => \Rimba\Organization\Http\UI\Admin\Resources\OrgUnits\Pages\EditOrgUnit::route('/{record}/edit'),
            //
        ];
    }
}
