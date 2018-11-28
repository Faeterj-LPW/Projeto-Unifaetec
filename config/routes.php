<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    #Index
    $routes->connect('/', ['prefix' => 'UNIFAETEC', 'controller' => 'Index', 'action' => 'display']);

    #Páginas de cadastro
    $routes->connect('/cadastro.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Cadastro', 'action' => 'display']);
    $routes->connect('/aluno.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Aluno', 'action' => 'display']);
    $routes->connect('/funcionario.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Funcionario', 'action' => 'display']);
    $routes->connect('/professor.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Professor', 'action' => 'display']);
    
    #Menu
    $routes->connect('/menu.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Menu', 'action' => 'display']);

    #Funcionalidades
    $routes->connect('/consultar_historico_atv.php', ['prefix' => 'UNIFAETEC', 'controller' => 'ConsultarHistoricoAtv', 
                    'action' => 'display']);
    $routes->connect('/controle_de_agenda.php', ['prefix' => 'UNIFAETEC', 'controller' => 'ControleDeAgenda', 
                    'action' => 'display']);
    $routes->connect('/trabalhos.php', ['prefix' => 'UNIFAETEC', 'controller' => 'CadastroTrabAcd', 
                    'action' => 'display']);
    $routes->connect('/gerar_doc.php', ['prefix' => 'UNIFAETEC', 'controller' => 'GerarDoc', 'action' => 'display']);
    $routes->connect('/evento:id.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Eventos', 'action' => 'display'])
                    ->setPatterns(['id' => '[0-9]+']);
                    
    #Estatísticas
    $routes->connect('/estatisticas.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Estatisticas', 
                    'action' => 'display']);
    $routes->connect('/estatisticas_nsa.php', ['prefix' => 'UNIFAETEC', 'controller' => 'EstatisticasNsa', 
                    'action' => 'display']);
    $routes->connect('/estatisticas_tac.php', ['prefix' => 'UNIFAETEC', 'controller' => 'EstatisticasTac', 
                    'action' => 'display']);
    $routes->connect('/estatisticas_lre.php', ['prefix' => 'UNIFAETEC', 'controller' => 'EstatisticasLre', 
                    'action' => 'display']);

    #Regras genéricas
    $routes->connect('/*', ['prefix' => 'UNIFAETEC', 'controller' => 'Unifaetec', 'action' => 'display']);
    $routes->fallbacks(DashedRoute::class);
});

