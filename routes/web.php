<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/index', 'index')->name('index');
    Route::get('/index2', 'index2')->name('index2');
    Route::get('/index3', 'index3')->name('index3');
    Route::get('/about', 'about')->name('about');
    Route::get('/blog2coulmn','blog2coulmn')->name('blog2coulmn');
    Route::get('/blogdetails','blogdetails')->name('blogdetails');
    Route::get('/bloggrid','bloggrid')->name('bloggrid');
    Route::get('/faq','faq')->name('faq');
    Route::get('/pricing','pricing')->name('pricing');
    Route::get('/project','project')->name('project');
    Route::get('/projectdetails','projectdetails')->name('projectdetails');
    Route::get('/service','service')->name('service');
    Route::get('/datacenter','datacenter')->name('datacenter');
    Route::get('/gemo','gemo')->name('gemo');
    Route::get('/transformer','transformer')->name('transformer');
    Route::get('/switchgear','switchgear')->name('switchgear');
    Route::get('/ss','ss')->name('ss');
    Route::get('/pumpsystem','pumpsystem')->name('pumpsystem');
    Route::get('/instrumentation','instrumentation')->name('instrumentation');
    Route::get('/cable','cable')->name('cable');
    Route::get('/tools','tools')->name('tools');
    Route::get('/projek','projek')->name('projek');
    Route::get('/servicedetails','servicedetails')->name('servicedetails');
    Route::get('/team','team')->name('team');
    Route::get('/teamdetails','teamdetails')->name('teamdetails');
    Route::get('/testimonial','testimonial')->name('testimonial');
    Route::get('/contact','contact')->name('contact');   

});