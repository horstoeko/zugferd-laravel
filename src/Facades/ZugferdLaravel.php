<?php

namespace horstoeko\zugferdlaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static createDocumentInMinimumProfile
 * @method static createDocumentInBasicProfile
 * @method static createDocumentInBasicWlProfile
 * @method static createDocumentInEN16931Profile
 * @method static createDocumentInExtendedProfile
 * @method static createDocumentInXRechnungProfile
 *
 * @see horstoeko\zugferdlaravel\ZugferdLaravel
 */
class ZugferdLaravel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zugferdlaravel';
    }
}