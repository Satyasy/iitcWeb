<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BudayaResource\Pages;
use App\Filament\Resources\BudayaResource\RelationManagers;
use App\Models\Budaya;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Lokasi;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\HtmlString;
use Filament\Tables\Actions\DeleteAction; // <-- Import ini
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;


class BudayaResource extends Resource
{
    protected static ?string $model = Budaya::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Di dalam kelas BudayaResource
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Budaya'),
                Select::make('jenis')
                    ->options([
                        'Pakaian' => 'Pakaian',
                        'Tari' => 'Tari',
                        'Ritual' => 'Ritual',
                        'Seni' => 'Seni',
                        'Upacara' => 'Upacara',
                        'Makanan' => 'Makanan',
                        'Bahasa' => 'Bahasa',
                        'Lainnya' => 'Lainnya',
                    ])
                    ->required(),
                Select::make('status')
                    ->options([
                        'aktif' => 'Aktif',
                        'hampir punah' => 'Hampir Punah',
                        'punah' => 'Punah',
                    ])
                    ->required()
                    ->default('aktif'),
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Select::make('asal_daerah')
                    ->relationship('lokasi', 'nama') // Menggunakan nama relasi 'lokasi'
                    ->searchable()
                    ->preload()
                    ->required()
                    ->createOptionForm([
                        TextInput::make('nama')->required()->label('Nama Lokasi'),
                        TextInput::make('alamat')->required()->label('Alamat'),
                    ])
                    ->label('Asal Daerah'),
                FileUpload::make('foto')
                    ->image()
                    ->disk('public') // PENTING: harus sama dengan disk yang digunakan
                    ->directory('budaya-photos') // PENTING: direktori harus sama
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->disk('public'),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Budaya'),
                TextColumn::make('jenis')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge(), // Menampilkan status sebagai label berwarna
                TextColumn::make('lokasi.nama') // Mengakses kolom 'nama' dari relasi 'lokasi'
                    ->searchable()
                    ->sortable()
                    ->label('Asal Daerah'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListBudayas::route('/'),
            'create' => Pages\CreateBudaya::route('/create'),
            'edit' => Pages\EditBudaya::route('/{record}/edit'),
        ];
    }
}