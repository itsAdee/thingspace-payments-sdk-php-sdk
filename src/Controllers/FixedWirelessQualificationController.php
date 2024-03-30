<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\WNPRestErrorResponseException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\GetWirelessCoverageRequestFWA;
use VerizonLib\Models\WNPRequestResponse;
use VerizonLib\Server;

class FixedWirelessQualificationController extends BaseController
{
    /**
     * Use this query for Fixed Wireless Qualification of an address. Network types include: LTE, C-BAND
     * and MMWAVE.
     *
     * @param GetWirelessCoverageRequestFWA $body Request for network coverage details.
     *
     * @return ApiResponse Response from the API call
     */
    public function domestic4GAnd5gFixedWirelessQualification(GetWirelessCoverageRequestFWA $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/intelligence/wireless-coverage')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', WNPRestErrorResponseException::class))
            ->type(WNPRequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
