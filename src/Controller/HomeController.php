<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     *fonction création de champ pour la barre de recherche
     *
     */
    public function input()
    {

        return "<input type='text' class='searchBar'  placeholder='Renseigne ton adresse'>";
    }


    /**
     *fonction création boutton pour submit
     *
     */
    public function submit()
    {

        return "<button type='button' class='btn btn-primary buttonBar'>" . 'Feed me !' . "</button>";
    }

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $searchBar = new HomeController();
        $inputBar = $searchBar->input();
        $buttonBar = $searchBar->submit();
        return $this->twig->render('Home/index.html.twig', ['inputBar' => $inputBar, 'buttonBar' => $buttonBar]);
    }
}
