<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// require_once("../app/Http/API/FakeApiCaller.php");
//require_once("../app/Models/Quote.php");
use App\Models\Quotes;
use App\Http\API\FakeApiCaller;
// use App\Http\Controllers\ArticleController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * API: Manga
 */
$router->get('api/v1/manga','MangaController@index');
$router->get('api/v1/manga/{id}','MangaController@getArticle');
$router->post('api/v1/manga','MangaController@saveArticle');
$router->put('api/v1/manga/{id}','MangaController@updateArticle');
$router->delete('api/v1/manga/{id}','MangaController@deleteArticle');


$router->group(['prefix' => 'api/'], function ($router) {
    $router->get('login/','UsersController@authenticate');
    $router->post('todo/','TodoController@store');
    $router->get('todo/', 'TodoController@index');
    $router->get('todo/{id}/', 'TodoController@show');
    $router->put('todo/{id}/', 'TodoController@update');
    $router->delete('todo/{id}/', 'TodoController@destroy');
});

/**
 * API: Articles
 */
//$router->get('api/article','ArticleController@index');
//// $router->get('api/article', ['middleware' => 'auth', 'uses' => 'ArticleController@index']);
//$router->get('api/article/{id}','ArticleController@getArticle');
//$router->post('api/article','ArticleController@saveArticle');
//$router->put('api/article/{id}','ArticleController@updateArticle');
//$router->delete('api/article/{id}','ArticleController@deleteArticle');

/**
 *  API: User Views
 */
//$router->get('/user_view', 'UserViewsController@getAllUserViews');                  //get all user defined views
//$router->post('/user_view/create', 'UserViewsController@createUserView');           //create user view
//$router->get('/user_view/{id}', 'UserViewsController@getUserViewById');             //get user view by ID
//$router->post('/user_view/save', 'UserViewsController@saveUserView');               //update user view
//$router->delete('/user_view/delete/{id}', 'UserViewsController@deleteUserView');    //delete user view


/**
 * API: Thesaurus
 */
$router->get('/thesaurus/{adjective}/Brad', function ($adjective) {
    /*return response([
        'result' => ucwords($adjective) . ' Brad'
    ]);*/

    $apiKey = getenv('THESAURUS_KEY');

    // Forever cache, because synonym lists are
    // likely never going to change
    $synonyms = Cache::rememberForever(
        $adjective,
        function() use ($adjective, $apiKey) {
            $url = sprintf(
                "http://words.bighugelabs.com/api/2/%s/%s/json",
                $apiKey,
                urlencode($adjective)
            );

            $result = json_decode(file_get_contents($url));
            // $synonyms = $result->noun->syn;
            $synonyms = $result->adjective->syn;
            return $synonyms;
        }
    );

    $synonym = $synonyms[array_rand($synonyms)];

    return response([
        'result' => ucwords($synonym) . ' Brad'
    ]);
});

/**
 * API: Quote
 * Display the today quote
 */
$router->get('/quote', function() use ($router) {

    /*
     * Picks a different quote every day
     * (for a maximum of 366 quotes)
     *
     *   - $count: the total number of available quotes
     *   - $day: the current day of the year (from 0 to 365)
     *   - $page: the page to look for to retrieve the
     *            correct record
     */
    $count = Quotes::query()->get()->count();
    $day = (int) date('z');
    $page = $day % $count + 1;

    // $quotes = Quote::query()->get()->forPage($page, 1)->all();
    $quotes = Quotes::query()->orderBy(DB::raw('RAND()'))->get()->forPage($page, 1)->all();

    if (empty($quotes)) {
        throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
    }

    // return view('quote', ['quote' => $quotes[0]]);
    return view('quote', ['quote' => $quotes[array_keys($quotes)[0]]]);
});

/**
 * Display a specific quote
 */
$router->get('/quote/{id}', function($id) use ($router) {
    $quote = Quotes::query()->findOrFail($id);
    return view('quote', ['quote' => $quote]);
});


/**
 * API: Unknown Command
 */
$router->get('{path:.*}', function ($path) use ($router)
{
    // Configure
    $cacheTtl = 60;
    $headersToPass = ['Content-Type', 'X-Pagination'];
    $rootUrl = 'https://www.erithgames.com/';

    // Run
    /*$result = Cache::remember(
        $path,
        $cacheTtl,
        function() use ($path, $router, $rootUrl)
        {
            $myCaller = new FakeApiCaller();
            return $myCaller->getResultsForPath($path);
        }
    );*/

    $myCaller = new FakeApiCaller();
    $result = $myCaller->getResultsForPath($path);

    // Return
    return response(
        $result['body'],
        $result['status'],
        array_only(
            $result['headers'], $headersToPass
        )
    );
});

/*$router->get('{path:.*}', function ($path) use ($router) {
    $cacheLengthInMinutes = 60;
    $headersToPassThrough = [
        'Content-Type',
        'X-Pagination'
    ];
    if (Cache::has($path)) {
        $result = Cache::get($path);
    } else {
        $myCaller = new fakeApiCaller;
        $result = $myCaller->getResultsForPath($path);
        Cache::put($path, $result, $cacheLengthInMinutes);
    }
    // Pass through specified headers
    $headers = [];
    foreach ($headersToPassThrough as $header_name) {
        if (array_key_exists($header_name, $result['headers'])) {
            $headers[$header_name] = $result['headers'][$header_name];
        }
    }
    return response($result['body'], $result['status'], $headers);
});*/