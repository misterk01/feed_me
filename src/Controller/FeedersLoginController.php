<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace App\Controller;

use App\Model\FeedersLoginManager;

/**
 * Class FeedersLoginController
 *
 */
class FeedersLoginController extends AbstractController
{


    /**
     * Display feeders listing
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $feedersLoginManager = new FeedersLoginManager();
        $feeders = $feedersLoginManager->selectAll();

        return $this->twig->render('FeedersLogin/index.html.twig', ['feeders' => $feeders]);
    }


    /**
     * Display feeders creation page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $feedersLoginManager = new FeedersLoginManager();
            $feeders = [
                'lastname' => $_POST['lastname'],
            ];
            $id = $feedersLoginManager->insert($feeders);
            header('Location:/FeedersLogin/show/' . $id);
        }

        return $this->twig->render('FeedersLogin/add.html.twig');
    }
}
