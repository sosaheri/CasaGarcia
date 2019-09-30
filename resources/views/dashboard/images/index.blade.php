@extends('layouts.dashboard')




@section('content')

    
        <div class="main-panel">

            @include('layouts.navbar')
    
    
            <div class="content">
                    <div class="container-fluid">

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif

                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="row">
                                                    <div class="card header">
                                                            <h4 class="title">Biblioteca de medios</h4>
                                                            
                                                    </div>

                                            </div>

                                            <div class="row container flex">
                                                    @foreach ($medias as $media)

                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="{{ asset('storage') }}/{{ $media->url }}">
                                                        </div>

                                                        <div>
                                                                
                                                            <a href="{{ url('eliminarImagen', [$media->id] ) }}"><button type="submit" class="btn btn-danger">Eliminar</button></a>
                                                             <p>{{ $media->category }}</p>   
                                                        </div>
                                                    </div>

                                                    @endforeach

                                        
                                                </div>


                                         
                                        </div>
                                    </div>
                
                
                                   
                
                
                                </div>        
                    </div>
            </div>
    
    
            @include('layouts.footer')
    
        </div>



@endsection
