<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<h4>Services</h4>
<div class="service-top">
    <? foreach ($arResult['ITEMS'] as $arItem):?>
    <?if($arItem['IBLOCK_SECTION_ID'] == '1'):?>
        <div class="col-md-4 service-grid">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><img src="<?=$arItem['PROPERTIES']['PICTURE_URL']['VALUE']?>" alt=""/></a>
            <div class="service-gd-bott">
                <h3><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h3>
                <p><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
        </div>
    <?endif;?>
    <? endforeach;?>
            <div class="clearfix"> </div>
        </div>
<div class="service-bottom">
    <h5>Service overview</h5>
    <? foreach ($arResult['ITEMS'] as $arItem):?>
    <?if($arItem['IBLOCK_SECTION_ID'] == '2'):?>
        <div class="col-md-6 servicebott-left">
            <div class="ser-img">
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><img src="<?=$arItem['PROPERTIES']['PICTURE_URL']['VALUE']?>" alt=""/></a>
            </div>
            <div class="ser-text">
                <h3><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h3>
                <p><?=$arItem['PREVIEW_TEXT']?></p>
            </div>
        </div>
        <?endif;?>
    <? endforeach;?>
    <div class="clearfix"> </div>
</div>



