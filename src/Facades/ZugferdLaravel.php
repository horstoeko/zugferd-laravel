<?php

namespace horstoeko\zugferdlaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \horstoeko\zugferd\ZugferdDocumentBuilder createDocumentInMinimumProfile
 * @method static \horstoeko\zugferd\ZugferdDocumentBuilder createDocumentInBasicProfile
 * @method static \horstoeko\zugferd\ZugferdDocumentBuilder createDocumentInBasicWlProfile
 * @method static \horstoeko\zugferd\ZugferdDocumentBuilder createDocumentInEN16931Profile
 * @method static \horstoeko\zugferd\ZugferdDocumentBuilder createDocumentInExtendedProfile
 * @method static \horstoeko\zugferd\ZugferdDocumentBuilder createDocumentInXRechnungProfile
 * @method static \horstoeko\zugferd\ZugferdDocumentReader readXmlFromFile(string $xmlfilename)
 * @method static \horstoeko\zugferd\ZugferdDocumentReader readXmlFromString(string $xmlcontent)
 * @method static \horstoeko\zugferd\ZugferdDocumentReader|null readXmlFromPdfFile(string $pdfFilename)
 * @method static void buildMergedPdfByDocumentBuilder(ZugferdDocumentBuilder $zugferdDocumentBuilder, string $originalPdfDataOrPdfFilename, string $toPdfFilename)
 * @method static void buildMergedPdfByXmlDataOrXmlFilename(string $xmlDataOrFilename, string $originalPdfDataOrPdfFilename, string $toPdfFilename)
 * @method static void buildMergedPdf(mixed $xmlContainer, string $originalPdfDataOrPdfFilename, string $toPdfFilename)
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
