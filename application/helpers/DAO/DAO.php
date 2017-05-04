<?php
/**
 * Created by Codeanywhere.
 * User: Mohammad Yazdani
 * Date: 5/4/2017
 * Time: 11:38 AM
 */

// TODO : DOC!!!

interface DAO 
{
  // TODO : Should have get based on date created
	public function getByDateCreated(DateTime $date) : array;
  // TODO : Should have get based on date modified
	public function getByDateModified(DateTime $date) : array;
  // TODO : Get based on JSON
	public function getByJSON(string $json) : \Model;
}