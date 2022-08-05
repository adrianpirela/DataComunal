 

function validarform()
	{
	
		var error = 0;

	
		// validar direccion
		var direccion = document.getElementById('errorDir');

		var direccion = document.form1.direccion_con;
		if( direccion.value === '' )
		{
			errorDir.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorDir.style.visibility = 'hidden';
		}



		// validar correo
		var correo = document.getElementById('errorCorreo');

		var correo = document.form1.correo_con;
		if( correo.value === '' )
		{
			errorCorreo.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorCorreo.style.visibility = 'hidden';
		}


		// validar pregunta
		var errorPre = document.getElementById('errorPre');

		var pregunta = document.form1.pregunta_con;
		if( pregunta.value === '' )
		{
			errorPre.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPre.style.visibility = 'hidden';
				// validar pregunta
				var re = /^[a-z ]*$/i;
				if ( !re.test(form1.pregunta_con.value) )
				{
					pregunta.style.background = '#B7D0EB';
					errorPre2.style.visibility = 'visible';
					form1.pregunta_con.focus();
					error = 1;					
				}
				else{

					errorPre2.style.visibility = 'hidden';
					pregunta.style.background = '#FFFFFF';
				}
	
		}

		// validar Respuesta
		var errorRes = document.getElementById('errorRes');

		var respuesta = document.form1.respuesta_con;
		if( respuesta.value === '' )
		{
			errorRes.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorRes.style.visibility = 'hidden';
				// validar pregunta
				var re = /^[a-z ]*$/i;
				if ( !re.test(form1.respuesta_con.value) )
				{
					respuesta.style.background = '#B7D0EB';
					errorRes2.style.visibility = 'visible';
					form1.respuesta_con.focus();
					error = 1;					
				}
				else{
					errorRes2.style.visibility = 'hidden';
					respuesta.style.background = '#FFFFFF';

				}
	
		}


		//validar contraseñas
		var c1 = document.form1.pass;
		if( c1.value === '' )
		{
			errorPass.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPass.style.visibility = 'hidden';
		}

	
		var c2 = document.form1.pass2;
		if( c2.value === '' )
		{
			errorPass2.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPass2.style.visibility = 'hidden';
		}

		if ( form1.pass.value != form1.pass2.value )
		{
			errorPassC.style.visibility = 'visible';
			form1.pass.focus();
			form1.pass2.focus();
			error = 1;	
		}
		else{

			errorPassC.style.visibility = 'hidden';
		}

		//Valida Infomarcion de la Persona de Contacto

		//Valida Nombre Contacto
		var errorNomC = document.getElementById('errorNomC');

		var nombreC = document.form1.nombre_cont;
		if( nombreC.value === '' )
		{
			errorNomC.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorNomC.style.visibility = 'hidden';
				// validar nombre
				var re = /^[a-z ]*$/i;
				if ( !re.test(form1.nombre_cont.value) )
				{
					nombreC.style.background = '#B7D0EB';
					errorNomC2.style.visibility = 'visible';
					form1.nombre_cont.focus();
					error = 1;					
				}
				else{

					errorNomC2.style.visibility = 'hidden';
					nombreC.style.background = '#FFFFFF';
				}
	
		}

		//validar Cedula Contacto

		var errorCedula = document.getElementById('errorCedula');

		var Documento = document.form1.cedulac;
		if( Documento.value === '' )
		{
			errorCedula.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorCedula.style.visibility = 'hidden';
				// validar cedula numeros
				var re = /^[0-9]*$/i;
				if ( !re.test(form1.cedulac.value) )
				{
					Documento.style.background = '#B7D0EB';
					errorCedula2.style.visibility = 'visible';
					form1.cedulac.focus();
					error = 1;					
				}
				else{
					errorCedula2.style.visibility = 'hidden';
					Documento.style.background = '#FFFFFF';
				}
		
		}

		// validar Prefijo
		var prefijo = document.getElementById('errorPref');

		var prefijo = document.form1.prefijoc;
		if( prefijo.value === '' )
		{
			errorPref.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPref.style.visibility = 'hidden';
		}


		//validar telefono Contacto

		var errorTele = document.getElementById('errorTele');

		var Telefono = document.form1.telefonoc;
		if( Telefono.value === '' )
		{
			errorTele.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorTele.style.visibility = 'hidden';
				// validar telefono numeros
				var re = /^[0-9]*$/i;
				if ( !re.test(form1.telefonoc.value) )
				{
					Telefono.style.background = '#B7D0EB';
					errorTele2.style.visibility = 'visible';
					form1.telefonoc.focus();
					error = 1;					
				}
				else{
					errorTele2.style.visibility = 'hidden';
					Telefono.style.background = '#FFFFFF';
				}
		
		}

		// validar correo
		var correoc = document.getElementById('errorCorreC');

		var correoc = document.form1.correo_cont;
		if( correoc.value === '' )
		{
			errorCorreC.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorCorreC.style.visibility = 'hidden';
		}

		// validar Fecha
		var fechacreacion = document.getElementById('errorFcrea');

		var fechacreacion = document.form1.creacion_con;
		if( fechacreacion.value === '' )
		{
			errorFcrea.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorFcrea.style.visibility = 'hidden';
		}


		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}

	function validarform2()
	{

		var error = 0;

			//validar contraseñas
		var correo1 = document.form2.correo_con;
		if( correo1.value === '' )
		{
			errorCorreo1.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorCorreo1.style.visibility = 'hidden';
			var re = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
				if ( !re.test(form2.correo_con.value) )
				{
					form2.correo_con.focus();
					errorCorreoV.style.visibility = 'visible';
					error = 1;					
				}
				else
				{
					errorCorreoV.style.visibility = 'hidden';
				}
		}

		
		var correo2 = document.form2.correo_con1;
		if( correo2.value === '' )
		{
			errorCorreo2.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorCorreo2.style.visibility = 'hidden';
			var re = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
				if ( !re.test(form2.correo_con1.value) )
				{
					form2.correo_con1.focus();
					errorCorreoV2.style.visibility = 'visible';
					error = 1;					
				}
				else
				{
					errorCorreoV2.style.visibility = 'hidden';
				}
		}

		if ( form2.correo_con.value != form2.correo_con1.value )
		{
			errorCorreoC.style.visibility = 'visible';
			form2.correo_con.focus();
			form2.correo_con1.focus();
			error = 1;	
		}
		else{

			errorCorreoC.style.visibility = 'hidden';
		}




	if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}



