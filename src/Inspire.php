<?php
namespace Prdpspkt\Inspire;
use Illuminate\Support\Facades\Http;
class Inspire
{
    public function getQuote(): string
    {
        $response = Http::get("https://inspiration.goprogram.ai/");
        return $response['quote']."-".$response['author'];
    }

}
