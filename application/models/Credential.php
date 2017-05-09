<?php

/**
 */

// TODO : Find non-casting solution (setJSON param should enforce string)

use Doctrine\ORM\Tools\SchemaTool as SchemaTool;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Tools\ToolsException as ToolsException;

/** @ORM\MappedSuperclass */
class Credential extends Model implements JsonSerializable
{
    /*
     * For every model class field JSON is to
     * store it's appropriate data in form of
     * stringify JSON object.
     */
	
		
}