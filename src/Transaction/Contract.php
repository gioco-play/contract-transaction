<?php
declare(strict_types=1);
namespace GiocoPlay\Transaction;
/**
 * 交易
 */
interface Contract {

    /**
     * 錢包餘額
     * @param string $account_with_op
     * @param string $delimiter
     * @param string $wallet_code
     * @return array
     */
    function balance(string $account_with_op, string $delimiter, string $wallet_code): array;
    /**
     * 上分
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @return array
     */
    function opTransferIn(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id): array;

    /**
     * 下分
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @return array
     */
    function opTransferOut(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id): array;

    /**
     * 遊戲上分
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @return array
     */
    function gameTransferIn(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id): array;

    /**
     * 遊戲下分
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @return array
     */
    function gameTransferOut(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id): array;

    /**
     * 下注
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @param string $bet_id
     * @return array
     */
    function gameStake(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id, string $bet_id): array;

    /**
     * 派彩
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @param string $bet_id
     * @return array
     */
    function gamePayoff(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id, string $bet_id): array;

    /**
     * 取消下注
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @param string $bet_id
     * @return array
     */
    function cancelStake(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id, string $bet_id): array;

    /**
     * 取消派彩
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @param string $bet_id
     * @return array
     */
    function cancelPayoff(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id, string $bet_id): array;

    /**
     * 調整資金
     * @param string $account_with_op
     * @param string $wallet_code
     * @param float $amount
     * @param string $trace_id
     * @param string $memo
     * @return array
     */
    function adjust(string $account_with_op, string $delimiter, string $wallet_code, float $amount, string $trace_id, string $memo): array;
}

