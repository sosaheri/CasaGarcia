@extends('layouts.dashboard')




@section('content')

    
        <div class="main-panel">

            @include('layouts.navbar')
    
    
            <div class="content">
                    <div class="container-fluid">
                            <div class="row">

                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif

                                    @if ($message = Session::get('error'))
                                    <div class="alert alert-alert">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                
                                <div class="col-lg col-md">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Cargar Media</h4>
                                        </div>
                                        <div class="content">
                                        <form method="POST" action="{{ route('guardarImagen')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                                
                                                <input type="hidden" name="type" value="image">
            
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Cargar archivo</label>
                                                            <input type="file" name="ruta" class="form-control border-input" placeholder="Cargar Archivo" >
                                                        </div>
                                                    </div>
 
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Elegir Categoria</label>
                                                                <select name="category" id="category" class="form-control border-input">
                                                                <option value="sociales">Sociales</option>
                                                                <option value="gubernamental">Gubernamental</option>
                                                                <option value="empresarial">Empresarial</option>
                                                                <option value="carpas">Carpas</option>
                                                                <option value="cuadrada">Mesas Cuadradas</option>
                                                                <option value="mesa-vintage">Mesa Vintage</option>
                                                                <option value="Periquera">Periquera</option>
                                                                <option value="sala-vintage">Sala Vintage</option>
                                                                <option value="lounge">Sala Lounge</option>
                                                                <option value="bocadillos">Bocadillos</option>
                                                                </select>
                                                            </div>
                                                        </div>
     
                                                    </div>
            
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Guardar</button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
            
            
                            </div>
                        </div>
            </div>
    
    
            @include('layouts.footer')
    
        </div>



@endsection
