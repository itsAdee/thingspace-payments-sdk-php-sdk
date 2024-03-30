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
use VerizonLib\Models\GetDeviceExperienceScoreBulkRequest;
use VerizonLib\Models\GetDeviceExperienceScoreHistoryRequest;
use VerizonLib\Models\GetNetworkConditionsRequest;
use VerizonLib\Models\GetWirelessCoverageRequest;
use VerizonLib\Models\WNPRequestResponse;
use VerizonLib\Server;

class WirelessNetworkPerformanceController extends BaseController
{
    /**
     * WNP Query for current network condition.
     *
     * @param GetNetworkConditionsRequest $body Request for current network health.
     *
     * @return ApiResponse Response from the API call
     */
    public function nearRealTimeNetworkConditions(GetNetworkConditionsRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/intelligence/network-conditions')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', WNPRestErrorResponseException::class))
            ->type(WNPRequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Run a report to determine network types available and available coverage. Network types covered
     * include: CAT-M, NB-IOT, LTE, LTE-AWS and 5GNW.
     *
     * @param GetWirelessCoverageRequest $body Request for network coverage details.
     *
     * @return ApiResponse Response from the API call
     */
    public function domestic4GAnd5gNationwideNetworkCoverage(GetWirelessCoverageRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/intelligence/wireless-coverage')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', WNPRestErrorResponseException::class))
            ->type(WNPRequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Identify the direction and general distance of nearby cell sites and the technology supported by the
     * equipment.
     *
     * @param GetNetworkConditionsRequest $body Request for cell site proximity.
     *
     * @return ApiResponse Response from the API call
     */
    public function siteProximity(GetNetworkConditionsRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/m2m/v1/intelligence/site-proximity/action/list'
        )
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', WNPRestErrorResponseException::class))
            ->type(WNPRequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * A report of a specific device's service scores over a 30 day period.
     *
     * @param GetDeviceExperienceScoreHistoryRequest $body Request for a device's 30 day experience.
     *
     * @return ApiResponse Response from the API call
     */
    public function deviceExperience30daysHistory(GetDeviceExperienceScoreHistoryRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/m2m/v1/intelligence/device-experience/history/30-days'
        )
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', WNPRestErrorResponseException::class))
            ->type(WNPRequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Run a report to view the latest device experience score for specific devices.
     *
     * @param GetDeviceExperienceScoreBulkRequest $body Request for bulk latest history details.
     *
     * @return ApiResponse Response from the API call
     */
    public function deviceExperienceBulkLatest(GetDeviceExperienceScoreBulkRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/m2m/v1/intelligence/device-experience/bulk/latest'
        )
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
