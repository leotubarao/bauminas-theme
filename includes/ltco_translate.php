<?php

function ltco_current_lang( $lang = 'br' ) {
  if ( class_exists( 'WPGlobus' ) && $lang === WPGlobus::Config()->language )
    return 'hidden';

  return;
}

function ltco_translate( $default, $language = null ) {
  if ( is_array( $default ) ) list($default, $language) = $default;

  if ( empty( $language ) || !class_exists( 'WPGlobus' ) ) return $default;

  $langPlugin = WPGlobus::Config()->language;

  if ( empty( $language[$langPlugin] ) ) return $default;

  return $language[$langPlugin];
}

$GLOBALS['ltco_translate'] = [
  'company' => [
    'title' => [
      'Empresas do <strong>Grupo BAUMINAS</strong>',
      [
        'en' => '<strong>BAUMINAS Group</strong> Companies',
        'es' => 'Empresas del <strong>Grupo BAUMINAS</strong>'
      ]
    ],
    'aguas' => [
      'Águas',
      [
        'en' => 'Water'
      ]
    ],
    'agro' => 'Agro',
    'mineracao' => [
      'Mineração',
      [
        'en' => 'Mining',
        'es' => 'Minería'
      ]
    ],
    'log' => 'Log',
    'hidroazul' => 'Hidroazul',
  ],
  'cta-units' => [
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
    'aguas' => [
      'Águas',
      [
        'en' => 'Waters',
        'es' => 'Aguas',
      ]
    ],
    'agro' => 'Agro',
    'mineracao' => [
      'Mineração',
      [
        'en' => 'Mining',
        'es' => 'Minería'
      ]
    ],
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
  ]
];
