<?php

declare(strict_types=1);

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgCorps;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages\ListOrgCorps;
use Rimba\Organization\Models\OrgCorp;
use UnitEnum;

class OrgCorpResource extends Resource
{
    protected static ?string $model = OrgCorp::class;

    protected static string|UnitEnum|null $navigationGroup = 'Organization';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 31;

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
            'index' => ListOrgCorps::route('/'),
            // 'create' => \Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages\CreateOrgCorp::route('/create'),
            // 'view' => \Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages\ViewOrgCorp::route('/{record}'),
            // 'edit' => \Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages\EditOrgCorp::route('/{record}/edit'),
            //
        ];
    }
}
