# Subir-Imagen-BD
Programacion de 3 metodos para subir imagenes a la base de datos y mostrarlas.

## Metodo01:
Se selecciona una imagen y se sube con el nombre, se guarda la imagen en la base de datos

## Metodo 02:
Se utiliza Ajax y dataform para subir la imagen y guardar las imagenes en la capeta image, guarda la URL en la base de datos

## Metodo 03:
Similar al metodo 02, pero se guarda la imagen en la base de datos en lugar de la ULR.
Al seleccionar la imagen se muestra a la primera, sin necesidad de precionar un boton segundario para cargar la imagen

## Notas:
En la carpeta php, crea un archivo php llamado conexion y pon el siguiente codigo

< ? php
	$servidor = "pon_tus_datos";
	$usuario  = "pon_tus_datos";
	$clave    = "pon_tus_datos";
	$base     = "pon_tus_datos";

	$conexion = mysqli_connect($servidor,$usuario,$clave,$base);
? >


En los apartados de php, has las modificaciones pertinentes para que se adapte a la tabla donde subiras las imagenes

La carpeta BD tiene la estrucutra de una tabla sencilla para que puedas calar el funcionamiento de los codigos.
