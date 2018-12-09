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
    'conditions_header'                 => 'Terms and Conditions',

    // 1
    'conditions_1'                      => 'Identifying data of the owner of the web',
    'conditions_1_1'                    => 'In compliance with the duty of information established by Law 34/2002, of July 11, Services of the Information Society and Electronic Commerce, we inform you that this website «:website_url» (hereinafter, the «Site Web ») is owned by the company:',
    'conditions_1_2'                    => ':company<br>:address<br>:zip :locality<br>:state.<br>Registry data:<br>TIN :tin<br>:commercial_registry<br>:registry_data',
    'conditions_1_3'                    => 'For any additional information, you can contact us through the «Contact» section.',

    // 2
    'conditions_2'                      => 'Terms and Conditions',
    'conditions_2_1'                    => 'These Terms and Conditions regulate access to and use of the Website owned by :company (hereinafter, «:trademark»), as well as the products and services offered by :trademark on the Website.',
    'conditions_2_2'                    => 'The use of the Website is subject to our «Privacy Policy», «Cookies Policy» and «Terms and Conditions» described below, which as a user, you know and accept in full and without any reservation due to the fact navigate the Website, use the services and/or acquire the products offered in it. If you were not in agreement with it you must abstain from using this web. The use of the Website also requires that you be of legal age, as well as that you have sufficient legal capacity in accordance with current legislation to be bound by these Terms and Conditions.',
    'conditions_2_3'                    => 'Access to the Website is free and does not require prior subscription. However, in order to contract any of our products and services, such registration and express acceptance by you of our «Privacy Policy», «Cookies Policy» and «Terms and Conditions» will be required.',
    'conditions_2_4'                    => 'These Terms and Conditions of :trademark described below, define the rights and obligations of :trademark and users in the framework of the Website. These are the only Terms and Conditions applicable to the use of the Website (without prejudice to the fact that specific services may exist for certain services) and to the contracting of orders through the Website and replace any other conditions, except by prior agreement and in writing between :trademark and the user.',

    // 3
    'conditions_3'                      => '1. Personal information',
    'conditions_3_1'                    => 'It is essential that you are over 18 years of age to access any of the forms of registration present on the website.',
    'conditions_3_2'                    => 'In order to acquire any of the products offered on the Website, it is necessary to create an account with your data through the form available when the purchase is made or through the «My Account» section of the Website. We will also require your data on the Website if you decide: That we notify you about the availability of any of our products out of stock, subscribe to our newsletter, or ask us any questions through our Customer Service Department in the section «Contact» of the Website.',
    'conditions_3_3'                    => 'You must check at all times that your data is correct and complete and inform :trademark when there is any variation and/or modification in the information you have provided in the purchase process. Also keep in mind that you are responsible for maintaining the confidentiality of the data and information provided and for restricting access to your computer and access codes to avoid possible unauthorized use. If you have reason to believe that your information has been brought to the attention of a third party, or if it has been used in an unauthorized manner, or is likely to be used, you should notify this situation to :trademark immediately.',
    'conditions_3_4'                    => 'For more information about the treatment of your personal data on the Website, please see our «Privacy Policy».',

    // 4
    'conditions_4'                      => '2. Preparation of an order and conditions of sale',
    'conditions_4_1'                    => 'The functioning of the Website is intended to offer the brand\'s products :trademark, group products :trademark and/or third-party products with which :trademark has reached a collaboration agreement.',
    'conditions_4_2'                    => 'Through the preparation of an order, you express your intention to purchase those products that are contained in it, in accordance with these Terms and Conditions. To do this, you must be over 18 years of age and provide, through the purchase form, a series of data prior to the hiring that will be necessary to manage your purchase order.',
    'conditions_4_3'                    => ':trademark may decide, at its discretion and without compensation to your favor of any kind, not accept orders, abnormal orders, orders that we suspect have not been made in good faith or orders that are allegedly fraudulent.',
    'conditions_4_4'                    => 'After receiving your order, if we accept it, we will send you a confirmation by email, with your order number and the details of the products you have requested. The conclusion of the contract will take place at the moment you receive such confirmation by email, which will constitute your proof of purchase.',

    // 5
    'conditions_5'                      => '3. Form of payment, prices, taxes and discount codes',
    'conditions_5_1'                    => 'Once the details of the purchase form have been completed, you must proceed to pay the order through the means of payment specified on the Website.',
    'conditions_5_2'                    => 'After the payment is made, you will receive an email confirming the order which will include a summary of the items purchased, the mode of shipment requested and the destination address.',
    'conditions_5_3'                    => 'If at the time of payment there was an incident that prevented the realization of the same, you will receive an automatic payment error message and your order will not be processed until the payment process is completed successfully.',
    'conditions_5_4'                    => 'The prices of the products offered on the Website are expressed in Euros (€) including taxes, as expressed in Euros (€), the transportation and handling expenses of said products, and the final amounts of which will be indicated at the time. of the definitive confirmation of each order. The price charged for a product will be the price in effect at the time the order is placed and will be reflected in the confirmation email of the same. :trademark may change prices at any time without prior notice. The price variations will only be applicable to orders after these changes.',
    'conditions_5_5'                    => 'All the prices shown of the products are final prices, being expressly included the Value Added Tax (hereinafter "VAT") or other taxes applicable in Spain, but do not include the expenses related to transport and handling of the products. The charges corresponding to transportation, handling and the corresponding VAT or other taxes will be shown on the Website during the processing of the order and, in any case, in the confirmation email of your order. In the case of the Canary Islands, VAT will be excluded when making the payment of the order.',
    'conditions_5_6'                    => 'For purchases delivered outside the European Economic Community: those taxes that may exist due to nationalization of the product (according to the regulations of the country or region in which you are) are not included, and you must pay the corresponding local agency at the time of the delivery of the order.',
    'conditions_5_7'                    => ':trademark may offer you discount codes periodically. These discounts can only be applied according to the instructions specified by :trademark with respect to each code, and in any case you can only use a single discount code per order. The use of discount codes will not be compatible with certain promotional actions and collections.',

    // 6
    'conditions_6'                      => '4. Product delivery',
    'conditions_6_1'                    => '<u>For shipments «within Spain Peninsula»: </u> The approximate delivery time in «Spain Peninsula» is 3 - 5 working days once the shipment has been processed. If you do not receive the order within that period, you will be entitled to request delivery, granting us a new reasonable delivery term. If this does not happen, you can terminate the contract and you will be entitled to be reimbursed for all the amounts you have paid. The established deadline will count from the moment of the formalization of the purchase, unless expressly and punctually, you indicate us to deliver at a later date than the indicated period.',
    'conditions_6_2'                    => '<u>For shipments «outside Spain Peninsula»: </u> For shipments outside Spain Peninsula, including Balearic Islands, Canary Islands, Ceuta and Melilla, the approximate delivery time will vary according to each final destination, so we recommend Track the status of your order online, accessing your profile in the "My Account" section of the Website. :trademark may reject those orders that require a specific delivery period, if this implies the impossibility of complying with said delivery period.',
    'conditions_6_3'                    => 'If:',
    'conditions_6_4'                    => 'Intentionally, fraudulently or unreasonably, you refuse delivery or delay receiving it after we have notified you of the attempted delivery of the product or products ordered, or in case you have provided us with an incorrect delivery address that gives rise to Upon a failed delivery, the package to be delivered will be returned to :trademark.',
    'conditions_6_5'                    => 'After the first delivery attempt, the product or products remain undelivered for a period of 14 (fourteen) calendar days and are returned without being delivered, we will have the right to cancel the contract.',
    'conditions_6_6'                    => ':trademark will not be responsible for the delay or non-compliance on the date of delivery of the product or products in the event that such delay or non-compliance are due to circumstances beyond :trademark in accordance with the law or principle generally accepted.',
    'conditions_6_7'                    => 'We ask you to examine the package delivered and the products received within 14 (fourteen) days from the date they were delivered to you and check their status and that the content of the package delivered is complete. In case the product or products received do not correspond with the ones you requested, or your order is incomplete or damaged during transport, please contact us :trademark through our Customer Service in the section «Contact» of the Website to receive assistance.',

    // 7
    'conditions_7'                      => '5. Availability of products and services',
    'conditions_7_1'                    => 'All the products of the Website are subject to limited productions, therefore, it is possible that stock breakages may occur. To do this, we have enabled the «Let me know when it is available» service, which will be indicated as a button in the section of the product that is out of stock. You must click on it and register for this service with your name and your email address if you want us to notify you with a notification when said product becomes available again.',
    'conditions_7_2'                    => 'If the product is already available, we will show you the «Add» button, with which you can add this item to the cart and proceed to formalize the purchase.',
    'conditions_7_3'                    => 'We do not guarantee the availability of any product or service on the Website. We reserve the right, without responsibility or notice, to change, suspend or interrupt the availability of any product or service.',

    // 8
    'conditions_8'                      => '6. Returns and right of withdrawal',
    'conditions_8_1'                    => 'Please note that we will only process refunds and refunds for those products that have been purchased on the Website.',

    // 8-2
    'conditions_8_2'                    => '6.1 Return of a product due to manufacturing defects',
    'conditions_8_2_1'                  => 'You can return to :trademark, without any cost, any product that has a manufacturing defect. Taking into account the nature of the contracted products, you will have a term of 14 calendar days from when you were aware of the lack of conformity of the product to communicate to :trademark your lack of conformity with them. If this period is exceeded, any damages will be assumed by the user.',
    'conditions_8_2_2'                  => 'The return of products that have manufacturing defects in them, will not entail any additional cost to the user.',
    'conditions_8_2_3'                  => 'To formalize the return, you must contact :trademark within the period granted of 14 calendar days, in the form of the section «Contact», indicating the product or products to be returned, attaching a photograph and a detailed list of the defects appreciated in the same.',
    'conditions_8_2_4'                  => 'Once :trademark has received your communication, we will inform you within 3 - 5 business days if the product returns or not. In the event of the return, :trademark will indicate the form of collection or delivery to their offices / warehouses of the defective product.',
    'conditions_8_2_5'                  => 'Each product to be returned must be unused and with all its labels, packaging and, if applicable, original documentation and accessories that came with it. If this is not done on your behalf, :trademark reserves the right to refuse the return.',
    'conditions_8_2_6'                  => 'Once the product has been received and the defects verified, :trademark will give you the possibility of replacing the product with another of identical characteristics, unless this option is objectively impossible or disproportionate for :trademark.',
    'conditions_8_2_7'                  => 'In the event that for reasons of lack of stock you could not proceed to send another product of identical characteristics, you can choose between resolving the contract (ie, the refund of the amounts paid) or request the sending of another of the same cost to the initially acquired that you voluntarily choose.',
    'conditions_8_2_8'                  => 'The delivery of the product of identical characteristics or the new model you choose, as appropriate, will be made in the next 3 - 5 business days from the date on which :trademark will confirm the replacement of the defective product or the shipment of the new model.',
    'conditions_8_2_9'                  => 'The replacement, the sending of a new model or the termination of the contract will not imply additional expenses for you.',
    'conditions_8_2_10'                 => 'If you terminate the contract, :trademark will carry out the return of the entire amount paid for the purchase of the defective product (including shipping costs), within a period of 14 (fourteen) calendar days from when you decided to terminate the contract. This refund will be made through the same means of payment that you used in the initial transaction.',

    // 8-3
    'conditions_8_3'                    => '6.2 Right of withdrawal',
    'conditions_8_3_1'                  => 'If you are not satisfied with the products received in your order, you can, in accordance with the General Law for the defense of Consumers and users, exercise your right to withdraw from the contract with a period of fourteen (14) calendar days from the date you received the same to return the entire order or, if you prefer, any of the products that make up the total order and all without any penalty and no need to indicate the reasons.',
    'conditions_8_3_2'                  => 'To formalize the return, you must first contact :trademark through the «Contact» section. Once said communication is received, :trademark will indicate the way to proceed to exercise this right.',
    'conditions_8_3_3'                  => 'The costs for returning the order to :trademark (such as shipping costs to :trademark through courier companies) will be fully covered by you, whether you return the order in full or decide to return only some of the products of said order.',
    'conditions_8_3_4'                  => ':trademark is not responsible for the courier company you hire for the return of the order. In this sense, :trademark recommends that you require the courier company to provide proof of delivery once the courier has deposited the product in the offices or warehouses of :trademark, so that you have proof that the product has been Delivered correctly to :trademark.',
    'conditions_8_3_5'                  => 'The product must be unused and with all its labels, packaging and, if applicable, documentation and original accessories that came with it. If this is not done by you or if the product has suffered any damage, you accept that the product may suffer a depreciation or that :trademark may refuse the return.',
    'conditions_8_3_6'                  => 'If you decide to return the order in full, :trademark will refund all of the amounts paid (including the initial shipping costs to your address). If you only want to return one or some of the products that are part of the order, :trademark will not be able to return the initial shipping costs to your address that you paid for the entire order.',
    'conditions_8_3_7'                  => 'Once :trademark receives the order and verifies that it is in perfect condition, :trademark will proceed to return the amounts paid within a period of 14 (fourteen) calendar days from the receipt of the order. This refund will be made through the same means of payment that you used in the initial transaction.',
    'conditions_8_3_8'                  => 'Please keep in mind that <u> you will not be able to exercise this right of withdrawal</u> with respect to:',
    'conditions_8_3_9'                  => 'Any product that has been manufactured in accordance with your specifications or has been clearly customized.',
    'conditions_8_3_10'                 => 'Any product that has been unsealed after delivery and can not be returned for hygiene reasons.',

    // 9
    'conditions_9'                      => '7. Product change policy',
    'conditions_9_1'                    => ':trademark does not support the exchange between a product that you have purchased for another product that is offered on the Website.',
    'conditions_9_2'                    => 'In the case of wanting to make the change of a product, you must exercise your right of withdrawal on the same as established in clause 6.2 and subsequently buy the new product you want.',

    // 10
    'conditions_10'                     => '8. Information and use of products and services',
    'conditions_10_1'                   => 'The data included in the Website in the description of its products and services, in its photographs, graphic or iconographic representations or videos as well as commercial names, trademarks or distinctive signs of any kind, have a merely informative function. Therefore, :trademark disclaims any liability for the occurrence of errors in such information, but agrees to take all measures available to correct as soon as possible the aforementioned errors or omissions after having been informed of them.',
    'conditions_10_2'                   => 'The guarantees offered :trademark with respect to its products and services are always conditioned to the good use of them. You must in any case, and prior to the purchase of a product on the Website, ensure that it is compatible for the intended use. To this end, there are descriptive sheets of the products available for your query on the Website.',
    'conditions_10_3'                   => ':trademark is not liable under any circumstances for possible claims arising from a use different from that for which a product or service offered on the Website is conceived. In case there is a difference between the content of the Website and that of any other website (or any other source of information), the product or service information as shown on the Website at the time of purchase, will be the one that prevails.',

    // 11
    'conditions_11'                     => '9. Customer Service',
    'conditions_11_1'                   => 'Our Customer Service is at your disposal for any questions or queries related to :trademark, with the products and services offered and with the orders placed through the Website. You can contact us at any time through the «Contact» section of the Website.',

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