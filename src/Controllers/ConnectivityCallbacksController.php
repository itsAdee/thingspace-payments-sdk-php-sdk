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
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\ConnectivityManagementResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\CallbackActionResult;
use VerizonLib\Models\ConnectivityManagementCallback;
use VerizonLib\Models\RegisterCallbackRequest;
use VerizonLib\Server;

class ConnectivityCallbacksController extends BaseController
{
    /**
     * Returns the name and endpoint URL of the callback listening services registered for a given account.
     *
     * @param string $aname Account name.
     *
     * @return ApiResponse Response from the API call
     */
    public function listRegisteredCallbacks(string $aname): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v1/callbacks/{aname}')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(TemplateParam::init('aname', $aname));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(ConnectivityManagementCallback::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * You are responsible for creating and running a listening process on your server at that URL.
     *
     * @param string $aname Account name.
     * @param RegisterCallbackRequest $body Request to register a callback.
     *
     * @return ApiResponse Response from the API call
     */
    public function registerCallback(string $aname, RegisterCallbackRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/callbacks/{aname}')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(
                TemplateParam::init('aname', $aname),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(CallbackActionResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Stops ThingSpace from sending callback messages for the specified account and service.
     *
     * @param string $aname Account name.
     * @param string $sname Service name.
     *
     * @return ApiResponse Response from the API call
     */
    public function deregisterCallback(string $aname, string $sname): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/m2m/v1/callbacks/{aname}/name/{sname}')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(TemplateParam::init('aname', $aname), TemplateParam::init('sname', $sname));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(CallbackActionResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
