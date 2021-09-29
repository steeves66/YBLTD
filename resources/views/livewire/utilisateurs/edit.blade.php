{{-- <div class="ml-4 row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-user-plus fa-2x"></i>
                    Formulaire de modification d'utilisateur</hh3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="updateUser()">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-2 form-group flex-grow-1">
                            <label>Nom</label>
                            <input type="text" wire:model="editUser.nom" class="form-control @error('editUser.nom')
                                is-invalid @enderror">
                            @error("editUser.nom")
                            <span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group flex-grow-1">
    <label>Prénoms</label>
    <input type="text" wire:model="editUser.prenoms" class="form-control @error('editUser.nom')
                            is-invalid @enderror">
    @error("editUser.prenoms")
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>

<div class="form-group">
    <label>Sexe</label>
    <select wire:model="editUser.sexe" class="form-control @error('editUser.sexe')
                        is-invalid @enderror">
        <option value=""> ---------------</option>
        <option value="1"> Homme</option>
        <option value="0"> Femme</option>
    </select>
    @error("editUser.sexe")
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" wire:model="editUser.email" class="form-control @error('editUser.email')
                        is-invalid @enderror">
    @error("editUser.email")
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="d-flex">
    <div wire:model="newUser.telephone1" class="mr-2 form-group flex-grow-1">
        <label>Telephone 1</label>
        <input type="text" class="form-control @error('editUser.telephone1')
                            is-invalid @enderror" wire:model="editUser.telephone1">
        @error("editUser.telephone1")
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group flex-grow-1">
        <label>Telephone 2</label>
        <input type="text" class="form-control @error('editUser.telephone1')
                            is-invalid @enderror" wire:model="editUser.telephone2">
        @error("editUser.telephone2")
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label>Pièce d'identité</label>
    <select wire:model="editUser.piece_identite" class="form-control @error('editUser.piece_identite')
                        is-invalid @enderror">
        <option value=""> ---------------</option>
        <option value="0"> CNI</option>
        <option value="2"> Permis de conduire</option>
        <option value="1"> Passport</option>
    </select>
    @error("editUser.piece_identite")
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>N° Piece identité</label>
    <input type="text" wire:model="editUser.numero_piece_identite" class="form-control @error('editUser.numero_piece_identite')
                        is-invalid @enderror">
    @error("editUser.numero_piece_identite")
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Appliquer la Modifier</button>
    <button type="button" class="btn btn-danger" wire:click="goToListUser()">Retourner à la liste des
        utilisateurs</button>
</div>
</form>
</div>
</div>
</div> --}}

<div class="flex-wrap d-flex justify-content-between">

    <div class="mx-2 card card-primary" style="flex-grow:1;flew-shrink:1;flex-basis:0%">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-user-plus fa-2x"></i>
                Formulaire de modification d'utilisateur</hh3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" wire:submit.prevent="updateUser()">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-2 form-group flex-grow-1">
                        <label>Nom</label>
                        <input type="text" wire:model="editUser.nom" class="form-control @error('editUser.nom')
                                is-invalid @enderror">
                        @error("editUser.nom")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Prénoms</label>
                        <input type="text" wire:model="editUser.prenoms" class="form-control @error('editUser.nom')
                            is-invalid @enderror">
                        @error("editUser.prenoms")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Sexe</label>
                    <select wire:model="editUser.sexe" class="form-control @error('editUser.sexe')
                        is-invalid @enderror">
                        <option value=""> ---------------</option>
                        <option value="1"> Homme</option>
                        <option value="0"> Femme</option>
                    </select>
                    @error("editUser.sexe")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" wire:model="editUser.email" class="form-control @error('editUser.email')
                        is-invalid @enderror">
                    @error("editUser.email")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex">
                    <div wire:model="newUser.telephone1" class="mr-2 form-group flex-grow-1">
                        <label>Telephone 1</label>
                        <input type="text" class="form-control @error('editUser.telephone1')
                            is-invalid @enderror" wire:model="editUser.telephone1">
                        @error("editUser.telephone1")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Telephone 2</label>
                        <input type="text" class="form-control @error('editUser.telephone1')
                            is-invalid @enderror" wire:model="editUser.telephone2">
                        @error("editUser.telephone2")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Pièce d'identité</label>
                    <select wire:model="editUser.piece_identite" class="form-control @error('editUser.piece_identite')
                        is-invalid @enderror">
                        <option value=""> ---------------</option>
                        <option value="0"> CNI</option>
                        <option value="2"> Permis de conduire</option>
                        <option value="1"> Passport</option>
                    </select>
                    @error("editUser.piece_identite")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>N° Piece identité</label>
                    <input type="text" wire:model="editUser.numero_piece_identite" class="form-control @error('editUser.numero_piece_identite')
                        is-invalid @enderror">
                    @error("editUser.numero_piece_identite")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Appliquer la Modifier</button>
                <button type="button" class="btn btn-danger" wire:click="goToListUser()">Retourner à la liste des
                    utilisateurs</button>
            </div>
        </form>
    </div>
    <div class="mx-2 d-flex flex-column justify-content-start" style="flex-grow:1;flew-shrink:1;flex-basis:0%">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-key fa-2x"></i>Réinitialisation de mot de passe</h3>
            </div>
            <div class="card-body">
                <ul>
                    <li>
                        <a href="" class="btn btn-link" wire:click.prevent="confirmPasswordReset">Réinitialiser le mot
                            de passe</a>
                        <span>(par defaut: "password")</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-fingerprint fa-2x"></i>Roles et permissions</h3>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
