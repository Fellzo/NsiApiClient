<?php


namespace Fellzo\NsiApiClient\ResponseModels;


class ResponseStatus
{
    private string $result;
    private string $resultText;
    private string $resultCode;

    /**
     * @return string
     */
    public function getResult() : string
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return ResponseStatus
     */
    public function setResult(string $result) : ResponseStatus
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultText() : string
    {
        return $this->resultText;
    }

    /**
     * @param string $resultText
     * @return ResponseStatus
     */
    public function setResultText(string $resultText) : ResponseStatus
    {
        $this->resultText = $resultText;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultCode() : string
    {
        return $this->resultCode;
    }

    /**
     * @param string $resultCode
     * @return ResponseStatus
     */
    public function setResultCode(string $resultCode) : ResponseStatus
    {
        $this->resultCode = $resultCode;
        return $this;
    }
}