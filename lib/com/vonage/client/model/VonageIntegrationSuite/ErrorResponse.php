<?php
/**
 * ErrorResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VonageIntegrationSuite
 *
 * __Vonage® Integration Suite__ powered by __gUnify&trade;__.  --------------------------------
 *
 * OpenAPI spec version: v1
 * Contact: gunifydevops@vonage.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com.vonage.client.model.VonageIntegrationSuite;

use \ArrayAccess;

/**
 * ErrorResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ErrorResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ErrorResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'error_code' => 'string',
        'error_message' => 'string',
        'errors' => '\com.vonage.client.model.VonageIntegrationSuite\Error[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'error_code' => 'errorCode',
        'error_message' => 'errorMessage',
        'errors' => 'errors'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'error_code' => 'setErrorCode',
        'error_message' => 'setErrorMessage',
        'errors' => 'setErrors'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'error_code' => 'getErrorCode',
        'error_message' => 'getErrorMessage',
        'errors' => 'getErrors'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets error_code
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     * @param string $error_code
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param string $error_message
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets errors
     * @return \com.vonage.client.model.VonageIntegrationSuite\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     * @param \com.vonage.client.model.VonageIntegrationSuite\Error[] $errors
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


