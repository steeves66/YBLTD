<aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <div class="p-1">
        <div class="bg-dark">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/user.png') }}"
                        alt="User profile picture">
                </div>

                <h3 class="text-center profile-username ellipsis">{{ userFullName() }}</h3>

                <p class="text-center text-muted">
                    {{ getUserRolesName() }}
                </p>

                <ul class="mb-3 list-group bg-dark ">
                    <li class="list-group-item">
                        <a href="#" class="d-flex align-items-center"><i class="pr-2 fa fa-lock"></i><b>Mot de
                                passe</b></a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="d-flex align-items-center"><i class="pr-2 fa fa-user"></i><b>Mon
                                profil</b></a>
                    </li>
                </ul>

                <a class="btn btn-primary btn-block" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <b>Se deconnecter</b>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <!-- /.card-body -->

</aside>
