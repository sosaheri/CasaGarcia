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
                                                            <h4 class="title">Biblioteca de imagenes</h4>
                                                            
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
                                                                
                                                        </div>
                                                    </div>

                                                    @endforeach

                                                    {{-- <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="https://source.unsplash.com/VQYxQiiRky0">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="https://source.unsplash.com/gJFvHkUHdSI">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="https://source.unsplash.com/Bjw6dbIYtNE">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="https://source.unsplash.com/C52dylsC1-g">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="https://source.unsplash.com/wsMwDxF8SKA">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="https://source.unsplash.com/sfze-8LfCXI">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="https://source.unsplash.com/8oydDuX4AAM">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="thumbnail">
                                                            <img src="https://source.unsplash.com/PN_c3RKCVlA">
                                                        </div>
                                                    </div> --}}
                                        
                                                </div>


                                            {{-- <div class="content table-responsive table-full-width">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Salary</th>
                                                        <th>Country</th>
                                                        <th>City</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Dakota Rice</td>
                                                            <td>$36,738</td>
                                                            <td>Niger</td>
                                                            <td>Oud-Turnhout</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Minerva Hooper</td>
                                                            <td>$23,789</td>
                                                            <td>Curaçao</td>
                                                            <td>Sinaai-Waas</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Sage Rodriguez</td>
                                                            <td>$56,142</td>
                                                            <td>Netherlands</td>
                                                            <td>Baileux</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Philip Chaney</td>
                                                            <td>$38,735</td>
                                                            <td>Korea, South</td>
                                                            <td>Overland Park</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Doris Greene</td>
                                                            <td>$63,542</td>
                                                            <td>Malawi</td>
                                                            <td>Feldkirchen in Kärnten</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Mason Porter</td>
                                                            <td>$78,615</td>
                                                            <td>Chile</td>
                                                            <td>Gloucester</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                
                                            </div> --}}
                                        </div>
                                    </div>
                
                
                                   
                
                
                                </div>        
                    </div>
            </div>
    
    
            @include('layouts.footer')
    
        </div>



@endsection
