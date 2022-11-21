
## Acerca de la aplicación  

El sistema genera rondas eliminatorias en donde se comparan las habilidades de cada competidor y se le suma un numero aleatorio del 1 al 20, el que sume mayor puntuación obtendrá un puntaje basado en la ponderación de cada habilidad. Luego de realizar este proceso para cada habilidad se establecerá como ganador el jugador con mas puntos. En caso de empatar se hará un sorteo generando un numero aleatorio del 1 al 10 donde los primeros 5 números  darán como ganador a un jugador y los siguientes a otro. Tome la inspiración del sistema d20 de Dungeons and Dragons  (https://en.wikipedia.org/wiki/D20_System).

**Ponderación de habilidades:**

*Hombres* 
	- Habilidad = 3
	- Fuerza      = 1
	- Velocidad = 1
	
*Mujeres* 
	- Habilidad = 1
	- Tiempo de reacción = 1
	
 

## Instalación 

- Luego de clonar el proyecto ejecutar **composer install** en la carpeta raíz 

- Especificar datos de conexión en el archivo .env (username, db, password). 
- Ejecutar migraciones:   **php artisan migrate:fresh --seed**
- En caso de usar el contenedor debe modificar la ruta raíz para que corresponda al lugar donde clono el proyecto dentro del archivo /docker/nginx/default y usar el comando **docker-compose Up —build -d** en la carpeta docker


  