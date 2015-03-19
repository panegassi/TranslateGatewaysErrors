<?php

/**
 * @author Leandro Panegassi < leandropanegassi89@gmail.com >
 */

class PagSeguroTranslateErrors extends TranslateGatewaysErrorsAbstract
{

	public function __construct(PagSeguroServiceException $exception) {
		$this->_exception = $exception;
	} # function


	public function getErrorTranslate() {
		$error 	= $this->_exception->getErrors();
		if (is_array($error)) {
			foreach ($error as $key => $value)
				$this->_collectionErrors[$key] = PagSeguroErrorsList::getErrorList((int) $value->getCode());
		} else {
			$this->_collectionErrors = PagSeguroErrorsList::getErrorList((int) $error->getCode());
		} # if
		return $this->_collectionErrors;
	} # function


} # class