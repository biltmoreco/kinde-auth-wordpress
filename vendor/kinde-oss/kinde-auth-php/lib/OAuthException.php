<?php
/**
 * OAuthException
 * PHP version 7.4
 *
 * @category Class
 * @package  Kinde\KindeSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kinde Management API
 *
 * Provides endpoints to manage your Kinde Businesses
 *
 * The version of the OpenAPI document: 0.0.2
 * Contact: support@kinde.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Kinde\KindeSDK;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  Kinde\KindeSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OAuthException extends Exception
{
    public function __construct($message = "", $code = 0)
    {
        parent::__construct($message, $code);
    }
}
