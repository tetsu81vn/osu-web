<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'availability' => [
        'disabled' => 'Este beatmap não está disponível para download.',
        'parts-removed' => 'Partes deste beatmap foram removidas a pedido do criador ou de um detentor de direitos de terceiros.',
        'more-info' => 'Clique aqui para mais informações.',
    ],
    'show' => [
        'discussion' => 'Discussão',

        'details' => [
            'made-by' => 'criado por ',
            'submitted' => 'enviado em ',
            'updated' => 'última atualização em ',
            'ranked' => 'ranqueado em ',
            'approved' => 'aprovado em ',
            'qualified' => 'qualificado em ',
            'loved' => 'amado em ',
            'logged-out' => 'Você precisa iniciar a sessão antes de baixar beatmaps!',
            'download' => [
                '_' => 'baixar',
                'video' => 'com vídeo',
                'no-video' => 'sem vídeo',
                'direct' => 'osu!direct',
            ],
            'favourite' => 'Adicionar aos favoritos',
            'unfavourite' => 'Remover dos favoritos',
        ],
        'stats' => [
            'cs' => 'Tamanho do círculo',
            'cs-mania' => 'Número de teclas',
            'drain' => 'Dreno de HP',
            'accuracy' => 'Precisão',
            'ar' => 'Taxa de aproximação',
            'stars' => 'Estrelas de dificuldade',
            'total_length' => 'Comprimento',
            'bpm' => 'BPM',
            'count_circles' => 'Quantidade de círculos',
            'count_sliders' => 'Quantidade de sliders',
            'user-rating' => 'Avaliação de usuários',
            'rating-spread' => 'Gráfico de avaliações',
        ],
        'info' => [
            'success-rate' => 'Taxa de sucesso',
            'points-of-failure' => 'Pontos de falha',

            'description' => 'Descrição',

            'source' => 'Fonte',
            'tags' => 'Marcadores',
        ],
        'scoreboard' => [
            'achieved' => 'alcançado há :when',
            'country' => 'Ranking de país',
            'friend' => 'Ranking de amigos',
            'global' => 'Ranking global',
            'supporter-link' => 'Clique <a href=":link">aqui</a> para ver todas as novas funções às quais você ganha acesso!',
            'supporter-only' => 'Você precisa de uma supporter tag para acessar rankings de amigos e de país!',
            'title' => 'Placar',

            'list' => [
                'accuracy' => 'Precisão',
                'player-header' => 'Jogador',
                'rank-header' => 'Rank',
                'score' => 'Pontuação',
            ],
            'no_scores' => [
                'country' => 'Ninguém do seu país fez uma pontuação neste mapa ainda!',
                'friend' => 'Nenhum dos seus amigos fez uma pontuação neste mapa ainda!',
                'global' => 'Sem pontuações ainda. Não quer tentar marcar algumas?',
                'loading' => 'Carregando pontuações...',
            ],
            'score' => [
                'first' => 'Na liderança',
                'own' => 'Seu melhor',
            ],
            'stats' => [
                'accuracy' => 'Precisão',
                'score' => 'Pontuação',
            ],
        ],
    ],
];
