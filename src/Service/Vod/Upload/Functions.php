<?php

namespace Byteplus\Service\Vod\Upload;

class Functions
{
    private $funcs = [];

    public function addGetMetaFunc()
    {
        $this->funcs[] = new FunctionInner("GetMeta", null);
    }

    public function addSnapshotTimeFunc(float $snapshotTime)
    {
        $this->funcs[] = new FunctionInner("Snapshot", new SnapshotTimeInput($snapshotTime));
    }

    public function addStartWorkflowFunc(string $templateId)
    {
        $this->funcs[] = new FunctionInner("StartWorkflow", new WorkflowInput($templateId, []));
    }

    public function addStartBatchWorkflowFunc($templateIds)
    {
        $this->funcs[] = new FunctionInner("StartWorkflow", new WorkflowInput("", $templateIds));
    }

    public function addOptionInfoFunc(OptionInfo $optionInfo)
    {
        $this->funcs[] = new FunctionInner("AddOptionInfo", $optionInfo);
    }

    public function addCaptionUploadFunc(CaptionInput $captionInput)
    {
        $this->funcs[] = new FunctionInner("CaptionUpload", $captionInput);
    }

    public function getFunctionsString(): string
    {
        return json_encode($this->funcs);
    }

}

