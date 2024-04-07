
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <li class="{{ Request::is('home*') ? 'active' : '' }}">
        <a class="nav-link" href="/home">
            <i class="fas fa-building"></i><span>Dashboard</span>
        </a>
    </li>
    <li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
        <a class="nav-link" href="/usuarios">
            <i class="fas fa-users"></i><span>Usuarios</span>
        </a>
    </li>
    <li class="{{ Request::is('roles*') ? 'active' : '' }}">
        <a class="nav-link" href="/roles">
            <i class="fas fa-user-lock"></i><span>Roles</span>
        </a>
    </li>
    <li class="{{ Request::is('estudiantes*') ? 'active' : '' }}">
        <a class="nav-link" href="/estudiantes">
            <i class="fas fa-user-graduate"></i><span>Estudiantes</span>
        </a>
    </li>
    <li class="{{ Request::is('inscripciones*') ? 'active' : '' }}">
        <a class="nav-link" href="/inscripciones">
            <i class="fas fa-user-graduate"></i><span>Inscribir Estudiante</span>
        </a>
    </li>
    <li class="{{ Request::is('grupos') ? 'active' : '' }}">
        <a class="nav-link" href="/grupos">
          <i class="fas fa-users"></i>  <span>Grupos</span>
        </a>
      </li>
      
</ul>
