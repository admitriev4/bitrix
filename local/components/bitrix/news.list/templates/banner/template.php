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
<? foreach ($arResult['ITEMS'] as $arItem):?>
    <div class="banner">
        <img src="?=$arItem['PROPERTIES']['TITLE']['VALUE']?>" alt=""/>
        <h3><?=$arItem['NAME']?></h3>
        <h2><?=$arItem['PREVIEW_TEXT']?></h2>
        <div class="banner-button">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">More info</a>
        </div>
    </div>
<? endforeach;?>
