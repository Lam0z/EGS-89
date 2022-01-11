{# Спикеры #}
{% set data1 = [
  {
    img: '/img/speakers/people/edelgeriev.jpg',
    name: 'Руслан<br> Эдельгериев',
    name_en: 'RUSLAN<br> EDELGERIEV',
    descr: 'Советник Президента Российской Федерации, специальный представитель Президента Российской Федерации по&nbsp;вопросам климата',
    descr_en: 'Adviser to&nbsp;the President of&nbsp;the Russian Federation, special representative of&nbsp;the President of&nbsp;the Russian Federation on&nbsp;Climate Issues',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/radionova.jpg',
    name: 'СВЕТЛАНА <br> РАДИОНОВА',
    name_en: 'Svetlana<br>Radionova',
    descr: 'Руководитель Федеральной службы по&nbsp;надзору в&nbsp;сфере природопользования Росприроднадзора',
    descr_en: 'Head of&nbsp;the Federal Service for Supervision of&nbsp;Natural Resources, Rosprirodnadzor',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/kobilkin.png',
    name: 'Дмитрий<br> Кобылкин',
    name_en: 'Dmitriy<br> Kobilkin',
    descr: 'Председатель комитета Государственной Думы по&nbsp;экологии, природным ресурсам и&nbsp;охране окружающей среды',
    descr_en: 'Chairman of the Duma Committee on Ecology, Natural Resources and Environmental Protection',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/lukasch.jpg',
    name: 'Светлана<br> Лукаш',
    name_en: 'Svetlana Lukash',
    descr: 'Заместитель начальника Экспертного управления Президента Российской Федерации; шерпа Российской Федерации в&nbsp;G20',
    descr_en: 'Deputy Head of&nbsp;the Expert Department of&nbsp;the President of&nbsp;the Russian Federation; Sherpa of&nbsp;the Russian Federation in&nbsp;the G20',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/pristanskov.jpg',
    name: 'ДМИТРИЙ<br> ПРИСТАНСКОВ',
    name_en: 'Dmitriy<br> Pristanskov',
    descr: 'Статс-секретарь – вице-президент ПАО «ГМК Норильский никель»',
    descr_en: 'State Secretary - vice-president of PJSC MMC Norilsk Nickel',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/late-ivanov.png',
    name: 'Сергей<br> Иванов',
    name_en: 'Sergey<br> Ivanov',
    descr: 'Исполнительный директор, член совета директоров ГК «ЭФКО»',
    descr_en: 'Executive Director, Member of the Board of Directors of EFKO Group',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/chehomski.png',
    name: 'Николай<br> Цехомский',
    name_en: 'Nikolai<br> Chehomskiy',
    descr: 'Первый заместитель председателя Внешэкономбанка',
    descr_en: 'First Deputy Chairman of Vnesheconombank',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/butsaev.jpg',
    name: 'Денис<br> Буцаев',
    name_en: 'Denis<br> Butsaev',
    descr: 'Генеральный директор Публично-правовой компании &laquo;Российский экологический оператор&raquo;',
    descr_en: 'The CEO of&nbsp;the public non-for-profit company Russian Environmental Operator',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/kononuchenko.png',
    name: 'Сергей<br> Кононученко',
    name_en: 'Nikolai<br> Kononuchenko',
    descr: 'Заместитель директора департамента международных организаций МИД РФ',
    descr_en: 'Deputy Director of the Department of International Organizations of the Ministry of Foreign Affairs of the Russian Federation',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/peshkova.jpg',
    name: 'ВЕРОНИКА<br> ПЕШКОВА',
    name_en: 'VERONIKA PESHKOVA',
    descr: 'Посол доброй воли, Организация Объединенных Наций по промышленному развитию (ЮНИДО)',
    descr_en: 'Goodwill Ambassador, United Nations Industrial Development Organization (UNIDO)',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/kozlov.jpg',
    name: 'АЛЕКСЕЙ<br> КОЗЛОВ',
    name_en: 'Aleksey<br>Kozlov',
    descr: 'Член Правления, управляющий директор ПАО &laquo;Сибур Холдинг&raquo;',
    descr_en: 'Member of&nbsp;the Management Board, Managing Director of&nbsp;PJSC Sibur Holding',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/idrisov.jpg',
    name: 'Александр<br> Идрисов',
    name_en: 'Alexander Idrisov',
    descr: 'Президент и основатель Strategy Partners Group',
    descr_en: 'President and Founder of Strategy Partners Group',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/uskova.png',
    name: 'Ольга<br> Ускова',
    name_en: 'Olga<br> Uskova',
    descr: 'Российский предприниматель, основатель и президент группы компаний Cognitive Technologies, генеральный директор Cognitive Pilot ',
    descr_en: 'Russian entrepreneur, founder and president of the Cognitive Technologies group of companies, CEO of Cognitive Pilot',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/babenko.png',
    name: 'Михаил<br> Бабенко ',
    name_en: 'Mihail<br> Babenko',
    descr: 'К.э.н., член экспертных советов по устойчивому развитию ТПП РФ, ППК РЭО, Деловая Россия, бывший сотрудник WWF ',
    descr_en: 'Ph.D., member of expert councils for sustainable development of the RF CCI, PPK REO, Delovaya Rossiya, former employee of WWF',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/ahmerov.jpg',
    name: 'ИГОРЬ  <br> АХМЕРОВ',
    name_en: 'Arkadiy<br> Dvorkovich',
    descr: 'Генеральный директор Grinvest',
    descr_en: 'Valid state Counselor of&nbsp;the Russian Federation 1 class. Fund chairman Skolkovo.',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/saprykin.jpg',
    name: 'Юрий<br> Сапрыкин',
    name_en: 'Yuri<br> Saprykin',
    descr: 'Вице-президент Фонда &laquo;Сколково&raquo; по&nbsp;региональному и&nbsp;международному сотрудничеству',
    descr_en: '<b>Skolkovo Foundation</b> Vice President for Regional and International Cooperation',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/prazdnichnykh.jpg',
    name: 'Алексей<br> Праздничных',
    name_en: 'Alexey Prazdnichnykh',
    descr: 'Партнер, Strategy Partners Group',
    descr_en: 'Partner, Strategy Partners Group',
    more: '',
    presentation: ''
  }
] %}




{# Резерв #}
{#
{
    img: '/img/speakers/people/karoleva.png',
    name: 'Галина<br> Карелова',
    name_en: 'Galina<br> Korelova',
    descr: 'Заместитель председателя Совета Федерации',
    descr_en: 'Deputy Chairman of the Federation Council',
    more: '',
    presentation: ''
  },  
  {
    img: '/img/speakers/people/dvorkovich.jpg',
    name: 'АРКАДИЙ <br> ДВОРКОВИЧ',
    name_en: 'Arkadiy<br> Dvorkovich',
    descr: 'Председатель фонда &laquo;Сколково&raquo;',
    descr_en: 'Valid state Counselor of&nbsp;the Russian Federation 1 class. Fund chairman Skolkovo.',
    more: '',
    presentation: ''
  },
  {
    img: '/img/speakers/people/anoprienko.jpg',
    name: 'Сергей<br> Аноприенко',
    name_en: 'Sergey<br> Anoprienko',
    descr: 'Заместитель Министра природных ресурсов и&nbsp;экологии Российской Федерации',
    descr_en: 'Deputy Minister of&nbsp;Natural Resources and Ecology of&nbsp;the Russian Federation&nbsp;&mdash; Head of&nbsp;the Federal Forestry Agency',
    more: '',
    presentation: ''
  },
  #}
