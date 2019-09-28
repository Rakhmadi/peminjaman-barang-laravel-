<?php

use Illuminate\Http\Request;
use App\indexing;
use App\isi;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/Srts','ini_control@createSurat');
Route::get('n', function () {
    return indexing::with('isi')->get();
});
Route::post('d/$data', function (Request $r,$data) {
$j = new App\isi([
    'namaaset' => $r->namaaset,
    'noaset' => $r->noaset,
    'spc' => $r->spc,
    'lem' => $r->lem,
    'ket' => $r->ket,
    'code' => $r->code,
    ]);
$n=$r->code;
$post = indexing::find($data);
$post->isi()->save($j);
});

Route::get('n', function () {
    return indexing::with('isi')->get();
});
Route::get('/g/{code}' ,'ini_control@h')->name('g');