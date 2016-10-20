El primer error que nos encontramos es avanzando con el navegador, 
al intentar entrar a la ruta paco/msg, 
en el Defaultcontroller del Bundle nos da error
pues la accion para acceder a esta ruta esta mal escrito, solo tenemos que cambiar-lo 

por el mismo nombre que tiene en el archivo routing(enrutador) del Bundle,
en este caso msg. Ahora nos dejaria avanzar a esta ruta 
en el navegador,
pero queremos acceder a otra la cual es paco/msgTexto o paco/msgTexto/texto(Texto Que queramos) 
el cual nos debe mostrar en texto una frase predeterminada que hay puesta en el routing a la variable creada que hemos llamado texto,
TODO ESTO EN EL caso de 
no seguir con la ruta el cual podriamos poner el texto que deseasemos. Pues para que esto nos funciones al 100% 
debemos corregir dos errores
y otra vez tenemos que irnos al controlador, en este caso el return del msgTextoAction queremos que nos 
devuelva la ruta, 
pero faltaria un array para la misma variable que coje en el parametro de entrada 
, y ahora si este Action estaria correcto pues nos
enviara a la pagina que queremos pudiendo poner el
 texto deseado y saliendo por pantalla con solo poner la variable texto
en la pagina mencionada antes.
 Luego por ultimo el routing de esta pagina (paco/msgTexto/"Texto") esta referenciada con el mismo nombre
 que
la pagina anterior y hace conflicto y no cogiendo la ruta. Cambiamos algun detalle y deberia mostrarnos
 por pantalla por defecto o poniendo 
un texto .