<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Models\Artikel;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use App\Models\User;
use App\Models\Budaya;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\DeleteAction;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Event';

    public static function form(Form $form): Form
    {
        $loggedInUserId = Auth::id();

        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name') // Menggunakan relasi 'user'
                    ->required()
                    ->label('Penulis')
                    ->default($loggedInUserId), // Mengatur penulis default sebagai user yang sedang login
                Select::make('budaya_id')
                    ->relationship('budaya', 'name') // Menggunakan relasi 'budaya'
                    ->nullable()
                    ->searchable()
                    ->preload()
                    ->label('Terkait Budaya'),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul'),
                TextInput::make('topic')
                    ->required()
                    ->maxLength(255)
                    ->label('Topik'),
                FileUpload::make('foto')
                    ->image()
                    ->disk('public')
                    ->directory('artikel-images')
                    ->label('Gambar Utama'),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->label('Isi Artikel'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->disk('public')
                    ->label('Gambar'),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Judul'),
                TextColumn::make('user.name') // Mengakses nama penulis dari relasi 'user'
                    ->searchable()
                    ->sortable()
                    ->label('Penulis'),
                TextColumn::make('budaya.name') // Mengakses nama budaya dari relasi 'budaya'
                    ->searchable()
                    ->sortable()
                    ->label('Terkait Budaya'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}