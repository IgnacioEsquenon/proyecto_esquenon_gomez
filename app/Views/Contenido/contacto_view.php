<link rel="stylesheet" href="<?php echo base_url('assets/css/contacto_style.css')?>">

<section class="contacto fade-scroll">
    <h2 class="Titulo">Contacto</h2>
    <!-- Datos Legales -->
    <div>
        <h2 class="titulo-seccion">1. Datos Legales de la Empresa</h2>
        <ul class="lista-contenido">
            <li class="item-principal"><strong class="titulo-item">Nombre del titular:</strong><br> Gomez Sebastian Exequiel</li>
            <li class="item-principal"><strong class="titulo-item">Razón social:</strong><br> Plugit S.A.</li>
            <li class="item-principal"><strong class="titulo-item">CUIT:</strong><br> 30-12345678-9</li>
            <li class="item-principal"><strong class="titulo-item">Domicilio legal:</strong><br> Av. Rivadavia 2500, Piso 3, CABA, Argentina.</li>
            <li class="item-principal"><strong class="titulo-item">Actividad:</strong><br> Venta minorista de periféricos para computadoras y celulares.</li>
        </ul>
    </div>

  <div>
    <h2 class="titulo-seccion">2. Canales de Comunicación</h2>
    <ul class="lista-contenido">
      <li class="item-principal"><strong class="titulo-item">Teléfonos:</strong>
        <ul class="sub-lista">
          <li class="sub-item">📞 Fijo: <br> (011) 1234-5678 (Lunes a Viernes, 9:00 a 18:00 hs)</li>
          <li class="sub-item">📱 Móvil: <br> +54 9 11 8765-4321 (mensajes 24/7)</li>
        </ul>
      </li>
      <li class="item-principal"><strong class="titulo-item">Email:</strong>
        <ul class="sub-lista">
          <li class="sub-item">📧 Consultas generales: <br> <a href="mailto:info@plugit.com.ar">info@plugit.com.ar</a></li>
          <li class="sub-item">🛠 Soporte técnico: <br> <a href="mailto:soporte@plugit.com.ar">soporte@plugit.com.ar</a></li>
        </ul>
      </li>
      <li class="item-principal"><strong class="titulo-item">Redes Sociales:</strong>
        <ul class="sub-lista">
          <li class="sub-item">📸 Instagram:<br> @plugit_ok</li>
          <li class="sub-item">📘 Facebook:<br> Plugit Argentina</li>
        </ul>
      </li>
    </ul>
  </div>

  <div>
    <h2 class="titulo-seccion">3. Formulario de Contacto</h2>
    <?php helper('form'); ?>
    <?php echo form_open('Contacto') ?>
        <div class="form-group">
            <label for="motivo">🎯 Motivo de contacto:</label>
            <select id="motivo" name="motivo" required>
                <option value="">Seleccione una opción</option>
                <option value="productos" <?php echo (isset($_POST['motivo']) && $_POST['motivo'] == 'productos' ? 'selected' : '') ?>>Consulta por productos</option>
                <option value="soporte" <?php echo (isset($_POST['motivo']) && $_POST['motivo'] == 'soporte' ? 'selected' : '') ?>>Soporte técnico</option>
                <option value="reclamo" <?php echo (isset($_POST['motivo']) && $_POST['motivo'] == 'reclamo' ? 'selected' : '') ?>>Reclamo o devolución</option>
                <option value="facturacion" <?php echo (isset($_POST['motivo']) && $_POST['motivo'] == 'facturacion' ? 'selected' : '') ?>>Facturación</option>
                <option value="otro" <?php echo (isset($_POST['motivo']) && $_POST['motivo'] == 'otro' ? 'selected' : '') ?>>Otro (especificar)</option>
            </select>
            <?php if(isset($validation) && $validation->hasError('motivo')): ?>
                <div class="text-danger"><?= $validation->getError('motivo') ?></div>
            <?php endif; ?>
        </div>

        <div class="form-group" id="otro-group" style="<?php echo (isset($_POST['motivo']) && $_POST['motivo'] == 'otro') ? '' : 'display: none;' ?>">
            <label for="otro">📝 Otro (especificar):</label>
            <input type="text" id="otro" name="otro" value="<?php echo isset($_POST['otro']) ? htmlspecialchars($_POST['otro']) : ''; ?>">
        </div>
        
        <div class="form-group mt-2">
            <label for="consulta">💬 Mensaje de Consulta</label>
            <?php echo form_textarea([ 'name' => 'consulta',  'id' => 'consulta'], set_value('consulta')); ?>
            <?php if(isset($validation) && $validation->hasError('consulta')): ?>
                <div class="text-danger"><?= $validation->getError('consulta') ?></div>
            <?php endif; ?>
        </div>

        <?php echo form_submit('Enviar Consulta', 'Enviar Consulta', "class='btn btn-success mt-3'") ?>
    <?php echo form_close(); ?> 

    <?php if(session()->getFlashdata('mensaje')) : ?> 
        <div class="alert alert-success">
            <?= session()->getFlashdata('mensaje') ?>
        </div>
    <?php endif; ?>
</div>

<script>
document.getElementById('motivo').addEventListener('change', function() {
    var otroGroup = document.getElementById('otro-group');
    var otroInput = document.getElementById('otro');
    
    if (this.value === 'otro') {
        otroGroup.style.display = 'block';
        otroInput.setAttribute('required', 'required');
    } else {
        otroGroup.style.display = 'none';
        otroInput.value = '';
        otroInput.removeAttribute('required');
    }
});
</script>

</section> 
