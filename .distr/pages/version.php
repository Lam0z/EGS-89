<?php
$title = 'ESG Russia 2022 |  Форум устойчивого развития';
$descr = 'ESG Russia 2022. Форум устойчивого развития. Первый углеродно-нейтральный форум.';

$unit = "sbs";
$unitpayments = 'payments';
$typepayments = 'ticket';
$callbackSuccess = 'https://esgglobal.ru/thanks/';
$type = "";
$land = "esg2022";
$graccount = "";
$grcampaign = "";
$grtag = "";

$phone = '+7 495 787 87 67';
$phone_link = '74957878767';
$regFormID = '';


$action = "https://syn.su/lander.php?r=land/index&unit=$unit&type=$type&land=$land&version=$version&partner=$partner&lang=$lang&graccount=$graccount&grcampaign=$grcampaign&grtag=$grtag";

$action_payment = "https://syn.su/lander.php?r=land/index&unit=$unitpayments&type=$typepayments&land=$land&version=$version&partner=$partner&graccount=$graccount&grcampaign=$grcampaign&grtag=$grtag&callbackSuccess=$callbackSuccess&new_tab=1&ignore-thanksall=true";



switch ($lang) {
	case 'en':
			$title  = 'ESG Russia 2021 |  Форум устойчивого развития';
			$descr  = 'ESG Russia 2021. Форум устойчивого развития. Первый углеродно-нейтральный форум.';

			break;
}

?>
