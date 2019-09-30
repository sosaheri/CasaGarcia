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
                                        
                                        <div class="content">
                                        <form method="POST" action="{{ route('guardarEnlaces')}}">
                                                
                                                
                                                <div class="header">
                                                        <h4 class="title">Enlaces para slider</h4><br>
                                                    </div>
                                                
                                                    @php
                                                        $video = $enlaces;
                                                        
                                                    @endphp

                                                    
                                                    
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Enlace Youtube del video 1</label>
                                                        <input type="text" name="slider1" class="form-control border-input" value="{{ $video[0]->url }}" placeholder="coloque su enlace youtube" >
                                                        
                                                            <label>Enlace Youtube del video 2</label>
                                                            <input type="text" name="slider2" class="form-control border-input" value="{{ $video[1]->url }}" placeholder="coloque su enlace youtube" >
                                                        
                                                            <label>Enlace Youtube del video 3</label>
                                                            <input type="text" name="slider3" class="form-control border-input" value="{{ $video[2]->url }}" placeholder="coloque su enlace youtube" >
                                                        
                                                        
                                                        </div>
                                                    </div>
 
                                                </div>

                                                <div class="header">
                                                        <h4 class="title">Enlaces páginas de eventos</h4>
                                                    </div>

                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label>Enlace Youtube página de sociales</label>
                                                            <input type="text" name="v1" class="form-control border-input" value="{{ $video[3]->url }}" placeholder="coloque su enlace youtube" >
                                                        
                                                            <label>Enlace Youtube página de gubernamentales</label>
                                                            <input type="text" name="v2" class="form-control border-input" value="{{ $video[4]->url }}"placeholder="coloque su enlace youtube" >
                                                        
                                                            <label>Enlace Youtube página de empresariales</label>
                                                            <input type="text" name="v3" class="form-control border-input" value="{{ $video[5]->url }}" placeholder="coloque su enlace youtube" >
                                                        
                                                            <label>Enlace Youtube página de catering / inmobiliario</label>
                                                            <input type="text" name="v4" class="form-control border-input" value="{{ $video[6]->url }}" placeholder="coloque su enlace youtube" >
                                                        
                                                            </div>
                                                        </div>
     
                                                    </div>
            
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Actualizar</button>
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
