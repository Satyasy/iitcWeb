<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use App\Models\Lokasi;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Event';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Event'),
                RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull()
                    ->label('Deskripsi'),
                DateTimePicker::make('jadwal')
                    ->required()
                    ->label('Jadwal'),
                TextInput::make('harga_tiket')
                    ->numeric()
                    ->prefix('Rp')
                    ->required()
                    ->label('Harga Tiket'),
                Select::make('lokasi_id')
                    ->relationship('lokasi', 'nama')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->label('Lokasi'),
                FileUpload::make('foto')
                    ->image()
                    ->disk('public')
                    ->directory('event-photos')
                    ->label('Foto Event'),
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
                    ->label('Nama Event'),
                TextColumn::make('jadwal')
                    ->dateTime()
                    ->sortable()
                    ->label('Jadwal'),
                TextColumn::make('harga_tiket')
                    ->money('IDR', locale: 'id_ID')
                    ->sortable()
                    ->label('Harga Tiket'),
                TextColumn::make('lokasi.nama')
                    ->searchable()
                    ->sortable()
                    ->label('Lokasi'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}