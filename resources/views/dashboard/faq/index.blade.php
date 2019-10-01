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
                                                <div class="header">
                                                    <h4 class="title">Preguntas Frecuentes</h4>
                                                    
                                                </div>
                                                <div class="content table-responsive table-full-width">
                                                        <form method="POST" action="{{ route('guardarPregunta')}}">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr><th></th>
                                                            <th>Pregunta</th>
                                                            <th>Respuesta</th>
                                                            <th>Editar</th>
                                                            <th>Borrar</th>
                                                        </tr></thead>
                                                        <tbody>

                                                                @foreach ($faqs as $media)
                                                            <tr>
                                                                <td> {{ $media->id }}</td>
                                                                <td> {{ $media->question }}</td>
                                                                <td> {{ $media->answer }}</td>
                                                            <td> <a href="{{ url('/eliminarPregunta', [$media->id] )}}">Borrar</a>  </td>
                                                                <td> <a href="{{ url('/editarPregunta', [$media] )}}">Editar</a> </td>
                                                            </tr>
                                                                @endforeach
                                                                <tr>
                                                                        <td> </td>
                                                                        <td> Agrega una pregunta nueva<br><br><input type="text" name="pregunta" id="pregunta" placeholder="Pregunta"></td>
                                                                        <td><br><br><input type="text" name="respuesta" id="respuesta" placeholder="Respuesta"></td>
                                                                        <td> </td>
                                                                        <td> <button type="submit" class="btn btn-info btn-fill btn-wd">Crear Pregunta</button> </td>
                                                                    </tr>
                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        </tbody>
                                                        </form>
                                                    </table>
                    
                                                </div>
                                            </div>
                                        </div>
                                   
                
                
                                </div>        
                    </div>
            </div>
    
    
            @include('layouts.footer')
    
        </div>



@endsection
