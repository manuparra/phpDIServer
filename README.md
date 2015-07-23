# phpDIServer

The DI Server enables business partners to develop SOAP-based solutions to read, write, update, and remove data objects on the database level. It provides a suitable infrastructure for server-oriented partner solutions

SAP Business One DI Server (Data Interface Server) is a Component Object Model (COM) service running on a server that enables multiple clients to access and manipulate SAP Business One company database, using SOAP version 1.1 messages.

**phpDiServer** is a multifunctional  wrapper to integrate SAP BO and DIServer with your application in PHP.
With this code (AddOrderSap.php), you can develop and integrate on PHP multiple functions avaliables in DIServer

## Functionality included

-  Login 
-  LoginResponse 
-  LogOut 
-  LogOutResponse 
-  GetEmptyQuotationXml  
-  GetEmptyQuotationXmlResponse  
-  GetEmptyQuotationXmlResult  
-  GetEmptyOrderXml  
-  GetEmptyOrderXmlResponse  
-  GetEmptyOrderXmlResult  
-  GetRecordsetXml  
-  GetRecordsetXmlResponse  
-  GetRecordsetXmlResult  
-  AddQuotation  
-  AddQuotationResponse 
-  AddQuotationResult  
-  AddOrder  
-  AddOrderResponse  
-  AddOrderResult  
-  UpdateQuotation  
-  UpdateQuotationResponse  
-  UpdateQuotationResult  
-  AddOrder_DI  
-  dsOrder  
-  AddOrder_DIResponse 
-  AddOrder_DIResult   

## Requirements

phpDiServer works with PHP >=5 and SOAP 1.1 / 1.2 and it can be used in WSDL or non-WSDL mode. 

## Setup

Change line 200 in DIServerService.php, use your SAP BO DiServerServices URL for WDSL, or modify YOURSAPBOHOST

 ```php
$wsdl = "http://YOURSAPBOHOST/wsSalesQuotation/DiServerServices.asmx?WSDL"
```

## Usage

This is a simple example of usage where we use:

- LOGIN  (Login)
- NEW ORDER (AddOrder)

 ```php
require_once 'DiServerServices.php';

// Create DiServerService object
$service = new DiServerServicesSample();

// Create Login Object with Service data
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

// Create a new SAP Order
$addOrder= new AddOrder();
// Order require Valid IDSession
$addOrder->SessionID=$IdSession;

// xmlOrderComposed is defined in another file: xmlorder_var.php 
// please see xmlorder_var.php, yo know how you can compose a XML order for 
// DiServer in SAP BO
// You can paste the code in xmlorder_var.php here 

$addOrder->sXmlOrderObject=$xmlOrderComposed;

$result=$service->AddOrder($addOrder);

// In result->AddOrderResult->any and AddOrderResult 
// you have the XML SOAP code with the result of the order (ID, etc.)

//echo $result->AddOrderResult->any;
```

## License

The MIT License (MIT)
