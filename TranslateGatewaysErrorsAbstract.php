<?php

/**
 * @author Leandro Panegassi < leandropanegassi89@gmail.com >
 */

abstract class TranslateGatewaysErrorsAbstract
{

	protected $_exception;
	protected $_collectionErrors = array();

	abstract public function getErrorTranslate();

} # class