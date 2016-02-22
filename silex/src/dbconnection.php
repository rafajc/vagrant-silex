<?php

use Symfony\Component\HttpFoundation\Request;


class cDbConnection
{
    static function insertPost(Request $request, \Silex\Application $app)
    {
        /**
         * @var int $success
         * $success == 0 --> no action
         * $success == 1 --> Success
         * $success == 2 --> Error in Input
         * $success == 3 --> nicht Eingeloggt
         */

        $success = 0;
        if ($request->isMethod('POST')) {
            $title = ($request->get('title'));
            $text = ($request->get('text'));
            // strings not empty
            $success = $title && $text ? 1 : 2;
            $user = $app['session']->get('user');
            if(!isset($user['username']))
                $success = 3;
            if ($success == 1) {
                $app['db']->insert(
                    'blog_post',
                    array(
                        'author' => $user['username'],
                        'title' => $title,
                        'text' => $text,
                        'created_at' => date("Y-m-d H:i:s", time()),
                    )
                );
            }
        }
        return $success;
    }
}

;

