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
                                        <form method="POST" action="{{ route('actualizarPregunta')}}">
                                                
                                                
                                                <div class="header">
                                                        <h4 class="title">Editar pregunta</h4><br>
                                                    </div>
                                                
                                                                                                      
                                                    
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                                <input type="hidden" name="id" value="{{ $faq->id }}">
                                                            <label>Pregunta</label>
                                                        <input type="text" name="pregunta" class="form-control border-input" value="{{ $faq->question }}" placeholder="coloque su enlace youtube" >
                                                        
                                                            <label>Respuesta</label>
                                                            <input type="text" name="respuesta" class="form-control border-input" value="{{ $faq->answer }}" placeholder="coloque su enlace youtube" >
                                                        
                                                                                                        
                                                        </div>
                                                    </div>
 
                                                </div>

                                               
            
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Actualizar Pregunta</button>
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
