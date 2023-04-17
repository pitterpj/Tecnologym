# TECNOLOGYM

## Author: Pedro.J (Pitter)

### https://github.com/pitterpj

### Data to access the application:
-   - Director-> Pitter 1234
    - Coordinador-> Alpha 1234
    - Monitor-> Elena 1234
    - Monitor-> Dario 1234
    - Monitor-> Daniel 1234
    - Monitor-> Maria 1234
    # These don´t have access to the application 
        - Cliente-> Isabel
        - Cliente-> Jesús


### Organization of files:

-   - System->config.php // The file contains constants and database parameters. Here you must change the data to make it work.

    - System->core // This folder contains the core of the model-view-controller (DO NOT TOUCH).

    - App-> Folders of the application to be build.

## Personal Notes:

-   - La función consultar del Model (consult) no me convence el nombre

    - Ejecutar = launch()

    - Breakpoint	        Class infix	    Dimensions

        X-Small	            None	        <576px
        Small	            sm	            ≥576px
        Medium	            md	            ≥768px
        Large	            lg	            ≥992px
        Extra large	        xl	            ≥1200px
        Extra extra large	xxl	            ≥1400px

    - Al exportar de la base de Yisus a la mía: Find ‘utf8mb4_0900_ai_ci’ & replace it with ‘utf8mb4_unicode_ci’.

    -   Background colors:
        -   #3698ee azul fuerte
        -   rgba(54, 152, 238, 0.7); azul claro
        -   #3a424e gris oscuro
        -   #581ccb lila oscuro
        -   #642ABC lila fondo
        -   #642abcab; lila con transparencia

## To Do:

-   - Cabeceras!

    - Actualizar foto. primero borrarmos.

    - c_Dashboard to delete

    - Cambiar iconos sweet alert

    - Cambiar V_schedule cuando creo una clase y redirigir a la principal(ahorro una vista)

            - Hacer los horarios (v_Schedule) responsives

            - en v_Schedule mostrar si en el header si es horario u horario personal


    - En c_Schedule en addClass cuando añade hacer redirección por si queremos añadirla a los coachs la nueva habiliad.

    - En c_Users en authenticate cuando no existe el user guarda el error que no muestra. Hacer que lo muestre

    - Datatables

    - Resetear Database

    - v_CreateSchedule solo muestre las skill del trabajador seleccionado

    - c_PersonalTraining que solo muestre el entrenador logeado

    - Borrar iconos que sobran (Vacaciones)

    - m_Users updateWorker se puede mejorar la consulta

    - En m_Users authenticate dejar que lo haga con el email

    - Cambiar la landing con img de la aplicación

    - Card decks para mostrar a los trabajadores y editarlos.

    - Vista del horario por filtro día/mes/año

    - Passwordverify en m_Users o algo para el hash de la contraseña

    - Ver que todo tiene la misma fuente

    - Repasar código CSS

    - Añadir descripcion seo

    - CSS CTAs quitar

    - Quitar i de CSS

    - Clase active por arreglar css 228

    - El email de recuperacion debe estar en la base de datos

    - Shadows: https://getbootstrap.com/docs/4.1/utilities/shadows/
