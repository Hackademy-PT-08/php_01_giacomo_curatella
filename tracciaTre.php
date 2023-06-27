<?php
// Dati i seguenti array:

$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
      'oscura',
      'era',
      89,
      [
        'mezzo',
        [
          'cammin',
          'Nel',
          [
            'selva',
            'la',
            [
              'via',
              'una',
              true,
            ]
          ],
        ]
      ],
      'ritrovai',
      'per'
    ],
    'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
      'Virgilio',
      'smarrita',
      'ché'
    ]
  ];

//   creo la variabile
$my_word = "smarrita";
$results = "Nel " . $words1[6][3][0] . " del " . $words1[6][3][1][0] . " di nostra " . $words1[2] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[6][3][1][2][2][1] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . ", ché " . $words1[6][3][1][2][1] . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $my_word;
// stampiamo la stringa in console
echo $results;
?>