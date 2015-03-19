<?php

/**
 * @author Leandro Panegassi < leandropanegassi89@gmail.com >
 */

class TranslateGatewaysErrorsFactory
{

	public static function factory($type) {

		if ($type instanceof PagSeguroServiceException) {
			return new PagSeguroTranslateErrors($type);
		} else if ($type instanceof PayPalServiceException) {
			return new PayPalTranslateErrors($type);
		} else if ($type instanceof CieloServiceException) {
			return new CieloTranslateErrors($type);
		} # if

	} # function

} # class