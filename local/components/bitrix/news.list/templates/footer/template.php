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
<div class="footer-top">
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <div class="col-md-4 footer-grid">
            <img src="<?= $arItem['PROPERTIES']['PICTURE_URL']['VALUE'] ?>" alt=""/>
            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><h3><?= $arItem['NAME'] ?></h3></a>
            <p><?= $arItem['PREVIEW_TEXT'] ?></p>
            <h4><?= $arItem['PROPERTIES']['TIME']['VALUE'] ?></h4>
        </div>
    <? endforeach; ?>
    <div class="clearfix"></div>
</div>

