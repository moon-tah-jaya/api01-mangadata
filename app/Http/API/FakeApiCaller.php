<?php
/**
 * Created by IntelliJ IDEA.
 * User: Denis
 * Date: 10/14/2017
 * Time: 2:57 PM
 */

namespace App\Http\API;


class FakeApiCaller
{
    public function getResultsForPath($path)
    {
        return [
            'status' => 200,
            'body' => json_encode([
                'error' => "Unknown API Command"
            ]),
            'headers' => [
                "Content-Type" => "application/json"
            ]
        ];
    }
}