<?php

function ltco_current_lang( $lang = 'br' ) {
  if ( class_exists( 'WPGlobus' ) && $lang === WPGlobus::Config()->language )
    return 'hidden';

  return;
}

function ltco_translate( $default ) {
  $language = false;
  if ( is_array( $default ) ) list($default, $language) = $default;

  if ( empty( $language ) || !class_exists( 'WPGlobus' ) ) return $default;

  $langPlugin = WPGlobus::Config()->language;

  if ( empty( $language[$langPlugin] ) ) return $default;

  return $language[$langPlugin];
}

function ltco_translate_acf( $field ) {
  $id = false;
  if ( is_array( $field ) ) list($field, $id) = $field;

  $id = ( $id ) ?: 'options';

  if ( class_exists( 'WPGlobus' ) ) {
    $langPlugin = WPGlobus::Config()->language;

    $get_field = get_field( $field.'_'.$langPlugin, $id );

    if ( !empty( $get_field ) ) return $get_field;
  }

  return get_field( $field, $id );
}

/* function ltco_translate_acf( $params, $type = false ) {
  if ( is_array( $params ) ) list($value, $id) = $params;

  $fieldValue = ( is_array( $params ) ) ? $value : $params;

  $array = [];
  $typesSubArray = array( 'sub', 'subImage', 'subUrl' );
  $typesArray = array( 'image', 'url', 'subImage', 'subUrl' );

  if ( class_exists( 'WPGlobus' ) ) {
    $langPlugin = WPGlobus::Config()->language;

    if ($langPlugin !== 'br') $fieldValue = $fieldValue.'_'.$langPlugin;
  }

  $get_field = ( is_array( $params ) ) ? [$value, $id] : $value;

  array_push($array, $fieldValue, $id);

  $field = ( $types && in_array($type, $typesSubArray) ) ? get_sub_field( ...$array ) : get_field( ...$array );

  if ( !empty( $field ) ) return

  if ( !empty( $field ) ) {
    return ( in_array($type, $typesArray) ) ? $field['url'] : $field;
  }
} */

function ltco_language ( $value ) {
  if ( class_exists( 'WPGlobus' ) ) {
    $langPlugin = WPGlobus::Config()->language;

    if ($langPlugin !== 'br') return $value.'_'.$langPlugin;
  }

  return $value;
}

