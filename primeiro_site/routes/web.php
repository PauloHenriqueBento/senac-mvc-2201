<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/avisos', function () {
    return view('avisos', ['nome' => 'Paulo',
    'mostrar' => false,
    'avisos' => [   ['id' => 1, 'aviso' => 'Mussum Ipsum, cacilds vidis litro abertis'],
                    ['id' => 2, 'aviso' => 'Em pé sem cair, deitado sem dormir'],
                    ['id' => 3, 'aviso' => 'A ordemdos tratores não altera o pão duris'],

    ]
    ]);
});

Route::get('/home', function () {
    return view('exercicio03.nfts', ['nome' => 'Tendencias',
    'nfts' => [
        ['nome' => 'NFT1',
         'img' => 'https://s2.glbimg.com/6fLjMPYo50gB1llNwE11EVXdf8w=/620x430/e.glbimg.com/og/ed/f/original/2022/02/21/https___hypebeast.com_image_2021_10_bored-ape-yacht-club-nft-3-4-million-record-sothebys-metaverse-0.jpg',
         'descricao' => 'imagem random' ],

         ['nome' => 'NFT2',
         'img' => 'https://s2.glbimg.com/IisTvFkHnQ7gFf3i4QNFTschQQo=/696x390/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/a/G/vkccpjRM2yevrft9AJ7g/7.-cryptopunk-7804.jpg',
         'descricao' => 'imagem Aleatoria' ],

         ['nome' => 'NFT3',
         'img' => 'https://mma.prnewswire.com/media/1738735/Voiceverse_NFT.mp4?p=medium',
         'descricao' => 'imagem qualquer' ],

         ['nome' => 'NFT4',
         'img' => 'https://www.criptofacil.com/wp-content/uploads/2021/07/brave_YQE67kaLpq.jpg',
         'descricao' => 'imagem alguma coisa' ],
    ]
    ]);
});
