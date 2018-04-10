<?php
/**
 * This script converts any XML into JSON object (string).
 * Loaded XML is validated using libxml function.
 * Element's attributes are handled by the function, by adding '@attributes' key holding an array of all possible attributes of an element.
 * This script is tested on http://phptester.net/, because testing on http://www.writephponline.com/ fails with xml having reserved keywords like "email".
 */

//Loading the xml as PHP string variable
$priip = '<priip>
<data>
<product>
<priipCloudProductTemplate>otc</priipCloudProductTemplate>
<priipCloudProductType>fxSwap</priipCloudProductType>
<productIdentifier>RBI_fxSwap_EURUSD_long_1Y2D_EUR</productIdentifier>
</product>
<manufacturer>
<id>rbi</id>
<nameLong>Raiffeisen Bank International AG</nameLong>
<nameShort>RBI</nameShort>
<address>Am Stadtpark 9, 1030 Wien, Austria</address>
<telephoneNumber>+43 1 71707 0</telephoneNumber>
<website>http://www.rbinternational.com</website>
<email>complaints@rbinternational.com</email>
</manufacturer>
<document>
<type>final</type>
</document>
<properties>
<includeEarlyRedemptionInExtraordinaryEventsAlert>true</includeEarlyRedemptionInExtraordinaryEventsAlert>
</properties>
<tradeDate>2018-01-18</tradeDate>
<effectiveDate>2018-01-20</effectiveDate>
<fxSwap>
<holder>client</holder>
<currencyPair>EURUSD</currencyPair>
<notionalAmount>1000000</notionalAmount>
<notionalAmountCurrency>EUR</notionalAmountCurrency>
<terminationDate>2019-01-20</terminationDate>
<forwardRate>
<value>1.25620</value>
</forwardRate>
<spotRate>
<value>1.2207</value>
</spotRate>
</fxSwap>
<costs>
<entryCosts>0.0025</entryCosts>
</costs>
<riskMeasures version="v1.0">
<sriRelatedValues>
<valueAtRisk>0</valueAtRisk>
<valueAtRiskEquivalentVolatility>0</valueAtRiskEquivalentVolatility>
<mrm>7</mrm>
<crm>2</crm>
<sri>7</sri>
</sriRelatedValues>
<performanceScenariosRelatedValues>
<positiveScenarioPayoutRHP>11139.633068665</positiveScenarioPayoutRHP>
<positiveScenarioActualReturnRHP>0.1139633069</positiveScenarioActualReturnRHP>
<positiveScenarioAverageReturnPerYearRHP>0.114276</positiveScenarioAverageReturnPerYearRHP>
<positiveScenarioPayoutIHP1>null</positiveScenarioPayoutIHP1>
<positiveScenarioActualReturnIHP1>null</positiveScenarioActualReturnIHP1>
<positiveScenarioAverageReturnPerYearIHP1>null</positiveScenarioAverageReturnPerYearIHP1>
<positiveScenarioPayoutIHP2>null</positiveScenarioPayoutIHP2>
<positiveScenarioActualReturnIHP2>null</positiveScenarioActualReturnIHP2>
<positiveScenarioAverageReturnPerYearIHP2>null</positiveScenarioAverageReturnPerYearIHP2>
<moderateScenarioPayoutRHP>9984.9790016645</moderateScenarioPayoutRHP>
<moderateScenarioActualReturnRHP>-0.0015020998</moderateScenarioActualReturnRHP>
<moderateScenarioAverageReturnPerYearRHP>-0.00150623</moderateScenarioAverageReturnPerYearRHP>
<moderateScenarioPayoutIHP1>null</moderateScenarioPayoutIHP1>
<moderateScenarioActualReturnIHP1>null</moderateScenarioActualReturnIHP1>
<moderateScenarioAverageReturnPerYearIHP1>null</moderateScenarioAverageReturnPerYearIHP1>
<moderateScenarioPayoutIHP2>null</moderateScenarioPayoutIHP2>
<moderateScenarioActualReturnIHP2>null</moderateScenarioActualReturnIHP2>
<moderateScenarioAverageReturnPerYearIHP2>null</moderateScenarioAverageReturnPerYearIHP2>
<negativeScenarioPayoutRHP>8955.6992819847</negativeScenarioPayoutRHP>
<negativeScenarioActualReturnRHP>-0.1044300718</negativeScenarioActualReturnRHP>
<negativeScenarioAverageReturnPerYearRHP>-0.104717</negativeScenarioAverageReturnPerYearRHP>
<negativeScenarioPayoutIHP1>null</negativeScenarioPayoutIHP1>
<negativeScenarioActualReturnIHP1>null</negativeScenarioActualReturnIHP1>
<negativeScenarioAverageReturnPerYearIHP1>null</negativeScenarioAverageReturnPerYearIHP1>
<negativeScenarioPayoutIHP2>null</negativeScenarioPayoutIHP2>
<negativeScenarioActualReturnIHP2>null</negativeScenarioActualReturnIHP2>
<negativeScenarioAverageReturnPerYearIHP2>null</negativeScenarioAverageReturnPerYearIHP2>
<stressScenarioPayoutRHP>6841.9699464563</stressScenarioPayoutRHP>
<stressScenarioActualReturnRHP>-0.3158030054</stressScenarioActualReturnRHP>
<stressScenarioAverageReturnPerYearRHP>-0.316671</stressScenarioAverageReturnPerYearRHP>
<stressScenarioPayoutIHP1>null</stressScenarioPayoutIHP1>
<stressScenarioActualReturnIHP1>null</stressScenarioActualReturnIHP1>
<stressScenarioAverageReturnPerYearIHP1>null</stressScenarioAverageReturnPerYearIHP1>
<stressScenarioPayoutIHP2>null</stressScenarioPayoutIHP2>
<stressScenarioActualReturnIHP2>null</stressScenarioActualReturnIHP2>
<stressScenarioAverageReturnPerYearIHP2>null</stressScenarioAverageReturnPerYearIHP2>
</performanceScenariosRelatedValues>
</riskMeasures>
<costOutputs>
<costsOverTime>
<totalCostsRHP>
<value>24.4219183409</value>
</totalCostsRHP>
<totalCostsIHP1>
<value>null</value>
</totalCostsIHP1>
<totalCostsIHP2>
<value>null</value>
</totalCostsIHP2>
<reductionInActualYieldRHP>
<value>0.0024421918</value>
</reductionInActualYieldRHP>
<reductionInActualYieldIHP1>
<value>null</value>
</reductionInActualYieldIHP1>
<reductionInActualYieldIHP2>
<value>null</value>
</reductionInActualYieldIHP2>
<reductionInYieldRHP>
<value>0.0024489008</value>
</reductionInYieldRHP>
<reductionInYieldIHP1>
<value>null</value>
</reductionInYieldIHP1>
<reductionInYieldIHP2>
<value>null</value>
</reductionInYieldIHP2>
</costsOverTime>
<compositionOfCosts>
<actualEntryCosts>
<value>0.0024421918</value>
</actualEntryCosts>
<actualOtherRecurringCostsPA>
<value>null</value>
</actualOtherRecurringCostsPA>
<actualExitCosts>
<value>0</value>
</actualExitCosts>
<entryCosts>
<value>0.0024489008</value>
</entryCosts>
<otherRecurringCostsPA>
<value>null</value>
</otherRecurringCostsPA>
<exitCosts>
<value>0</value>
</exitCosts>
</compositionOfCosts>
</costOutputs>
</data>
</priip>';

