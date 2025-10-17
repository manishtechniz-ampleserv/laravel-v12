<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\TestJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/test', function (Request $request) {
    dump(unserialize('a:4:{s:6:"_token";s:40:"oLNqFo6R59c7nzryE6GrhOuzsU9Z222H92RrWFtf";s:6:"_cache";a:1:{s:19:"name_from_database2";a:2:{s:5:"value";s:13:"Test database";s:9:"expiresAt";d:1760360695.394;}}s:9:"_previous";a:1:{s:3:"url";s:36:"http://localhost/test-laravel/public";}s:6:"_flash";a:2:{s:3:"old";a:0:{}s:3:"new";a:0:{}}}')) ;

    dump(unserialize('a:5:{s:6:"_token";s:40:"vaze8g3j54TKG8hwUSLDbSqEta8sbfVC8GQjiBnK";s:9:"_previous";a:1:{s:3:"url";s:36:"http://localhost/test-laravel/public";}s:6:"_flash";a:2:{s:3:"old";a:0:{}s:3:"new";a:0:{}}s:14:"name_from_file";s:9:"test-file";s:6:"_cache";a:1:{s:18:"name_from_database";a:2:{s:5:"value";s:13:"Test database";s:9:"expiresAt";d:1760360628.751;}}}')) ;

    dump(session()->cache()->get('name_from_database2'));
    dump(decrypt('eyJpdiI6Ill2V1ZRVmpTaDFaVUxKTHJ6NFR1TEE9PSIsInZhbHVlIjoiZnVDYmE2WUZ4eGlHRnNvdkNkKzFOTUtVcUEwYmxXa294VjN1VFVYUUdDQmFuNjVmR0xoeVllVXRXZVdUUlYwUEJaWmI5aHhTK0FUU2tJU1NXcTBXeDhpRENzcWJ3UTFzK1JkLzdBUWJhL1p6SDdzeWpvV3BjVHNRdzhRelNMR2giLCJtYWMiOiIwOTFjZTcwM2NlMTU3NGM3NjgzZTdiNTQ1MTJlMjU0NjUzYTRkMDIyZGM2NzgyM2Q4Njk5MThmZmNkMWE0ZjJkIiwidGFnIjoiIn0', false));

    dd(decrypt('fcbb1c4927db6972680fa2398805027ce5a12218|F9rGBPUh4MMcwaS0IUyx2TFamsOe8pN1ruVgR9G1', true));
});

Route::get('/', function (Request $request) {
     echo 'This is welcome ppage';
});

Route::get('/dispatch-job', function () {
    TestJob::dispatch('Log-CHG-2');
    echo 'Job dispatched!';

});
