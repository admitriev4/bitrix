<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$doNotOutput = array("PICTURE_URL");
?>
<div class="about-top">
    <?if(!empty($arResult["PROPERTIES"]["PICTURE_URL"]["VALUE"])):?>
    <div class="col-md-4 abouttop-left">
        <img src="<?=$arResult["PROPERTIES"]["PICTURE_URL"]["VALUE"]?>" alt=""/>
    </div>
    <?endif;?>
    <div class="col-md-8 abouttop-right">
        <p class="title-medium"><?=$arResult["NAME"]?></p>
        <p><?=$arResult["DETAIL_TEXT"]?></p>
        <div>
            <?foreach ($arResult["PROPERTIES"] as $arProperty):?>
            <?if(!in_array($arProperty['CODE'], $doNotOutput)):?>
            <p><span><?=$arProperty['NAME']?></span> : <span><?=$arProperty['VALUE']?></span></p>
            <?endif;?>
            <?endforeach;?>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

