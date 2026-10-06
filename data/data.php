<?php

$productos = [
     [
        'id' => 1,
        'nombre' => 'Protector Solar FPS 50',
        'descripcion' => 'Protector solar facial y corporal.',
        'marca' => 'Dermaglos',
        'precio' => 18990,
        'ranking' => 5,
        'categoria' => 'Proteccion solar',
        'subcategoria' => 'Protectores solares',
        'modelo' => 'FPS50-250',
        'imagen' => 'protector.jpg',
        'destacado' => true,
        'activo' => true
    ],
    [
        'id' => 2,
        'nombre' => 'Agua Micelar',
        'descripcion' => 'Agua micelar para limpieza facial.',
        'marca' => 'Garnier',
        'precio' => 9500,
        'ranking' => 4,
        'categoria' => 'Dermocosmetica',
        'subcategoria' => 'Cuidado facial',
        'modelo' => 'MIC400',
        'imagen' => 'micelar.jpg',
        'destacado' => true,
        'activo' => true
    ],
    [
        'id' => 3,
        'nombre' => 'Crema Corporal',
        'descripcion' => 'Crema hidratante corporal.',
        'marca' => 'Nivea',
        'precio' => 8200,
        'ranking' => 4,
        'categoria' => 'Cuidado personal',
        'subcategoria' => 'Cuidado corporal',
        'modelo' => 'NIV400',
        'imagen' => 'crema.jpg',
        'destacado' => true,
        'activo' => true
    ],
    [
        'id' => 4,
        'nombre' => 'Shampoo Reparador',
        'descripcion' => 'Shampoo para cabello seco.',
        'marca' => 'Pantene',
        'precio' => 7200,
        'ranking' => 4,
        'categoria' => 'Cuidado personal',
        'subcategoria' => 'Cabello',
        'modelo' => 'PAN350',
        'imagen' => 'shampoo.jpg',
        'destacado' => true,
        'activo' => true
    ],
    [
        'id' => 5,
        'nombre' => 'Desodorante',
        'descripcion' => 'Desodorante aerosol.',
        'marca' => 'Rexona',
        'precio' => 4800,
        'ranking' => 3,
        'categoria' => 'Higiene',
        'subcategoria' => 'Desodorantes',
        'modelo' => 'REX150',
        'imagen' => 'desodorante.jpg',
        'destacado' => true,
        'activo' => true
    ],
    [
        'id' => 6,
        'nombre' => 'Crema Facial',
        'descripcion' => 'Crema facial hidratante.',
        'marca' => 'L’Oreal',
        'precio' => 11200,
        'ranking' => 5,
        'categoria' => 'Dermocosmetica',
        'subcategoria' => 'Cuidado facial',
        'modelo' => 'LOF50',
        'imagen' => 'crema-facial.jpg',
        'destacado' => true,
        'activo' => true
    ]
];

$categorias = [
    'Dermocosmetica',
    'Proteccion solar',
    'Cuidado personal',
    'Higiene'
];

$marcas = [
    'Dermaglos',
    'Garnier',
    'Nivea',
    'Pantene',
    'Rexona',
    'L’Oreal'
];

$comentarios = [
    [
        'producto_id' => 1,
        'email' => 'cliente1@email.com',
        'comentario' => 'Muy buen producto.',
        'ranking' => 5,
        'fecha' => '01/10/2026',
        'activo' => true
    ],
    [
        'producto_id' => 1,
        'email' => 'cliente2@email.com',
        'comentario' => 'Cumple con lo esperado.',
        'ranking' => 4,
        'fecha' => '02/10/2026',
        'activo' => true
    ]
];