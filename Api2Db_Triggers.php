<?php


class Api2Db_Triggers
{
	
	function __construct( $Api2Db )
	{
		$this->Api2Db 	= $Api2Db;
		$this->storage 	= Api2Db_Storage::Instance();
		$this->db 		= Api2Db_Db::Instance();
	}
	

}