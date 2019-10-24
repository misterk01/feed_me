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
class FeedersLoginManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'feeder';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }


    /**
     * @param array $feeder
     * @return int
     */
    public function insert(array $feeder): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`lastname`) VALUES (:lastname)");
        $statement->bindValue('lastname', $feeder['lastname'], \PDO::PARAM_STR);

        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }
}
