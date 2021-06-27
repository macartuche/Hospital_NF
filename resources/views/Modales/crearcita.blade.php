    @php
        use App\Models\Especialidades;
        use App\Models\User;
        
        $especialidades = Especialidades::all();
        $medicos = User::all();
    @endphp
    <!------------------------------------------------------------Crear Cita--------------------------------------------------------->
    <div class="modal fade" id="citaModal{{ $paciente->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Cita para {{ $paciente->name }}
                        {{ $paciente->apellido }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('crearcita', $paciente->id) }}" method="POST">
                        <div id="modalBody" class="modal-body">
                            <!-- Formulario -->
                            @csrf

                            <div class="form-group">
                                <label for="genero">Especialidad</label>
                                <select name="especialidad_id" id="especialidad_id" class="form-control">
                                    @foreach ($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}">{{ $especialidad->especialidad }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="genero">Medico</label>
                                <select name="medico_id" id="medico_id" class="form-control">

                                    @foreach ($medicos as $medico)
                                        @if ($medico->rol_id == 3)
                                            <option value="{{ $medico->id }}">{{ $medico->name }}</option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>

                            <!-- Calendario pick-a-date -->

                            <div class="form-group" autocomplete="off">
                                <div class="col-25">
                                    <label for="fecha">Seleccione el día y la hora</label>
                                </div>
                                <div class="form-inline">
                                    <input id="fecha" name="fecha_cita" type="text" class="form-control input-sm datepicker"
                                        placeholder=""autocomplete="off">
                                </div>
                            </div>
                        </div>

                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="submit" id="btnGuardarCita" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Calendario -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"
        integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $.datetimepicker.setLocale('es');
        $('#fecha').datetimepicker({
            inline: false,
            allowTimes: [
                '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00',
                '16:00', '16:30', '17:00', '17:30', '18:00'
            ]
        });
    </script>
