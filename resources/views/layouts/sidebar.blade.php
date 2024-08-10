
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="">
        <!-- <i class="fas fa-laugh-wink"></i> -->
        <img src="C:\Users\packardbell\Documents\bakilam\dap\Projet DAP\logo.png" alt="">
    </div>
    <div class="sidebar-brand-text mx-3">FACSCIENCE</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Page d acceuil</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Gestion du Materiel</span>
    </a>
    <div id="materiel">
        <ul>
            <li>
                <a href="{{route('materiel')}}">
                    <span class="sub-item">Liste de materiel</span>
                </a>
            </li>
            <li>
                <a href="{{ route('materieldefect.show') }}">
                        <span class="sub-item">Liste de materiel defecteux </span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="nav-item active">
    <a class="nav-link" href="/profile">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Profil Utilisateur</span></a>
</li>

</ul>
