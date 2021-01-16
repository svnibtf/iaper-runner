<?php
$topsview_chart = array();
		$topsview_chart["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
`Data`,
sum(Valor_Consulta) as Valor_a_Receber
FROM adm_tratamento
group by Data
"
	);
		$tables_data["View Chart"][".operations"] = &$topsview_chart;
?>