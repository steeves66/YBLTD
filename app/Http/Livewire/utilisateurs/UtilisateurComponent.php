<?php

namespace App\Http\Livewire\utilisateurs;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UtilisateurComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $currentPage = USERPAGELIST;

    public $newUser = [];
    public $editUser = [];

    protected $rules = [
        'newUser.nom' => 'required',
        'newUser.prenoms' => 'required',
        'newUser.sexe' => 'required',
        'newUser.email' => 'required|email|unique:users,email',
        'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
        'newUser.piece_identite' => 'required',
        'newUser.numero_piece_identite' => 'required|unique:users,numero_piece_identite',
    ];

    /* protected $messages = [
        'newUser.nom.required' => "Le nom de l'utilisateur est requis."
    ];

    protected $validationAttributes = [
        'NewUser.telephone1' => 'numero de telephone1'
    ]; */

    protected function rules()
    {
        if ($this->currentPage == USERPAGEEDITFORM) {
            return [
                'editUser.nom' => 'required',
                'editUser.prenoms' => 'required',
                'editUser.sexe' => 'required',
                'editUser.email' => ['required', 'email', Rule::unique("users", "email")->ignore($this->editUser['id'])],
                'editUser.telephone1' => ['required', 'numeric', Rule::unique("users", "telephone1")->ignore($this->editUser['id'])],
                'editUser.piece_identite' => 'required',
                'editUser.numero_piece_identite' => ['required', Rule::unique("users", "numero_piece_identite")->ignore($this->editUser['id'])],
            ];
        }
        return [
            'newUser.nom' => 'required',
            'newUser.prenoms' => 'required',
            'newUser.sexe' => 'required',
            'newUser.email' => 'required|email|unique:users,email',
            'newUser.telephone1' => 'required|numeric|unique:users,telephone1',
            'newUser.piece_identite' => 'required',
            'newUser.numero_piece_identite' => 'required|unique:users,numero_piece_identite',
        ];
    }

    public function goToAddUser()
    {
        $this->currentPage = USERPAGECREATEFORM;
    }

    public function goToEditUser($id)
    {
        $this->editUser = User::find($id)->toArray();
        $this->currentPage = USERPAGEEDITFORM;
    }

    public function goToListUser()
    {
        $this->currentPage = USERPAGELIST;
        //$this->editUser = [];
    }

    public function addUser()
    {
        $validationAttributes = $this->validate();
        $validationAttributes["newUser"]["password"] = "password";
        User::create($validationAttributes["newUser"]);
        $this->newUser = [];
        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Utilisateur crée avec succès !"]);
    }

    public function updateUser()
    {
        $validationAttributes = $this->validate();
        User::find($this->editUser["id"])->update($validationAttributes["editUser"]);
        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Utilisateur modifié avec succès !"]);
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

    public function confirmPasswordReset()
    {
        $this->dispatchBrowserEvent("showResetPasswordConfirmMessage", [
            'message' => [
                "text" => "Vous êtes sur le point de réinitialiser le mot de passe de {$this->editUser["nom"]} {$this->editUser["prenoms"]}. Voulez-vous continuer?",
                "title" => "Êtes-vous sûr de continuer",
                "icon" => "warning"
            ]
        ]);
    }

    public function resetPassword()
    {
        User::find($this->editUser["id"])->update(["password" => Hash::make(DEFAULTPASSWORD)]);
        $this->dispatchBrowserEvent("showDeleteSuccessMessage", ["message" => "Mot de passe utilisateur réinitialisé avec succès !"]);
    }

    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "users" => User::latest()->paginate(7),
        ])->extends('layouts.master')
            ->section('contenu');
    }
}
