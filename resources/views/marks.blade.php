@extends('layouts.app')

@section('content')

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>


    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Marcas
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <form action="{{ url('mark')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Marca</label>

                            <div class="col-sm-9">
                                <input type="text" name="nombre" id="mark-nombre" class="form-control" value="{{ old('task') }}">
                            </div>
							
                        </div>
						
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Descripción</label>

                            <div class="col-sm-9">
								 <textarea class="form-control col-sm-9" rows="3" name="descripcion" id="mark-descripcion">{{ old('task') }}</textarea>
                            </div>
						</div>
						
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Activo</label>

                            <div class="col-sm-9">
								 <!-- Rounded switch -->
								<label class="switch">
								  <input type="checkbox">
								  <span class="slider round"></span>
								</label>
								
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
                                <th>#</th>
								<th>Marca</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($marks as $mark)
                                    <tr>
                                        <td class="table-text"><div>{{ $mark->id }}</div></td>
										<td class="table-text"><div>{{ $mark->name }}</div></td>

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
