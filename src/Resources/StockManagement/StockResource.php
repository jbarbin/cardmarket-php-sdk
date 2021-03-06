<?php
declare(strict_types=1);

namespace Mamoot\CardMarket\Resources\StockManagement;

use Mamoot\CardMarket\Resources\HttpCaller;

/**
 * Class StockInShoppingCartsResource
 *
 * @package Mamoot\CardMarket\Resources\StockManagement
 *
 * @author Nicolas Perussel <nicolas.perussel@gmail.com>
 */
final class StockResource extends HttpCaller
{
    /**
     * Retrieves all articles in the authenticated user's stock.
     *
     * @param int $start
     *
     * @return array
     * @throws \Exception
     */
    public function getStock(int $start = 1): array
    {
        return $this->get(sprintf('/stock/%d', $start));
    }

    /**
     * Retrieve the CSV content from your own stock by Game Id.
     *
     * @param int $gameId
     * @param bool $isSealed
     * @param int $idLanguage
     *
     * @return array
     * @throws \Exception
     */
    public function getStockFile(int $gameId, bool $isSealed = false, int $idLanguage = 1): array
    {
        return $this->get(sprintf('/stock/file?idGame=%d&isSealed=%s&idLanguage=%d', $gameId, $isSealed, $idLanguage));
    }
}
