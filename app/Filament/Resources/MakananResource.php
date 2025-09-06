<?php

namespace App\Filament\Resources;

use App\Models\Lokasi;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\MakananResource\Pages;
use App\Filament\Resources\MakananResource\RelationManagers;
use App\Models\Makanan;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MakananResource extends Resource
{
    protected static ?string $model = Makanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Kuliner'),
                RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull()
                    ->label('Deskripsi'),
                Select::make('jenis')
                    ->options([
                        'makanan' => 'Makanan',
                        'minuman' => 'Minuman',
                    ])
                    ->required()
                    ->label('Jenis'),
                Select::make('lokasi_id')
                    ->relationship('lokasi', 'nama')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->label('Asal Daerah'),
                FileUpload::make('foto')
                    ->image()
                    ->disk('public')
                    ->directory('makanan-photos')
                    ->label('Foto Kuliner'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->disk('public')
                    ->label('Foto'),
                TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Makanan'),
                TextColumn::make('lokasi.nama')
                    ->searchable()
                    ->sortable()
                    ->label('Lokasi'),
                TextColumn::make('jenis')
                    ->searchable()
                    ->sortable()
                    ->label('Jenis'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make(),
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
            'index' => Pages\ListMakanans::route('/'),
            'create' => Pages\CreateMakanan::route('/create'),
            'edit' => Pages\EditMakanan::route('/{record}/edit'),
        ];
    }
}