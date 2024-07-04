<?php

namespace Byteplus\Service\Vod\Upload;

class WorkflowInput
{
    public $TemplateId;
    public $TemplateIds;

    /**
     * WorkflowInput constructor.
     * @param $TemplateId
     */
    public function __construct($TemplateId, $TemplateIds = [])
    {
        $this->TemplateId = $TemplateId;
        $this->TemplateIds = $TemplateIds;
    }

}