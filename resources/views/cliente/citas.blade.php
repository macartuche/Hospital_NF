@include('/cliente/superior')

<header>

    <!-- referencias -->

    <link rel="stylesheet" href="css/formpaciente.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</header>

<body>
    <div class="container">
        <h1>Aquí podrá agendar la cita para su paciente</h1>
    </div>
    
    <div class="container">
    
        <!-- Formulario de ingreso de paciente-->
    
    
    <h2>Agenda tu cita</h2>
    
    <div class="container">
      <form action="/action_page.php">
    
        <div class="row">
          <div class="col-25">
            <label for="fname">Seleccione el paciente</label>
          </div>
    
          <div class="col-75">
            <select id="paciente" name="paciente">
              <option value="australia">Paciente 1</option>
              <option value="canada">Paciente 2</option>
              <option value="usa">Paciente 3</option>
            </select>
          </div>
        </div>
    
        <div class="row">
            <div class="col-25">
              <label for="fname">Seleccione la especialidad</label>
            </div>
      
            <div class="col-25">
              <select id="especialidad" name="especialidad">
                <option value="australia">Especialidad 1</option>
                <option value="canada">especialidad 2</option>
                <option value="usa">especialidad 3</option>
              </select>
            </div>
        </div>
    
        <div class="row">
            <div class="col-25">
              <label for="fname">Seleccione el médico</label>
            </div>
      
            <div class="col-75">
              <select id="medico" name="medico">
                <option value="australia">medico 1</option>
                <option value="canada">medico 2</option>
                <option value="usa">medico 3</option>
              </select>
            </div>
        </div>
    
        <hr>
        <p>Recuerde que los horarios de atención son en la mañana desde las 9:00 hasta las 12:00, y por la tarde desde las 16:00 hasta las 18:00.
            Por favor seleccione si desea agendar en la mañana o en la tarde
        </p>
  
        <!-- Calendario pick-a-date -->

        <div class="row">
            <div class="col-25">
              <label for="fecha">Seleccione el día y la hora</label>
            </div>
            <div class="col-25">
                <input id="fecha" type="text" class="form-control input-sm datepicker " >  
            </div>
          </div>
    
        <div class="row">
          <div class="col-25">
            <label for="detalle">Notas adicionales</label>
          </div>
          <div class="col-75">
            <textarea name="textarea" rows="10" cols="50">Escriba algún detalle adicional a considerar</textarea>
          </div>
        </div>         
      </form>
    </div>
</body>

<!-- Calendario -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $.datetimepicker.setLocale('es');
     $('#fecha').datetimepicker({
         inline:false,
         allowTimes:[
            '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', 
            '16:00', '16:30', '17:00', '17:30', '18:00'
 ]
    });
</script>

@include('/cliente/inferior')


