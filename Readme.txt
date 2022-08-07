Introducción

El presente proyecto de desarrollo de software I tiene como finalidad mostrar a alumnos que no se han matriculado por lo tanto no llevan tutoría el semestre actual, también podremos ver a los alumnos repartidos equitativamente en las tutorías y descargar el archivo csv en ambos casos, se explicara el procedimiento de cómo hacer funcionar el programa y se explicara el algoritmo.

Procedimiento

1er paso

Encender el xampp en apache y sql para después ir al localhost y luego al phpmyadmin, estando en el phpmyadmin creamos una base de datos llamada “bdtutoria” e importamos el archivo bdtutoria.sql.

2do paso

Vaya al localhost y posteriormente a la carpeta en la que guardo los archivos le aparecerá una pantalla la cual es el interfaz grafico

3er paso

Tendremos que cargar los archivos csv en el respectivo lugar que nos indica el programa, primero nos pedirá que seleccionemos el archivo csv de los alumnos matriculados el cual se llama “Matriculados2022-1.csv”, ya seleccionado el archivo presionaremos el botón rojo que dice “cargar alumnos matriculados” y asi mismo lo haremos con el boton “cargar docentes” seleccionando previamente el archivo “Docentes.csv” y  el botón “cargar tutorias del anterior semestre” seleccionando el archivo “Tutorado2021-2.csv”.

4to paso

Tendremos que elegir alguna de las dos opciones la que necesitemos entre “Mostrar alumnos que no serán tutorados en 2022-I” y ”Mostrar distribución balanceada por tutoria”, nos llevara a otra ventana donde podremos ver los resultados de la consulta y además descargar un archivo csv con los datos que necesitamos. 