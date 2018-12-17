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
    $routes->connect('/cadastro.php', ['prefix' => 'UNIFAETEC/Cadastro', 'controller' => 'Cadastro', 'action' => 'display']);
    $routes->connect('/aluno.php', ['prefix' => 'UNIFAETEC/Cadastro', 'controller' => 'Aluno', 'action' => 'display']);
    $routes->connect('/funcionario.php', ['prefix' => 'UNIFAETEC/Cadastro', 'controller' => 'Funcionario', 'action' => 'display']);
    $routes->connect('/professor.php', ['prefix' => 'UNIFAETEC/Cadastro', 'controller' => 'Professor', 'action' => 'display']);
    
    #Menu
    $routes->connect('/menu.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Menu', 'action' => 'display']);

    #Funcionalidades
    $routes->connect('/consultar_historico_atv.php', ['prefix' => 'UNIFAETEC', 'controller' => 'ConsultarHistoricoAtv', 
                    'action' => 'display']);
    $routes->connect('/trabalhos.php', ['prefix' => 'UNIFAETEC', 'controller' => 'CadastroTrabAcd', 
                    'action' => 'display', '_method' => 'GET']);
    $routes->connect('/gerar_doc.php', ['prefix' => 'UNIFAETEC', 'controller' => 'GerarDoc', 'action' => 'display']);
    $routes->connect('/evento:id.php', ['prefix' => 'UNIFAETEC', 'controller' => 'Eventos', 'action' => 'display'])
                    ->setPatterns(['id' => '[0-9]+']);
    $routes->connect('/cadastrar_equipe.php', ['prefix' => 'UNIFAETEC', 'controller' => 'CadastrarEquipe', 
                    'action' => 'display']);
    $routes->connect('/consultar_bibl_virt.php', ['prefix' => 'UNIFAETEC', 'controller' => 'ConsultarBiblVirt', 
                    'action' => 'display']);
    $routes->connect('/consultar_bibl_resp.php', ['prefix' => 'UNIFAETEC', 'controller' => 'ConsultarBiblResp', 
    'action' => 'display']);
    $routes->connect('/gerar_decl_comp.php', ['prefix' => 'UNIFAETEC', 'controller' => 'GerarDeclComp', 
                    'action' => 'display']);

    #Eventos
    $routes->connect('/cad_part_ev_ext.php', ['prefix' => 'UNIFAETEC/Eventos', 'controller' => 'CadPartEvExt', 
                    'action' => 'display']);
    $routes->connect('/emitir_cert.php', ['prefix' => 'UNIFAETEC/Eventos', 'controller' => 'EmitirCert', 
                    'action' => 'display']);
    $routes->connect('/conf_presenca.php', ['prefix' => 'UNIFAETEC/Eventos', 'controller' => 'ConfPresenca', 
                    'action' => 'display']);


    #Atividades
    $routes->connect('/inscricao_em_ativ_acad.php', ['prefix' => 'UNIFAETEC/Atividades', 'controller' => 'InscricaoEmAtivAcad', 
                    'action' => 'display']);
    $routes->connect('/controle_de_agenda.php', ['prefix' => 'UNIFAETEC/Atividades', 'controller' => 'ControleDeAgenda', 
                    'action' => 'display']);
    $routes->connect('/cadastrar_atv_acd.php', ['prefix' => 'UNIFAETEC/Atividades', 'controller' => 'CadastrarAtvAcd', 
                    'action' => 'display', '_method' => 'GET']);
    $routes->connect('/gerar_lista_de_pres.php', ['prefix' => 'UNIFAETEC/Atividades', 'controller' => 'GerarListaDePres', 
                    'action' => 'display']);
                    
    #Estatísticas
    $routes->connect('/estatisticas.php', ['prefix' => 'UNIFAETEC/Estatisticas', 'controller' => 'Estatisticas', 
                    'action' => 'display']);
    $routes->connect('/estatisticas_nsa.php', ['prefix' => 'UNIFAETEC/Estatisticas', 'controller' => 'EstatisticasNsa', 
                    'action' => 'display']);
    $routes->connect('/estatisticas_tac.php', ['prefix' => 'UNIFAETEC/Estatisticas', 'controller' => 'EstatisticasTac', 
                    'action' => 'display']);
    $routes->connect('/estatisticas_lre.php', ['prefix' => 'UNIFAETEC/Estatisticas', 'controller' => 'EstatisticasLre', 
                    'action' => 'display']);

    #Rotas REST
    $routes->resources('CadastroTrabAcd', ['prefix' => 'UNIFAETEC', 'path' => 'trabalhos.php']);
    $routes->resources('CadastrarAtvAcd', ['prefix' => 'UNIFAETEC/Atividades', 'path' => 'cadastrar_atv_acd.php']);

    #Regras genéricas
    $routes->connect('/*', ['prefix' => 'UNIFAETEC', 'controller' => 'Unifaetec', 'action' => 'display']);
    $routes->fallbacks(DashedRoute::class);
});

