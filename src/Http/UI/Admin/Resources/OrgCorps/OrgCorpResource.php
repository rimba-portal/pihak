<?php

namespace Rimba\Organization\Http\UI\Admin\Resources\OrgCorps;

use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrgCorpResource extends Resource
{
    protected static ?string $model = \Rimba\Organization\Models\OrgCorp::class;

    protected static string|UnitEnum|null $navigationGroup = 'Organization';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 31;

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
            'index' => \Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages\ListOrgCorps::route('/'),
            // 'create' => \Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages\CreateOrgCorp::route('/create'),
            // 'view' => \Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages\ViewOrgCorp::route('/{record}'),
            // 'edit' => \Rimba\Organization\Http\UI\Admin\Resources\OrgCorps\Pages\EditOrgCorp::route('/{record}/edit'),
            //
        ];
    }
}
