<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Enterprise
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.;
 * All Rights Reserved.
 * *******************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.7 2010/08/03 13:15:31 aserrano Exp $
 * Source: SugarCRM 6.0.0
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Previsiones',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LBL_MODULE_TITLE' => 'Previsiones',
  'LBL_LIST_FORM_TITLE' => 'Previsiones Realizadas',
  'LNK_UPD_FORECAST' => 'Hoja de Previsión',
  'LNK_QUOTA' => 'Ver Cuotas',
  'LNK_FORECAST_LIST' => 'Ver Historial de Previsiones',
  'LBL_FORECAST_HISTORY' => 'Previsiones: Historial',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historial',
  //module strings.
  'LBL_TIMEPERIOD_NAME' => 'Período de Tiempo',
  'LBL_USER_NAME' => 'Nombre de Usuario',
  'LBL_REPORTS_TO_USER_NAME' => 'Informa A',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_TIME_ID' => 'ID Período de Tiempo',
  'LBL_FORECAST_TYPE' => 'Tipo de Previsión',
  'LBL_FORECAST_OPP_COUNT' => 'Oportunidades',
  'LBL_FORECAST_OPP_WEIGH' => 'Cantidad Ponderada',
  'LBL_FORECAST_OPP_COMMIT' => 'Caso Probable',
  'LBL_FORECAST_OPP_BEST_CASE'=>'Caso Mejor',
  'LBL_FORECAST_OPP_WORST'=>'Caso Peor',
  //var defs
  'LBL_FORECAST_USER' => 'Usuario',
  'LBL_DATE_COMMITTED' => 'Fecha Realización',
  'LBL_DATE_ENTERED' => 'Fecha Creación',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  //forecast table
  'LBL_CREATED_BY' => 'Creado por',
  'LBL_DELETED' => 'Eliminado',
  'LBL_MODIFIED_USER_ID'=>'Modificado por',  
  'LBL_QC_TIME_PERIOD' => 'Período de Tiempo:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Cuenta de Oportunidades:',
  'LBL_QC_WEIGHT_VALUE' => 'Cantidad Ponderada:',
  'LBL_QC_COMMIT_VALUE' => 'Cantidad Realizada:',
  'LBL_QC_COMMIT_BUTTON' => 'Realizar',
  'LBL_QC_WORKSHEET_BUTTON' => 'Hoja de cálculo',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Cantidad Realizada en Dinámica:',
  'LBL_QC_DIRECT_FORECAST' => 'Mi Previsión Directa:',
  'LBL_QC_ROLLUP_FORECAST' => 'Mi Previsión de Grupo:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mis Previsiones',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Última Fecha de Realización:',
   //Quick Commit labels.
  'LBL_QC_LAST_COMMIT_VALUE' => 'Última Cantidad Realizada:',
  'LBL_QC_HEADER_DELIM' => 'A',
  'LBL_OW_OPPORTUNITIES' => 'Oportunidad',
  'LBL_OW_ACCOUNTNAME' => 'Cuenta',
  'LBL_OW_REVENUE' => 'Cantidad',
  'LBL_OW_WEIGHTED' => 'Cantidad Ponderada',
  'LBL_OW_MODULE_TITLE' => 'Hoja de Oportunidad',
  'LBL_OW_PROBABILITY' => 'Probabilidad',
  'LBL_OW_NEXT_STEP'=>'Siguiente Paso',
  'LBL_OW_DESCRIPTION'=>'Descripción',
  'LBL_OW_TYPE'=>'Tipo',
  'LNK_NEW_TIMEPERIOD' => 'Crear Período de Tiempo',
  'LNK_TIMEPERIOD_LIST' => 'Ver Períodos de Tiempo',
  'LBL_SVFS_FORECASTDATE' => 'Fecha de Inicio de Planificación',
  'LBL_SVFS_STATUS' => 'Estado',
  'LBL_SVFS_USER' => 'Para',
  'LBL_SVFS_CASCADE' => '¿Propagar en cascada a Informes?',
  //opportunity worksheet list view labels
  'LBL_SVFS_HEADER' => 'Planificación de la Previsión:',
  'LB_FS_KEY' => 'ID',
  'LBL_FS_TIMEPERIOD_ID' => 'ID Período de Tiempo',
  'LBL_FS_USER_ID' => 'ID Usuario',
  'LBL_FS_TIMEPERIOD' => 'Período de Tiempo',
  'LBL_FS_START_DATE' => 'Fecha de Inicio',
  'LBL_FS_END_DATE' => 'Fecha de Fin',
  //forecast schedule shortcuts
  'LBL_FS_FORECAST_START_DATE' => 'Fecha de Inicio de la Previsión',
  'LBL_FS_STATUS' => 'Estado',
  'LBL_FS_FORECAST_FOR' => 'Planificar para:',
  //Forecast schedule sub panel list view.
  'LBL_FS_CASCADE' => '¿En cascada?',
  'LBL_FS_MODULE_NAME' => 'Planificación de Previsión',
  'LBL_FS_CREATED_BY' => 'Creado por',
  'LBL_FS_DATE_ENTERED' => 'Fecha Creación',
  'LBL_FS_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_FS_DELETED' => 'Eliminado',
  //Forecast Schedule detail; view.....
  'LBL_FDR_USER_NAME' => 'Informador Directo',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunidades previstas:',
  'LBL_FDR_WEIGH' => 'Cantidad Ponderada de oportunidades:',
  'LBL_FDR_COMMIT' => 'Cantidad Realizada',
  'LBL_FDR_DATE_COMMIT' => 'Fecha de Realización',
  'LBL_DV_HEADER' => 'Previsiones: Hoja de cálculo',
  'LBL_DV_MY_FORECASTS' => 'Mis Previsiones',
  'LBL_DV_MY_TEAM' => 'Previsiones de mi Equipo',
  'LBL_DV_TIMEPERIODS' => 'Períodos de Tiempo:',
  'LBL_DV_FORECAST_PERIOD' => 'Período de Tiempo de la Previsión',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunidades de la Previsión',
  'LBL_SEARCH' => 'Seleccionar',
  'LBL_SEARCH_LABEL' => 'Seleccionar',
  'LBL_COMMIT_HEADER' => 'Realización de Previsión',
  'LBL_DV_LAST_COMMIT_DATE' => 'Última Fecha de Realización:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Últimas Cantidades Realizadas:',
  //forecast worksheet direct reports forecast
  'LBL_DV_FORECAST_ROLLUP' => 'Previsión Dinámica',
  'LBL_DV_TIMEPERIOD' => 'Período de Tiempo:',
  'LBL_DV_TIMPERIOD_DATES' => 'Rango de Fechas:',
  'LBL_LV_TIMPERIOD' => 'Período de Tiempo',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Fecha de Inicio',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Fecha de Fin',
  //detail view.
  'LBL_LV_TYPE' => 'Tipo de Previsión',
  'LBL_LV_COMMIT_DATE' => 'Fecha de Realización',
  'LBL_LV_OPPORTUNITIES' => 'Oportunidades',
  'LBL_LV_WEIGH' => 'Cantidad Ponderada',
  'LBL_LV_COMMIT' => 'Cantidad Realizada',
  'LBL_COMMIT_NOTE' => 'Introduzca las cantidades que desee realizar en el Período de Tiempo seleccionado:',
  'LBL_COMMIT_MESSAGE' => '¿Quiere introducir estas cantidades como realizadas?',
  'ERR_FORECAST_AMOUNT' => 'La Cantidad Realizada es un valor requerido, y debe ser numérico.',

  // js error strings
  'LBL_FC_START_DATE' => 'Fecha de Inicio',
  'LBL_FC_USER' => 'Programar Para',

  'LBL_NO_ACTIVE_TIMEPERIOD'=>'No hay ningún período de tiempo Activo para realizar una Previsión.',
  'LBL_FDR_ADJ_AMOUNT'=>'Cantidad Ajustada',
  'LBL_SAVE_WOKSHEET'=>'Guardar Hoja de cálculo',
  'LBL_RESET_WOKSHEET'=>'Reiniciar Hoja de cálculo',
  'LBL_SHOW_CHART'=>'Ver Gráfico',
  'LBL_RESET_CHECK'=>'Todos los datos de la hoja de cálculo para el período de tiempo seleccionado y para el usuario que ha iniciado la sesión se eliminarán, ¿desea continuar?',
  
  'LB_FS_LIKELY_CASE'=>'Caso Probable',
  'LB_FS_WORST_CASE'=>'Caso Peor',
  'LB_FS_BEST_CASE'=>'Caso Mejor',
  'LBL_FDR_WK_LIKELY_CASE'=>'Est. Caso Probable',
  'LBL_FDR_WK_BEST_CASE'=> 'Est. Caso Mejor',
  'LBL_FDR_WK_WORST_CASE'=>'Est. Caso Peor',
  'LBL_BEST_CASE'=>'Caso Mejor:',
  'LBL_LIKELY_CASE'=>'Caso Probable:',
  'LBL_WORST_CASE'=>'Caso Peor:',
  'LBL_FDR_C_BEST_CASE'=>'Caso Mejor',
  'LBL_FDR_C_WORST_CASE'=>'Caso Peor',
  'LBL_FDR_C_LIKELY_CASE'=>'Caso Probable',
  'LBL_QC_LAST_BEST_CASE'=>'Cantidad Última Realización (Caso Mejor):',
  'LBL_QC_LAST_LIKELY_CASE'=>'Cantidad Última Realización (Caso Probable):',
  'LBL_QC_LAST_WORST_CASE'=>'Cantidad Última Realización (Caso Peor):',
  'LBL_QC_ROLL_BEST_VALUE'=>'Cantidad Dinámica Realizada (Caso Mejor):',
  'LBL_QC_ROLL_LIKELY_VALUE'=>'Cantidad Dinámica Realizada (Caso Probable):',
  'LBL_QC_ROLL_WORST_VALUE'=>'Cantidad Dinámica Realizada (Caso Peor):',  
  'LBL_QC_COMMIT_BEST_CASE'=>'Cantidad Realizada (Caso Mejor):',
  'LBL_QC_COMMIT_LIKELY_CASE'=>'Cantidad Realizada (Caso Probable):',
  'LBL_QC_COMMIT_WORST_CASE'=>'Cantidad Realizada (Caso Peor):',
  
  'LBL_FORECAST_FOR'=>'Hoja de Previsiones para: ',
  'LBL_FMT_ROLLUP_FORECAST'=>'(Dinámica)', // Móvil
  'LBL_FMT_DIRECT_FORECAST'=>'(Directa)',

  //labels used by the chart.
  'LBL_GRAPH_TITLE'=>'Historial de Previsiones',
  'LBL_GRAPH_QUOTA_ALTTEXT'=>'Cuota para %s',
  'LBL_GRAPH_COMMIT_ALTTEXT'=>'Cantidad Realizada para %s',
  'LBL_GRAPH_OPPS_ALTTEXT'=>'El valor de las oportunidades cerradas en %s',

  'LBL_GRAPH_QUOTA_LEGEND'=>'Cuota',
  'LBL_GRAPH_COMMIT_LEGEND'=>'Previsión Realizada',
  'LBL_GRAPH_OPPS_LEGEND'=>'Oportunidades Cerradas',
  'LBL_TP_QUOTA'=>'Cuota:',
  'LBL_CHART_FOOTER'=>'Historial de Previsiones<br/>Cantidad en Cuota vs Prevista vs Valor de Oportunidad Cerrada',
  'LBL_TOTAL_VALUE'=>'Totales:',
  'LBL_COPY_AMOUNT'=>'Cantidad total',
  'LBL_COPY_WEIGH_AMOUNT'=>'Cantidades totales ponderadas',
  'LBL_WORKSHEET_AMOUNT'=>'Cantidades totales estimadas',
  'LBL_COPY'=>'Copiar Valores',  
  'LBL_COMMIT_AMOUNT'=>'Suma de valores Realizados.',
  'LBL_COPY_FROM'=>'Copiar valor de:',

  'LBL_CHART_TITLE' => 'Presupuestado vs. Realizado vs. Real',
);


?>