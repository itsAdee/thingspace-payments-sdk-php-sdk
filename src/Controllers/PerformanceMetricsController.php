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
use VerizonLib\Exceptions\EdgePerformanceResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\MECPerformanceMetrics;
use VerizonLib\Models\QueryMECPerformanceMetricsRequest;
use VerizonLib\Server;

class PerformanceMetricsController extends BaseController
{
    /**
     * Query the most recent data for Key Performance Indicators (KPIs) like network availability, MEC
     * hostnames and more.
     *
     * @param QueryMECPerformanceMetricsRequest|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function queryMECPerformanceMetrics(?QueryMECPerformanceMetricsRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/performance/device/network/metrics')
            ->server(Server::PERFORMANCE)
            ->auth('oAuth2')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request.', EdgePerformanceResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized request.', EdgePerformanceResultException::class))
            ->throwErrorOn('403', ErrorType::init('Request forbidden.', EdgePerformanceResultException::class))
            ->throwErrorOn('404', ErrorType::init('Resource Not Found.', EdgePerformanceResultException::class))
            ->throwErrorOn('405', ErrorType::init('Method Not Allowed.', EdgePerformanceResultException::class))
            ->throwErrorOn('503', ErrorType::init('Service Unavailable.', EdgePerformanceResultException::class))
            ->type(MECPerformanceMetrics::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
