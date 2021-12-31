<?php

namespace App\Interfaces;

interface ExchangeInterface
{
  /**
   * 為替変換メソッド
   */
  public function currencyConversion();

  /**
   * 為替単位付与メソッド
   */
  public function symbol($money);
}