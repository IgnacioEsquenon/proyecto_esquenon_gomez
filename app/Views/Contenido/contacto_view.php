<section class="contacto">
    <link rel="stylesheet" href=<?php echo base_url('assets/css/contacto_style.css')?>>

    <div>
        <h2 class="titulo-seccion">1. Datos Legales de la Empresa</h2>
        <p class="descripcion-item"><strong>Nombre del titular:</strong> Juan Pérez</p>
        <p class="descripcion-item"><strong>Razón social:</strong> Plugit S.A.</p>
        <p class="descripcion-item"><strong>CUIT:</strong> 30-12345678-9</p>
        <p class="descripcion-item"><strong>Domicilio legal:</strong> Av. Rivadavia 2500, Piso 3, CABA, Argentina.</p>
        <p class="descripcion-item"><strong>Actividad:</strong> Venta minorista de periféricos para computadoras y celulares.</p>
    </div>

    <div>
        <h2 class="titulo-seccion">2. Canales de Comunicación</h2>
        <p class="descripcion-item"><strong>Teléfonos:</strong></p>
        <ul>
        <li>Fijo: (011) 1234-5678 (Lunes a Viernes, 9:00 a 18:00 hs)</li>
        <li>Móvil/WhatsApp: +54 9 11 8765-4321 (mensajes 24/7)</li>
        </ul>
        <p class="descripcion-item"><strong>Email:</strong></p>
        <ul>
        <li>Consultas generales: <a href="mailto:info@plugit.com.ar">info@plugit.com.ar</a></li>
        <li>Soporte técnico: <a href="mailto:soporte@plugit.com.ar">soporte@plugit.com.ar</a></li>
        </ul>
        <p class="descripcion-item"><strong>Redes Sociales:</strong></p>
        <ul>
        <li>Instagram: @plugit_ok</li>
        <li>Facebook: Plugit Argentina</li>
        </ul>
    </div>

    <div>
        <h2 class="titulo-seccion">3. Formulario de Contacto</h2>
        <form>
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">

        <label for="motivo">Motivo de contacto:</label>
        <select id="motivo" name="motivo" required>
            <option value="">Seleccione una opción</option>
            <option value="productos">Consulta por productos</option>
            <option value="soporte">Soporte técnico</option>
            <option value="reclamo">Reclamo o devolución</option>
            <option value="facturacion">Facturación</option>
            <option value="otro">Otro (especificar)</option>
        </select>

        <label for="otro">Otro (especificar):</label>
        <input type="text" id="otro" name="otro">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea>

        <label for="archivo">Adjuntar archivo (opcional):</label>
        <input type="file" id="archivo" name="archivo">

        <label>
            <input type="checkbox" id="privacidad" name="privacidad" required>
            Acepto políticas de privacidad
        </label>

        <input type="submit" value="Enviar">
        </form>
    </div>

</section>