$GLOBALS['ltco_translate'] = [
  'company' => [
    'title' => [
      'Empresas do <strong>Grupo BAUMINAS</strong>',
      [
        'en' => '<strong>BAUMINAS Group</strong> Companies',
        'es' => 'Empresas del <strong>Grupo BAUMINAS</strong>'
      ]
    ]
  ],
  'cta-units' => [
    'title' => [
      'Unidades',
      [
        'en' => 'Manufacturing Units',
        'es' => 'Unidades de Fabricación'
      ]
    ],
    'description' => [
      'Conheça todas as nossas unidades espalhadas por todo o Brasil.',
      [
        'en' => 'Discover all of our units spread across Brazil.',
        'es' => 'Descubra todas nuestras unidades repartidas por Brasil.'
      ]
    ],
    'button' => [
      'Clique aqui',
      [
        'en' => 'Click here',
        'es' => 'Haga clic aquí'
      ]
    ],
  ],
  'error404' => [
    'title' => [
      'Esta página não foi encontrada.',
      [
        'en' => 'This page was not found.',
        'es' => 'Esta página no fue encontrada.',
      ]
    ],
    'description' => [
      'Talvez você queira ir para a nossa página inicial?',
      [
        'en' => 'Maybe you want to go to our home page?',
        'es' => '¿Quizás quieras ir a nuestra página de inicio?'
      ]
    ],
    'button' => [
      'voltar para a home',
      [
        'en' => 'back to home',
        'es' => 'de vuelta a home'
      ]
    ],
  ],
  'cat_units' => [
    'aguas' => 'Águas',
    'agro' => 'Agro',
    'mineracao' => 'Mineração',
    'log' => 'Log',
    'hidroazul' => 'Hidroazul',
    'administrativos' => [
      'Administrativos',
      [
        'en' => 'Administrative',
        'es' => 'Administrativo'
      ]
    ],
  ],
  'footer' => [
    'title-nav-1' => [
      'Grupo BAUMINAS',
      [
        'en' => 'BAUMINAS Group'
      ]
    ],
    'title-nav-2' => [
      'Empresas do Grupo BAUMINAS',
      [
        'en' => 'BAUMINAS Group Companies',
        'es' => 'Empresas del Grupo BAUMINAS'
      ]
    ],
    'title-nav-3' => [
      'Rede Sociais',
      [
        'en' => 'Social networks',
        'es' => 'Red social'
      ]
    ],
    'copyright' => [
      'Agência <strong>SINAIS</strong>',
      [
        'en' => '<strong>SINAIS</strong> Agency',
        'es' => 'Agencia <strong>SINAIS</strong>',
      ]
    ],
  ],
  'home' => [
    'unidades' => [
      'title' => [
        'Unidades',
        [
          'en' => 'Units'
        ]
      ],
      'description' => [
        'Conheça todas as nossas unidades espalhadas por todo o Brasil.',
        [
          'en' => 'Discover all of our units spread across Brazil.',
          'es' => 'Descubra todas nuestras unidades repartidas por Brasil.'
        ]
      ],
      'button' => [
        'Saiba mais',
        [
          'en' => 'Know more',
          'es' => 'Sepa mas'
        ]
      ],
    ],
    'video' => [
      'title' => [
        'Vídeo Institucional',
        [
          'en' => 'Institutional video',
          'es' => 'Video institucional'
        ]
      ],
      'description' => [
        'Líder nacional em coagulantes para o tratamento de água e efluentes.',
        [
          'en' => 'National leader in coagulants for water and wastewater treatment.',
          'es' => 'Líder nacional en coagulantes para tratamiento de aguas y aguas residuales.'
        ]
      ],
      'button' => [
        'Assista nosso vídeo',
        [
          'en' => 'Watch our video',
          'es' => 'Mira nuestro video'
        ]
      ],
    ],
    'grupo' => [
      'title' => [
        'Grupo BAUMINAS',
        [
          'en' => 'BAUMINAS Group'
        ]
      ],
      'description' => [
        'O grupo em números',
        [
          'en' => 'The group in numbers',
          'es' => 'El grupo en números'
        ]
      ],
      'button' => [
        'Conheça',
        [
          'en' => 'See more',
          'es' => 'Ver más'
        ]
      ],
    ],
    'cv' => [
      'title' => [
        'Carreira',
        [
          'en' => 'Career',
          'es' => 'Carrera'
        ]
      ],
      'description' => [
        'Venha fazer parte da equipe',
        [
          'en' => 'Come be part of the team',
          'es' => 'Ven a ser parte del equipo'
        ]
      ],
      'button' => [
        'Envie seu currículo',
        [
          'en' => 'Send your resume',
          'es' => 'Envíe su currículum'
        ]
      ],
    ],
    'linkedin' => [
      'title' => [
        'Linkedin'
      ],
      'description' => [
        'Acompanhe nossas novidades',
        [
          'en' => 'Follow our news',
          'es' => 'Siga nuestras novedades'
        ]
      ],
      'button' => [
        'Conheça',
        [
          'en' => 'See more',
          'es' => 'Ver más'
        ]
      ],
    ],
  ],
  'our-numbers' => [
    [
      'title' => [
        '60'
      ],
      'description' => [
        'anos de história, experiência e conhecimento técnico',
        [
          'en' => 'years of history, experience and technical knowledge',
          'es' => 'años de Historia, experiencia y conocimientos técnicos'
        ]
      ]
    ],
    [
      'title' => [
        '+1000'
      ],
      'description' => [
        'Colaboradores Diretos',
        [
          'en' => 'Direct Employees',
          'es' => 'Colaboradores directos'
        ]
      ]
    ],
    [
      'title' => [
        '18'
      ],
      'description' => [
        'Unidades Fabris estrategicamente localizadas',
        [
          'en' => 'Manufacturing Units strategically located',
          'es' => 'Plantas de fabricación situadas estratégicamente'
        ]
      ]
    ],
    [
      'title' => [
        '4'
      ],
      'description' => [
        'Unidades de mineração',
        [
          'en' => 'Mining units',
          'es' => 'Plantas mineras'
        ]
      ]
    ],
    [
      'title' => [
        '3'
      ],
      'description' => [
        'Escritórios administrativos',
        [
          'en' => 'Administrative offices',
          'es' => 'Oficinas administrativas'
        ]
      ]
    ],
    [
      'title' => [
        '+3500'
      ],
      'description' => [
        'Municípios atendidos',
        [
          'en' => 'Municipalities served',
          'es' => 'Municipios atendidos'
        ]
      ]
    ],
    [
      'title' => [
        '+2000'
      ],
      'description' => [
        'Municípios atendidos',
        [
          'en' => 'Active Customers',
          'es' => 'Clientes activos'
        ]
      ]
    ],
    [
      'title' => [
        'TOP 15'
      ],
      'description' => [
        'Maiores empresas de saneamento do pais são atendidas pelo grupo',
        [
          'en' => 'The TOP 15 Largest sanitation companies in the country are served by the group',
          'es' => 'El grupo atiende a las 15 mayores empresas de saneamiento del país'
        ]
      ]
    ],
    [
      'title' => [
        '+130'
      ],
      'description' => [
        'Milhões de pessoas beneficiadas com água tratada com produtos fabricados pelo grupo',
        [
          'en' => 'Million people benefited from water treated with products manufactured by the group',
          'es' => 'Millones de personas beneficiadas con el agua tratada con productos fabricados por el grupo'
        ]
      ]
    ],
  ]
];
