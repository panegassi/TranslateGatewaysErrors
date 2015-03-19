<?php 

/**
 * @author Leandro Panegassi < leandropanegassi89@gmail.com >
 */

class PagSeguroErrorsList
{
	
	private static $_errorList = array(
		'11010' => 'Endereço de e-mail inválido.',
		'11013'	=> 'DDD inválido.',
		'11014' => 'Telefone inválido.',
		'11164'	=> 'CPF inválido.',
		'11012' => 'Nome inválido.'
	);

	public final static function getErrorList($key) {
		return (!array_key_exists($key, self::$_errorList)) ? false : self::$_errorList[$key];
	} # function

} # class