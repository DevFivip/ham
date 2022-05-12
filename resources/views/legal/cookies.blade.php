@extends('layouts.app')

@section('content')

<main class="sm:container sm:mx-auto sm:mt-10">

    <section class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container">

            <section class="mb-10">

                <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">¿Qué Es Una Cookie?</h2>
                <p class="mb-5">Las cookies son pequeños archivos de texto o datos que se almacenan en su ordenador o dispositivo móvil (como, por ejemplo, un smartphone o tablet) cuando usted visita nuestras Páginas. Una cookie suele contener el nombre de la página web de la que procede, la "vida" de la cookie (esto es, el periodo de tiempo que la cookie permanecerá en su dispositivo) y un valor, que suele ser un número único generado aleatoriamente.</p>

            </section>



            <section class="mb-10">
                <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">¿Para Qué Empleamos Las Cookies?</h2>
                <div>
                    <p class="mb-5">Empleamos las cookies para facilitar la utilización de nuestras Páginas y adaptar mejor las Páginas y nuestros productos a sus intereses y necesidades. Con las cookies esto es posible porque las páginas web pueden leer y escribir estos archivos, permitiéndoles reconocerle y recordar información importante que hará más cómoda su navegación por una página web (por ejemplo, recordando sus ajustes preferidos).</p>
                    <p class="mb-5">Las cookies también se pueden utilizar para ayudarle a agilizar en el futuro su navegación y su experiencia en nuestras Páginas. También empleamos las cookies para recopilar datos estadísticos consolidados y disociados que nos permiten entender cómo los usuarios utilizan nuestras Páginas y para mejorar la estructura y los contenidos de nuestras Páginas. No podremos identificarle personalmente a través de estos datos.</p>
                </div>

            </section>

            <section class="mb-10">
                <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">¿Qué Tipos De Cookies Utilizamos?</h2>
                <div>
                    <p class="mb-5">En las Páginas pueden utilizarse dos tipo de cookies: las denominadas "cookies de sesión" y "cookies persistentes". Las cookies de sesión son cookies que permanecen en su dispositivo hasta que usted abandona la Página. Una cookie persistente permanece en su dispositivo mucho más tiempo o hasta que usted la elimina manualmente (el tiempo que la cookie permanezca en su dispositivo dependerá de la duración o "vida" de la cookie en cuestión).</p>
                    <h4>Cookies de terceros</h4>
                    <p class="mb-5">Asimismo utilizamos una serie de proveedores que también podrán instalar cookies en su dispositivo en nombre de usted cuando visite nuestras Páginas para poder prestar sus servicios. Si desea obtener más información acerca de estas cookies y sobre cómo solicitar dejar de recibirlas, consulte las políticas de privacidad de dichos proveedores.</p>
                </div>

            </section>

            <section class="mb-10">
                <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">¿Qué Cookies Utilizamos?</h2>
                <div class="mb-10">
                    <p class="mb-5">En el siguiente cuadro se enumeran los diferentes tipos de cookies que podrán utilizarse en las Páginas de EF. Tenga en cuenta que en la medida en que los datos recogidos a través de las cookies constituyan datos de carácter personal, la Política de Privacidad será de aplicación y complementará la presente Política de Cookies.</p>
                </div>
                <div>
                    <h4 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">Cookies técnicas</h4>
                    <div>
                        <p class="mb-8">Las cookies técnicas son necesarias para que la Página funcione y usted pueda navegar por ella y utilizar sus servicios y funciones. Sin estas cookies absolutamente necesarias, la Página no funcionará con la fluidez prevista y es posible que no podamos ofrecerle la Página o determinados servicios y funciones que usted nos solicite.</p>

                        <table class="w-full table-auto mb-8">
                            <tbody>
                                <tr class="bg-primary text-center text-white h-10">
                                    <th>Tipo de cookie</th>
                                    <th>Descripción</th>
                                    <th>Cómo gestionar las cookies</th>
                                </tr>
                                <tr>
                                    <td>Sesión</td>
                                    <td>Las cookies de sesión se utilizan para mantener el estado de la aplicación.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Equilibrio de carga</td>
                                    <td>Las cookies de equilibrio de carga se utilizan para distribuir los activos por todo el mundo y aligerar la carga del servidor.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Las cookies de equilibrio de carga se utilizan para distribuir los activos por todo el mundo y aligerar la carga del servidor.</td>
                                    <td>Las cookies de identificación de usuario se utilizan para garantizar que los usuarios solo vean sus propios datos.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Seguridad</td>
                                    <td>Las cookies de seguridad se utilizan para realizar controles y comprobaciones de seguridad.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <h4 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">Cookies de personalización</h4>
                    <div>
                        <p class="mb-8">Las cookies de personalización recogen datos acerca de las opciones elegidas por usted y sus preferencias y nos permiten recordar el idioma u otros ajustes locales y personalizar la Página de acuerdo con sus necesidades.</p>
                        <table class="w-full table-auto mb-8">
                            <tbody>
                                <tr class="bg-primary text-center text-white h-10">
                                    <th>Tipo de cookie</th>
                                    <th>Descripción</th>
                                    <th>Cómo gestionar las cookies</th>
                                </tr>
                                <tr>
                                    <td>Idioma</td>
                                    <td>Las cookies de idioma se utilizan para almacenar el idioma que ha seleccionado el usuario y mostrar las opciones correctas.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Localización</td>
                                    <td>La dirección aproximada del usuario (ciudad, estado, país, código postal), determinada por la dirección IP, se almacena para seleccionar automáticamente el país correcto y mostrar los puntos de venta y días programados para la realización de presentaciones dentro del área correspondiente.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Móviles</td>
                                    <td>Si el usuario accede a la Página a través de un dispositivo móvil, se instala una cookie para visualizar la página web principal (es decir, cuando el dispositivo es compatible con tecnología Flash) o la página móvil sin tecnología Flash.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Página web de referencia</td>
                                    <td>La página web de referencia se registra para entender mejor las preferencias del usuario.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Visita y actividad más reciente</td>
                                    <td>La fecha de la visita y actividad más reciente y otros datos se registran para proporcionar información actualizada a los usuarios sobre qué ha cambiado en la página web desde su última visita y para entender mejor sus preferencias.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Vídeo visto más recientemente</td>
                                    <td>La fecha y el título del vídeo visto más recientemente se registran para poder entender mejor las preferencias del usuario.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Cookies Flash</td>
                                    <td>Las cookies Flash se utilizan para permitir la reproducción de contenidos audiovisuales.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Historial de visitas</td>
                                    <td>Las cookies de historial de visitas se utilizan para hacer un seguimiento de las secciones que el usuario ha visitado en la Página. Si el usuario obtiene un mensaje de error mientras visita la Página, los datos de la cookie se guardan en un archivo de registro para la comunicación y resolución de errores.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <h4 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">Cookies de seguimiento con <em>plug-in</em> social</h4>
                    <div>
                        <p class="mb-8">Estas cookies se utilizan para hacer un seguimiento de personas que son usuarios [o no] de redes sociales para el análisis de datos de estudios de mercado y el desarrollo de productos.</p>
                        <table class="w-full table-auto mb-8">
                            <tbody>
                                <tr class="bg-primary text-center text-white h-10">
                                    <th>Tipo de cookie</th>
                                    <th>Descripción</th>
                                    <th>Cómo gestionar las cookies</th>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td>Las cookies se utilizan para hacer un seguimiento de personas que son usuarios [o no] de Facebook a los efectos del análisis de datos de estudios de mercado y del desarrollo de productos.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td>Las cookies se utilizan para hacer un seguimiento de personas que son usuarios [o no] de Twitter para efectos de análisis de datos de estudios de mercado y del desarrollo de productos.</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <h4 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">Cookies analíticas</h4>
                    <div>
                        <p class="mb-8">Las cookies analíticas recogen datos acerca de la utilización de la Página por su parte y nos permiten mejorar su funcionamiento. Por ejemplo, las cookies analíticas nos muestran cuáles son las secciones más visitadas de la Página, nos ayudan a llevar un registro de las dificultades que usted experimenta con la Página y nos indican si nuestra publicidad es o no eficaz. Todo ello nos permite conocer las pautas de utilización de la Página en general y no limitándonos a un único usuario.</p>
                        <table class="w-full table-auto mb-8">
                            <tbody>
                                <tr class="bg-primary text-center text-white h-10">
                                    <th>Tipo de cookie</th>
                                    <th>Descripción</th>
                                    <th>Cómo gestionar las cookies</th>
                                </tr>
                                <tr>
                                    <td>Google Analytics</td>
                                    <td>Las cookies analíticas de Google Analytics recogen datos estadísticos consolidados para mejorar la presentación y navegación de la Página. Google complementa los datos consolidados con información demográfica y de interés, para que podamos entender mejor a nuestros visitantes.</td>
                                    <td><a href="https://tools.google.com/dlpage/gaoptout" data-clicklabel="page:page">https://tools.google.com/dlpage/gaoptout</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <h4 class="mb-8 text-2xl font-bold text-dark sm:text-2xl">Cookies publicitarias</h4>
                    <div>
                        <p class="mb-8">Las cookies publicitarias se utilizan con fines de gestión de los espacios publicitarios.</p>
                        <table class="w-full table-auto mb-8">
                            <tbody>
                                <tr class="bg-primary text-center text-white h-10">
                                    <th>Tipo de cookie</th>
                                    <th>Descripción</th>
                                    <th>Cómo gestionar las cookies</th>
                                </tr>
                                <tr>
                                    <td>Publicidad</td>
                                    <td>Entregar publicidad segmentada u orientada en función del comportamiento</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Estudios de mercado</td>
                                    <td>Realizar estudios de mercado</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Campaña / promoción</td>
                                    <td>Medir la eficacia de una campaña</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                                <tr>
                                    <td>Detección del fraude</td>
                                    <td>Detectar el fraude por Internet</td>
                                    <td>Aceptar/rechazar a través de los ajustes del navegador</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>

            <section class="mb-10">
                <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">¿Cómo Gestiono Las Cookies?</h2>
                <div>
                    <p class="mb-5">Aunque la mayoría de los navegadores de Internet están configurados por defecto para aceptar automáticamente las cookies, también le permiten, en casi todos los casos, cambiar los ajustes para bloquear las cookies o alertarle cuando se envíen cookies a su dispositivo.</p>
                    <p class="mb-5">Además de las opciones indicadas anteriormente, usted podrá rechazar, aceptar o eliminar cookies de la Página en cualquier momento activando o accediendo al ajuste correspondiente de su navegador. El procedimiento que debe seguir para permitir, deshabilitar o eliminar las cookies se describe en la página web del proveedor de su navegador, a la que puede acceder a través de la pantalla de ayuda.</p>
                    <p class="mb-5">Tenga en cuenta que si se deshabilitan o eliminan las cookies, es posible que las características de la Página no funcionen de la forma prevista. Por ejemplo, usted no podrá acceder a determinadas áreas de nuestra Página o recibir información personalizada cuando visite la Página.</p>
                    <p class="mb-5">Si utiliza diferentes dispositivos para ver y acceder a las Páginas (por ejemplo, su ordenador, smartphone, tablet, etc.), deberá asegurarse de configurar el navegador de cada dispositivo de acuerdo con sus preferencias en lo que respecta a las cookies.</p>
                </div>

            </section>

            <section class="mb-10">
                <h2 class="mb-8 text-3xl font-bold text-dark sm:text-4xl">Contacte Con Nosotros</h2>
                <div>
                    <p class="mb-5">Si necesita cualquier aclaración acerca de la presente Política de Cookies, póngase en <a href="/contactanos" class="text-primary">contacto con nosotros</a>.</p>
                    <p class="mb-5">Dirección: Av Central - (San Martin de Porres) Perú.</p>
                    <p class="mb-5">Tenga en cuenta que las comunicaciones por correo electrónico no son siempre seguras; por tanto, no incluya datos sobre tarjetas de crédito o datos especialmente protegidos en los correos electrónicos que nos envíe.</p>
                </div>

            </section>

        </div>
    </section>


    @include("layouts.footer")


</main>
@endsection