<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables;
use App\Models\Artikel;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Penulis Komentar')
                    ->relationship('user', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('artikel_id')
                    ->label('Artikel Terkait')
                    ->relationship('artikel', 'title')
                    ->required()
                    ->searchable()
                    ->preload(),
                Textarea::make('comment')
                    ->label('Isi Komentar')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name') // Mengakses nama pengguna dari relasi 'user'
                    ->searchable()
                    ->sortable()
                    ->label('Penulis'),
                TextColumn::make('artikel.title') // Mengakses judul artikel dari relasi 'artikel'
                    ->searchable()
                    ->sortable()
                    ->label('Judul Artikel'),
                TextColumn::make('comment')
                    ->searchable()
                    ->limit(50) // Membatasi panjang teks agar tidak terlalu panjang di tabel
                    ->label('Komentar'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}