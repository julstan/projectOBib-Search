<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 22:33:15
  from 'app:statseditorial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec8370b0b2e09_20884794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef2cee3f0c7d4df0ca016281f5df4c5f5b2c143d' => 
    array (
      0 => 'app:statseditorial.tpl',
      1 => 1586500794,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5ec8370b0b2e09_20884794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suppressPageTitle'=>true,'pageTitle'=>"stats.editorialActivity"), 0, false);
?>

<div class="pkp_page_content">
	<?php $_smarty_tpl->_assignInScope('uuid', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid('') )));?>
	<div id="editorial-stats-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" class="pkpStats pkpStats--editorial">
		<h1 class="-screenReader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.editorialActivity"),$_smarty_tpl ) );?>
</h1>
		<div v-if="activeByStage" class="pkpStats__graph">
			<div class="pkpStats--editorial__stageWrapper -pkpClearfix">
				<div class="pkpStats--editorial__stageChartWrapper">
					<doughnut-chart :chart-data="chartData"></doughnut-chart>
				</div>
				<div class="pkpStats--editorial__stageList">
					<h2 class="pkpStats--editorial__stage pkpStats--editorial__stage--total">
						<span class="pkpStats--editorial__stageCount">{{ totalActive }}</span>
						<span class="pkpStats--editorial__stageLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.submissionsActive"),$_smarty_tpl ) );?>
</span>
					</h2>
					<div v-for="stage in activeByStage" :key="stage.name" class="pkpStats--editorial__stage">
						<span class="pkpStats--editorial__stageCount">{{ stage.count }}</span>
						<span class="pkpStats--editorial__stageLabel">{{ stage.name }}</span>
					</div>
				</div>
			</div>
		</div>
		<div class="pkpStats__container -pkpClearfix">
			<!-- Filters in the sidebar -->
			<div
				v-if="filters.length"
				ref="sidebar"
				class="pkpStats__sidebar"
				:class="sidebarClasses"
			>
				<pkp-header
					class="pkpStats__sidebarHeader"
					:tabindex="isSidebarVisible ? 0 : -1"
				>
					<icon icon="filter" :inline="true"></icon>
					{{ i18n.filter }}
				</pkp-header>
				<div
					v-for="(filterSet, index) in filters"
					:key="index"
					class="pkpStats__filterSet"
				>
					<pkp-header v-if="filterSet.heading">
						{{ filterSet.heading }}
					</pkp-header>
					<pkp-filter
						v-for="filter in filterSet.filters"
						:key="filter.param + filter.value"
						v-bind="filter"
						:is-filter-active="isFilterActive(filter.param, filter.value)"
						:i18n="i18n"
						@add-filter="addFilter"
						@remove-filter="removeFilter"
					></pkp-filter>
				</div>
			</div>
			<div class="pkpStats__content">
				<div class="pkpStats__table" role="region" aria-live="polite">
				<div class="pkpStats__tableHeader">
					<h2 class="pkpStats__tableTitle" id="editorialActivityTabelLabel">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stats.trends"),$_smarty_tpl ) );?>

						<span v-if="isLoading" class="pkpSpinner" aria-hidden="true"></span>
					</h2>
					<div class="pkpStats__tableActions">
						<date-range
							slot="thead-dateRange"
							unique-id="editorial-stats-date-range"
							:date-start="dateStart"
							:date-end="dateEnd"
							:date-end-max="dateEndMax"
							:options="dateRangeOptions"
							:i18n="i18n"
							@set-range="setDateRange"
							@updated:current-range="setCurrentDateRange"
						></date-range>
						<pkp-button
							v-if="filters.length"
							:label="i18n.filter"
							icon="filter"
							:is-active="isSidebarVisible"
							@click="toggleSidebar"
						></pkp-button>
					</div>
				</div>
					<pkp-table
						class="pkpTable--editorialStats"
						labelled-by="editorialActivityTabelLabel"
						:columns="tableColumns"
						:rows="tableRows"
					>
						<template slot-scope="{row, rowIndex}">
							<table-cell
								v-for="(column, columnIndex) in tableColumns"
								:key="column.name"
								:column="column"
								:row="row"
								:tabindex="!rowIndex && !columnIndex ? 0 : -1"
							>
								<template v-if="column.name === 'name'">
									{{ row.name }}
									<tooltip v-if="row.description"
										:label="__('descriptionForStat', {stat: row.name})"
										:tooltip="row.description"
									></tooltip>
								</template>
							</table-cell>
						</template>
					</pkp-table>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		pkp.registry.init('editorial-stats-handler-<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
', 'StatsEditorialContainer', <?php echo json_encode($_smarty_tpl->tpl_vars['statsComponent']->value->getConfig());?>
);
	<?php echo '</script'; ?>
>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
