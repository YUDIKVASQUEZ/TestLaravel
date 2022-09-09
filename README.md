# RESUMEN

## Testing in Laravel
https://www.youtube.com/watch?v=UjA-16diixc&t=1114s&ab_channel=CodeWithDary

#####  Los unit tests nos permiten detectar rápidamente, y en fase de desarrollo, si nuestro código esta generando bugs y si cumple con la lógica que esperamos.

##  Qué es PHP unit?
Es una biblioteca independiente del marco que se puede usar para pruebas unitarias.

## ¿Cuándo usar PHPunit?

1. Para Rastreo de la URI de su sitio
2. Para Envío de formularios
3. Para Comprobación de códigos de estado

# Algunos términos importantes

## Prueba de unidad (Unit tests)
- Verificará que las unidades individuales de código funcionen como se esperaba
## Pruebas de funciones (Feature tests)
- Prueba la forma en que las unidades individuales trabajan juntas y transmiten mensajes
## Pruebas de regresión (Regression tests)
- Vas a describir exactamente lo que un usuario debería poder hacer
## Pruebas HTTP
- Le permite realizar solicitudes HTTP simples (GET, POST, PUT, PATCH, DELETE)
## Autenticación de respuestas
- Pruebas de aplicación en autenticación y autorización.
## Pruebas de base de datos
- Herramientas y aserciones para facilitar la prueba de aplicaciones basadas en bases de datos




# TEST DE LARAVEL
Para empezar debemos crear nuestto proyecto para asi poder realizar el test para crear el archvio se puede utilizar el siguiente comando:

![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%201.png?raw=true)
 

1 . Para poder correr el test de prueba digitamos el siguiente código:
 
 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%202.png?raw=true)
 
Como se puede observar los dos puntos significa que hemos ejecutado dos pruebas

2 . Creamos un nuevo archivo test de la siguiente manera

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%203.png?raw=true)
 
Verificamos que se halla creado el archivo
 

3 . Volvemos a ejecutar los test con php artisan test. Veremos que todo sale OK.

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%204.png?raw=true)

 

4 . Ahora vamos hacer un cambio en UserTest donde agregamos /test para ver si todavía nos dice que todo está bien

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%205.png?raw=truee)

 
5 . De nuevo utilizamos php artisan test para mirar que resultado nos arroja

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%206.png?raw=true)

Vemos que nos arroja un error en el test debido al cambio que se realizo.



## A continuación crearemos test unitarios:

6 . Para crear el test unitario se digita el siguiente comando:

  ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%207.png?raw=true)

Verificamos que se haya creado correctamente y Realizamos la prueba con php artisan test
 
7 . Eliminamos  el error que hicimos para realizar pruebas

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%208.png?raw=true)

## Ahora vamos a realizar otros ejercicios:

8 . Con el siguiente comando vamos a crear una ui 

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%209.png?raw=true)

9 . Creamos una interfaz de autenticación reactiva:

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%2010.png?raw=true)


10 . En el terminal de visual Studio instalamos el npm con el siguiente código:

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%2011.png?raw=true)
 

11 . Vamos a crear la base de datos usando phpmyadmin que está en xampp

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%2013.png?raw=true)
 
12 . Vamos al archivo .env de Laravel y nos aseguramos que el nombre de la base de datos en la línea DB_DATABASE sea también testlaravel, para que pueda ser reconocida en la base de datos.

  ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%2014.png?raw=true)

13 . Después generamos la migración a la base de datos con php artisan migrate

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%2015.png?raw=true)
 
 
Nos dirigimos a la carpeta unit, en el archivo UserTest.php

14 . Quitamos la función que está ahí y ponemos las siguientes:

  ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%2017.png?raw=true)


15 . Realizamos la siguiente modificación:

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%2018.png?raw=true)

16 . Ejecutamos la terminal con php artisan test y obtendremos el siguiente resultado:

 ![](https://github.com/YUDIKVASQUEZ/Academia/blob/master/capturas/Captura%20de%20pantalla%2019.png?raw=true)



