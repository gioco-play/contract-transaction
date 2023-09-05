<?php
declare(strict_types=1);
namespace GiocoPlus\Transaction\TransactionStruct;

class TransactionWithBetlogStruct
{
    /**
     * @var string
     */
    public $transType;

    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $betId;

    /**
     * @var array
     */
    public $betlog;

    /**
     * @var bool
     */
    public $allowBalanceMinus;

    public function __construct(
        string $transType = '',
        float $amount = 0,
        string $traceId = '',
        string $betId = '',
        array $betlog = [],
        bool $allowBalanceMinus = false
    ) {
        $this->transType = $transType;
        $this->amount = $amount;
        $this->traceId = $traceId;
        $this->betId = $betId;
        $this->betlog = $betlog;
        $this->allowBalanceMinus = $allowBalanceMinus;
    }

    public static function toObject(array $arr): TransactionWithBetlogStruct
    {
        $struct = new TransactionWithBetlogStruct();
        foreach ($arr as $k => $v) {
            $struct->$k = $v;
        }
        return $struct;
    }
}
