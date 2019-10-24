<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\AllergyManager;

class AllergyController extends AbstractController
{

    /**
     * Display item listing
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $allergyManager = new AllergyManager();
        $allergy = $allergyManager->selectAll();

        return $this->twig->render('Allergy/allergy.html.twig', ['allergies' => $allergy]);
    }
}
