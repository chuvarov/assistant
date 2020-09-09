<?php

namespace Chuvarov\Helpers;

class StringHelper
{
    /**
     * @param string $offer
     * @return string
     */
    public static function sortOffer(string $offer): string
    {
        $offer = explode(' ', $offer);
        foreach ($offer as $key => $item) {
            $offer[$key] = self::sortWord($item);
        }
        return implode(' ', $offer);
    }

    /**
     * @param string $word
     * @return string
     */
    public static function sortWord(string $word): string
    {
        $word = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
        sort($word);
        return implode('', $word);
    }
}