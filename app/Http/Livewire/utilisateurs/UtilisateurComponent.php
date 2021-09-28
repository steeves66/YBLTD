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

    public $isBtnAddClicked = false;

    public $newUser = [];

    protected $rules = [
        'newUser.nom' => 'required',
        'newUser.prenoms' => 'required',
        'newUser.sexe' => 'required',
        'newUser.email' => 'required|email|unique:users,email',
        'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
        'newUser.piece_identite' => 'required',
        'newUser.numero_piece_identite' => 'required|unique:users,numero_piece_identite',
    ];

    public function goToAddUser()
    {
        $this->isBtnAddClicked = true;
    }

    public function goToListUser()
    {
        $this->isBtnAddClicked = false;
    }

    public function addUser()
    {
        $validationAttributes = $this->validate();
        $validationAttributes["newUser"]["password"] = "password";
        User::create($validationAttributes["newUser"]);
        $this->newUser = [];
        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Utilisateur crée avec succès !"]);
    }

    public function confirmDelete($name, $id)
    {
        $this->dispatchBrowserEvent("showConfirmMessage", [
            'message' => [
                "text" => "Vous êtes sur le point de supprimer $name de la liste des utilisateurs. Voulez-vous continuer?",
                "title" => "Êtes-vous sûr de continuer",
                "icon" => "warning",
                "data" => [
                    "user_id" => $id
                ]
            ]
        ]);
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        $this->dispatchBrowserEvent("showDeleteSuccessMessage", ["message" => "Utilisateur supprimé avec succès !"]);
    }

    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "users" => User::latest()->paginate(7),
        ])->extends('layouts.master')
            ->section('contenu');
    }
}
