<?php

/**
 * @author Leandro Panegassi < leandropanegassi89@gmail.com >
 */

class CieloTranslateErrors extends TranslateGatewaysErrorsAbstract
{

	public function __construct(CielServiceException $exception) {
		$this->_exception = $exception;
	} # function


	/**
	 * @todo Implementar method com paypal
	 */
	public function getErrorTranslate() {
	// 	$error 	= $this->_exception->getErrors();
	// 	if (is_array($error)) {
	// 		foreach ($error as $key => $value)
	// 			$this->_collectionErrors[$key] = CieloErrorsList::getErrorList((int) $value->getCode());
	// 	} else {
	// 		$this->_collectionErrors = CieloErrorsList::getErrorList((int) $error->getCode());
	// 	} # if
	// 	return $this->_collectionErrors;
	} # function


} # class