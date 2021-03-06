<?php

namespace Test\Request;

use DoclerLabs\ApiClientBase\Request\RequestInterface;
use DateTimeInterface;
use Test\Schema\EmbeddedObject;
use Test\Schema\PutResourceByIdRequestBody;
use DoclerLabs\ApiClientBase\Json\Json;
use DoclerLabs\ApiClientBase\Exception\RequestValidationException;
use JsonSerializable;
class PutResourceByIdRequest implements RequestInterface
{
    const ENUM_PARAMETER_ONE_VALUE = 'one value';
    const ENUM_PARAMETER_ANOTHER_VALUE = 'another value';
    const ENUM_PARAMETER_THIRD_VALUE = 'third value';
    const ALLOWED_ENUM_PARAMETER_LIST = array(self::ENUM_PARAMETER_ONE_VALUE, self::ENUM_PARAMETER_ANOTHER_VALUE, self::ENUM_PARAMETER_THIRD_VALUE);
    const MANDATORY_ENUM_PARAMETER_ONE_VALUE = 'one value';
    const MANDATORY_ENUM_PARAMETER_ANOTHER_VALUE = 'another value';
    const MANDATORY_ENUM_PARAMETER_THIRD_VALUE = 'third value';
    const ALLOWED_MANDATORY_ENUM_PARAMETER_LIST = array(self::MANDATORY_ENUM_PARAMETER_ONE_VALUE, self::MANDATORY_ENUM_PARAMETER_ANOTHER_VALUE, self::MANDATORY_ENUM_PARAMETER_THIRD_VALUE);
    /** @var int */
    private $resourceId;
    /** @var int|null */
    private $integerParameter;
    /** @var string|null */
    private $stringParameter;
    /** @var string|null */
    private $enumParameter;
    /** @var DateTimeInterface|null */
    private $dateParameter;
    /** @var float|null */
    private $floatParameter;
    /** @var bool|null */
    private $booleanParameter;
    /** @var int[]|null */
    private $arrayParameter;
    /** @var EmbeddedObject|null */
    private $objectParameter;
    /** @var int */
    private $mandatoryIntegerParameter;
    /** @var string */
    private $mandatoryStringParameter;
    /** @var string */
    private $mandatoryEnumParameter;
    /** @var DateTimeInterface */
    private $mandatoryDateParameter;
    /** @var float */
    private $mandatoryFloatParameter;
    /** @var bool */
    private $mandatoryBooleanParameter;
    /** @var int[] */
    private $mandatoryArrayParameter;
    /** @var EmbeddedObject */
    private $mandatoryObjectParameter;
    /** @var string */
    private $xRequestId;
    /** @var string|null */
    private $csrfToken;
    /** @var PutResourceByIdRequestBody */
    private $putResourceByIdRequestBody;
    /**
     * @param int $resourceId
     * @param int $mandatoryIntegerParameter
     * @param string $mandatoryStringParameter
     * @param string $mandatoryEnumParameter
     * @param DateTimeInterface $mandatoryDateParameter
     * @param float $mandatoryFloatParameter
     * @param bool $mandatoryBooleanParameter
     * @param array $mandatoryArrayParameter
     * @param EmbeddedObject $mandatoryObjectParameter
     * @param string $xRequestId
     * @param PutResourceByIdRequestBody $putResourceByIdRequestBody
    */
    public function __construct(int $resourceId, int $mandatoryIntegerParameter, string $mandatoryStringParameter, string $mandatoryEnumParameter, DateTimeInterface $mandatoryDateParameter, float $mandatoryFloatParameter, bool $mandatoryBooleanParameter, array $mandatoryArrayParameter, EmbeddedObject $mandatoryObjectParameter, string $xRequestId, PutResourceByIdRequestBody $putResourceByIdRequestBody)
    {
        $this->resourceId = $resourceId;
        $this->mandatoryIntegerParameter = $mandatoryIntegerParameter;
        $this->mandatoryStringParameter = $mandatoryStringParameter;
        if (!in_array($mandatoryEnumParameter, self::ALLOWED_MANDATORY_ENUM_PARAMETER_LIST, true)) {
            throw new RequestValidationException(sprintf('Invalid %s value. Given: `%s` Allowed: %s', 'mandatoryEnumParameter', $mandatoryEnumParameter, Json::encode(self::ALLOWED_MANDATORY_ENUM_PARAMETER_LIST)));
        }
        $this->mandatoryEnumParameter = $mandatoryEnumParameter;
        $this->mandatoryDateParameter = $mandatoryDateParameter;
        $this->mandatoryFloatParameter = $mandatoryFloatParameter;
        $this->mandatoryBooleanParameter = $mandatoryBooleanParameter;
        $this->mandatoryArrayParameter = $mandatoryArrayParameter;
        $this->mandatoryObjectParameter = $mandatoryObjectParameter;
        $this->xRequestId = $xRequestId;
        $this->putResourceByIdRequestBody = $putResourceByIdRequestBody;
    }
    /**
     * @param int $integerParameter
     * @return self
    */
    public function setIntegerParameter(int $integerParameter) : self
    {
        $this->integerParameter = $integerParameter;
        return $this;
    }
    /**
     * @param string $stringParameter
     * @return self
    */
    public function setStringParameter(string $stringParameter) : self
    {
        $this->stringParameter = $stringParameter;
        return $this;
    }
    /**
     * @param string $enumParameter
     * @return self
     * @throws RequestValidationException
    */
    public function setEnumParameter(string $enumParameter) : self
    {
        if (!in_array($enumParameter, self::ALLOWED_ENUM_PARAMETER_LIST, true)) {
            throw new RequestValidationException(sprintf('Invalid %s value. Given: `%s` Allowed: %s', 'enumParameter', $enumParameter, Json::encode(self::ALLOWED_ENUM_PARAMETER_LIST)));
        }
        $this->enumParameter = $enumParameter;
        return $this;
    }
    /**
     * @param DateTimeInterface $dateParameter
     * @return self
    */
    public function setDateParameter(DateTimeInterface $dateParameter) : self
    {
        $this->dateParameter = $dateParameter;
        return $this;
    }
    /**
     * @param float $floatParameter
     * @return self
    */
    public function setFloatParameter(float $floatParameter) : self
    {
        $this->floatParameter = $floatParameter;
        return $this;
    }
    /**
     * @param bool $booleanParameter
     * @return self
    */
    public function setBooleanParameter(bool $booleanParameter) : self
    {
        $this->booleanParameter = $booleanParameter;
        return $this;
    }
    /**
     * @param int[] $arrayParameter
     * @return self
    */
    public function setArrayParameter(array $arrayParameter) : self
    {
        $this->arrayParameter = $arrayParameter;
        return $this;
    }
    /**
     * @param EmbeddedObject $objectParameter
     * @return self
    */
    public function setObjectParameter(EmbeddedObject $objectParameter) : self
    {
        $this->objectParameter = $objectParameter;
        return $this;
    }
    /**
     * @param string $csrfToken
     * @return self
    */
    public function setCsrfToken(string $csrfToken) : self
    {
        $this->csrfToken = $csrfToken;
        return $this;
    }
    /**
     * @return string
    */
    public function getMethod() : string
    {
        return 'PUT';
    }
    /**
     * @return string
    */
    public function getRoute() : string
    {
        return strtr('v1/resources/{resourceId}', array('{resourceId}' => $this->resourceId));
    }
    /**
     * @return array
    */
    public function getQueryParameters() : array
    {
        return array_map(static function ($value) {
            return $value instanceof JsonSerializable ? json_decode(json_encode($value), false) : $value;
        }, array_filter(array('integerParameter' => $this->integerParameter, 'stringParameter' => $this->stringParameter, 'enumParameter' => $this->enumParameter, 'dateParameter' => $this->dateParameter, 'floatParameter' => $this->floatParameter, 'booleanParameter' => $this->booleanParameter, 'arrayParameter' => $this->arrayParameter, 'objectParameter' => $this->objectParameter, 'mandatoryIntegerParameter' => $this->mandatoryIntegerParameter, 'mandatoryStringParameter' => $this->mandatoryStringParameter, 'mandatoryEnumParameter' => $this->mandatoryEnumParameter, 'mandatoryDateParameter' => $this->mandatoryDateParameter, 'mandatoryFloatParameter' => $this->mandatoryFloatParameter, 'mandatoryBooleanParameter' => $this->mandatoryBooleanParameter, 'mandatoryArrayParameter' => $this->mandatoryArrayParameter, 'mandatoryObjectParameter' => $this->mandatoryObjectParameter), static function ($value) {
            return null !== $value;
        }));
    }
    /**
     * @return array
    */
    public function getCookies() : array
    {
        return array_map(static function ($value) {
            return $value instanceof JsonSerializable ? json_decode(json_encode($value), false) : $value;
        }, array_filter(array('csrf_token' => $this->csrfToken), static function ($value) {
            return null !== $value;
        }));
    }
    /**
     * @return array
    */
    public function getHeaders() : array
    {
        return array_map(static function ($value) {
            return $value instanceof JsonSerializable ? json_decode(json_encode($value), false) : $value;
        }, array_filter(array('X-Request-ID' => $this->xRequestId), static function ($value) {
            return null !== $value;
        }));
    }
    /**
     * @return PutResourceByIdRequestBody
    */
    public function getBody() : PutResourceByIdRequestBody
    {
        return $this->putResourceByIdRequestBody;
    }
}