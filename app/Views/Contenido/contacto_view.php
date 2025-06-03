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
    
    <form method="post" action="<?php echo base_url('contacto/enviar') ?>">

      <div class="form-group">
        <label for="nombre">👤 Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required> 
      </div>

      <div class="form-group">
        <label for="email">📧 Email:</label>
        <input type="email" id="email" name="email" required>
      </div> 

      <div class="form-group">
        <label for="telefono">📞 Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">
      </div>

      <div class="form-group">
        <label for="motivo">🎯 Motivo de contacto:</label>
        <select id="motivo" name="motivo" required>
          <option value="">Seleccione una opción</option>
          <option value="productos">Consulta por productos</option>
          <option value="soporte">Soporte técnico</option>
          <option value="reclamo">Reclamo o devolución</option>
          <option value="facturacion">Facturación</option>
          <option value="otro">Otro (especificar)</option>
        </select>
      </div>

      <div class="form-group">
        <label for="otro">📝 Otro (especificar):</label>
        <input type="text" id="otro" name="otro">
      </div>

      <div class="form-group">
        <label for="mensaje">💬 Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>
      </div>

      <div class="form-group">
        <label for="archivo">📎 Adjuntar archivo (opcional):</label>
        <input type="file" id="archivo" name="archivo">
      </div>

      <div class="form-group">
        <label>
          <input type="checkbox" id="privacidad" name="privacidad" required>
          Acepto políticas de privacidad
        </label>
      </div>

      <input type="submit" value="Enviar">
    </form>
  </div>

</section> 
