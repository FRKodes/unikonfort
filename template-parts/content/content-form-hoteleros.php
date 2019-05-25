<div class="row">
	<div class="col-xs-12 col-sm-12 text-center">
		<h3 class="mayus azul-01">
			<span class="thin">Recibe asesoría de alguno de </span> <br>
			<span class="bigger">nuestros expertos</span>
		</h3>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-10 col-lg-6 ml-auto mr-auto mb-60">
		<form action="/sendmail-hotel" method="post" id="contactHotel">
			<div class="form-group">
				<select class="form-control" name="tipo_proyecto" id="tipo_proyecto">
					<option value="">¿TIPO DE PROYECTO?</option>
					<option value="Hotel">Hotel</option>
					<option value="Motel ">Motel</option>
					<option value="Hostal ">Hostal</option>
					<option value="Airbnb ">Airbnb</option>
					<option value="Otro">Otro</option>
				</select>
			</div>

			<div class="form-group">
				<input type="text" name="ubicacion" class="form-control" placeholder="*Ubicación" data-validate="required">
			</div>

			<div class="form-group"><p>¿MEDIDA?</p></div>

			<div class="form-group checkbox-line">
				<input type="checkbox" name="individual" value="Individual">
				<label for="individual">Individual</label>
			</div>

			<div class="form-group checkbox-line">
				<input type="checkbox" name="matrimonial" value="Matrimonial">
				<label for="matrimonial">Matrimonial</label>
			</div>

			<div class="form-group checkbox-line">
				<input type="checkbox" name="queen_size" value="Queen size">
				<label for="queen_size">Queen size</label>
			</div>

			<div class="form-group checkbox-line">
				<input type="checkbox" name="king_size" value="King size">
				<label for="king_size">King size</label>
			</div>

			<div class="form-group">
				<textarea name="detalles_proyecto" class="form-control" id="detalles_proyecto" placeholder="Cuéntanos un poco más de tu proyecto para poder ofrecerte las opciones adecuadas" cols="30" rows="10"></textarea>
			</div>

			<div class="form-group">
				<input type="text" name="nombre" class="form-control" placeholder="*Nombre" data-validate="required">
			</div>
			<div class="form-group">
				<input type="text" name="ciudad" class="form-control" placeholder="*Ciudad" data-validate="required">
			</div>
			<div class="form-group">
				<input type="text" name="telefono" class="form-control" placeholder="*Teléfono" data-validate="required">
			</div>
			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="*Email" data-validate="required">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="ENVIAR" class="btn btn-primary cien">
			</div>
			<div class="sent_mail_alert">¡Gracias!<br>Tu mensaje se envió exitosamente, en breve nos pondremos en contacto contigo.</div>
		</form>
	</div>
</div>