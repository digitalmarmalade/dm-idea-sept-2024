<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class badgesController extends Controller
{
    /**
     * check to see if we have a controller specifically for this badge.
     * if so then use it otherwise use the default badge controller.
     *
     * @return controller
     */
    public function __construct(Request $request)
    {
        $badgeSlug = call_user_func($request->getRouteResolver())->parameters()['badgeSlug'];

        $thisControllerPath = '\App\Http\Controllers\\'.$this->getControllerPrefixFromSlug($badgeSlug).'Controller';

        $defaultControllerPath = '\App\Http\Controllers\\defaultBadgeController';

        if (class_exists($thisControllerPath)) {
            $this->controller = App()->make($thisControllerPath);
        } else {
            $this->controller = App()->make($defaultControllerPath);
        }

        return $this->controller;
    }

    /**
     * convert a slug into it's lower camelcase version.
     *
     * @param mixed $slug
     *
     * @return string
     */
    public function getControllerPrefixFromSlug($slug)
    {
        $controllerPrefix = $slug;
        $controllerPrefix = str_replace('-', ' ', $controllerPrefix);
        $controllerPrefix = ucwords($controllerPrefix);
        $controllerPrefix = str_replace(' ', '', $controllerPrefix);

        return strtolower(substr($controllerPrefix, 0, 1)).substr($controllerPrefix, 1);
    }

    /**
     * handle routing to the steps
     * if the badge controller has a method set for this step then use it
     * otherwise forward to default stepr method.
     *
     * @param mixed      $badgeSlug
     * @param mixed      $step
     * @param null|mixed $unit
     */
    public function step(Request $request, $badgeSlug, $step, $unit = null)
    {
        if (method_exists($this->controller, 'step'.$step)) {
            $method = 'step'.$step;

            return $this->controller->{$method}($badgeSlug, $step);
        }

        return $this->controller->step($request, $badgeSlug, $step, $unit);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     * @param mixed $slugs
     */
    public function api(Request $request, $badgeSlug, $slugs)
    {
        return $this->controller->api($request, $badgeSlug, $slugs);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function apiDump(Request $request, $badgeSlug)
    {
        return $this->controller->apiDump($request, $badgeSlug);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function authCallback(Request $request, $badgeSlug)
    {
        return $this->controller->authCallback($request, $badgeSlug);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function authLogin(Request $request, $badgeSlug)
    {
        return $this->controller->authLogin($request, $badgeSlug);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function authLogout(Request $request, $badgeSlug)
    {
        return $this->controller->authLogout($request, $badgeSlug);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     * @param mixed $slugs
     */
    public function catchall(Request $request, $badgeSlug, $slugs)
    {
        return $this->controller->catchall($request, $badgeSlug, $slugs);
    }

    /**
     * forward to assocaited controller method.
     */
    public function getBadgeViewDir()
    {
        return $this->controller->getBadgeViewDir();
    }

    /**
     * forward to assocaited controller method.
     *
     * @param null|mixed $step
     * @param null|mixed $unit
     */
    public function getLinks($step = null, $unit = null)
    {
        return $this->controller->getLinks($step, $unit);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function getNumberOfSteps($badgeSlug)
    {
        return $this->controller->getNumberOfSteps($badgeSlug);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param null|mixed $step
     */
    public function getProgress($step = null)
    {
        return $this->controller->getProgress($step);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function home($badgeSlug, Request $request)
    {
        return $this->controller->home($badgeSlug, $request);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     * @param mixed $step
     * @param mixed $overlay
     */
    public function overlay($badgeSlug, $step, $overlay)
    {
        return $this->controller->overlay($badgeSlug, $step, $overlay);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function publish(Request $request, $badgeSlug)
    {
        return $this->controller->publish($request, $badgeSlug);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function sendDataToApi(Request $request, $badgeSlug)
    {
        return $this->controller->sendUserData($request, $badgeSlug);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $result
     */
    public function sendPassToApi($result = 'pass')
    {
        return $this->controller->sendPassToApi($result);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     * @param mixed $result
     */
    public function submit(Request $request, $badgeSlug, $result = 'pass')
    {
        return $this->controller->submit($request, $badgeSlug, $result);
    }

    /**
     * forward to assocaited controller method.
     *
     * @param mixed $badgeSlug
     */
    public function success(Request $request, $badgeSlug)
    {
        return $this->controller->success($request, $badgeSlug);
    }
}
