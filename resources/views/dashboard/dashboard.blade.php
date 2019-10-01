@extends('layouts.dashboard')




@section('content')

    
        <div class="main-panel">

            @include('layouts.navbar')
    
    
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title"> <h1>Bienvenido al panel administrativo de Casa Garcia </h1></h4>
                                    </div>
                                <div class="content">
    
                                    <div class="typo-line">
                                        <p class="text-info">
                                            Este panel tiene la intención de permitir agregar el contenido de multimedios para las distintas areas de la página web </p>
                                    </div>
    
                                     <div class="typo-line">
                                        <p class="category">Imágenes</p>
                                        <blockquote>
                                         <p>
                                         Cuenta con el módulo de <strong>MEDIA</strong> dondo puede agregar las imágenes junto a la categoria a cual corresponde
                                        <ul>
                                            <li>Sociales</li>
                                            <li>Gubernamentales</li>
                                            <li>Empresariales</li>
                                            <li>Catering / Inmobiliario</li>
                                        </ul>
                                        Según la categoria que elija esta imagen se desplegara en su página correspondiente
                                        </p>
                                        
                                        </blockquote>
                                    </div>
    
                                    <div class="typo-line">
                                        <p class="category">Enlaces a videos</p>
                                        <blockquote>
                                         <p>
                                         Este módulo <strong>ENLACES</strong> se encarga de cargar los enlaces correspondientes para el slider de la página principal y las páginas para cada tipo de evento</p>
                                        
                                        </blockquote>
                                    </div>

                                    <div class="typo-line">
                                            <p class="category">F.A.Q.</p>
                                            <blockquote>
                                             <p>
                                             
                                                El módulo de <strong>F.A.Q.</strong> permite agregar, preguntas y respuestas frecuentes, esta información se visualiza en toda las páginas internas
                                             </p>
                                            
                                            </blockquote>
                                        </div>
    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    
    
            @include('layouts.footer')
    
        </div>



@endsection
