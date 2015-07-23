<?php

/*
The MIT License (MIT)

Copyright (c) 2013 Manuel Parra (manuparra@gmail.com)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
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