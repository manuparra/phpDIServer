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