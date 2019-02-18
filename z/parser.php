<?php

$root = 'https://www.okeydostavka.ru';

$product = [
'name'=>'.catalog li .product .product_name',
'image'=>'.catalog li .product .image',
'weight'=>'.catalog li .product_weight',
'in'=>'.catalog li .product_weight span:nth-child(1)',
'price'=>'.catalog li .product .price'
];

/* Переключатель страниц.
.paging_controls
.pages .pageControlMenu a
*/

$mp_s_i = ['/spb/molochnye-produkty-syry-iaitso-16100-20/'=>[
    'molochnye-produkty-16101-20/'=>[
        'moloko-i-slivki-16110-20/',
        'iogurty-i-tvorozhki-16105-20/',
        'tvorozhnye-izdeliia-16106-20/',
        'produkty-molochnye-dlia-detei-i-kormiashchikh-mam-16109-20/',
        'kislomolochnye-produkty-16111-20/',
        'maslo-slivochnoe-i-margarin-16113-20/',
        'smetana-16107-20/',
        'deserty-kashi-molochnye-16642-20/',
        'produkty-soevye-16108-20/'
        ],
    'syry-16103-20/'=>[
        'tverdye-i-polutverdye-syry-16114-20/',
        'tvorozhistye-i-rassol-nye-syry-16116-20/',
        'plavlenye-kopchenye-i-kolbasnye-syry-16115-20/',
        'delikatesnye-i-desertnye-syry-16117-20/'
        ],
    'iaitso-16104-20/'
    ]
];

$ko_k = ['/spb/konditerskie-izdeliia-khleb-16052-20/'=>[
    'khlebobulochnye-izdeliia-16592-20/'=>[
        'khleb-baton-lepeshki-lavash-16596-20/',
        'vypechka-izdeliia-sdobnye-16593-20/',
        'sukhari-baranki-sushki-16595-20/',
        'khlebtsy-16597-20/'
        ],
    'nasha-pekarnia-69552-20/',
    'shokolad-shokoladnaia-pasta-16058-20/',
    'batonchiki-shokoladnye-iaitsa-drazhe-32051-20/',
    'konfety-16054-20/',
    'muchnye-konditerskie-izdeliia-16056-20/'=>[
        'pechen-e-32056-20/',
        'vafli-32053-20/',
        'prianiki-32058-20/',
        'rulety-32059-20/',
        'keksy-tartaletki-kukuruznye-palochki-32054-20/',
        'kruassany-shtrudeli-32055-20/'
        ],
    'marmelad-sufle-zefir-pastila-16055-20/',
    'torty-i-pirozhnye-16057-20/',
    'zhevatel-nye-rezinki-osvezhaiushchie-konfety-16053-20/',
    'vostochnye-sladosti-32052-20/',
    ]
];

$g_kn = ['/spb/goriachie-i-kholodnye-napitki-16562-20/'=>[
    'voda-16563-20/',
    'chai-30552-20/',
    'kofe-kakao-tsikorii-69557-20/'=>[
        'kofe-69560-20/',
        'kakao-shokoladnye-napitki-69562-20/',
        'tsikorii-69563-20/'
        ],
    'soki-nektary-morsy-16566-20/',
    'limonady-gazirovannye-napitki-16565-20/',
    'kholodnyi-chai-16564-20/',
    'kvas-32555-20/'
    ]
];

$o_f_g_i = ['/spb/ovoshchi-frukty-griby-iagody-16568-20/'=>[
    'ovoshchi-16570-20/',
    'frukty-i-iagody-16589-20/',
    'griby-30051-20/',
    'zelen--16569-20/',
    'orekhi-sukhofrukty-16585-20/',
    'ovoshchnye-smesi-ovoshchi-kvashennye--50053-20/'
    ]
];

$b_k = ['/spb/bakaleia-i-konservatsiia-15063-20/'=>[
    'krupy-15064-20/'=>[
        'ris-15071-20/',
        'krupa-grechnevaia-15072-20/',
        'gorokh-fasol-chechevitsa-15073-20/',
        'drugie-krupy-15074-20/'
        ],
    'makaronnye-izdeliia-15065-20/',
    'konservatsiia-16059-20/'=>[
        'rybnye-konservy-16060-20/',
        'miasnye-konservy-16064-20/',
        'ovoshchnaia-konservatsiia-24568-20/',
        'fruktovo-iagodnaia-konservatsiia-16063-20/',
        'molochnye-konservy-16066-20/',
        'med-16062-20/',
        'gotovye-bliuda-konservirovannye-16067-20/'
        ],
    'sakhar-i-sol--24573-20/',
    'muka-smesi-dlia-vypechki-15066-20/',
    'sukhie-zavtraki-15069-20/',
    'supy-i-bliuda-bystrogo-prigotovleniia-15068-20/',
    'sneki-15070-20/'=>[
        'chipsy-32062-20/',
        'sukhariki-32063-20/',
        'popkorn-32064-20/',
        'drugie-sneki-32065-20/'
        ],
    'dieticheskie-produkty-24552-20/'
    ]
];

$m_p_k = ['/spb/miaso-ptitsa-kolbasy-16551-20/'=>[
    'miaso-i-ptitsa-69069-20/',
    'polufabrikaty-iz-miasa-i-ptitsy-69553-20/',
    'subprodukty-iz-miasa-i-ptitsy-69554-20/',
    'kolbasy-varenye-16552-20/',
    'sosiski-sardel-ki-kolbaski-16556-20/',
    'kolbasy-kopchenye-16553-20/',
    'miasnye-delikatesy-16554-20/',
    'pashtety-liver-16555-20/'
    ]
];

$z_gk = ['/spb/zamorozka-gotovaia-kulinariia-15104-20/'=>[
    'nasha-kulinariia-69551-20',
    'polufabrikaty-zamorozhennye-15107-20'=>[
        'pel-meni-vareniki-khinkali-16051-20/',
        'kotlety-naggetsy-galety-15108-20/',
        'pervye-i-vtorye-bliuda-64078-20/',
        'blinchiki-muchnye-izdeliia-15111-20/',
        'testo-15110-20/',
        'pitstsa-15551-20/'
        ],
    'ovoshchi-iagody-griby-zamorozhennye-15106-20/'=>[
        'ovoshchi-32556-20/',
        'frukty-iagody-32559-20/',
        'griby-32557-20/'
        ]
    ]
];

$r_m_i = ['/spb/ryba-moreprodukty-i-ikra-16572-20/'=>[
    'ryba-okhlazhdennaia-i-zamorozhennaia-16583-20/',
    'rybnaia-gastronomiia-16584-20/'=>[
        'preservy-16590-20/',
        'krabovoe-miaso-i-palochki-16588-20/',
        'ryba-solenaia-i-kopchenaia-16586-20/',
        'ryba-vialenaia-sushenaia-sneki-rybnye-16594-20/'
        ],
    'moreprodukty-16579-20/',
    'ikra-16575-20/'
    ]
];
$rnm_s_p = ['/spb/rastitel-nye-masla-sousy-i-pripravy-16598-20/'=>[
    'maslo-rastitel-noe-16609-20/',
    'spetsii-pripravy-16611-20/',
    'tomatnye-pasty-ketchupy-16601-20/',
    'maionez-16602-20/',
    'sousy-zapravki-16610-20/',
    'vse-dlia-vypechki-desertov-16600-20/',
    'khren-gorchitsa-marinad-16613-20/',
    'uksus-limonnyi-sok-16612-20/',
    'aziatskaia-kukhnia-32558-20/'
    ]
];

                                                    