<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/

$router->get('/', 'Welcome::index');
$router->post('/save', 'ReservationController::save');
$router->get('/reservation', 'ReservationController::getdata');
$router->match('/registerauth', 'UserController::registerAuth', 'GET|POST');

/*  For Userside */
$router->get('/register', 'UserController::register');
$router->post('/loginAuth', 'UserController::userLogin');
$router->get('/login', 'UserController::loginview');
$router->get('event', 'UserController::event');
$router->get('home', 'UserController::home');
$router->get('venue', 'UserController::venue');
$router->get('about', 'UserController::about');
$router->get('logout', 'UserController::logout');

/*  For Adminside */
$router->post('/adminregister', 'AdminController::register');
$router->post('/adminlogin', 'AdminController::login');
$router->get('/adminuserlogin', 'AdminController::loginview');
$router->get('/adminhome', 'AdminController::home');
$router->get('/adminvenue_book', 'AdminController::venue');
$router->get('/adminevent', 'AdminController::event');
$router->get('/adminvenues', 'AdminController::venues');
$router->get('/adminaudience_report', 'AdminController::audience_report');
$router->get('/adminvenue_report', 'AdminController::venue_report');
$router->get('/adminusers', 'AdminController::users');
$router->get('/adminsite_settings', 'AdminController::site_set');