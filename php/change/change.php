<?php
    
    /**
     * @throws Exception
     */
    function findFewestCoins(array $coins, int $change): array
    {
        arsort($coins);
        
        if ($change <= 0) {
            throw new InvalidArgumentException('Cannot make change for negative value');
        }
        
        if (min($coins) > $change) {
            throw new InvalidArgumentException('No coins small enough to make change');
        }
        
        $response = calculateChange($coins, $change);
        
        if (empty($response)) {
            throw new InvalidArgumentException('No combination can add up to target');
        }
        
        if (count($response) > 1) {
            array_shift($coins);
            
            foreach ($coins as $key => $coin) {
                $changeCoins = calculateChange($coins, $change, count($response));
                
                if ($changeCoins) {
                    $response = $changeCoins;
                }
                
                unset($coins[$key]);
            }
        }
        
        return $response;
    }
    
    function calculateChange(array $coins, int $change, int $limit = null): ?array
    {
        $response = [];
        
        while ($change > 0 && !empty($coins)) {
            $maxCoin = max($coins);
            
            if ($maxCoin > $change) {
                unset($coins[array_search($maxCoin, $coins, true)]);
            } else {
                $change -= $maxCoin;
                
                $response[] = $maxCoin;
            }
            
            if ($limit !== null && count($response) > $limit) {
                break;
            }
        }
        
        sort($response);
        
        return ($change === 0) ? $response : [];
    }