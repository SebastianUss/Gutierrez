<div class="modal-content">
    <form id="formUpdate" action="{{ $persona->id ? route('persona.update', $persona) : route('persona.store') }}" method="post">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Persona</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if($persona->id)
                @method('PUT')
                <input type="hidden" name="id" value="{{ $persona->id }}">
            @endif
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese nombre" value="{{ $persona->nombre }}">
                <div id="msg_nombre"></div>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Ingrese apellido" value="{{ $persona->apellido }}">
                <div id="msg_apellido"></div>
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" name="dni" class="form-control" id="dni" placeholder="Ingrese DNI" value="{{ $persona->dni }}">
                <div id="msg_dni"></div>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" name="edad" class="form-control" id="edad" placeholder="Ingrese edad" value="{{ $persona->edad }}">
                <div id="msg_edad"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="guardar"><span id="textoBoton">Guardar</span></button>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
    </form>
</div>
