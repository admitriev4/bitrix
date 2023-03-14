<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx');
$currencyList = '';


$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
    'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
    'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
);
if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$doNotOutput = array("PICTURE_URL", "BLOG_POST_ID", "BLOG_COMMENTS_CNT");
$price = CurrencyFormat($arResult['ITEM_PRICES'][0]['PRICE'], $arResult['ITEM_PRICES'][0]['CURRENCY']);

?>
<div class="catalog-item-detail">
    <p class="title-big"><?=$arResult["NAME"]?></p>
        <div class="catalog-item-picture">
            <?if(!empty($arResult["PROPERTIES"]["PICTURE_URL"]["VALUE"])):?>
            <img src="<?=$arResult["PROPERTIES"]["PICTURE_URL"]["VALUE"]?>"  alt=""/>
            <?endif;?>
        </div>
    <div class="catalog-item-right-text">
        <div class="property-list">
            <?foreach ($arResult["PROPERTIES"] as $arProperty):?>
                <?if(!in_array($arProperty['CODE'], $doNotOutput)):?>
                    <p><span class="bold"><?=$arProperty['NAME']?></span> : <span><?=$arProperty['VALUE']?></span></p>
                <?endif;?>
            <?endforeach;?>
        </div>
        <div class="buy-container">
            <span class="title-big"><?=$price;?></span>
            <span>
                <a href="javascript:void(0);" class="catalog-btn" data-btn="btn" id="<?=$arResult['ID']?>"><?=$arParams['MESS_BTN_ADD_TO_BASKET']?></a>
            </span>
        </div>
    </div>
    <div class="catalog-item-detail-text">
        <p class="title-medium">Описание</p>
        <p><?=$arResult["DETAIL_TEXT"]?></p>
    </div>
    <div class="clearfix"> </div>
</div>


