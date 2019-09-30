<div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/')}}" class="simple-text">
                Casa Garcia
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="{{url('administrador')}}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                    <a href="#">
                            
                            <p><small>MEDIA</small></p>
                            
                        </a>
                </li>       
            <li>
                <a href="{{url('crearImagen')}}">
                        <i class="ti-view-list-alt"></i>
                            <p>Cargar Media</p>
                    </a>
            </li>
            <li>
                <a href="{{url('listarImagen')}}">
                    <i class="ti-view-list-alt"></i>
                    <p>Listar Media</p>
                </a>
            </li>
            <li>
                    <a href="#">
                           
                            <p><small>ENLACES</small></p>
                            
                        </a>
                </li> 
            <li>
                <a href="{{url('enlaces')}}">
                    <i class="ti-view-list-alt"></i>
                    <p>Configurar Enlaces</p>
                </a>
            </li>            
                
            <li>
                <a href="{{ route('logout') }}">
                        <i class="ti-power-off"></i>
                        <p>Salir</p>
                    </a>
            </li>            
        </ul>
    </div>
</div>