libxml_use_internal_errors(true);

//Reading the XML from the PHP string variable
$xml=simplexml_load_string($priip);

//Error handling on loaded XML document, validates the XML and display errors.
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
    libxml_clear_errors();
}

/**
 * Converts XML to JSON object (string)
 * @param  $xml takes SimpleXMLElement object, string, int, floats, bools, null
 * @return JSON object (string), string, int, floats, bools, null
 */
function xml_parser($xml){
	if(is_object($xml) || is_array($xml) ) {  
		# object, array
		$items = Array();
		if(count($xml)>0){
			# Handling attributes of an element
			if($xml->attributes()){
				$attributes = $xml->attributes();
				$att = '"@attributes" : {';
				$i=0;
				$len = count($attributes);
				foreach ($attributes as $key => $value) {
					$att .= '"'.xml_parser($key) . '":' . xml_parser($value);
					if($i != $len - 1){
						$att .= ', ';
					}
					$i++;
				}
				$att .= '}';
				$items[] = $att;
			}
			# Handling elements recursively
			foreach( $xml as $key => $value ) {
				$items[] = '"'.xml_parser($key) . '":' . xml_parser($value); 
			}
			$xml2array = '{' . implode(',', $items) . '}';
		}else{
			$xml2array = '"' . $xml . '"';
		}
	}elseif( is_string($xml) ) {
		# string
		$xml2array = $xml;
	} else {
		#  int, floats, bools, null
		$xml2array = strtolower(var_export( $xml, true )); 
	} 
	return $xml2array; 
}

echo '{"'.$xml->getName().'" :'.xml_parser($xml)."}";