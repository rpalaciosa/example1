
@extends('layouts.admin')

@section('content')
<link href="/css/marks.css" rel="stylesheet">
    <div class="container">
        <div class="col-sm-10 col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Marcas
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                  	 <form action="{{ url('admin/marcas')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="mark-nombre" class="col-sm-3 control-label">Marca</label>

                            <div class="col-sm-9">
                                <input type="text" name="nombre" id="mark-nombre" class="form-control" value="{{ old('mark') }}">
                            </div>
							
                        </div>
						
						<div class="form-group">
							<label for="mark-descripcion" class="col-sm-3 control-label">Descripción</label>

                            <div class="col-sm-9">
								 <textarea class="form-control col-sm-9" rows="3" name="descripcion" id="mark-descripcion">{{ old('mark') }}</textarea>
                            </div>
						</div>
						
						<div class="form-group">
							<label for="mark-estado" class="col-sm-3 control-label">Activo</label>

                            <div class="col-sm-9">
								 <!-- Rounded switch -->
								<label class="switch">
								  <input type="checkbox" name="estado" id="mark-estado">
								  <span class="slider round"></span>
								</label>
								
                            </div>
						</div>
						
						<div class="form-group">
							<label for="mark-id_categoria" class="col-sm-3 control-label">Categor&iacute;a</label>

							<div class="col-sm-9">
								<select name="id_categoria" id="mark-id_categoria" class="form-control">
									@foreach ($categories as $cat)
										<option value="{{ $cat->id }}">{{ $cat->title  }}</option>
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group">
                            <label for="mark-url" class="col-sm-3 control-label">URL</label>

                            <div class="col-sm-9">
                                <input type="text" name="url" id="mark-url" class="form-control" value="{{ old('mark') }}">
                            </div>
							
                        </div>	
						
						<div class="form-group">
                            <label for="mark-logo" class="col-sm-3 control-label">Logo</label>

                            <div class="col-sm-9">
                                <input type="text" name="logo" id="mark-logo" class="form-control" value="{{ old('mark') }}">
                            </div>
							
                        </div>	
								
								
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Agregar Marca
                                </button>
                            </div>
                        </div>
						
						
                    </form>
                </div>
            </div>

            <!-- Current Marks -->
            @if (count($marks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Marcas
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped mark-table">
                            <thead>
                                <th>Marca</th>
								<th>Estado</th>
                                <th>Categoria</th>
								<th>url</th>
								<th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($marks as $mark)
                                    <tr>
                                        <td class="table-text"><div>{{ $mark->nombre }}</div></td>
										<td class="table-text"><div>{{ $mark->estado }}</div></td>
										<td class="table-text"><div>{{ App\Mark::GetCategory($mark->id_categoria)[0]->title }}</div></td>
										<td class="table-text"><div>{{ $mark->url }}</div></td>

                                        <!-- mark Delete Button -->
                                        <td>
                                            <form action="{{ url('mark/'.$mark->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
