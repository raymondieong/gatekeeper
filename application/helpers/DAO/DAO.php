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
	// TODO : To save/update object
	public function save($object);
  // TODO : Should have get based on date created
	public function getByDateCreated($date : DateTime) : array;
  // TODO : Should have get based on date modified
	public function getByDateModified($date : DateTime) : array;
  // TODO : Get based on JSON
	public function getByJSON($json : string) : \Model;
}