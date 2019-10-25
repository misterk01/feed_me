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
        $statement = $this->pdo->prepare(
            "INSERT INTO $this->table (`lastname`,`firstname`, `mail`, `phone`, `siret`, `register_date`) 
                        VALUES (:lastname, :firstname, :mail, :phone, :siret, :register_date)"
        );
        $statement->bindValue('lastname', $feeder['lastname'], \PDO::PARAM_STR);
        $statement->bindValue('firstname', $feeder['firstname'], \PDO::PARAM_STR);
        $statement->bindValue('mail', $feeder['mail'], \PDO::PARAM_STR);
        $statement->bindValue('phone', $feeder['phone'], \PDO::PARAM_INT);
        $statement->bindValue('siret', $feeder['siret'], \PDO::PARAM_INT);
        $statement->bindValue('number', $feeder['number'], \PDO::PARAM_STR);
        $statement->bindValue('street', $feeder['street'], \PDO::PARAM_STR);
        $statement->bindValue('code_postal', $feeder['code_postal'], \PDO::PARAM_INT);
        $statement->bindValue('city', $feeder['city'], \PDO::PARAM_STR);
        $statement->bindValue('country', $feeder['country'], \PDO::PARAM_STR);
        $statement->bindValue('register_date', $feeder['register_date'], \PDO::PARAM_STR);

        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }
}
