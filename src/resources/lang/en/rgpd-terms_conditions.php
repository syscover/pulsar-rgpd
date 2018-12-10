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
    'conditions_12'                     => '10. Use of the Website',
    'conditions_12_1'                   => 'It is not allowed to use the Website for fraudulent purposes, or related to criminal offenses or illicit activities of any kind.',
    'conditions_12_2'                   => 'It is also prohibited to send, use or reuse illegal, offensive, abusive, indecent, defamatory, obscene or threatening material of any kind, or that involves a violation of intellectual property rights, trademarks, confidentiality, privacy or any other right, that is, otherwise insulting or objectionable to third parties, or whose content contains computer viruses, political advertising, advertising content, chain mail, mass mailing or any other type of "spam" and, in general, any type of inconvenience or inconvenience unnecessary.',
    'conditions_12_3'                   => 'As a user you undertake to make a lawful, diligent, honest and correct use of all the information or content you have access to through the Website or third party websites to which you have access through the Website links, and all of this under the principles of good faith and with respect at all times to the current legislation and these Terms and Conditions.',
    'conditions_12_4'                   => 'Likewise, as a user, you acquire the commitment not to provoke, maliciously or intentionally, any damage or prejudice that may undermine, alter the Website, or introduce or spread computer viruses that may cause unauthorized alterations to the contents or systems of the Website.',
    'conditions_12_5'                   => ':trademark reserves the right to deny access to the Website or even cancel orders to users who misuse the contents and / or breach any of the conditions that appear in this document.',

    // 13
    'conditions_13'                     => '11. Intellectual and industrial property',
    'conditions_13_1'                   => 'The intellectual property rights of the website, its source code, design, navigation structures and the various elements contained therein are owned by :trademark, to whom corresponds the exclusive exercise of the exploitation rights thereof in any form and in special rights, reproduction rights, distribution, public communication and transformation, in accordance with applicable Spanish and European legislation.',
    'conditions_13_2'                   => ':trademark informs that it does not grant license or express or implied authorization whatsoever on the rights of intellectual and / or industrial property or on any other right or property related, directly or indirectly, with the contents included in the Website. The total or partial reproduction of the contents of the Website is totally forbidden, even by means of a hyperlink, without the express written consent of :trademark. The unauthorized use of these contents will give rise to the legally established responsibilities.',

    // 14
    'conditions_14'                     => '12. Link Policy',
    'conditions_14_1'                   => 'In the event that you propose to establish hyperlinks with the Website, you can not imply that :trademark has authorized the hyperlink or that it has approved or authorized the content of the web page on which the hyperlink is established, nor does it false, inaccurate or offensive statements about :trademark or any of its workers, or include in the hyperlink page inappropriate, defamatory, illegal, obscene or illicit content, or any other that in any way contravene the law in force. You can not create macros («frames») with web pages or web pages of :trademark.',
    'conditions_14_2'                   => ':trademark reserves the right to contact you, if it considers that you breach the rules established for the hyperlinks, as well as to exercise the relevant judicial and extrajudicial actions, derived from any conduct contrary to the provisions of the previous paragraph.',

    // 15
    'conditions_15'                     => '13. Responsibility and guarantees of the Website',
    'conditions_15_1'                   => ':trademark declares that it has adopted the necessary measures that, within its possibilities and the state of technology, allow the proper functioning of the Website as well as the absence of viruses and harmful components.',
    'conditions_15_2'                   => 'Except for the limits established in the law, :trademark does not assume any responsibility derived from the following situations, and that are listed by way of example, but not limited to:',
    'conditions_15_3'                   => 'Of the continuity and availability of the contents, products and services.',
    'conditions_15_4'                   => 'Of the presence of errors in said contents.',
    'conditions_15_5'                   => 'Any errors that may occur on the Website as a result of: incidents due to problems in the Internet network, routine maintenance operations of the system and essential updates for the proper functioning of the Website.',
    'conditions_15_6'                   => 'The use by minors of the Website or the sending of their personal data without permission of their parents or guardians, being in this case the parents or guardians responsible for the responsible use of the Internet by minors. :trademark recommends the installation of a tool to control the use of the Internet in order to avoid access to pages or contents that are not suitable for minors.',
    'conditions_15_7'                   => 'Links to other web pages found on the Website, which may take the user to other websites on which :trademark does not have any type of control, so the user accesses under his / her own responsibility the content and the conditions of use that govern them.',
    'conditions_15_8'                   => 'Of the contents that the user can access through links not authorized by :trademark or that are entered by users as comments, or using similar tools, when these are made available to them on the Website.',
    'conditions_15_9'                   => 'The introduction of erroneous data by you or an unauthorized third party, as well as problems with the email address you provide us if it is incorrect or presents operational problems outside of :trademark.',
    'conditions_15_10'                  => 'The illicit use that users of the services and contents included in the Website may make in violation of the intellectual and / or industrial property rights of the web contents, under the terms established in clause 11 «Intellectual and Industrial Property »Of these Terms and Conditions.',
    'conditions_15_11'                  => 'The absence of viruses or other elements that could damage or alter the user\'s computer system (both hardware and software). It is up to you, as a user, to have adequate tools for detecting viruses or any other harmful computer element.',

    // 16
    'conditions_16'                     => '14. Partial nullity',
    'conditions_16_1'                   => 'In case any Clause of these Terms and Conditions is declared void, the other Clauses will remain in force and will be interpreted taking into account the spirit of these Terms and Conditions.',

    // 17
    'conditions_17'                     => '15. Modifications',
    'conditions_17_1'                   => ':trademark reserves the right to unilaterally modify, totally or partially, without prior notice the present Terms and Conditions, as well as its Privacy Policy and any other conditions of a particular nature that modify, extinguish or partially or partially cancel other Parts of the Website that may eventually be established, the configuration, presentation and design of the Website or any of the elements and services that comprise it. Any access by you after said modifications of the Website will be considered as an acceptance of them.',
    'conditions_17_2'                   => 'Any change in these Terms and Conditions will apply to orders placed on or after the date of entry into force of the same, and which is specified at the end of this document.',

    // 18
    'conditions_18'                     => '16. Customizing campaigns',
    'conditions_18_1'                   => 'Each user is the object of a random campaign, so the shipping terms applicable to each order may vary randomly. Your personal data will not be taken into account as a variable when determining the particular conditions of each order.',

    // 19
    'conditions_19'                     => '17. Notifications',
    'conditions_19_1'                   => 'All communications maintained with you regarding the contracting of orders through the Website, will be made in writing and in accordance with the communication procedures established in these Terms and Conditions for each particular case.',

    // 20
    'conditions_20'                     => '18. Language',
    'conditions_20_1'                   => ':trademark may translate these Terms and Conditions, its Privacy Policy, or any other operational standard, policy or procedure that may be published on the Website. The Spanish version will prevail in case of conflict.',

    // 21
    'conditions_21'                     => '19. Ethics Policy on Suppliers',
    'conditions_21_1'                   => 'In order to provide high quality products and services to its clients, :trademark recognizes its obligation to ensure that suppliers act ethically. We expect our suppliers to provide on a regular basis an environment that protects the health and safety of their employees, in addition to their basic human rights. All providers must comply with their national employment laws and regulations, in particular with respect to the following:',
    'conditions_21_2'                   => 'Minimum age to work.',
    'conditions_21_3'                   => 'Freely chosen employment.',
    'conditions_21_4'                   => 'Health and security.',
    'conditions_21_5'                   => 'Freedom of association and right to collective bargaining.',
    'conditions_21_6'                   => 'Absence of discrimination.',
    'conditions_21_7'                   => 'Absence of painful or inhuman treatment.',
    'conditions_21_8'                   => 'Working hours.',
    'conditions_21_9'                   => 'Salaries.',
    'conditions_21_10'                  => 'Labor conditions.',
    'conditions_21_11'                  => ':trademark will never consciously acquire supplies from countries that do not comply with the mentioned principles. We also expect our suppliers to transfer these principles to deal with their own suppliers. Due to the sometimes complex nature of the supply chain of our suppliers, it is not always possible to monitor and control the conditions of each individual involved in the production of our products. However, as :trademark continues to grow, it recognizes the importance of taking the initiative and doing everything possible to defend the rights of the people involved in the manufacture of their products.',

    // 22
    'conditions_22'                     => '20. Applicable Legislation and Jurisdiction',
    'conditions_22_1'                   => 'These Terms and Conditions are subject to Spanish legislation. The parties, in accordance with Royal Legislative Decree 1/2007, of November 16, which approves the revised text of the General Law for the Defense of Consumers and users and other complementary laws, submit to the Courts and Tribunals of the place of residence of the user.',
    'conditions_22_2'                   => 'Also, by virtue of the provisions of the <a href="https://www.boe.es/doue/2013/165/L00001-00012.pdf" target="_blank">Regulation (EU) nº 524/2013 of the European Parliament and of the Council of 21 May 2013 on the resolution of online consumer disputes</a>, :trademark informs you that, in the event of a dispute, the resident user of the European Union may go to the "Online Platform for Conflict Resolution" developed by the European Commission, in order to try to resolve extrajudicially any dispute arising from the provision of services by :trademark.',
    'conditions_22_3'                   => 'You can access the "Online Platform for Conflict Resolution" through the following link: <a href="http://ec.europa.eu/consumers/odr" target="_blank"> http: //ec.europa.eu/consumers/odr</a>. However, before proceeding to use this medium, we put at your disposal the "Contact" section so that you can send us your possible complaints or controversies.',
    'conditions_22_4'                   => '<strong>Update date: :update_date</strong>',
];