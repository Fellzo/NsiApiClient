<?php


namespace Fellzo\NsiApiClient\ResponseModels;


use Carbon\Carbon;
use Doctrine\Common\Inflector\Inflector;

abstract class ResponseModel
{
    use Fillable;

    protected ResponseStatus $status;

    /**
     * Mapping for cast response fields to php values
     * Available types:
     * string
     * int
     * float
     * bool
     * datetime
     * array[Type] Type - any of other available type except array
     * Fillable class
     * @var array
     */
    protected static array $casts = [];

    public function fill(array $data)
    {
        if ( array_key_exists('result', $data) ) {
            // Preparing model ResponseStatus
            $status = new ResponseStatus();
            $status->setResult($data['result']);
            $status->setResultText($data['resultText'] ?? '');
            $status->setResultCode($data['resultCode'] ?? '');
            $this->status = $status;
            unset($data['result']);
            unset($data['resultText']);
            unset($data['resultCode']);
        }
        $this->_fill($data);
    }
}