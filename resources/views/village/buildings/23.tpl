{assign var=bonusTexts value=[$smarty.const.CURRENT_HIDDEN_UNITS, $smarty.const.HIDDEN_UNITS_LEVEL, $smarty.const.UNITS]}
{include file={$smarty.const.TEMPLATES_DIR}|cat:'village/buildings/show_bonus.blade.php'}
