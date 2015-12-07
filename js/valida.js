function validaForm(){
	var nombre=document.getElementById("nom").value;
	var telefono=document.getElementById("tel").value;
	var ciudad=document.getElementById("ciudad").value;
	var comentarios=document.getElementById("comentarios").value;

	if(nombre==""){
		document.getElementById("errornom").innerHTML="*Favor de teclear el nombre";
		document.getElementById("errornom").style.color="red";
		return false;
	}

	if(telefono==""){
		document.getElementById("errortel").innerHTML="*Favor de teclear el Telefono";
		document.getElementById("errortel").style.color="red";
		return false;
	}

	if(ciudad==""){
		document.getElementById("errorciudad").innerHTML="*Favor de teclear la ciudad";
		document.getElementById("errorciudad").style.color="red";
		return false;
	}

	if(comentarios==""){
		document.getElementById("errorcomentarios").innerHTML="*Favor de dejarnos tus comentarios";
		document.getElementById("errorcomentarios").style.color="red";
		return false;
	}
	return true;
}