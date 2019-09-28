<div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Creative Tim
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="dashboard.html">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="user.html">
                    <i class="ti-user"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="table.html">
                    <i class="ti-view-list-alt"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                    <a href="{{url('crearImagen')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Crear Imagen</p>
                    </a>
                </li>
                <li>
                        <a href="{{url('listarImagen')}}">
                            <i class="ti-view-list-alt"></i>
                            <p>listar Imagen</p>
                        </a>
                    </li>
                
            <li>
                <a href="table.html">
                        <i class="ti-power-off"></i>
                        <p>Salir</p>
                    </a>
            </li>            
        </ul>
    </div>
</div>