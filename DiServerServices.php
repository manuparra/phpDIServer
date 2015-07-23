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


class Login {
  public $DataBaseServer; // string
  public $DataBaseName; // string
  public $DataBaseType; // string
  public $DataBaseUserName; // string
  public $DataBasePassword; // string
  public $CompanyUserName; // string
  public $CompanyPassword; // string
  public $Language; // string
  public $LicenseServer; // string
}

class LoginResponse {
  public $LoginResult; // string
}

class LogOut {
  public $sSessionID; // string
}

class LogOutResponse {
  public $LogOutResult; // string
}

class GetEmptyQuotationXml {
  public $sSessionID; // string
}

class GetEmptyQuotationXmlResponse {
  public $GetEmptyQuotationXmlResult; // GetEmptyQuotationXmlResult
}

class GetEmptyQuotationXmlResult {
  public $any; // <anyXML>
}

class GetEmptyOrderXml {
  public $sSessionID; // string
}

class GetEmptyOrderXmlResponse {
  public $GetEmptyOrderXmlResult; // GetEmptyOrderXmlResult
}

class GetEmptyOrderXmlResult {
  public $any; // <anyXML>
}

class GetRecordsetXml {
  public $sSessionID; // string
  public $sSQL; // string
}

class GetRecordsetXmlResponse {
  public $GetRecordsetXmlResult; // GetRecordsetXmlResult
}

class GetRecordsetXmlResult {
  public $any; // <anyXML>
}

class AddQuotation {
  public $SessionID; // string
  public $sXmlQuotationObject; // string
}

class AddQuotationResponse {
  public $AddQuotationResult; // AddQuotationResult
}

class AddQuotationResult {
  public $any; // <anyXML>
}

class AddOrder {
  public $SessionID; // string
  public $sXmlOrderObject; // string
}

class AddOrderResponse {
  public $AddOrderResult; // AddOrderResult
}

class AddOrderResult {
  public $any; // <anyXML>
}

class UpdateQuotation {
  public $sSessionID; // string
  public $sXmlQuotationObject; // string
}

class UpdateQuotationResponse {
  public $UpdateQuotationResult; // UpdateQuotationResult
}

class UpdateQuotationResult {
  public $any; // <anyXML>
}

class AddOrder_DI {
  public $sSessionID; // string
  public $dsOrder; // dsOrder
}

class dsOrder {
  public $schema; // <anyXML>
  public $any; // <anyXML>
}

class AddOrder_DIResponse {
  public $AddOrder_DIResult; // AddOrder_DIResult
}

class AddOrder_DIResult {
  public $schema; // <anyXML>
  public $any; // <anyXML>
}

class ConsultaCliente {
  public $sSessionID; // string
  public $sCliente; // string
}

class ConsultaClienteResponse {
  public $ConsultaClienteResult; // ConsultaClienteResult
}

class ConsultaClienteResult {
  public $schema; // <anyXML>
  public $any; // <anyXML>
}


/**
 * DiServerServicesSample class
 * 
 *  
 * 
 * @author    Manuel Parra
 * @copyright 2013
 * @package   DiServerBO
 */
class DiServerServicesSample extends SoapClient {

