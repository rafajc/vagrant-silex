<?php
use Symfony\Component\HttpFoundation\Request;

/**
 * @var $app Silex\Application
 * @var $dbConnection Doctrine\DBAL\Connection
 * @var $template \Symfony\Component\Templating\DelegatingEngine
 */
$dbConnection = $app['db'];
$template = $app['templating'];

$app->get('/', function () use ($app) {
    return $app['templating']->render(
        'home.html.php'
    );
});
$app->get('/home', function () use ($app) {
    return $app['templating']->render(
        'home.html.php'
    );
});

$app->get('/about', function () use ($app) {
    return $app['templating']->render(
        'about.html.php'
    );
});

$app->match('/contact', function (Request $request) use ($app) {

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
        array('success' => $success)
    );
});

$app->match('/blog/{count}', function (Request $request, $count) use ($app, $dbConnection) {
    /**
     * @var int $success
     * $success == 0 --> no action
     * $success == 1 --> Success
     * $success == 2 --> Error in Input
     */

    $success = 0;
    if ($request->isMethod('POST')) {
        $title = ($request->get('title'));
        $text = ($request->get('text'));
        // strings not empty
        $success = $title && $text ? 1 : 2;

        if ($success) {
            $dbConnection->insert(
                'blog_post',
                array(
                    'author' => "unknown",
                    'title' => $title,
                    'text' => $text,
                    'created_at' => date("Y-m-d H:i:s", time()),
                )
            );
        }
    }
    $sql = "SELECT * FROM blog_post ORDER by id DESC" . ($count > 0 ? " LIMIT " . $count : "");
    $posts = $app['db']->fetchAll($sql);

    return $app['templating']->render(
        'blog.html.php',
        array(
            'all' => true,
            'posts' => $posts,
            'error' => false,
            'success' => $success,
            'count' => $count,
        )
    );

});

$app->match('/blogone/{id}', function (Request $request, $id) use ($app, $dbConnection) {
    /**
     * @var int $success
     * $success == 0 --> no action
     * $success == 1 --> Success
     * $success == 2 --> Error in Input
     */

    $success = 0;
    if ($request->isMethod('POST')) {
        $title = ($request->get('title'));
        $text = ($request->get('text'));
        // strings not empty
        $success = $title && $text ? 1 : 2;

        if ($success) {
            $dbConnection->insert(
                'blog_post',
                array(
                    'author' => "unknown",
                    'title' => $title,
                    'text' => $text,
                    'created_at' => date("Y-m-d H:i:s", time()),
                )
            );
        }
    }
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
        )
    );
});

$app->match('/newpost', function (Request $request) use ($app, $dbConnection) {
    /**
     * @var int $success
     * $success == 0 --> no action
     * $success == 1 --> Success
     * $success == 2 --> Error in Input
     */

    $success = 0;
    if ($request->isMethod('POST')) {
        $title = ($request->get('title'));
        $text = ($request->get('text'));
        // strings not empty
        $success = $title && $text ? 1 : 2;

        if ($success) {
            $dbConnection->insert(
                'blog_post',
                array(
                    'author' => "unknown",
                    'title' => $title,
                    'text' => $text,
                    'created_at' => date("Y-m-d H:i:s", time()),
                )
            );
        }
    }

    return $app['templating']->render(
        'newpost.html.php',
        array('success' => $success)
    );
});

$app->get('/login', function () use ($app) {


    return $app['templating']->render(
        'login.html.php'
    );
});

