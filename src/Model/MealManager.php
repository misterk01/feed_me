<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace App\Model;

/**
 *
 */
class MealManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'meal';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }


    /**
     * @param array $meal
     * @return int
     */
//TODO insertion dans la table meal

    public function insert(array $meal): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`title`) VALUES (:title)");
        $statement->bindValue('title', $meal['title'], \PDO::PARAM_STR);

        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }


    /**
     * @param int $id
     */

    //TODO delete dans la table meal
//    public function delete(int $id): void
//    {
//        // prepared request
//        $statement = $this->pdo->prepare("DELETE FROM $this->table WHERE id=:id");
//        $statement->bindValue('id', $id, \PDO::PARAM_INT);
//        $statement->execute();
//    }


    /**
     * @param array $meal
     * @return bool
     */
    //TODO update dans la table meal
//    public function update(array $meal):bool
//    {
//
//        // prepared request
//        $statement = $this->pdo->prepare("UPDATE $this->table SET `title` = :title WHERE id=:id");
//        $statement->bindValue('id', $meal['id'], \PDO::PARAM_INT);
//        $statement->bindValue('title', $meal['title'], \PDO::PARAM_STR);
//
//        return $statement->execute();
//    }
}

