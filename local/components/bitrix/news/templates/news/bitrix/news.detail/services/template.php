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
?>
<div class="about-top">
    <div class="col-md-4 abouttop-left">
        <img src="<?=$arResult["PROPERTIES"]["PICTURE_URL"]["VALUE"]?>" alt=""/>
    </div>
    <div class="col-md-8 abouttop-right">
        <p class="title-medium"><?=$arResult["NAME"]?></p>
        <p><?=$arResult["DETAIL_TEXT"]?></p>
    </div>
    <div class="clearfix"> </div>
</div>

