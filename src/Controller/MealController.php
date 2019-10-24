<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace App\Controller;

use App\Model\MealManager;

/**
 * Class ItemController
 *
 */
class MealController extends AbstractController
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
        $mealManager = new MealManager();
        $meals = $mealManager->selectAll();

        return $this->twig->render('Meal/index.html.twig', ['meals' => $meals]);
    }


    /**
     * Display item informations specified by $id
     *
     * @param int $id
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function show(int $id)
    {
        $mealManager = new MealManager();
        $meal = $mealManager->selectOneById($id);

        return $this->twig->render('Meal/show.html.twig', ['meal' => $meal]);
    }


    /**
     * Display item edition page specified by $id
     *
     * @param int $id
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */

//   TODO: modifier to edit for Meal Table

//    public function edit(int $id): string
//    {
//        $mealManager = new MealManager();
//        $meal = $mealManager->selectOneById($id);
//
//        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//            $item['title'] = $_POST['title'];
//            $itemManager->update($item);
//        }
//
//        return $this->twig->render('Item/edit.html.twig', ['item' => $item]);
//    }


    /**
     * Display item creation page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */


    //   TODO : modifier to add for Meal Table
//    public function add()
//    {
//
//        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//            $$mealManager = new MealManager();
//            $item = [
//                'title' => $_POST['title'],
//            ];
//            $id = $itemManager->insert($item);
//            header('Location:/item/show/' . $id);
//        }
//
//        return $this->twig->render('Item/add.html.twig');
//    }


    /**
     * Handle item deletion
     *
     * @param int $id
     */
    //TODO : delete un meal
//    public function delete(int $id)
//    {
//        $mealManager = new MealManager();
//        $mealManager->delete($id);
//        header('Location:/meal/index');
//    }
}
