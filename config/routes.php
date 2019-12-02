<?php

use ibuild\Router;
Router::add('^apartment/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Apartment', 'action' => 'view']);
Router::add('^floor/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Floor', 'action' => 'view']);
Router::add('^current/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Current', 'action' => 'view']);
Router::add('^project/?(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Project', 'action' => 'view']);

// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$',['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');