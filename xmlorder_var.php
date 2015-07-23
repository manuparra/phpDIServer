<?php

/**
 * Manuel Parra (manuparra@gmail.com)
 * (c) 2013
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */


// PHP XML Sample for  ORDER COMPOSE
// Order Lines are in $orderLinesList and Order Header are single vars

// Basic Data for the Order HEADER 
$xmlHeader = $xmlHeader."<DocDate>".date("Ymd")."</DocDate>";
$xmlHeader = $xmlHeader."<DocDueDate>".date("Ymd")."</DocDueDate>";
$xmlHeader = $xmlHeader."<CardCode>".$IdCostumer."</CardCode>";
$xmlHeader = $xmlHeader."<DiscountPercent>0</DiscountPercent>";
$xmlHeader = $xmlHeader."<AgentCode>".$AgentCode."</AgentCode>";
$xmlHeader = $xmlHeader."<U_COMENT>".$Comment."</U_COMENT>";
$xmlHeader = $xmlHeader."<PayToCode>".$Addrs."</PayToCode>";

// Compose DOCUMENT with xmlHeader (order header)
$xmlHeaderComposed="<Documents><row>".$xmlHeader."</row></Documents>";


// Here, we compose order lines
$orderLines="";
foreach ($orderLinesList as $lin) {
	$orderLines= $orderLines."<row>";
	$orderLines= $orderLines."<ItemCode>".$lin->ItemCode."</ItemCode>";
	$orderLines= $orderLines."<Quantity>".$lin->qty."</Quantity>";
	$orderLines= $orderLines."<DiscountPercent>".$lin->dsc."</DiscountPercent>";
	$orderLines= $orderLines."</row>";
}


// Compose Order Lines
$xmlorderLinesComposed="<Document_Lines>".$orderLines."</Document_Lines>";


// Finally we compose the whole order
$xmlOrderComposed="<BOM xmlns='http://www.sap.com/SBO/DIS'><BO><AdmInfo><Object>oOrders</Object></AdmInfo>".$xmlHeaderComposed.$xmlorderLinesComposed."</BO></BOM>";


?>