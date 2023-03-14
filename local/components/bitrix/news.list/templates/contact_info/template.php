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
$i=1;
?>
<ul>
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
    <li><a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>">
            <span class="<?= $arItem['PROPERTIES']['CLASS']['VALUE'] ?>"> </span>
            <?= $arItem['PROPERTIES']['TEXT']['VALUE'] ?></a></li>
    <? endforeach; ?>
</ul>

