<?php
/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/15/2017
 * Time: 4:38 PM
 */

namespace DAO;


use DateTime;
use models\Auth;

class AuthDAOImpl extends \DAOImpl implements AuthDAO
{
    public function save(Auth $auth)
    {
        $this->em->persist($auth);

        $this->em->flush();

        $auth->updateJSON();

        $this->em->persist($auth);

        $this->em->flush();
    }

    public function get($id)
    {

    }

    public function delete(Auth $auth)
    {
        // TODO: Implement delete() method.
    }

    public function getByDateCreated(DateTime $date)
    {
        // TODO: Implement getByDateCreated() method.
    }

    public function getByDateModified(DateTime $date)
    {
        // TODO: Implement getByDateModified() method.
    }

    public function getByJSON(string $json)
    {
        // TODO: Implement getByJSON() method.
    }

}