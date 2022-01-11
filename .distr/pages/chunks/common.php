<?php

/* Возвращает строку из массива переводов по ключу */
function _($key) {
	global $lang, $_;

	if ( !array_key_exists($lang, $_) || !array_key_exists($key, $_[$lang]) ) return;

	return $_[$lang][$key];
}
