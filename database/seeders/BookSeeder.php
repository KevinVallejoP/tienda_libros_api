<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'book_name' => 'El Mundo y sus Demonios',
                'book_author' => 'Carl Sagan',
                'book_description' => 'El mundo y sus demonios. La ciencia como una luz en la oscuridad es un libro de Carl Sagan publicado en 1995 que trata de explicar el método científico y animar el uso del pensamiento crítico o escéptico. Explica métodos que ayudan a distinguir entre ideas que son consideradas ciencia válida e ideas consideradas pseudociencia; según él, indica que cuando una nueva idea se plantea, ésta debe ser sometida a consideración, para luego ser probada rigurosamente. El pensamiento escéptico da medios para construir, entender, razonar y reconocer ideas válidas o erróneas hasta donde la verificación sea posible.',
                'category_id' => 1,
                'book_image' => 'elmundoysusdemonios.jpg'
            ],
            [
                'book_name' => 'El Camino de las Lágrimas',
                'book_author' => 'Jorge Bucay',
                'book_description' => 'El camino de las lágrimas, comienza cuando nos conectamos con lo doloroso; con la pérdida de alguien, (ya sea muerte o alejamiento) o algún objeto; debido a la cultura en la que vivimos, en donde nos han enseñado a sufrir por la muerte de un ser querido, a depender de alguien para realizar ciertas actividades, a tener una “muleta” para seguir adelante y si no la tenemos, no podemos continuar y nos enfrentaremos a caminar por el “oscuro” camino de las lagrimas aunque este alejamiento o perdida de objeto sea para mejorar o crecer, no evita la pena; el dolor que ocasiona: él se fue, él ya no estará, él se perdió.',
                'category_id' => 1,
                'book_image' => 'elcaminodelaslagrimas.jpg'
            ],
            [
                'book_name' => 'El Caballero de la Armadura Oxidada',
                'book_author' => 'Robert Fisher',
                'book_description' => 'El relato gira en torno a un heroico caballero medieval, quien portaba una bella armadura, la cual reflejaba los rayos de sol. Con el tiempo, el caballero se habituó a llevarla siempre puesta sin quitársela ni para dormir. Un día, tras las súplicas de su esposa, decide quitársela y descubre que no puede. Así es como comienza un largo peregrinaje para encontrar ayuda para poder deshacerse de su armadura. En esta jornada recibirá la ayuda del mago Merlín y de otros personajes del cuento popular europeo.',
                'category_id' => 3,
                'book_image' => 'elcaballerodelaarmaduraoxidada.jpg'
            ],
            [
                'book_name' => 'Harry Potter y la Piedra Filosofal',
                'book_author' => 'Joanne Kathleen Rowling',
                'book_description' => 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y del insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vida para siempre. En ella le comunican que ha sido aceptado como alumno en el colegio interno Hogwarts de magia y hechicería. A partir de ese momento, la suerte de Harry da un vuelco espectacular. En esa escuela tan especial aprenderá encantamientos, trucos fabulosos y tácticas de defensa contra las malas artes. Se convertirá en el campeón escolar de quidditch, especie de fútbol aéreo que se juega montado sobre escobas, y se hará un puñado de buenos amigos...',
                'category_id' => 3,
                'book_image' => 'harrypotterylapiedrafilosofal.jpg'
            ],
            [
                'book_name' => 'El Diario de Ana Frank',
                'book_author' => 'Ana Frank',
                'book_description' => 'ras la invasión de Holanda, los Frank, comerciantes judíos alemanes emigrados a Amsterdam en 1933, se ocultaron de la Gestapo en una buhardilla anexa al edificio donde el padre de Ana tenía sus oficinas. Eran ocho personas y permanecieron recluidas desde junio de 1942 hasta agosto de 1944, fecha en que fueron detenidos y enviados a campos de concentración. En ese lugar y en las más precarias condiciones, Ana, a la sazón una niña de trece años, escribió su estremecedor Diario: un testimonio único en su género sobre el horror y la barbarie nazi, y sobre los sentimientos y experiencias de la propia Ana y sus acompañantes.',
                'category_id' => 2,
                'book_image' => 'eldiariodeanafrank.jpg'
            ],
            [
                'book_name' => 'Samurai Chess',
                'book_author' => 'Michael J. Gelb y Raymond Keene',
                'book_description' => 'Suggests ways of using martial arts principle and strategies, including attack, follow-through, impenetrable defense, timing, distance, surprise and deception, and artful surrender, to improve chess skills',
                'category_id' => 4,
                'book_image' => 'samuraichess.jpg'
            ],
            [
                'book_name' => 'Nudo de Víboras',
                'book_author' => 'Francois Mauriac',
                'book_description' => 'Es una larga carta en la que un rico abogado de sesenta y ocho años, hombre avaro por naturaleza, presintiendo la cercanía de la muerte, relata de manera fiel los sentimientos de toda una vida. Tras un matrimonio infeliz con la hija de una familia de la alta burguesía venida a menos, cuya única dote era su apellido, se ha sentido siempre despreciado por su esposa y también por sus hijos que solo desean su herencia. Paso a paso va introduciendo al lector en su vida donde el cariño, que el nunca dio, brilla por su ausencia y donde el dinero acumulado en sus negocios es lo único que interesa a su familia.',
                'category_id' => 2,
                'book_image' => 'nudodeviboras.jpg'
            ],
            [
                'book_name' => 'Inteligencia Genial',
                'book_author' => 'Michael J. Gelb',
                'book_description' => 'Aunque es difícil exagerar cuando se habla de lo brillante que era Leonardo da Vinci, investigaciones científicas recientes indican que probablemente subestimamos nuestras propias capacidades. Hemos sido dotados de un potencial creativo y de aprendizaje prácticamente ilimitado. El 95% de lo que sabemos sobre la capacidad del cerebro humano ha sido descubierto en lo últimos veinte años. Para aprender a pensar como Leonardo deberíamos comenzar por trae a escena la concepción actual de la inteligencia y algunos resultados de la investigación acerca de la naturaleza y extensión del potenical del cerebro.',
                'category_id' => 1,
                'book_image' => 'inteligenciagenial.jpg'
            ],
            [
                'book_name' => 'Hacedor de Estrellas',
                'book_author' => 'Olaf Stapledon',
                'book_description' => 'Una noche de amargura y desengaño, un hombre contempla el firmamento desde lo alto de una colina. De pronto se ve inmerso en una suerte de viaje astral que lo traslada por toda la galaxia, de la que explorará el nacimiento y el ocaso, con la meta última de comprender la naturaleza de la fuerza primigenia, el enigmático "hacedor de estrellas". Stapledon abre un gran angular cuyo protagonista es la inmensidad del tiempo y del espacio, invitándonos a una auténtica aventura existencial. Entre la cosmogonía y la fábula científica, ésta es, en palabras de Borges, una "novela prodigiosa" que ha merecido un lugar privilegiado entre los clásicos de la ciencia ficción.',
                'category_id' => 5,
                'book_image' => 'elhacedordeestrellas.jpg'
            ],
            [
                'book_name' => 'La Rebelión de las Ratas',
                'book_author' => 'Fernando Soto Aparicio',
                'book_description' => 'Esta novela, escrita con un lirismo que sorprende, desnuda descarnadamente el drama de un campesino dedicado, por la fuerza de la fatalidad, a trabajar en las oscuras y fétidas galerías de una mina de carbón para no morir de hambre. Los sombríos socavones simbolizan la vida misma: laberinto indescifrable, donde la esperanza ha cambiado su color por el de la fría y negra roca milenaria.',
                'category_id' => 2,
                'book_image' => 'larebeliondelasratas.jpg'
            ],
            [
                'book_name' => '1984',
                'book_author' => 'George Orwell',
                'book_description' => 'Londres, 1984: Winston Smith decide rebelarse ante un gobierno totalitario que controla cada uno de los movimientos de sus ciudadanos y castiga incluso a aquellos que delinquen con el pensamiento. Consciente de las terribles consecuencias que puede acarrear la disidencia, Winston se une a la ambigua Hermandad por mediación del líder O’ Brien.',
                'category_id' => 2,
                'book_image' => 'milnovecientosochentaycuatro.jpg'
            ],
            [
                'book_name' => 'Inteligencia Matemática',
                'book_author' => 'Eduardo Sáenz de Cabezón',
                'book_description' => '¿Quién leería un libro sobre matemáticas sin que le obliguen?", se preguntará el lector de este libro. Porque al leer sobre ellas se corren varios riesgos... Tal vez cambiemos nuestra idea sobre las matemáticas, con las que hemos vivido tan cómodamente todo este tiempo, y es posible que terminen por gustarnos.',
                'category_id' => 1,
                'book_image' => 'inteligenciamatematica.jpg'
            ],
            [
                'book_name' => 'Harry Potter y el Prisionero de Azkaban',
                'book_author' => 'Joanne Kathleen Rowling',
                'book_description' => 'Harry Potter y el prisionero de Azkaban es el tercero de los siete libros escritos de la serie Harry Potter, por J. K. Rowling. ... La trama del libro describe que un peligroso asesino, Sirius Black, se escapó de Azkaban, la prisión de los magos, y al parecer está dispuesto a encontrar y matar a Harry.',
                'category_id' => 3,
                'book_image' => 'harrypotteryelprisionerodeazkaban.jpg'
            ],
            [
                'book_name' => 'Cien Años de Soledad',
                'book_author' => 'Gabriel García Márquez',
                'book_description' => 'Cien años de soledad es una novela del escritor colombiano Gabriel García Márquez, ganador del Premio Nobel de Literatura en 1982. Es considerada una obra maestra de la literatura hispanoamericana y universal, así como una de las obras más traducidas y leídas en español.',
                'category_id' => 2,
                'book_image' => 'cienañosdesoledad.jpg'
            ],
            [
                'book_name' => 'Crónica de una Muerte Anunciada',
                'book_author' => 'Gabriel García Márquez',
                'book_description' => 'Crónica de una muerte anunciada es una novela del escritor colombiano Gabriel García Márquez, publicada por primera vez en 1981. Fue incluida en la lista de las 100 mejores novelas en español del siglo XX del periódico español El Mundo.​',
                'category_id' => 2,
                'book_image' => 'cronicadeunamuerteanunciada.jpg'
            ],
            [
                'book_name' => 'Contact',
                'book_author' => 'Carl Sagan',
                'book_description' => 'Tras cinco años de incesantes búsquedas con los dispositivos más sofisticados del momento, la astrónoma Eleanor Arroway consigue, junto a un equipo de científicos internacionales, conectar con la estrella Vega y demostrar que no estamos solos en el universo. Empieza entonces un trepidante viaje hacia el encuentro más esperado de la historia de la humanidad, y con él Carl Sagan plantea magistralmente cómo afectaría a nuestra sociedad la recepción de mensajes de una civilización inteligente.',
                'category_id' => 5,
                'book_image' => 'contact.jpg'
            ],
            [
                'book_name' => 'El Bosón de Higgs no te va a Hacer la Cama',
                'book_author' => 'Javier Santaolalla',
                'book_description' => 'Viajes en el tiempo, agujeros negros, motores de antimateria, aceleración del universo... La física moderna suena a película, pero es ciencia, de la de verdad verdadera, la que nos cuenta una historia fascinante de descubrimientos y sueños cumplidos, de luchas y disputas, de pasión por comprender la naturaleza. Este divertido libro te ayudará a entender de una vez por todas lo que nos rodea, desde lo más pequeño a lo más grande, y a saber que el bosón de Higgs no te va a hacer la cama, ¡ni aunque le ruegues!',
                'category_id' => 1,
                'book_image' => 'elbosondehiggsnotevaahacerlacama.jpg'
            ],
            [
                'book_name' => 'Inteligencia Física',
                'book_author' => 'Javier Santaolalla',
                'book_description' => 'Inteligencia física - Aprende a ver el mundo con la mente de un físico¿Te imaginas meterte por un día en el cerebro de Sheldon Cooper? ¿O ponerte en la piel de Einstein por un rato? O las gafas de Schrödinger, el traje de Dirac, la bata de Planck o de Curie... Sí, todos tienen algo en común, todos son físicos. Y puedo atreverme a ir más lejos, también tienen algo en común contigo, amigo lector, sí, tú, aunque no te lo creas, también eres físico. ¿Acaso no te encoges cuando tienes frío? ¿No haces palanca para abrir una lata? ¿No soplas para apagar una vela? La física nos rodea, está en todas partes, porque somos física y, aunque no nos demos cuenta, la usas continuamente, más de lo que imaginas. Este libro nos invita a aventurarnos y ponernos las gafas de la física por un rato, a que te metas en el cerebro de un físico y veas el mundo desde otro punto de vista.',
                'category_id' => 1,
                'book_image' => 'inteligenciafisica.jpg'
            ],
            [
                'book_name' => 'La Puerta de los Tres Cerrojos',
                'book_author' => 'Sónia Fernández Vidal',
                'book_description' => 'La Puerta de los Tres Cerrojos es la primera novela que explica la física cuántica de forma divertida y comprensible. Después de recibir un misterioso mensaje, Niko recorre un nuevo camino para ir al instituto y descubre una casa que no había visto nunca antes. La resolu- ción de un enigma le permite entrar en lo que resultará ser un extraño lugar donde nacen universos, hay un gato que aparece y desparece, y es posible teleportarse. En esta novela, Sonia mezcla, por primera vez, fantasía y física cuántica; y hace que la ciencia sea accesible y atractiva para todos los lectores.',
                'category_id' => 2,
                'book_image' => 'lapuertadelostrescerrojos.jpg'
            ],
            [
                'book_name' => 'La Senda de las Cuatro Fuerzas',
                'book_author' => 'Sónia Fernández Vidal',
                'book_description' => 'La Puerta de los Tres Cerrojos, la entrada al mundo cuántico donde vivió aventuras tan inolvidables como extraordinarias, ha desaparecido. Niko no ha sido capaz de volver a encontrarse con sus amigos. Hasta que Quiona, su hada cuántica, reaparece para pedirle ayuda. El joven descubrirá que las leyes de la física se han descontrolado, y de él y sus amigos depende reestablecer el equilibro. En su nueva aventura cuántica deberá someterse a las pruebas de cada una de las fuerzas que rigen nuestro Universo.',
                'category_id' => 2,
                'book_image' => 'lasendadelascuatrofuerzas.jpg'
            ],
            [
                'book_name' => 'Los Cinco Reinos Eternos',
                'book_author' => 'Sónia Fernández Vidal',
                'book_description' => 'A Niko se le acumulan los problemas en los distintos mundos. El tiempo se ha vuelto loco en la Tierra y corre hacia atrás. Quiona ha quedado atrapada en el Reino de Tiempo y reclama su ayuda. Para devolver la armonía a los multiversos, Niko y sus amigos deberán atravesar agujeros de gusano, teleportarse a lugares desconocidos, crear universos de bolsillo con las constantes universales modificadas y desafiar un sinfín de leyes de la física. ¿Saldrán victoriosos nuestros amigos de esta nueva aventura cuántica?',
                'category_id' => 2,
                'book_image' => 'loscincoreinoseternos.jpg'
            ],
            [
                'book_name' => 'Harry Potter y La Camara Secreta',
                'book_author' => 'Joanne Kathleen Rowling',
                'book_description' => 'Tras derrotar una vez más a Lord Voldemort, su siniestro enemigo en Harry Potter y la piedra filosofal, Harry espera impaciente en casa de sus insoportables tíos el inicio del segundo curso del Colegio Hogwarts de Magia y Hechicería. Sin embargo, la espera dura poco, pues un elfo aparece en su habitación y le advierte que una amenaza mortal se cierne sobre la escuela. Así pues, Harry no se lo piensa dos veces y, acompañado de Ron, su mejor amigo, se dirige a Hogwarts en un coche volador. Pero ¿puede un aprendiz de mago defender la escuela de los malvados que pretenden destruirla? Sin saber que alguien ha abierto la Cámara de los Secretos, dejando escapar una serie de monstruos peligrosos, Harry y sus amigos Ron y Hermione tendrán que enfrentarse con arañas gigantes, serpientes encantandas, fantasmas enfurecidos y, sobre todo, con la mismísima reencarnación de su más temible adversario.',
                'category_id' => 3,
                'book_image' => 'harrypotterylacamarasecreta.jpg'
            ],
            [
                'book_name' => 'Guía del Autoestopista Galáctico',
                'book_author' => 'Douglas Adams',
                'book_description' => 'Un jueves a la hora de comer, la Tierra es demolida para poder construir una nueva autopista hiperespacial. Arthur Dent, un tipo que esa misma mañana ha visto cómo echaban abajo su propia casa, considera que eso supera lo que una persona puede soportar. Arthur huirá de la Tierra junto a un amigo suyo, Ford Prefect, que resultará ser un extraterrestre emparentado con Zaphod Beeblebrox, un pirata esquizoide de dos cabezas, en cuya nave conocerá al resto de personajes que lo acompañarán: un androide paranoide y una terrícola que, como él, ha logrado escapar. Douglas Adams fue el creador de toda una serie de manifestaciones de la Guía del autoestopista galáctico: primero fue novela radiofónica, luego se convirtió en libro, series televisivas y teatrales, un juego de ordenador, cómics y toallas de baño. La película ascendió hasta las cumbres de la producción cinematográfica. Esta edición cuenta con entrevistas y materiales a partir del rodaje de la misma.',
                'category_id' => 5,
                'book_image' => 'guiadelautoestopistagalactico.jpg'
            ],
            [
                'book_name' => 'El Gen Egoísta',
                'book_author' => 'Richard Dawkins',
                'book_description' => 'Somos máquinas de supervivencia, autómatas programados a ciegas con el fin de perpetuar la existencia de los egoístas genes que albergamos en nuestras células. Así de rotundo es el comienzo del libro en el que el etólogo Richard Dawkins popularizó la teoría de que los genes son las verdaderas «unidades» centrales de la evolución, en vez de los individuos como los animales o las plantas. De esto hace ya casi treinta años, pues el libro se publicó en 1976. Según Dawkins, los genes primigenios nos crearon a las personas y los animales, quienes somos en realidad meras «máquinas de transmisión». Como máquinas podemos funcionar mejor o peor en nuestro entorno y de este modo continuar la cadena (garantizar la supervivencia y reproducción de los genes) a lo largo del tiempo, o perecer en una selección evolutiva.',
                'category_id' => 1,
                'book_image' => 'elgenegoista.jpg'
            ],
            [
                'book_name' => 'Historia del Tiempo',
                'book_author' => 'Stephen Hawking',
                'book_description' => 'Las entrevistas que contiene este volumen nos revelan a la persona detrás de su torre teórica y científica. Su madre y su hermana relatan cómo fue su juventud y cómo llegó a ser quien es. Sus condiscípulos de la escuela de Física de Oxford y de Cambridge lo recuerdan como un joven con evidente talento y muy poca tolerancia por los estudios convencionales. Sus colegas científicos describen las ideas que dieron forma a su trabajo teórico y la majestuosidad de los conceptos que desarrolló. Finalmente, aparecen las opiniones del propio autor. Complementada con meticulosas notas biográficas sobre cada participante y con pasajes explicativos que amplían las ideas científicas, ilustradas con fotografías y gráficas que iluminan los conceptos científicos —entre ellos los agujeros negros y la flecha del tiempo—, esta obra es una historia oral extraordinaria, un retrato fascinante de una de las mentes más brillantes del siglo XX.',
                'category_id' => 1,
                'book_image' => 'historiadeltiempo.jpg'
            ],
            [
                'book_name' => 'Universos Paralelos',
                'book_author' => 'Michio Kaku',
                'book_description' => '“En Mundos paralelos, Mikio Kaku hace gala de todo su formidable talento didáctico para enfrentarse a una de las más extrañas y excitantes posibilidades que ha surgido en la Física contemporánea: que nuestro universo puede ser uno entre los muchos, quizá infinitos, que han surgido en el Cosmos. Con un uso habilidoso de la analogía y el humor, Kaku introduce pacientemente al lector en todas las variaciones sobre el tema de los universos paralelos procedentes de la física cuántica, la cosmología y la reciente teoría-M. Leer este libro conducido por un experto guía es un maravilloso recorrido por un cosmos cuya comprensión nos fuerza a alcanzar los últimos límites de la imaginación”.',
                'category_id' => 1,
                'book_image' => 'universosparalelos.jpg'
            ],
            [
                'book_name' => 'El Atlas de las Nubes',
                'book_author' => 'David Mitchell',
                'book_description' => 'El atlas de las nubes es una novela que da la vuelta al mundo y recorre desde el siglo xix hasta un futuro apocalíptico, a través de seis historias entrelazadas. El relato se abre en 1850 con el regreso del notario estadounidense Adam Ewing desde las islas Chatham a su California natal. Durante el viaje, Ewing traba amistad con un médico, el doctor Goose, que comienza a tratarle de una extraña enfermedad causada por un parásito cerebral... Repentinamente, la acción se traslada a 1931 en Bélgica, donde Robert Frobisher, un compositor bisexual que ha sido desheredado, se introduce en el hogar de un artista enfermizo, su seductora esposa y su núbil hija... De ahí saltamos a la Costa Oeste en la década de los setenta, cuando Luisa Rey destapa una red de avaricia y crimen que pone en peligro su vida.',
                'category_id' => 2,
                'book_image' => 'elatlasdelasnubes.jpg'
            ],
            [
                'book_name' => 'Yo Robot',
                'book_author' => 'Isaac Asimov',
                'book_description' => 'Yo Robot de Isaac Asimov es una magnífica obra que pertenece al género de literatura de fantasía, en la cual el autor nos brinda su punto de vista utilizando un desborde de genialidad, como sería la creación y convivencia con seres inteligentes, totalmente automatizados, regidos por las tres leyes universales de la robótica. En este artículo, le presentamos una sinopsis y un breve resumen del libro yo robot que es una interesante historia de ciencia ficción.',
                'category_id' => 5,
                'book_image' => 'yorobot.jpg'
            ],
            [
                'book_name' => 'Algoritmos. Guía Ilustrada Para Programadores y Curiosos',
                'book_author' => 'Aditya Y. Bhargava',
                'book_description' => 'Un algoritmo no es más que un procedimiento paso a paso para resolver un problema. Los algoritmos que se utilizan más a menudo en programación ya han sido descubiertos, probados y demostrados. Si quiere entenderlos, pero se niega a atravesar densas demostraciones de varias páginas, este libro es para usted. Una guía completamente ilustrada que facilita el aprendizaje de los algoritmos más importantes de manera efectiva para que los pueda aplicar en sus propios programas. Esta es una guía asequible e ilustrada que enseña cómo aplicar algoritmos comunes a problemas prácticos que enfrentan a diario los programadores. Comienza con la ordenación y la búsqueda y, a medida que se desarrollan habilidades para pensar, aborda problemas más complejos, como la compresión de datos y la inteligencia artificial. Cada ejemplo está cuidadosamente presentado e incluye útiles diagramas y código en Python, todos comentados.',
                'category_id' => 6,
                'book_image' => 'algoritmos.jpg'
            ],
            [
                'book_name' => 'Introduction to Algorithms',
                'book_author' => 'Thomas H. Cormen',
                'book_description' => 'Some books on algorithms are rigorous but incomplete; others cover masses of material but lack rigor. Introduction to Algorithms uniquely combines rigor and comprehensiveness. The book covers a broad range of algorithms in depth, yet makes their design and analysis accessible to all levels of readers. Each chapter is relatively self-contained and can be used as a unit of study. The algorithms are described in English and in a pseudocode designed to be readable by anyone who has done a little programming. The explanations have been kept elementary without sacrificing depth of coverage or mathematical rigor.',
                'category_id' => 4,
                'book_image' => 'introductiontoalgorithms.jpg'
            ],
            [
                'book_name' => 'Código Limpio',
                'book_author' => 'Robert C. Martin',
                'book_description' => 'Cada año, se invierten innumerables horas y se pierden numerosos recursos debido a codigo mal escrito, ralentizando el desarrollo, disminuyendo la productividad, generando graves fallos e incluso pudiendo acabar con la organizacion o empresa.El reconocido experto de software Robert C. Martin, junto con sus colegas de Object Mentor, nos presentan sus optimas tecnicas y metodologias agiles para limpiar el codigo sobre la marcha y crearlo de forma correcta, de este modo mejorara como programador.Esta obra se divide en tres partes. La primera describe los principios, patrones y practicas para crear codigo limpio. La segunda incluye varios casos de estudio cuya complejidad va aumentando. Cada ejemplo es un ejercicio de limpieza y transformacion de codigo con problemas. La tercera parte del libro contiene una lista de heuristica y sintomas de codigo erroneo (smells) confeccionada al crear los casos practicos.',
                'category_id' => 6,
                'book_image' => 'codigolimpio.jpg'
            ],
            [
                'book_name' => 'Trilogía de la Fundación',
                'book_author' => 'Isaac Asimov',
                'book_description' => 'Es considerada la mejor serie de la ciencia ficción universal. Como tal, fue galardonada en 1966 con un premio Hugo, y ahora reunida en un único volumen: una lectura imprescindible para los amantes del género. El hombre se ha dispersado por toda la galaxia. La capital del Imperio es Trántor, nido de intrigas y corrupción. Gracias a su ciencia, fundada en el estudio matemático de los hechos históricos y el comportamiento de las masas, el psicohistoriador Hari Seldon prevé la caída del Imperio y el retorno a la barbarie durante varios milenios. A fin de reducir este período de barbarie a mil años, Seldon decide crear una Fundación en un extremo de la galaxia. El poderío de la Fundación alcanza límites insospechados, su dominio se sostiene en la energía, la religión y el comercio. Sin embargo, la aparición del Mulo, un individuo dotado de poderes paranormales, desafía todas las previsiones. Conquistando planeta tras planeta, le gana terreno a la Fundación de manera vertiginosa. ',
                'category_id' => 5,
                'book_image' => 'trilogiadelafundacion.jpg'
            ]
        ];

        DB::table('books')->insert($books);
        //
    }
}
