<?php

namespace horstoeko\zugferdlaravel;

use horstoeko\zugferd\ZugferdDocumentBuilder;
use horstoeko\zugferd\ZugferdProfiles;

class ZugferdLaravel
{
    /**
     * Create a new document in MINUMUM-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInMinimumProfile(): ZugferdDocumentBuilder
    {
        return new ZugferdDocumentBuilder(ZugferdProfiles::PROFILE_MINIMUM);
    }

    /**
     * Create a new document in BASIC-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInBasicProfile(): ZugferdDocumentBuilder
    {
        return new ZugferdDocumentBuilder(ZugferdProfiles::PROFILE_BASIC);
    }

    /**
     * Create a new document in BASICWL-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInBasicWlProfile(): ZugferdDocumentBuilder
    {
        return new ZugferdDocumentBuilder(ZugferdProfiles::PROFILE_BASICWL);
    }

    /**
     * Create a new document in EN16931-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInEN16931Profile(): ZugferdDocumentBuilder
    {
        return new ZugferdDocumentBuilder(ZugferdProfiles::PROFILE_EN16931);
    }

    /**
     * Create a new document in EXTENDED-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInExtendedProfile(): ZugferdDocumentBuilder
    {
        return new ZugferdDocumentBuilder(ZugferdProfiles::PROFILE_EXTENDED);
    }

    /**
     * Create a new document in EXTENDED-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInXRechnungProfile(): ZugferdDocumentBuilder
    {
        return new ZugferdDocumentBuilder(ZugferdProfiles::PROFILE_XRECHNUNG_2_2);
    }
}