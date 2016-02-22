<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Templating\Helper\SlotsHelper;

include "dbconnection.php";

/**
 * @var $app Silex\Application
 * @var $dbConnection \Doctrine\DBAL\Connection
 * @var $template \Symfony\Component\Templating\DelegatingEngine
 * @var $session \Silex\Provider\Session
 * Qvar $user
 */
$dbConnection = $app['db'];
$template = $app['templating'];
$session = $app['session'];
$user = $session->get('user');

$app->get('/', function () use ($app, $user) {
    return $app['templating']->render(
        'home.html.php',
        array('login' => $user['username'] )
    );
});
$app->get('/home', function () use ($app, $user) {
    return $app['templating']->render(
        'home.html.php',
        array('login' => $user['username'] )
    );
});

$app->get('/about', function () use ($app, $user) {
    return $app['templating']->render(
        'about.html.php',
        array('login' => $user['username'])
    );
});

$app->match('/contact', function (Request $request) use ($app, $user) {

    $success = 0;
    if ($request->isMethod('POST')) {
        $inputName = ($request->get('InputName'));
        $inputEmail = ($request->get('InputEmail'));
        $inputMessage = ($request->get('InputMessage'));
        $inputReal = ($request->get('InputReal'));
        // strings not empty
        $success = $inputName && $inputEmail && $inputMessage && $inputReal == 7 ? 1 : 2;

        if ($success) {
            //HIER müsste eine Email versand werden

        }
    }

    return $app['templating']->render(
        'contact.html.php',
        array('success' => $success,
            'login' => $user['username'])
    );
});

$app->match('/blog/{count}', function (Request $request, $count) use ($app, $dbConnection, $user) {

    $success = cdbconnection::insertpost($request, $app);

    $sql = "select * from blog_post order by id desc" . ($count > 0 ? " limit " . $count : "");
    $posts = $app['db']->fetchall($sql);

    return $app['templating']->render(
        'blog.html.php',
        array(
            'all' => true,
            'posts' => $posts,
            'error' => false,
            'success' => $success,
            'count' => $count,
            'login' => $user['username'],
        )
    );

})->value("count", 0);

$app->match('/blogone/{id}', function (Request $request, $id) use ($app, $dbConnection, $user) {
    $success = cdbconnection::insertpost($request, $app);


    $query = "SELECT * FROM blog_post WHERE id = ?";
    $posts = $dbConnection->fetchAll($query, array((int)$id));

    return $app['templating']->render(
        'blog.html.php',
        array(
            'all' => false,
            'posts' => $posts,
            'error' => count($posts) == 0,
            'success' => $success,
            'count' => $id,
            'login' => $user['username'],

        )
    );
});

$app->match('/newpost', function (Request $request) use ($app, $dbConnection, $user) {

    return $app['templating']->render(
        'newpost.html.php',
        array(
            'success' => cDbConnection::insertPost($request, $app),
            'login' => $user['username'],
        )
    );
});

$app->post('/login', function (Request $request) use ($app, $user) {
    $user = $request->get('user');
    $password = $request->get('password');
    if ($user && $password) {
        $app['session']->set('user', array('username' => $user));
        $app['session']->set('password', array('password' => $password));
    }
    return $app->redirect('/home');
});

$app->post('/logout', function (Request $request) use ($app, $user) {
    $app['session']->set('user', array('username' => null));
    $app['session']->set('password', array('password' => null));

    return $app->redirect('/home');
});
