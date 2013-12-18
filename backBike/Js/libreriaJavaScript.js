// JavaScript Document

function formularioSesion(f) { 
		if (f.nombre.value   == '') { alert ('Nombre de Usuario se encuentra vacio');  
		f.nombre.focus(); return false; } 
		if (f.pass.value  == '') { alert ('Debe ingresar una Clave'); 
		f.pass.focus(); return false; } return true; } 

function formularioRegistro(FR) { 

		if (FR.nick.value   == '') { alert ('Debe Ingresar Nombre de Usuario');  
		FR.nick.focus(); return false; } 
		if (FR.nombre.value  == '') { alert ('Debe Ingresar Nombre'); 
		FR.nombre.focus(); return false; }  
		if (FR.apellidos.value  == '') { alert ('Debe Ingresar Apellido'); 
		FR.apellidos.focus(); return false; }	
		
		if(Valida_Rut(FR.rut) == false){
			FR.rut.focus();
			return false;
			}
		
			
		if (FR.fechanac.value  == '') { alert ('Debe Ingrese su Fecha de nacimiento'); 
		FR.fechanac.focus(); return false; }
		if (FR.direccion.value  == '') { alert ('Debe Ingresar su Dirección'); 
		FR.direccion.focus(); return false; }
		if (FR.comuna.value  == '') { alert ('Debe Ingresar Comuna'); 
		FR.comuna.focus(); return false; }
		if (FR.pais.value  == '') { alert ('Debe Ingresar País'); 
		FR.pais.focus(); return false; }
		//script para aceptar solo numeros de 9 digitos
		if ( !(/^\d{9}$/.test(FR.fijo.value)) ){ alert ('Introduzca un numero de telefono fijo con 9 dígitos'); 
		FR.fijo.focus(); return false; }
		//script para aceptar solo numeros de 9 digitos
		if ( !(/^\d{9}$/.test(FR.movil.value)) ) { alert ('Introduzca un numero de telefono Movil con 9 dígitos'); 
		FR.movil.focus(); return false; }
		if (FR.clave1.value  == '') { alert ('Debe Ingresar una Contraseña'); 
		FR.clave1.focus(); return false; }
		if (FR.clave2.value  == '') { alert ('Repita su contraseña'); 
		FR.clave2.focus(); return false; }
		
		else if (FR.clave1.value!=FR.clave2.value)
	{alert ("Las contraseñas no coinciden");
		FR.clave2.focus();
		return false;
	}
				
alert('Registro realizado con Éxito');
return true;		
		
} 


function Valida_Rut( rut ){
var tmpstr = "";
var intlargo = rut.value;

if(rut.value == ''){
alert("El campo Rut se encuentra vacio");
return false;
}
if(rut.length < 9){
	alert("Rut Invalido");
	return false;
	}

 if (intlargo.length > 0){ 	
    
    	crut = rut.value;
    	largo = crut.length;
    
    if ( largo < 2 ){
        alert("Rut inválido");
        return false;
    }
    for ( i=0; i < crut.length ; i++ )
                if ( crut.charAt(i) != ' ' && crut.charAt(i) != '.' && crut.charAt(i) != '-' )
                {
                tmpstr = tmpstr + crut.charAt(i);
                }
            rut = tmpstr;
    crut=tmpstr;
    largo = crut.length;

    if ( largo > 2 )
        rut = crut.substring(0, largo - 1);
    else
        rut = crut.charAt(0);

    dv = crut.charAt(largo-1);

    if ( rut == null || dv == null )

    var dvr = '0';
    suma = 0;
    mul  = 2;

    for (i= rut.length-1 ; i >= 0; i--)
    {
        suma = suma + rut.charAt(i) * mul;
        if (mul == 7)
            mul = 2;
        else
            mul++;
    }


    res = suma % 11;
    if (res==1)
        dvr = 'k';
    else if (res==0)
        dvr = '0';
    else
    {
        dvi = 11-res;
        dvr = dvi + "";
    }

    if ( dvr != dv.toLowerCase())
    {
	alert('El Rut Ingreso es Invalido');
    return false;
    }
	
  } 
	
}

