<div class="row">
	<div class="col-xs-12 col-md-10 col-lg-6 ml-auto mr-auto">
		<form action="/sendmail-hogar" method="post" id="contactHogar">
			<div class="form-group">
				<select class="form-control" name="firmeza" id="firmeza">
					<option value="">¿QUE NIVEL DE FIRMEZA PREFIERES?</option>
					<option value="Suave">Suave</option>
					<option value="Intermedio">Intermedio</option>
					<option value="Firme">Firme</option>
				</select>
			</div>

			<div class="form-group">
				<select class="form-control" name="peso" id="peso">
					<option value="">¿CUÁL ES TU RANGO DE PESO?</option>
					<option value="30-50">30-50 KG</option>	
					<option value="50-70">50-70 KG</option>	
					<option value="70-90">70-90 KG</option>	
					<option value="90-120">90-120 KG</option>	
					<option value="+120">+120 KG</option>	
				</select>
			</div>

			<div class="form-group">
				<select class="form-control" name="solo_acompanado" id="solo_acompanado">
					<option value="">¿DUERMES SÓLO O ACOMPAÑADO?</option>
					<option value="Solo">Solo</option>	
					<option value="Acompañado">Acompañado</option>	
				</select>
			</div>

			<div class="form-group">
				<select class="form-control" name="peso_pareja" id="peso_pareja">
					<option value="">¿CUÁL ES EL RANGO DE PESO DE TU PAREJA?</option>
					<option value="30-50">30-50 KG</option>	
					<option value="50-70">50-70 KG</option>	
					<option value="70-90">70-90 KG</option>	
					<option value="90-120">90-120 KG</option>	
					<option value="+120">+120 KG</option>	
				</select>
			</div>

			<div class="form-group">
				<select class="form-control" name="preferencia_colchon" id="preferencia_colchon">
					<option value="">¿CÓMO PREFIERES TU COLCHÓN?</option>
					<option value="Con colchoneta">Con colchoneta</option>
					<option value="Sin colchoneta">Sin colchoneta</option>
					<option value="Me da igual">Me da igual</option>
				</select>
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
				<input type="text" name="nombre" class="form-control" placeholder="*Nombre" data-validate="required">
			</div>
			<div class="form-group">
				<input type="text" name="ciudad" class="form-control" placeholder="*Ciudad" data-validate="required">
			</div>
			<div class="form-group">
				<input type="text" name="telefono" class="form-control" placeholder="*Teléfono" data-validate="required">
			</div>
			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="*Email" data-validate="required|email">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="ENVIAR" class="btn btn-primary cien">
			</div>
			<div class="sent_mail_alert">¡Gracias!<br>Tu mensaje se envió exitosamente, en breve nos pondremos en contacto contigo.</div>
		</form>
	</div>
</div>