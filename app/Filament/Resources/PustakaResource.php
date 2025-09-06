<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PustakaResource\Pages;
use App\Filament\Resources\PustakaResource\RelationManagers;
use App\Models\Pustaka;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn; // Tambahkan ini
use Filament\Tables\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use App\Models\Budaya;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PustakaResource extends Resource
{
    protected static ?string $model = Pustaka::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul'),
                TextInput::make('author')
                    ->required()
                    ->maxLength(255)
                    ->label('Penulis'),
                TextInput::make('tema')
                    ->required()
                    ->maxLength(255)
                    ->label('Tema'),
                Textarea::make('sinopsis')
                    ->required()
                    ->columnSpanFull()
                    ->label('Sinopsis'),
                DatePicker::make('tahun_terbit')
                    ->label('Tahun Terb it'),
                Select::make('budaya_id')
                    ->relationship('budaya', 'name')
                    ->nullable()
                    ->searchable()
                    ->preload()
                    ->label('Terkait Budaya'),

                // FileUpload untuk Cover
                FileUpload::make('cover')
                    ->image()
                    ->disk('public')
                    ->directory('pustaka-covers')
                    ->label('Cover Buku'),

                // FileUpload untuk File PDF
                FileUpload::make('file')
                    ->disk('public')
                    ->directory('pustaka-files')
                    ->acceptedFileTypes(['application/pdf'])
                    ->label('File Buku (PDF)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover')
                    ->disk('public')
                    ->label('Cover'),
                TextColumn::make('judul')
                    ->searchable()
                    ->sortable()
                    ->label('Judul'),
                TextColumn::make('author')
                    ->searchable()
                    ->sortable()
                    ->label('Penulis'),
                TextColumn::make('tahun_terbit')
                    ->date()
                    ->sortable()
                    ->label('Tahun Terbit'),
                TextColumn::make('budaya.name')
                    ->searchable()
                    ->sortable()
                    ->label('Terkait Budaya'),
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
            'index' => Pages\ListPustakas::route('/'),
            'create' => Pages\CreatePustaka::route('/create'),
            'edit' => Pages\EditPustaka::route('/{record}/edit'),
        ];
    }
}