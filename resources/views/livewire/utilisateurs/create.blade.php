<div class="ml-4 row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-user-plus fa-2x"></i>
                    Formulaire de création d'un nouvel utilisateur</hh3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="addUser()">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-2 form-group flex-grow-1">
                            <label>Nom</label>
                            <input type="text" wire:model="newUser.nom" class="form-control @error('newUser.nom')
                                is-invalid @enderror">
                            @error("newUser.nom")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Prénoms</label>
                            <input type="text" wire:model="newUser.prenoms" class="form-control @error('newUser.nom')
                            is-invalid @enderror">
                            @error("newUser.prenoms")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Sexe</label>
                        <select wire:model="newUser.sexe" class="form-control @error('newUser.sexe')
                        is-invalid @enderror">
                            <option value=""> ---------------</option>
                            <option value="1"> Homme</option>
                            <option value="0"> Femme</option>
                        </select>
                        @error("newUser.sexe")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" wire:model="newUser.email" class="form-control @error('newUser.email')
                        is-invalid @enderror">
                        @error("newUser.email")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex">
                        <div wire:model="newUser.telephone1" class="mr-2 form-group flex-grow-1">
                            <label>Telephone 1</label>
                            <input type="text" class="form-control @error('newUser.telephone1')
                            is-invalid @enderror" wire:model="newUser.telephone1">
                            @error("newUser.telephone1")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Telephone 2</label>
                            <input type="text" class="form-control @error('newUser.telephone1')
                            is-invalid @enderror" wire:model="newUser.telephone2">
                            @error("newUser.telephone2")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pièce d'identité</label>
                        <select wire:model="newUser.piece_identite" class="form-control @error('newUser.piece_identite')
                        is-invalid @enderror">
                            <option value=""> ---------------</option>
                            <option value="0"> CNI</option>
                            <option value="2"> Permis de conduire</option>
                            <option value="1"> Passport</option>
                        </select>
                        @error("newUser.piece_identite")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>N° Piece identité</label>
                        <input type="text" wire:model="newUser.numero_piece_identite" class="form-control @error('newUser.numero_piece_identite')
                        is-invalid @enderror">
                        @error("newUser.numero_piece_identite")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" disabled placeholder="Password">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="button" class="btn btn-danger" wire:click="goToListUser()">Retourner à la liste des
                        utilisateurs</button>
                </div>
            </form>
        </div>
    </div>
</div>
