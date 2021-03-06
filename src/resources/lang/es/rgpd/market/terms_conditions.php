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
    'conditions_header'                 => 'Términos y condiciones',

    // 1
    'conditions_1'                      => 'Datos identificativos del titular de la web',
    'conditions_1_1'                    => 'En cumplimiento con el deber de información que establece la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y del Comercio Electrónico, te informamos que la presente web «:website_url» (en adelante, el «Sitio Web») es titularidad de la compañía:',
    'conditions_1_2'                    => ':company<br>:address<br>:zip :locality<br>:state.<br>Datos registrales:<br>CIF :tin<br>:commercial_registry<br>:registry_data',
    'conditions_1_3'                    => 'Para cualquier información adicional, puedes ponerte en contacto con nosotros a través de la sección «Contacto».',

    // 2
    'conditions_2'                      => 'Términos y condiciones',
    'conditions_2_1'                    => 'Los presentes Términos y Condiciones regulan el acceso y el uso del Sitio Web titularidad de :company (en adelante, «:trademark»), así como los productos y servicios ofrecidos por :trademark en el Sitio Web.',
    'conditions_2_2'                    => 'La utilización del Sitio Web está sujeta a nuestra «Política de Privacidad», «Política de Cookies» y «Términos y Condiciones» descrita a continuación, que como usuario, conoces y aceptas de manera íntegra y sin ningún tipo de reserva por el hecho de navegar en el Sitio Web, utilizar los servicios y/o adquirir los productos ofertados en el mismo. Si no estuvieras de acuerdo con ello debes abstenerte de utilizar esta web. El uso del Sitio Web requiere asimismo que seas mayor de edad, así como que dispongas de la capacidad jurídica suficiente según la legislación vigente de aplicación para quedar vinculado por los presentes Términos y Condiciones.',
    'conditions_2_3'                    => 'El acceso al Sitio Web es libre y gratuito y no requiere previa suscripción. Sin embargo, para poder contratar cualquiera de nuestros productos y servicios, se requerirá de dicho registro y la aceptación expresa por tu parte de nuestra «Política de Privacidad», «Política de Cookies» y «Términos y Condiciones».',
    'conditions_2_4'                    => 'Los presentes Términos y Condiciones de :trademark descritos a continuación, definen los derechos y obligaciones de :trademark y los usuarios en el marco del Sitio Web. Estos son los únicos Términos y Condiciones aplicables al uso del Sitio Web (sin perjuicio de que para determinados servicios podrían existir condiciones particulares) y a la contratación de pedidos a través del Sitio Web y sustituyen a cualesquiera otras condiciones, salvo previo acuerdo y por escrito entre :trademark y el usuario.',

    // 3
    'conditions_3'                      => '1. Datos personales',
    'conditions_3_1'                    => 'Es indispensable que seas mayor de 18 años de edad para acceder a cualquiera de las formas de registro presentes en el sitio Web.',
    'conditions_3_2'                    => 'Para poder adquirir cualquiera de los productos ofrecidos en el Sitio Web es necesario crear una cuenta con tus datos a través del formulario disponible al formalizar la compra o a través de la sección «Mi Cuenta» del Sitio Web. También requeriremos de tus datos en el Sitio Web si decides: Que te avisemos sobre la disponibilidad de alguno de nuestros productos fuera de stock, suscribirte a nuestro newsletter, o bien, hacernos alguna consulta a través de nuestro Servicio de Atención al Cliente en la sección «Contacto» del Sitio Web.',
    'conditions_3_3'                    => 'Deberás comprobar en todo momento que tus datos son correctos y completos e informar a :trademark cuando haya alguna variación y/o modificación en la información que hayas facilitado en el proceso de compra. Ten en cuenta además que eres responsable de mantener la confidencialidad de los datos e información aportados y de restringir el acceso a tu ordenador y a tus claves de acceso para evitar posibles usos no autorizados. En caso de tener motivos para creer que tus datos han sido puestos en conocimiento de un tercero, o si estos han sido utilizados de manera no autorizada, o son susceptibles de serlo, deberás comunicar esta situación a :trademark de forma inmediata.',
    'conditions_3_4'                    => 'Para más información sobre el tratamiento de tus datos personales en el Sitio Web, consulta por favor nuestra «Política de Privacidad».',

    // 4
    'conditions_4'                      => '2. Elaboración de un pedido y condiciones de venta',
    'conditions_4_1'                    => 'El funcionamiento del Sitio Web está destinado a la oferta de productos de la marca :trademark, productos del grupo :trademark y/o productos de terceros con los que :trademark haya alcanzado algún acuerdo de colaboración.',
    'conditions_4_2'                    => 'Mediante la elaboración de un pedido manifiestas tu intención de compra de aquellos productos que se encuentran contenidos en el mismo, de conformidad con los presentes Términos y Condiciones. Para ello, deberás ser mayor de 18 años de edad y facilitar, a través del formulario de compra, una serie de datos con carácter previo a la contratación que serán necesarios para poder gestionar tu orden de compra.',
    'conditions_4_3'                    => ':trademark puede decidir, a su discreción y sin que ello devengue indemnización a tu favor de ninguna clase, no aceptar pedidos, pedidos anormales, pedidos de los que sospechemos que no han sido realizados de buena fe o pedidos que presuntamente puedan ser fraudulentos.',
    'conditions_4_4'                    => 'Después de recibir tu pedido, si lo aceptamos, te enviaremos una confirmación por correo electrónico, con tu número de pedido y el detalle de aquellos productos que nos has solicitado. La celebración del contrato tendrá lugar en el momento en que recibas dicha confirmación por correo electrónico, la cual constituirá tu prueba de compra.',

    // 5
    'conditions_5'                      => '3. Forma de pago, precios, impuestos y códigos de descuento',
    'conditions_5_1'                    => 'Una vez completados los datos del formulario de compra, deberás proceder al pago del pedido a través de los medios de pago especificados en el Sitio Web.',
    'conditions_5_2'                    => 'Posteriormente a que el pago sea efectuado, recibirás un correo electrónico de confirmación del pedido en el cual se incluirá un resumen de los artículos adquiridos, la modalidad de envío solicitada y la dirección de destino.',
    'conditions_5_3'                    => 'Si en el momento de efectuarse el pago se produjese una incidencia que impidiese la realización del mismo, recibirás un mensaje automático de error de pago y tu pedido no será tramitado hasta no completarse con éxito dicho proceso de pago.',
    'conditions_5_4'                    => 'Los precios de los productos ofrecidos en el Sitio Web se expresan en Euros (€) incluyendo los impuestos, al igual que se expresan en Euros (€) los gastos de transporte y manipulación de dichos productos, y cuyos importes finales se indicarán en el momento de la confirmación definitiva de cada pedido. El precio cobrado por un producto será el precio en vigor en el momento en que se realice el pedido y será reflejado en el correo electrónico de confirmación del mismo. :trademark podrá cambiar los precios en cualquier momento sin previo aviso. Las variaciones de precios únicamente serán aplicables a los pedidos posteriores a dichos cambios.',
    'conditions_5_5'                    => 'Todos los precios mostrados de los productos son precios finales, quedando expresamente incluidos el Impuesto sobre el Valor Añadido (en adelante «IVA») u otros impuestos aplicables en España, pero no incluyen los gastos correspondientes a transporte y manipulación de los productos. Los cargos correspondientes a transporte, manipulación y su correspondiente IVA u otros impuestos, se mostrarán en el Sitio Web durante el procesamiento del pedido y, en todo caso, en el correo electrónico de confirmación de tu pedido. Para el caso de las Islas Canarias, el IVA se verá excluido a la hora de realizar el pago del pedido.',
    'conditions_5_6'                    => 'Para compras entregadas fuera de la Comunidad Económica Europea: no se encuentran incluidos aquellos impuestos que puedan existir por nacionalización del producto (acordes con la normativa del país o región en la que te encuentres), y que deberás abonar al organismo local correspondiente en el momento de la entrega del pedido.',
    'conditions_5_7'                    => ':trademark te podrá ofrecer periódicamente códigos de descuento. Dichos descuentos sólo podrán aplicarse conforme a las instrucciones especificadas por :trademark con respecto a cada código, y en todo caso sólo podrás utilizar un único código de descuento por pedido. El uso de códigos de descuentos no será compatible con determinadas acciones promocionales y colecciones.',

    // 6
    'conditions_6'                      => '4. Entrega de productos',
    'conditions_6_1'                    => '<u>Para envíos «dentro de España Península»:</u> El plazo aproximado de entrega en «España Península» es de 3 - 5 días laborables una vez procesado el envío. En caso de no recibir el pedido en dicho plazo, tendrás derecho a requerirnos la entrega, otorgándonos un nuevo plazo de entrega razonable. Si ello no ocurre así, podrás resolver el contrato y tendrás derecho a que te sean reembolsados todos los importes que hayas pagado. El plazo de entrega establecido computará desde del momento de la formalización de la compra, salvo que, de forma expresa y puntual, nos indiques realizar entrega en una fecha posterior al plazo señalado.',
    'conditions_6_2'                    => '<u>Para envíos «fuera de España Península»:</u> Para envíos fuera de España Península, incluyendo Islas Baleares, Islas Canarias, Ceuta y Melilla, el plazo aproximado de entrega variará según cada destino final, por lo que te recomendamos hacer seguimiento del estado de tu pedido vía online, accediendo a tu perfil en la sección «Mi Cuenta» del Sitio Web. :trademark podrá rechazar aquellos pedidos que requieran de un plazo de entrega determinado, si ello implica la imposibilidad de cumplir con dicho plazo de entrega.',
    'conditions_6_3'                    => 'En caso de que:',
    'conditions_6_4'                    => 'De forma intencionada, dolosa o irrazonablemente, eludas la entrega o retrases la recepción de la misma después de que te hayamos notificado el intento de entrega del producto o productos solicitados, o en caso de que nos hayas facilitado un domicilio de entrega incorrecto que dé lugar a una entrega fallida, el paquete a entregar será devuelto a :trademark.',
    'conditions_6_5'                    => 'Tras el primer intento de entrega, el producto o productos permanezcan sin ser entregados durante un plazo de 14 (catorce) días naturales y nos sean devueltos sin ser entregados, tendremos el derecho de cancelar el contrato.',
    'conditions_6_6'                    => ':trademark no será responsable por el retraso o por la falta de cumplimiento en la fecha de entrega del producto o productos en caso de que dicho retraso o la falta de cumplimiento sean debidos a circunstancias ajenas a :trademark de conformidad con la ley o principio generalmente aceptados.',
    'conditions_6_7'                    => 'Te rogamos examinar el paquete entregado y los productos recibidos en el plazo de 14 (catorce) días a contar desde que te fueron entregados y comprobar su estado y que el contenido del paquete entregado esté completo. En caso de que el producto o productos recibidos no correspondan con los que hayas solicitado, o bien tu pedido se encuentre incompleto o resulte dañado durante el transporte, por favor ponte en contacto :trademark a través de nuestro Servicio de Atención al Cliente en la sección «Contacto» del Sitio Web para recibir asistencia.',

    // 7
    'conditions_7'                      => '5. Disponibilidad de productos y servicios',
    'conditions_7_1'                    => 'Todos los productos del Sitio Web están sujetos a producciones limitadas, por lo que, es posible que puedan producirse roturas de stock. Para ello, hemos habilitado el servicio «Avísame Cuando esté Disponible» que se encontrará indicado a modo de botón en la propia sección del producto que se encuentre fuera de stock. Deberás hacer clic en el mismo y registrarte en este servicio con tu nombre y tu correo electrónico si deseas que te avisemos con una notificación cuando dicho producto vuelva a estar disponible.',
    'conditions_7_2'                    => 'Si el producto ya se encuentra disponible, te mostraremos el botón «Añadir», con el que podrás añadir dicho artículo al carrito y proceder a formalizar la compra.',
    'conditions_7_3'                    => 'No garantizamos la disponibilidad de ningún producto o servicio en el Sitio Web. Nos reservamos el derecho, sin responsabilidad ni preaviso, de cambiar, suspender o interrumpir la disponibilidad de cualquier producto o servicio.',

    // 8
    'conditions_8'                      => '6. Devoluciones y derecho de desistimiento',
    'conditions_8_1'                    => 'Ten en cuenta que solo procesaremos devoluciones y reembolsos para aquellos productos que han sido adquiridos en el Sitio Web.',

    // 8-2
    'conditions_8_2'                    => '6.1 Devolución de un producto por defectos de fabricación',
    'conditions_8_2_1'                  => 'Podrás devolver a :trademark, sin coste alguno, cualquier producto que presente un defecto de fabricación. Teniendo en cuenta la naturaleza de los productos contratados, tendrás un plazo de 14 días naturales desde que tuviste conocimiento de la falta de conformidad del producto para comunicar a :trademark tu falta de conformidad con los mismos. Si se superase dicho plazo cualesquiera daños y perjuicios serán asumidos por el usuario.',
    'conditions_8_2_2'                  => 'La devolución de los productos que presenten defectos de fabricación en los mismos, no supondrá ningún coste adicional para el usuario.',
    'conditions_8_2_3'                  => 'Para formalizar la devolución, deberás contactar con :trademark dentro del plazo concedido de 14 días naturales, en el formulario de la sección «Contacto», indicando el producto o productos objeto de devolución, adjuntando una fotografía y una relación detallada de los defectos apreciados en los mismos.',
    'conditions_8_2_4'                  => 'Una vez que :trademark haya recibido tu comunicación, te informaremos en el plazo de entre 3 - 5 días hábiles si procede o no la devolución del producto. En caso de que proceda la devolución, :trademark te indicará la forma de recogida o envío a sus oficinas/almacenes del producto defectuoso.',
    'conditions_8_2_5'                  => 'Cada producto a devolver deberá encontrarse sin usar y con todas sus etiquetas, embalajes y -en su caso-, documentación y elementos accesorios originales que vinieran con el mismo. Si no se procediese de esta manera por tu parte, :trademark se reserva el derecho a denegar la devolución.',
    'conditions_8_2_6'                  => 'Una vez recibido el producto y constatados los defectos, :trademark te dará la posibilidad de sustituir el producto por otro de idénticas características, salvo que esta opción resultase objetivamente imposible o desproporcionada para :trademark.',
    'conditions_8_2_7'                  => 'En el caso que por motivos de falta de stock no pudiera procederse al envío de otro producto de idénticas características, podrás elegir entre resolver el contrato (es decir, la devolución de los importes pagados) o bien solicitar el envío de otro del mismo coste respecto al inicialmente adquirido que voluntariamente elijas.',
    'conditions_8_2_8'                  => 'La entrega del producto de idénticas características o del nuevo modelo que escojas, según corresponda, se realizará en los próximos 3 - 5 días hábiles a contar desde la fecha en que :trademark te confirmara la sustitución del producto defectuoso o el envío del nuevo modelo.',
    'conditions_8_2_9'                  => 'La sustitución, el envío de un nuevo modelo o la resolución de contrato no implicarán gastos adicionales para ti.',
    'conditions_8_2_10'                 => 'Si resolvieras el contrato, :trademark te llevará a cabo la devolución de la totalidad del importe pagado por la compra del producto defectuoso (incluido los gastos de envío), en un plazo de 14 (catorce) días naturales desde que decidiste resolver el contrato. Dicha devolución será realizada a través de los mismos medios de pago que utilizaste en la transacción inicial.',

    // 8-3
    'conditions_8_3'                    => '6.2 Derecho de desistimiento',
    'conditions_8_3_1'                  => 'De no estar conforme con los productos recibidos en tu pedido, podrás, conforme a la Ley General para la defensa de los Consumidores y usuarios, ejercitar tu derecho de desistir del contrato disponiendo de un plazo de catorce (14) días naturales a contar desde la fecha en que recibiste los mismos para devolver la totalidad del pedido o, si lo prefirieses, cualquiera de los productos que integraran el pedido total y todo ello sin penalización alguna y sin necesidad de indicar los motivos.',
    'conditions_8_3_2'                  => 'Para formalizar la devolución, deberás primeramente contactar con :trademark a través de la sección «Contacto». Recibida dicha comunicación, :trademark te indicará la forma de proceder para el ejercicio de este derecho.',
    'conditions_8_3_3'                  => 'Los costes por devolución del pedido a :trademark (como por ejemplo, los gastos de envío a :trademark a través de empresas de mensajería) serán asumidos completamente por ti, tanto si devuelves el pedido por completo como si decides devolver sólo algunos de los productos de dicho pedido.',
    'conditions_8_3_4'                  => ':trademark no se hace responsable de la empresa de mensajería que contrates para la devolución del pedido. En este sentido, :trademark te recomienda que exijas a la empresa de mensajería que te facilite el justificante de entrega una vez el mensajero haya depositado el producto en las oficinas o almacenes de :trademark, de manera que tengas constancia de que el producto ha sido entregado correctamente a :trademark.',
    'conditions_8_3_5'                  => 'El producto deberá encontrarse sin usar y con todas sus etiquetas, embalajes y -en su caso-, documentación y elementos accesorios originales que vinieran con el mismo. Si no se procediese de esta manera por tu parte o si el producto hubiera sufrido algún daño, aceptas que el producto pueda sufrir una depreciación o que :trademark pueda denegar la devolución.',
    'conditions_8_3_6'                  => 'Si decides devolver el pedido por completo, :trademark te devolverá la totalidad de los importes pagados (incluidos los gastos iniciales de envío a tu dirección). Si sólo deseas devolver uno o algunos de los productos que forman parte del pedido, :trademark no podrá devolverte los gastos iniciales de envío a tu dirección que pagaste por la totalidad del pedido.',
    'conditions_8_3_7'                  => 'Una vez :trademark reciba el pedido y compruebe que se encuentra en perfectas condiciones, :trademark procederá a la devolución de los importes pagados en un plazo de 14 (catorce) días naturales a contar desde la recepción del pedido. Dicha devolución será realizada a través de los mismos medios de pago que utilizaste en la transacción inicial.',
    'conditions_8_3_8'                  => 'Por favor ten en cuenta que <u>no podrás ejercer este derecho de desistimiento</u> con respecto a:',
    'conditions_8_3_9'                  => 'Cualquier producto que haya sido fabricado de conformidad con tus especificaciones o haya sido claramente personalizado.',
    'conditions_8_3_10'                 => 'Cualquier producto que haya sido desprecintado después de la entrega y que no puede ser devuelto por razones de higiene.',

    // 9
    'conditions_9'                      => '7. Política de cambio de productos',
    'conditions_9_1'                    => ':trademark no admite el cambio entre un producto que hayas comprado por otro producto que esté ofertado en el Sitio Web.',
    'conditions_9_2'                    => 'En el caso de querer realizar el cambio de un producto, deberás ejercitar tu derecho de desistimiento sobre el mismo conforme lo establecido en la cláusula 6.2 y comprar posteriormente el nuevo producto que desees.',

    // 10
    'conditions_10'                     => '8. Información y uso de productos y servicios',
    'conditions_10_1'                   => 'Los datos incluidos en el Sitio Web en la descripción de sus productos y servicios, en sus fotografías, representaciones gráficas o iconográficas o vídeos así como nombres comerciales, marcas o signos distintivos de cualquier clase, tienen una función meramente informativa. Por tanto, :trademark declina cualquier responsabilidad por la aparición de errores en dicha información, si bien se compromete a tomar todas las medidas a su alcance para corregir en la mayor brevedad posible los referidos errores u omisiones tras haber sido informada de los mismos.',
    'conditions_10_2'                   => 'Las garantías que ofrece :trademark con respecto a sus productos y servicios están condicionadas siempre al buen uso de los mismos. Deberás en todo caso, y con carácter previo a la compra de un producto en el Sitio Web, asegurarte de que éste es compatible para el uso pretendido. A tal fin, existen fichas descriptivas de los productos disponibles para tu consulta en el Sitio Web.',
    'conditions_10_3'                   => ':trademark no se hace responsable en ningún caso de las posibles reclamaciones derivadas de un uso diferente de aquél para el que está concebido un producto o servicio ofrecido en el Sitio web. En caso de que exista diferencia entre el contenido del Sitio Web y el de cualquier otro sitio web (o cualquier otra fuente de información), la información del producto o servicio tal y como se muestra en el Sitio Web en el momento de la compra, será la que prevalezca.',

    // 11
    'conditions_11'                     => '9. Servicio de Atención al Cliente',
    'conditions_11_1'                   => 'Nuestro Servicio de Atención al Cliente se encuentra a tu disposición para cualquier duda o consulta relacionada con :trademark, con los productos y servicios ofrecidos y con los pedidos realizados a través del Sitio Web. Puedes contactar con nosotros en todo momento a través de la sección «Contacto» del Sitio Web.',

    // 12
    'conditions_12'                     => '10. Uso del Sitio Web',
    'conditions_12_1'                   => 'No está permitido el uso del Sitio Web con fines fraudulentos, o relacionados con delitos penales o actividades ilícitas de ningún tipo.',
    'conditions_12_2'                   => 'También se prohíbe enviar, usar o reutilizar material ilegal, ofensivo, abusivo, indecente, difamatorio, obsceno o amenazante de ningún tipo, o que suponga una violación de derechos de propiedad intelectual, marcas registradas, confidencialidad, privacidad o cualquier otro derecho, o sea de otro modo injurioso o censurable para terceras partes, o cuyo contenido contenga virus informáticos, propaganda política, contenido publicitario, correos en cadena, envío masivo de correos o cualquier otro tipo de "spam" y, en general, cualquier tipo de molestia o inconveniente innecesario.',
    'conditions_12_3'                   => 'Como usuario te comprometes a hacer un uso lícito, diligente, honesto y correcto de cuanta información o contenidos tengas acceso bien a través del Sitio Web o webs de terceros a las que se tenga acceso a través del links del Sitio Web, y todo ello bajo los principios de la buena fe y con respeto en todo momento a la legalidad vigente y a los presentes Términos y Condiciones.',
    'conditions_12_4'                   => 'Igualmente, como usuario adquieres el compromiso de no provocar ni maliciosa ni intencionadamente daños o perjuicios que puedan menoscabar, alterar el Sitio Web así como no introducir, ni difundir virus informáticos que puedan producir alteraciones no autorizadas de los contenidos o sistemas integrantes del Sitio Web.',
    'conditions_12_5'                   => ':trademark se reserva el derecho a denegar el acceso al Sitio Web o incluso cancelar pedidos a usuarios que hagan un mal uso de los contenidos y/o incumplan cualquiera de las condiciones que aparecen en el presente documento.',

    // 13
    'conditions_13'                     => '11. Propiedad intelectual e industrial',
    'conditions_13_1'                   => 'Los derechos de propiedad intelectual del sitio web, su código fuente, diseño, estructuras de navegación y los distintos elementos en ella contenidos son titularidad de :trademark, a quien corresponde el ejercicio exclusivo de los derechos de explotación de los mismos en cualquier forma y en especial, los derechos de reproducción, distribución, comunicación pública y transformación, de acuerdo con la legislación española y europea aplicable.',
    'conditions_13_2'                   => ':trademark informa que no concede licencia o autorización expresa o implícita alguna sobre los derechos de propiedad intelectual y/o industrial o sobre cualquier otro derecho o propiedad relacionada, directa o indirectamente, con los contenidos incluidos en el Sitio Web. Queda totalmente prohibida la reproducción total o parcial de los contenidos del Sitio Web, ni siquiera mediante un hipervínculo, sin consentimiento expreso y por escrito por parte de :trademark. La utilización no autorizada de estos contenidos dará lugar a las responsabilidades legalmente establecidas.',

    // 14
    'conditions_14'                     => '12. Política de enlaces',
    'conditions_14_1'                   => 'En el caso de que propongas establecer hiperenlaces con el Sitio Web no podrás dar a entender que :trademark ha autorizado el hiperenlace o que de alguna manera ha aprobado o autorizado el contenido de la página web en la que se establece el hiperenlace, ni tampoco realizar manifestaciones falsas, inexactas u ofensivas sobre :trademark o cualesquiera de sus trabajadores, o bien incluir en la página del hiperenlace contenidos inapropiados, difamatorios, ilegales, obscenos o ilícitos, ni cualesquiera otros que de cualquier manera contravengan la legalidad vigente. Tampoco podrás crear macros («frames») con las páginas web ni sobre las páginas web de :trademark.',
    'conditions_14_2'                   => ':trademark se reserva la posibilidad de comunicarse contigo, si considera que incumples las normas establecidas para los hiperenlaces, así como de ejercitar las acciones judiciales y extrajudiciales pertinentes, derivadas de cualquier conducta contraria a lo dispuesto en el párrafo anterior.',

    // 15
    'conditions_15'                     => '13. Responsabilidad y garantías del Sitio Web',
    'conditions_15_1'                   => ':trademark declara que ha adoptado las medidas necesarias que, dentro de sus posibilidades y el estado de la tecnología, permitan el correcto funcionamiento del Sitio Web así como la ausencia de virus y componentes dañinos.',
    'conditions_15_2'                   => 'Salvo los límites establecidos en la ley, :trademark no asume responsabilidad alguna derivada de las siguientes situaciones, y que se enumeran a título enunciativo, pero no limitativo:',
    'conditions_15_3'                   => 'De la continuidad y disponibilidad de los contenidos, productos y servicios.',
    'conditions_15_4'                   => 'De la presencia de errores en dichos contenidos.',
    'conditions_15_5'                   => 'De los errores que se pudieran producir en el Sitio Web como consecuencia de: incidencias debidas a problemas en la red de Internet, operaciones de mantenimiento rutinarias del sistema y actualizaciones imprescindibles para el buen funcionamiento del Sitio Web.',
    'conditions_15_6'                   => 'Del uso por menores de edad del Sitio Web o del envío de sus datos de carácter personal sin permiso de sus padres o tutores, siendo en este caso los padres o tutores responsables del uso responsable de Internet por los menores. :trademark recomienda la instalación una herramienta de control del uso de Internet al objeto de evitar acceso a páginas o contenidos no aptos para menores.',
    'conditions_15_7'                   => 'De los enlaces a otras páginas web que se encuentren en el Sitio Web, pudiendo llevar al usuario a otros sitios web sobre los que :trademark no tiene ningún tipo de control, por lo que el usuario accede bajo su exclusiva responsabilidad al contenido y en las condiciones de uso que rijan en los mismos.',
    'conditions_15_8'                   => 'De los contenidos a los que pueda acceder el usuario a través de enlaces no autorizados por :trademark o que sean introducidos por los usuarios como comentarios, o utilizando herramientas similares, cuando éstas sean puestas a disposición de los mismos en el Sitio Web.',
    'conditions_15_9'                   => 'De la introducción de datos erróneos por tu parte o de un tercero no autorizado, así como de los problemas con la dirección de correo electrónico que nos facilites si es incorrecta o presenta problemas de operativa ajenos a :trademark.',
    'conditions_15_10'                  => 'De la utilización ilícita que puedan hacer los usuarios de los servicios y contenidos incluidos en el Sitio Web en infracción de los derechos de propiedad intelectual y/o industrial de contenidos de la web, en los términos establecidos en la cláusula 11 «Propiedad Intelectual e Industrial» de los presentes Términos y Condiciones.',
    'conditions_15_11'                  => 'De la ausencia de virus u otros elementos que pudieran dañar o alterar el sistema informático del usuario (tanto hardware como software). Te corresponde, como usuario, disponer de herramientas adecuadas para la detección de virus o cualquier otro elemento informático dañino.',

    // 16
    'conditions_16'                     => '14. Nulidad parcial',
    'conditions_16_1'                   => 'En caso de que cualquier Cláusula de los presentes Términos y Condiciones sea declarada nula, las demás Cláusulas seguirán vigentes y se interpretarán teniendo en cuenta el espíritu de los presentes Términos y Condiciones.',

    // 17
    'conditions_17'                     => '15. Modificaciones',
    'conditions_17_1'                   => ':trademark se reserva el derecho de modificar unilateralmente, total o parcialmente, sin necesidad de previo aviso los presentes Términos y Condiciones, así como su Política de Privacidad y cualesquiera otras condiciones de carácter particular que modifiquen, extingan o dejen sin efecto total o parcialmente otras partes del Sitio Web que eventualmente puedan establecerse, la configuración, presentación y diseño del Sitio Web o de cualquiera de los elementos y servicios que lo integran. Cualquier acceso por tu parte posterior a dichas modificaciones del Sitio Web se considerará como una aceptación de las mismas.',
    'conditions_17_2'                   => 'Cualquier cambio en los presentes Términos y Condiciones será de aplicación a los pedidos realizados en o después de la fecha de entrada en vigor del mismo, y que se encuentra especificada al final de este documento.',

    // 18
    'conditions_18'                     => '16. Personalización de campañas',
    'conditions_18_1'                   => 'Cada usuario es objeto de una campaña aleatoria, por lo que los términos relativos al envío aplicables a cada pedido podrán variar aleatoriamente. Tus datos personales no serán tenidos en cuenta como variable a la hora de determinar las condiciones particulares de cada pedido.',

    // 19
    'conditions_19'                     => '17. Notificaciones',
    'conditions_19_1'                   => 'Todas las comunicaciones mantenidas contigo relativas a la contratación de los pedidos a través del Sitio Web, se realizarán por escrito y de conformidad con los procedimientos de comunicación establecidos en estos Términos y Condiciones para cada caso en particular.',

    // 20
    'conditions_20'                     => '18. Idioma',
    'conditions_20_1'                   => ':trademark puede traducir los presentes Términos y Condiciones, su Política de Privacidad, o cualquier otra norma operativa, política o procedimiento que pueda ser publicado en el Sitio Web. La versión española será la que prevalezca en caso de conflicto.',

    // 21
    'conditions_21'                     => '19. Política Ética sobre Proveedores',
    'conditions_21_1'                   => 'Con el objetivo de proporcionar productos y servicios de alta calidad a sus clientes, :trademark reconoce su obligación de asegurarse de que los proveedores actúen de forma ética. Esperamos de nuestros proveedores que proporcionen de forma regular un entorno que proteja la salud y la seguridad de sus empleados, además de sus derechos humanos básicos. Todos los proveedores deberán cumplir sus leyes y reglamentos nacionales sobre el empleo, en particular con respecto a lo siguiente:',
    'conditions_21_2'                   => 'Edad mínima para trabajar.',
    'conditions_21_3'                   => 'Empleo elegido libremente.',
    'conditions_21_4'                   => 'Salud y seguridad.',
    'conditions_21_5'                   => 'Libertad de asociación y derecho a la negociación colectiva.',
    'conditions_21_6'                   => 'Ausencia de discriminación.',
    'conditions_21_7'                   => 'Ausencia de tratos penosos o inhumanos.',
    'conditions_21_8'                   => 'Horario de trabajo.',
    'conditions_21_9'                   => 'Salarios.',
    'conditions_21_10'                  => 'Condiciones laborales.',
    'conditions_21_11'                  => ':trademark nunca adquirirá conscientemente suministros de países que incumplan los principios mencionados. También esperamos que nuestros proveedores trasladen estos principios al trato con sus propios proveedores. Debido a la naturaleza, a veces compleja, de la cadena de suministro de nuestros proveedores, no siempre es posible monitorizar y controlar las condiciones de cada individuo implicado en la producción de nuestros productos. Sin embargo, a medida que :trademark continúa creciendo, reconoce la importancia de actuar tomando la iniciativa y de hacer todo lo posible por defender los derechos de las personas que participan en la fabricación de sus productos.',

    // 22
    'conditions_22'                     => '20. Legislación Aplicable y Jurisdicción',
    'conditions_22_1'                   => 'Los presentes Términos y Condiciones están sometidos a la legislación española. Las partes, de conformidad al Real Decreto Legislativo 1/2007, de 16 de noviembre, por el que se aprueba el texto refundido de la Ley General para la Defensa de los Consumidores y usuarios y otras leyes complementarias, se someten a los Juzgados y Tribunales del lugar de residencia del usuario.',
    'conditions_22_2'                   => 'Asimismo, en virtud de lo dispuesto en el <a href="https://www.boe.es/doue/2013/165/L00001-00012.pdf" target="_blank">Reglamento (UE) nº 524/2013 del Parlamento Europeo y del Consejo, de 21 de mayo de 2013, relativo a la resolución de litigios en línea en materia de consumo</a>, :trademark te informa que, en caso de controversia, el usuario residente de la Unión Europea podrá acudir a la “Plataforma Online de Resolución de Conflictos” que ha desarrollado la Comisión Europea, con el fin de intentar resolver extrajudicialmente cualquier controversia que se derive de la prestación de servicios por parte de :trademark.',
    'conditions_22_3'                   => 'Puedes acceder a la "Plataforma Online de Resolución de Conflictos" a través del siguiente enlace: <a href="http://ec.europa.eu/consumers/odr" target="_blank">http://ec.europa.eu/consumers/odr</a>. No obstante, previo a proceder a utilizar este medio ponemos a tu disposición la sección «Contacto» para que nos hagas llegar tus posibles quejas o controversias.',
    'conditions_22_4'                   => '<strong>Fecha de actualización: :update_date</strong>',
];