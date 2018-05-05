<?php

namespace Api2Db;

class Converts
{

	final public function __construct( $functions )
	{
		$this->storage 		= Storage::Instance();
		$this->db 			= Db::Instance();
		$this->functions 	= $functions; // TODO сделать проверку на класс родитель
	}

	public function test_convert( $field, $row ){

		$field['val'] = $field['val'] . 'test-convert';



		return $field;
	}



	public function to_number( $field, $row ){

		$field['val'] = number_format( $field['val'], 0, ".", " " );

		return $field;
	}

}