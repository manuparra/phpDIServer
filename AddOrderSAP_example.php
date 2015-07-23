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


// Change TimeZone to here, Granada, but Madrid is Ok
date_default_timezone_set('Europe/Madrid');

require_once 'DiServerServices.php';

// Create DiServerService object
$service = new DiServerServicesSample();


//Create Login Object with Service data
$login= new Login();
$login->DataBaseServer="";
$login->DataBaseName="";
$login->DataBaseType="";
$login->DataBaseUserName=""; // string
$login->DataBasePassword=""; // string
$login->CompanyUserName=""; // string
$login->CompanyPassword=""; // string
$login->Language="23"; // string
$login->LicenseServer="HOST:30000"; // Change HOST and port


// Call to Login Service with the $login Object
$IdSession=$service->Login($login)->LoginResult;

// Check Here if $IdSession is OK. Otherwise, it had a problem 
// with login credentials


// /*To see the login LOG:*/ var_dump($IdSession);


// Create a new SAP Order
$addOrder= new AddOrder();
// Order require Valid IDSession
$addOrder->SessionID=$IdSession;

// xmlOrderComposed is defined in another file: xmlorder_var.php
// You can paste the code inside xmlorder_var.php here 

$addOrder->sXmlOrderObject=$xmlOrderComposed;

$result=$service->AddOrder($addOrder);

// In result->AddOrderResult->any and AddOrderResult 
// you have the XML SOAP code with the result of the order (ID, etc.)

//echo $result->AddOrderResult->any;


?>