<?php

namespace horstoeko\zugferdlaravel;

use Exception;
use horstoeko\zugferd\ZugferdDocumentBuilder;
use horstoeko\zugferd\ZugferdDocumentPdfBuilder;
use horstoeko\zugferd\ZugferdDocumentPdfMerger;
use horstoeko\zugferd\ZugferdDocumentPdfReader;
use horstoeko\zugferd\ZugferdDocumentReader;
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
        return ZugferdDocumentBuilder::createNew(ZugferdProfiles::PROFILE_MINIMUM);
    }

    /**
     * Create a new document in BASIC-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInBasicProfile(): ZugferdDocumentBuilder
    {
        return ZugferdDocumentBuilder::createNew(ZugferdProfiles::PROFILE_BASIC);
    }

    /**
     * Create a new document in BASICWL-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInBasicWlProfile(): ZugferdDocumentBuilder
    {
        return ZugferdDocumentBuilder::createNew(ZugferdProfiles::PROFILE_BASICWL);
    }

    /**
     * Create a new document in EN16931-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInEN16931Profile(): ZugferdDocumentBuilder
    {
        return ZugferdDocumentBuilder::createNew(ZugferdProfiles::PROFILE_EN16931);
    }

    /**
     * Create a new document in EXTENDED-Profile
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInExtendedProfile(): ZugferdDocumentBuilder
    {
        return ZugferdDocumentBuilder::createNew(ZugferdProfiles::PROFILE_EXTENDED);
    }

    /**
     * Create a new document in XRECHNUNG-Profile (Version 2.2)
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInXRechnung22Profile(): ZugferdDocumentBuilder
    {
        return ZugferdDocumentBuilder::createNew(ZugferdProfiles::PROFILE_XRECHNUNG_2_2);
    }

    /**
     * Create a new document in XRECHNUNG-Profile (Version 2.3)
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInXRechnung23Profile(): ZugferdDocumentBuilder
    {
        return ZugferdDocumentBuilder::createNew(ZugferdProfiles::PROFILE_XRECHNUNG_2_3);
    }

    /**
     * Create a new document in XRECHNUNG-Profile (Version 3.0)
     *
     * @return ZugferdDocumentBuilder
     */
    public function createDocumentInXRechnung30Profile(): ZugferdDocumentBuilder
    {
        return ZugferdDocumentBuilder::createNew(ZugferdProfiles::PROFILE_XRECHNUNG_3);
    }

    /**
     * Read the content of a xml file
     *
     * @param  string $xmlfilename
     * @return ZugferdDocumentReader
     * @throws Exception
     */
    public function readXmlFromFile(string $xmlfilename): ZugferdDocumentReader
    {
        return ZugferdDocumentReader::readAndGuessFromFile($xmlfilename);
    }

    /**
     * Read the content of a xml string
     *
     * @param  string $xmlcontent
     * @return ZugferdDocumentReader
     * @throws Exception
     */
    public function readXmlFromString(string $xmlcontent): ZugferdDocumentReader
    {
        return ZugferdDocumentReader::readAndGuessFromContent($xmlcontent);
    }

    /**
     * Read the content of a pdf containing the xml data (as attached file)
     *
     * @param  string $pdfFilename
     * @return ZugferdDocumentReader|null
     */
    public function readXmlFromPdfFile(string $pdfFilename): ?ZugferdDocumentReader
    {
        return ZugferdDocumentPdfReader::readAndGuessFromFile($pdfFilename);
    }

    /**
     * Create a merged PDF (XML as attachment) by the output of a ZugferdDocumentBuilder
     *
     * @param  ZugferdDocumentBuilder $zugferdDocumentBuilder
     * @param  string                 $originalPdfDataOrPdfFilename
     * @param  string                 $toPdfFilename
     * @return void
     */
    public function buildMergedPdfByDocumentBuilder(ZugferdDocumentBuilder $zugferdDocumentBuilder, string $originalPdfDataOrPdfFilename, string $toPdfFilename): void
    {
        $zugferdDocumentPdfBuilder = new ZugferdDocumentPdfBuilder($zugferdDocumentBuilder, $originalPdfDataOrPdfFilename);
        $zugferdDocumentPdfBuilder->generateDocument()->saveDocument($toPdfFilename);
    }

    /**
     * Create a merged PDF (XML as attachment) by an existing XML filename or XML-Data-String
     *
     * @param  string $xmlDataOrFilename
     * @param  string $originalPdfDataOrPdfFilename
     * @param  string $toPdfFilename
     * @return void
     */
    public function buildMergedPdfByXmlDataOrXmlFilename(string $xmlDataOrFilename, string $originalPdfDataOrPdfFilename, string $toPdfFilename): void
    {
        $zugferdPdfMerger = new ZugferdDocumentPdfMerger($xmlDataOrFilename, $originalPdfDataOrPdfFilename);
        $zugferdPdfMerger->generateDocument()->saveDocument($toPdfFilename);
    }

    /**
     * Create a merged PDF (XML as attachment) by a ZugferdDocumentBuilder or a XML filename or XML-Data-String
     *
     * @param  \horstoeko\zugferd\ZugferdDocumentBuilder|string $xmlContainer
     * @param  string                                           $originalPdfDataOrPdfFilename
     * @param  string                                           $toPdfFilename
     * @return void
     */
    public function buildMergedPdf($xmlContainer, string $originalPdfDataOrPdfFilename, string $toPdfFilename): void
    {
        if ($xmlContainer instanceof ZugferdDocumentBuilder) {
            $this->buildMergedPdfByDocumentBuilder($xmlContainer, $originalPdfDataOrPdfFilename, $toPdfFilename);
        } elseif (is_string($xmlContainer)) {
            $this->buildMergedPdfByXmlDataOrXmlFilename($xmlContainer, $originalPdfDataOrPdfFilename, $toPdfFilename);
        }
    }
}
