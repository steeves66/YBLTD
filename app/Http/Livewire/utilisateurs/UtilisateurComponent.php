<?php

namespace App\Http\Livewire\utilisateurs;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class UtilisateurComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "users" => User::paginate(7),
        ])->extends('layouts.master')
            ->section('contenu');
    }
}
