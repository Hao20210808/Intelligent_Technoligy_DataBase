<?php	require_once 'MysqlConnect.php'; ?>

<h3>執行結果</h3>
<div class="well well-sm">
	<?php
	$sql_1 = "INSERT INTO 'attribute' ('Company_name', 'Company_ch_name', 'Company_ch_fullname', 'Company_en_fullname', 'Company_en_name', 'stock_number', 'tax_id_number', 'ch_address', 'en_address', 'established_date',	'listed_date', 'current_state', 'TEJ_sector', 'listed_sector', 'phone', 'website', 'ceo', 'top_manager', 'finance_manager', 'spokesman', 'staff_number', 'capital', 'TEJ_sector_name', 'new_TEJ_sector_name', 'TEJ_subsector_name', 'TEJ_sector_num', 'TEJ_industry_name', 'TEJ_subsector_code', 'TEJ_subsector_fullname', 'main_bussiness1','main_bussiness2', 'main_bussiness3', 'main_product_dis', 'last_listed_date', 'last_IPO_date', 'first_OTC_date', 'unlisted_date', 'last_unIPO_date', 'update_time')	VALUE ($Company_name, $Company_ch_name, $Company_ch_fullname, $Company_en_fullname, $Company_en_name, $stock_number, $tax_id_number, $ch_address, $en_address, $established_date,	$listed_date, $current_state, $TEJ_sector, $listed_sector$, $phone, $website, $ceo, $top_manager, $finance_manager, $spokesman, $staff_number, $capital, $TEJ_sector_name, $new_TEJ_sector_name, $TEJ_subsector_name, $TEJ_sector_num, $TEJ_industry_name, $TEJ_subsector_code, $TEJ_subsector_fullname, $main_bussiness1, $main_bussiness2, $main_bussiness3, $main_product_dis, $last_listed_date, $last_IPO_date, $first_OTC_date, $unlisted_date, $last_unIPO_date, $update_time);";

	$sql_2 = "INSERT INTO 'parnership' ('ticker_1', 'fullname_1', 'name_1', 'organization_type_1', 'publicated_1', 'ticker_2', 'fullname_2', 'name_2', 'country_code_2', 'organization_type_2', 'publicated_2', 'contract_content', 'contract_note', 'contract_category', 'contract_RD', 'cooperate_direction', 'starting_year', 'end_year', 'terminated_condition', 'terminated_condition_content', 'filed_year', 'privacy_policy', 'restrictions', 'sector') VALUE ($ticker_1, $fullname_1, $name_1, $organization_type_1, $publicated_1, $ticker_2, $fullname_2, $name_2, $country_code_2, $organization_type_2, $publicated_2, $contract_content, $contract_note, $contract_category, $contract_RD, $cooperate_direction, $starting_year, $end_year, $terminated_condition, $terminated_condition_content, $filed_year, $privacy_policy, $restrictions, $sector);";

	$sql_3 = "INSERT INTO 'sector' ('ticker','sector', 'type') VALUE ($ticker, $sector, $type);";

	$sql_4 = "INSERT INTO 'financesample' ('company_name', 'date', 'rd_budget', 'buget_use_rate', 'capital', 'turnover', 'net_income', 'income_capital_ratio', 'income_per_capital', 'all_capital', 'debt', 'SH_equity', 'cost', 'EPS', 'outside_income', 'season', 'month') VALUE ($company_name, $date, $rd_budget, $buget_use_rate, $capital, $turnover, $net_income, $income_capital_ratio, $income_per_capital, $all_capital, $debt, $SH_equity, $cost, $EPS, $outside_income, $season, $month);";

	$result = mysqli_query($db, $sql_1);
	if(mysqli_affected_rows($db) > 0) {
		$new_id = mysqli_insert_id($db);
		echo "執行成功，新增後的 id 為 {$new_id}";
	} elseif(mysqli_affected_rows($db) == 0) {
		echo "無資料新增";
	} else {
		echo  "{$sql_1} 語法執行失敗，錯誤訊息：" . mysqli_error($db);
	}
	?>
	<?php	mysqli_close($db); ?>
	<a href="?page=../BackendUser.php">回到管理葉面</a>
</div>
