<?php

/**
 * @author Leandro Panegassi < leandropanegassi89@gmail.com >
 */

class PayPalTranslateErrors extends TranslateGatewaysErrorsAbstract
{

	public function __construct(PayPalServiceException $exception) {
		$this->_exception = $exception;
	} # function


	/**
	 * @todo Implementar method com paypal
	 */
	public function getErrorTranslate() {
		// $error 	= $this->_exception->getErrors();
		// if (is_array($error)) {
		// 	foreach ($error as $key => $value)
		// 		$this->_collectionErrors[$key] = PayPalErrorsList::getErrorList((int) $value->getCode());
		// } else {
		// 	$this->_collectionErrors = PayPalErrorsList::getErrorList((int) $error->getCode());
		// } # if
		// return $this->_collectionErrors;
	} # function


} # class