function validarform3()
	{

		var error = 0;
		// validar pregunta
		var errorPregunta = document.getElementById('errorPregunta');

		var pregunta = document.form3.pregunta_con;
		if( pregunta.value === '' )
		{
			errorPregunta.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPregunta.style.visibility = 'hidden';
				// validar pregunta
				var re = /^[a-z ]*$/i;
				if ( !re.test(form3.pregunta_con.value) )
				{
					pregunta.style.background = '#B7D0EB';
					errorPre2.style.visibility = 'visible';
					form3.pregunta_con.focus();
					error = 1;					
				}
				else{

					errorPre2.style.visibility = 'hidden';
					pregunta.style.background = '#FFFFFF';
				}
	
		}

		// validar Respuesta
		var errorRespuesta = document.getElementById('errorRespuesta');

		var respuesta = document.form3.respuesta_con;
		if( respuesta.value === '' )
		{
			errorRespuesta.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorRespuesta.style.visibility = 'hidden';
				// validar pregunta
				var re = /^[a-z ]*$/i;
				if ( !re.test(form3.respuesta_con.value) )
				{
					respuesta.style.background = '#B7D0EB';
					errorRes2.style.visibility = 'visible';
					form3.respuesta_con.focus();
					error = 1;					
				}
				else{
					errorRes2.style.visibility = 'hidden';
					respuesta.style.background = '#FFFFFF';

				}
	
		}
		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}


	function validarform4()
	{

		var error = 0;


		//validar contraseñas
		var c0 = document.form4.pass;
		if( c0.value === '' )
		{
			errorPass0.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPass0.style.visibility = 'hidden';
		}

		var c1 = document.form4.pass1;
		if( c1.value === '' )
		{
			errorPass.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPass.style.visibility = 'hidden';
		}

		
		var c2 = document.form4.pass2;
		if( c2.value === '' )
		{
			errorPass2.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPass2.style.visibility = 'hidden';
		}

		if ( form4.pass1.value != form4.pass2.value )
		{
			errorPassC.style.visibility = 'visible';
			form4.pass1.focus();
			form4.pass2.focus();
			error = 1;	
		}
		else{

			errorPassC.style.visibility = 'hidden';
		}

		

		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}

	function validarform5()
	{

		var error = 0;


		// validar comentario
		var sugerencia = document.getElementById('errorSugerencia');

		var sugerencia = document.form5.sugerencia;
		if( sugerencia.value === '' )
		{
			errorSugerencia.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorSugerencia.style.visibility = 'hidden';
		}
		// validar clasificacion
		var clasificacion = document.getElementById('errorClasificacion');

		var clasificacion = document.form5.clasificacion_pag;
		if( clasificacion.value === '' )
		{
			errorClasificacion.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorClasificacion.style.visibility = 'hidden';
		}

		

		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}

	function validarform6()
	{

		var error = 0;


		// validar comentario
		var pass = document.getElementById('errorPass');

		var pass = document.form6.pass;
		if( pass.value === '' )
		{
			errorPass.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPass.style.visibility = 'hidden';
		}
		

		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}

	function validarform7()
	{

		var error = 0;


			//validar contraseñas
		var correo1 = document.form7.correo_con;
		if( correo1.value === '' )
		{
			errorCorreo.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorCorreo.style.visibility = 'hidden';
			var re = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
				if ( !re.test(form7.correo_con.value) )
				{
					form7.correo_con.focus();
					errorCorreoV.style.visibility = 'visible';
					error = 1;					
				}
				else
				{
					errorCorreoV.style.visibility = 'hidden';
				}
		}



		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}


	function validarform8()
	{

		var error = 0;


		//Validar Respuesta
		var errorRespuesta = document.getElementById('errorRespuesta');

		var respuesta = document.form8.respuesta_con;
		if( respuesta.value === '' )
		{	
			errorRespuesta.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorRespuesta.style.visibility = 'hidden';
				// validar pregunta
				var re = /^[a-z ]*$/i;
				if ( !re.test(form8.respuesta_con.value) )
				{
					respuesta.style.background = '#B7D0EB';
					errorRes.style.visibility = 'visible';
					form8.respuesta_con.focus();
					error = 1;					
				}
				else{
					errorRes.style.visibility = 'hidden';
					respuesta.style.background = '#FFFFFF';

				}
	
		}

		var c1 = document.form8.pass0;
		if( c1.value === '' )
		{
			errorPass1.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPass1.style.visibility = 'hidden';
		}

		
		var c2 = document.form8.pass00;
		if( c2.value === '' )
		{
			errorPass.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPass.style.visibility = 'hidden';
		}

		if ( form8.pass0.value != form8.pass00.value )
		{
			errorPassC.style.visibility = 'visible';
			form8.pass0.focus();
			form8.pass00.focus();
			error = 1;	
		}
		else{

			errorPassC.style.visibility = 'hidden';
		}





		if ( error == 0 )
		{	

			return true;
		}
		else

		{

			return false;
		}
				
	}


	function validarform9()
	{

		var error = 0;



		// Validar Estado
		var estado = document.getElementById('errorEstado');

		var estado = document.form9.estado_con_pre;
		if( estado.value === '' )
		{
			errorEstado.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorEstado.style.visibility = 'hidden';
		}

		//Validar Nombre
		var errorNombre = document.getElementById('errorNombre');

		var nombre = document.form9.nombre_con_pre;
		if( nombre.value === '' )
		{	
			errorNombre.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorNombre.style.visibility = 'hidden';
				// validar nombre letras
				var re = /^[a-z ]*$/i;
				if ( !re.test(form9.nombre_con_pre.value) )
				{
					errorNombre2.style.visibility = 'visible';
					form9.nombre_con_pre.focus();
					error = 1;					
				}
				else{
					errorNombre2.style.visibility = 'hidden';
					nombre.style.background = '#FFFFFF';

				}
	
		}

		// validar Municipio
		var municipio = document.getElementById('errorMunicipio');

		var municipio = document.form9.municipio_con_pre;
		if( municipio.value === '' )
		{
			errorMunicipio.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorMunicipio.style.visibility = 'hidden';
		}

		// validar Parroquia
		var parroquia = document.getElementById('errorParroquia');

		var parroquia = document.form9.parroquia_con_pre;
		if( parroquia.value === '' )
		{
			errorParroquia.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorParroquia.style.visibility = 'hidden';
		}

		//Validar Nombre persona contacto
		var errorNombreC = document.getElementById('errorNombreC');

		var nombrec = document.form9.nombre_cont_pre;
		if( nombrec.value === '' )
		{	
			errorNombreC.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorNombreC.style.visibility = 'hidden';
				// validar nombre letras
				var re = /^[a-z ]*$/i;
				if ( !re.test(form9.nombre_cont_pre.value) )
				{
					errorNombreC2.style.visibility = 'visible';
					form9.nombre_cont_pre.focus();
					error = 1;					
				}
				else{
					errorNombreC2.style.visibility = 'hidden';
					nombrec.style.background = '#FFFFFF';

				}
	
		}

		// validar Prefijo
		var prefijo = document.getElementById('errorPrefijo');

		var prefijo = document.form9.prefijoc_pre;
		if( prefijo.value === '' )
		{
			errorPrefijo.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPrefijo.style.visibility = 'hidden';
		}


		//validar telefono Contacto

		var errorTelefono = document.getElementById('errorTelefono');

		var Telefono = document.form9.telefonoc_pre;
		if( Telefono.value === '' )
		{
			errorTelefono.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorTelefono.style.visibility = 'hidden';
				// validar telefono numeros
				var re = /^[0-9]*$/i;
				if ( !re.test(form9.telefonoc_pre.value) )
				{
					errorTelefono2.style.visibility = 'visible';
					form9.telefonoc_pre.focus();
					error = 1;					
				}
				else{
					errorTelefono2.style.visibility = 'hidden';
					Telefono.style.background = '#FFFFFF';
				}
		
		}


		if ( error == 0 )
		{	

			return true;
		}
		else

		{

			return false;
		}
				
	}

		function validarform10()
	{

		var error = 0;

		var codigo = document.getElementById('errorCodigo');

		var codigo = document.form10.codigo;
		if( codigo.value === '' )
		{
			errorCodigo.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorCodigo.style.visibility = 'hidden';
		}



		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
		}



	function validarform11()
	{	

		var error = 0;

		var nombre_programa = document.getElementById('errorNombrePro');

		var nombre_programa = document.form11.nombre_programa;
		if( nombre_programa.value === '' )
		{
			errorNombrePro.style.visibility = 'visible';
			errorNombrePro2.style.visibility = 'hidden';
			error = 1;
		}
		else
		{
			errorNombrePro.style.visibility = 'hidden';

			var re = /^[a-z ]*$/i;
				if ( !re.test(form11.nombre_programa.value) )
				{
					errorNombrePro2.style.visibility = 'visible';
					form11.nombre_programa.focus();
					error = 1;					
				}
				else{
					errorNombrePro2.style.visibility = 'hidden';
					nombre_programa.style.background = '#FFFFFF';

				}
		}

		var comentario_programa = document.getElementById('errorComentario');

		var comentario_programa = document.form11.comentario_programa;
		if( comentario_programa.value === '' )
		{
			errorComentario.style.visibility = 'visible';
			errorComentario2.style.visibility = 'hidden';
			error = 1;
		}
		else
		{
			errorComentario.style.visibility = 'hidden';

			var re = /^[a-z ]*$/i;
				if ( !re.test(form11.comentario_programa.value) )
				{
					errorComentario2.style.visibility = 'visible';
					form11.comentario_programa.focus();
					error = 1;					
				}
				else{
					errorComentario2.style.visibility = 'hidden';
					comentario_programa.style.background = '#FFFFFF';

				}
		}

		var programa_dirigido = document.getElementById('errorDirigido');

		var programa_dirigido = document.form11.programa_dirigido;
		if( programa_dirigido.value === '' )
		{
			errorDirigido.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorDirigido.style.visibility = 'hidden';

		}







		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}

	function validarform12()
	{

		var error = 0;

		var id_programa = document.getElementById('errorPrograma');

		var id_programa = document.form12.id_programa;
		if( id_programa.value === '' )
		{
			errorPrograma.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPrograma.style.visibility = 'hidden';
		}



		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
		}

			function validarform13()
	{	

		var error = 0;

		
		var comentario_programa = document.getElementById('errorComentario');

		var comentario_programa = document.form13.comentario_programa;
		if( comentario_programa.value === '' )
		{
			errorComentario.style.visibility = 'visible';
			errorComentario2.style.visibility = 'hidden';
			error = 1;
		}
		else
		{
			errorComentario.style.visibility = 'hidden';

			var re = /^[a-z ]*$/i;
				if ( !re.test(form13.comentario_programa.value) )
				{
					errorComentario2.style.visibility = 'visible';
					form13.comentario_programa.focus();
					error = 1;					
				}
				else{
					errorComentario2.style.visibility = 'hidden';
					comentario_programa.style.background = '#FFFFFF';

				}
		}

		var programa_dirigido = document.getElementById('errorDirigido');

		var programa_dirigido = document.form13.programa_dirigido;
		if( programa_dirigido.value === '' )
		{
			errorDirigido.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorDirigido.style.visibility = 'hidden';

		}







		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}


			function validarform14()
	{	

		var error = 0;

		
		var estadistica_poblacion = document.getElementById('errorPoblacion');

		var estadistica_poblacion = document.form14.estadistica_poblacion;
		if( estadistica_poblacion.value === '' )
		{
			errorPoblacion.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorPoblacion.style.visibility = 'hidden';

		}

		var estadistica_anno = document.getElementById('errorAnno');

		var estadistica_anno = document.form14.estadistica_anno;
		if( estadistica_anno.value === '' )
		{
			errorAnno.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorAnno.style.visibility = 'hidden';

		}

		var estadistica_trimestre = document.getElementById('errorTrimestre');

		var estadistica_trimestre = document.form14.estadistica_trimestre;
		if( estadistica_trimestre.value === '' )
		{
			errorTrimestre.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorTrimestre.style.visibility = 'hidden';

		}

		var estadistica_beneficiados = document.getElementById('errorBeneficiados');

		var estadistica_beneficiados = document.form14.estadistica_beneficiados;
		if( estadistica_beneficiados.value === '' )
		{
			errorBeneficiados.style.visibility = 'visible';
			error = 1;
		}
		else
		{
			errorBeneficiados.style.visibility = 'hidden';

		}

		



		if ( error == 0 )
		{

			return true;
		}
		else
		{
			return false;
		}
				
	}
















