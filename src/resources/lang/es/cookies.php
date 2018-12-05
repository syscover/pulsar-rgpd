<?php

    /*
    |-------------------------------------------------------------------------------------------------------------
    | Idioma: Español
    |
    | ***************************************
    | ***** Instrucciones de traducción *****
    | ***************************************
    |
    | Solo traducir la palabras de la columna derecha, ejemplo:
    | 'aceptar' => 'texto aceptar'
    |
    | Respetar las mayúsculas y minúsculas
    |
    | En esta caso habría que traducir el texto 'texto aceptar' respetando las comillas simples.
    | Hay etiquetas que son específicas para la maquetación del texto, IMPORTANTE!! respetar las etiquetas.
    | Las etiquetas mas comunes a encontrar en los textos son:
    | <br> <span> <p> <a> <strong> <div>
    |
    | Ejemplo:
    | 'aceptar' => 'hola <strong>mundo</strong>'
    |
    | La traducción de este testo sería:
    | 'aceptar' => 'hello <strong>world</strong>'
    |
    | IMPORTANTE!!
    | Si hiciera falta poner una comilla simple en el texto, por ejemplo 'don't save' las comillas deben de estar
    | precedicas del caracter \ para que no se tengan en cuenta a la hora de cerrar el texto, ejemplo:
    |
    | 'no_salvar'   =>  'Don't save'     *** ERROR *** la web daría un error.
    | 'no_salvar'   =>  'Don\'t save'    *** OK *** el resultado en pantalla sería, Don't save.
    |-------------------------------------------------------------------------------------------------------------
    */

    return [
        'cookies_header'                    => 'Política de cookies',

        // 1
        'cookies_1'                         => '1. ¿Qué son las cookies?',
        'cookies_1_1'                       => 'Una cookie es un fichero que se descarga en su dispositivo informático al acceder a determinadas páginas Web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un Usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que se utilice su equipo, pueden servir para reconocerlo.',
        'cookies_1_2'                       => 'No obstante, estos medios sólo obtienen información relacionada con el número de páginas visitas, la ciudad a la que está asignada la dirección IP desde la que se accede, el número de nuevos Usuarios, la frecuencia y reincidencia de las visitas, el tiempo de visita, el navegador o el operador o tipo de terminal desde el que se realiza la visita. En ningún caso se obtienen datos sobre el nombre, apellidos o dirección postal desde la que el Usuario se ha  conectado.',

        // 2
        'cookies_2'                         => '2. ¿Cómo utilizamos las cookies?',
        'cookies_2_1'                       => 'Utilizamos cookies para distinguirte de los demás usuarios del Sitio Web, y para proporcionarte una navegación personalizada. En :trademark utilizamos las cookies para que el Sitio Web pueda recordar qué hiciste durante tu visita. Por ejemplo, tus datos de acceso, el estado de tus pedidos, los productos de tu carrito de la compra, etc.',

        // 3
        'cookies_3'                         => '3. ¿Qué tipo de cookies utilizamos?',
        'cookies_3_1'                       => 'Las cookies pueden ser de sesión o persistentes. Las cookies de sesión se borran del ordenador al cerrar el navegador. Las cookies persistentes se guardan en el ordenador hasta que se borran o se alcanza su fecha de caducidad. Las cookies que utilizamos en el Sitio Web sirven para mejorar los servicios que te ofrecemos. Algunas son estrictamente necesarias para que la página funcione bien y otras sirven para mejorar el rendimiento y tu experiencia como usuario.',
        'cookies_3_2'                       => 'En el Sitio Web utilizamos las cookies que se relacionan a continuación:',

        // 3-3
        'cookies_3_3'                       => '3.1 Cookies estrictamente necesarias',
        'cookies_3_3_1'                     => 'Las cookies estrictamente necesarias sirven para:',
        'cookies_3_3_2'                     => 'Recordar los artículos de tu lista de la compra.',
        'cookies_3_3_3'                     => 'Recordar en qué punto del pedido te encuentras.',
        'cookies_3_3_4'                     => '<strong>Cookies analíticas y/o de rendimiento.</strong> Estas cookies nos permiten reconocer y contar el número de visitantes, y saber cómo se mueven por el Sitio Web durante su visita. Esto nos ayuda a mejorar el funcionamiento del Sitio Web, por ejemplo, asegurándonos de que encuentran fácilmente lo que buscan.',
        'cookies_3_3_5'                     => '<strong>Cookies funcionales.</strong> Estas cookies se utilizan para reconocerte cuando regresas al Sitio Web. Esto nos permite personalizar sus contenidos, saludarte por tu nombre, recordar tus preferencias u ofrecerte un chat en directo para conocer tus opiniones sobre la web.',
        'cookies_3_3_6'                     => '<strong>Cookies de registro.</strong> Estas cookies registran tus visitas al Sitio Web, las páginas que ves y los links que sigues. Nosotros utilizamos esta información para diseñar el Sitio Web y mostrar los anuncios más acordes a tus intereses. Estas cookies te permiten compartir la página que estás viendo, indicar que te gusta y enviar la información a otras páginas para personalizar sus anuncios.',

        // 3-4
        'cookies_3_4'                       => '3.2 Cookies de objetivo',
        'cookies_3_4_1'                     => 'Las cookies de objetivo sirven para:',
        'cookies_3_4_2'                     => 'Que puedas compartir y hacer clic en «Me Gusta».',
        'cookies_3_4_3'                     => 'Enviar información a otros sitios web para personalizar tu publicidad.',

        // 3-5
        'cookies_3_5'                       => '3.3 Cookies de análisis:',
        'cookies_3_5_1'                     => 'Las cookies de análisis sirven para:',
        'cookies_3_5_2'                     => 'Poder conocer el comportamiento de los usuarios en el Sitio Web y, en consecuencia, poder mejorar la forma en que esa página responde a las demandas de nuestros clientes.',

        // 3-6
        'cookies_3_6'                       => '3.4 Cookies de publicidad comportamental',
        'cookies_3_6_1'                     => 'Las cookies de publicidad comportamental sirven para:',
        'cookies_3_6_2'                     => 'Poder conocer el comportamiento de los usuarios en el Sitio Web y, en consecuencia, poder adaptar nuestra publicidad a dicho comportamiento.',
        'cookies_3_6_3'                     => '<strong>Ejemplos de uso</strong>',
        'cookies_3_6_4'                     => 'Las cookies sirven para mejorar algunos servicios, por ejemplo:',
        'cookies_3_6_5'                     => 'Habilitan la funcionalidad de ciertos servicios, como los de pago, que no funcionarían sin esas cookies.',
        'cookies_3_6_6'                     => 'Habilitan un servicio que reconoce tu dispositivo para que no tengas que introducir la misma información varias veces durante la misma tarea.',
        'cookies_3_6_7'                     => 'Reconocen tu nombre de usuario y contraseña en tu cuenta de :trademark para que no tengas que introducirlos cada vez que accedas a ella.',
        'cookies_3_6_8'                     => 'Calculan cuántas personas utilizan los servicios; así pueden modificarse para que resulten más sencillos de usar y garantizar que hay capacidad suficiente para que sean rápidos.',
        'cookies_3_6_9'                     => 'Analizan los datos para ayudarnos a entender cómo utilizas los servicios en línea a fin de mejorarlos.',
        'cookies_3_6_10'                    => 'Las cookies que utilizamos en el Sitio Web son tratadas por :company, sin ser en ningún caso remitidas a empresas o personas fuera de dicho grupo.',

        // 4
        'cookies_4'                         => '4. Tu permiso para que utilicemos cookies, y cómo puedes bloquearlas',
        'cookies_4_1'                       => 'Cuando llegas por primera vez al Sitio Web, se te muestra una ventana en la que se te pide que indiques si aceptas las cookies.',

        // 4-2
        'cookies_4_2'                       => 'Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones de su navegador. Puede encontrar información sobre cómo hacerlo, en relación con los navegadores más comunes, en los links que se incluyen a continuación:',
        'cookies_4_2_1'                     => '<strong>Internet Explorer:</strong> <a href="http://windows.microsoft.com/es-es/windows7/how-to-manage-cookies-in-internet-explorer-9">Microsoft internet explorer 9</a>',
        'cookies_4_2_2'                     => '<strong>Firefox:</strong> <a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we">Mozilla Firefox</a>',
        'cookies_4_2_3'                     => '<strong>Chrome:</strong> <a href="http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647">Google Chrome</a>',
        'cookies_4_2_4'                     => '<strong>Safari:</strong> <a href="ttp://support.apple.com/kb/ph5042">Safari</a>',

        'cookies_4_3'                       => 'Ten en cuenta que si bloqueas el uso de cookies tal vez no puedas acceder a determinadas áreas del Sitio web, y algunas de sus características no funcionen correctamente. Por ejemplo, no podrás utilizar la lista de la compra, ni realizar compras online.',
        'cookies_4_4'                       => '<strong>Fecha de actualización: :update_date</strong>',
    ];