  private static $classmap = array(
                                    'Login' => 'Login',
                                    'LoginResponse' => 'LoginResponse',
                                    'LogOut' => 'LogOut',
                                    'LogOutResponse' => 'LogOutResponse',
                                    'GetEmptyQuotationXml' => 'GetEmptyQuotationXml',
                                    'GetEmptyQuotationXmlResponse' => 'GetEmptyQuotationXmlResponse',
                                    'GetEmptyQuotationXmlResult' => 'GetEmptyQuotationXmlResult',
                                    'GetEmptyOrderXml' => 'GetEmptyOrderXml',
                                    'GetEmptyOrderXmlResponse' => 'GetEmptyOrderXmlResponse',
                                    'GetEmptyOrderXmlResult' => 'GetEmptyOrderXmlResult',
                                    'GetRecordsetXml' => 'GetRecordsetXml',
                                    'GetRecordsetXmlResponse' => 'GetRecordsetXmlResponse',
                                    'GetRecordsetXmlResult' => 'GetRecordsetXmlResult',
                                    'AddQuotation' => 'AddQuotation',
                                    'AddQuotationResponse' => 'AddQuotationResponse',
                                    'AddQuotationResult' => 'AddQuotationResult',
                                    'AddOrder' => 'AddOrder',
                                    'AddOrderResponse' => 'AddOrderResponse',
                                    'AddOrderResult' => 'AddOrderResult',
                                    'UpdateQuotation' => 'UpdateQuotation',
                                    'UpdateQuotationResponse' => 'UpdateQuotationResponse',
                                    'UpdateQuotationResult' => 'UpdateQuotationResult',
                                    'AddOrder_DI' => 'AddOrder_DI',
                                    'dsOrder' => 'dsOrder',
                                    'AddOrder_DIResponse' => 'AddOrder_DIResponse',
                                    'AddOrder_DIResult' => 'AddOrder_DIResult',
                                    'ConsultaCliente' => 'ConsultaCliente',
                                    'ConsultaClienteResponse' => 'ConsultaClienteResponse',
                                    'ConsultaClienteResult' => 'ConsultaClienteResult',
                                   );

// This is the most important thing in this file: WSDL service discover URL.  
// Use your own URL for WSDL services.
public function DiServerServicesSample($wsdl = "http://YOURSAPBOHOST/wsSalesQuotation/DiServerServices.asmx?WSDL", $options = array()) {    
	foreach(self::$classmap as $key => $value) {
      		if(!isset($options['classmap'][$key])) {
        	$options['classmap'][$key] = $value;
      	}
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Login to company 
   *
   * @param Login $parameters
   * @return LoginResponse
   */
  public function Login(Login $parameters) {
    return $this->__soapCall('Login', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * LogOut to company 
   *
   * @param LogOut $parameters
   * @return LogOutResponse
   */
  public function LogOut(LogOut $parameters) {
    return $this->__soapCall('LogOut', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get an XML document of an empty Quotation object 
   *
   * @param GetEmptyQuotationXml $parameters
   * @return GetEmptyQuotationXmlResponse
   */
  public function GetEmptyQuotationXml(GetEmptyQuotationXml $parameters) {
    return $this->__soapCall('GetEmptyQuotationXml', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get an XML document of an empty Quotation object 
   *
   * @param GetEmptyOrderXml $parameters
   * @return GetEmptyOrderXmlResponse
   */
  public function GetEmptyOrderXml(GetEmptyOrderXml $parameters) {
    return $this->__soapCall('GetEmptyOrderXml', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get an XML document of an empty Recordset object 
   *
   * @param GetRecordsetXml $parameters
   * @return GetRecordsetXmlResponse
   */
  public function GetRecordsetXml(GetRecordsetXml $parameters) {
    return $this->__soapCall('GetRecordsetXml', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add Sales Quotation 
   *
   * @param AddQuotation $parameters
   * @return AddQuotationResponse
   */
  public function AddQuotation(AddQuotation $parameters) {
    return $this->__soapCall('AddQuotation', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add Sales Order 
   *
   * @param AddOrder $parameters
   * @return AddOrderResponse
   */
  public function AddOrder(AddOrder $parameters) {
    return $this->__soapCall('AddOrder', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update Quotation object 
   *
   * @param UpdateQuotation $parameters
   * @return UpdateQuotationResponse
   */
  public function UpdateQuotation(UpdateQuotation $parameters) {
    return $this->__soapCall('UpdateQuotation', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add Sales Order DI 
   *
   * @param AddOrder_DI $parameters
   * @return AddOrder_DIResponse
   */
  public function AddOrder_DI(AddOrder_DI $parameters) {
    return $this->__soapCall('AddOrder_DI', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

  /**
   * ConsultaCliente 
   *
   * @param ConsultaCliente $parameters
   * @return ConsultaClienteResponse
   */
  public function ConsultaCliente(ConsultaCliente $parameters) {
    return $this->__soapCall('ConsultaCliente', array($parameters),       array(
            'uri' => 'http://tempuri.org/wsSalesQuotation/Service1',
            'soapaction' => ''
           )
      );
  }

}

?>
