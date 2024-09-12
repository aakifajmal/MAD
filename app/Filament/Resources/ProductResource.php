<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Product Information')->schema([
                        TextInput::make('name')
                        ->required()
                        ->maxLength(255),

                        Grid::make()
                        ->schema([
                            TextInput::make('color')
                                ->maxLength(255),
                            TextInput::make('size')
                                ->minValue(0)
                                ->maxLength(255)
                                ->default("null"),
                        ]),

                        MarkdownEditor::make('description')
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('products'),

                    ]),

                    Section::make('Images')->schema([
                        FileUpload::make('images')
                        ->multiple()
                        ->directory('products')
                        ->maxFiles(10)
                        ->reorderable()
                    ])

                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Pricing')->schema([
                        TextInput::make('price')
                        ->numeric()
                        ->required()
                        ->prefix('LKR')
                        ->minValue(0),

                        TextInput::make('quantity')
                        ->required()
                        ->type('number')
                        ->minValue(0)
                        ->default(0),
                    ]),

                    Section::make('Category')->schema([
                        Select::make('category_id')
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship('category', 'id', function ($query) {
                            $query->select(['id', 'name', 'subcategory']);
                        })
                        ->getOptionLabelFromRecordUsing(function ($record) {
                            return "{$record->name} - {$record->subcategory}";
                        }),
                    ]),

                    Section::make('Status')->schema([
                        Toggle::make('is_active')
                        ->required()
                        ->default(true),

                        Toggle::make('is_in_stock')
                        ->required()
                        ->default(true),

                        Toggle::make('is_on_sale')
                        ->required()
                        ->default(false),

                        Toggle::make('is_featured')
                        ->required()
                        ->default(false),

                    ])

                ])->columnSpan(1)

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category.name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category.subcategory')
                    ->label('Subcategory')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('price')
                    ->money('LKR')
                    ->sortable(),

                TextColumn::make('quantity')
                    ->sortable(),

                TextColumn::make('color')
                    ->sortable(),

                TextColumn::make('size')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->boolean(),

                IconColumn::make('is_in_stock')
                    ->boolean(),

                IconColumn::make('is_on_sale')
                    ->boolean(),

                IconColumn::make('is_featured')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                ->relationship('category', 'id', function ($query) {
                    $query->select(['id', 'name', 'subcategory']);
                })
                ->getOptionLabelFromRecordUsing(function ($record) {
                    return "{$record->name} - {$record->subcategory}";
                }),

            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
