<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    if (Auth::user()) {
        return redirect('/resume');
    }
//    return view('welcome');
    return redirect('/blog');
});

Auth::routes();

Route::get('/home', function() {
    return redirect('/resume');
});

Route::get('/getuser', 'ProfileController@getUser');
//live editor page
Route::get('/free-ebook', function() {
    return view('live.ebook');
});
Route::get('/5-video-rahsia321-123temuduga-dari765-921pasukan-hr03254', function() {
    return view('live.video');
});
Route::get('/6-nota-kerjaya-cemerlang', function() {
    return view('live.nota');
});
Route::get('/affiliate', function() {
    return view('live.affiliate');
});
Route::get('/download-15-soalan-killer', function() {
    return view('live.killer');
});

Route::get('//terima-kasih', function() {
    return view('live.terima');
});
Route::get('/video-interview', function() {
    return view('live.interview');
});
Route::get('/video-is', function() {
    return view('live.test');
});
//first time login
Route::post('/detail', 'ProfileController@detailInsert');
Route::post('/contact', 'ProfileController@contactInsert');
Route::post('/work', 'ProfileController@workInsert');
Route::post('/education', 'ProfileController@educationInsert');
Route::post('/skill', 'ProfileController@skillInsert');
Route::post('/language', 'ProfileController@languageInsert');
Route::post('/award', 'ProfileController@awardInsert');

//update info
Route::group(['prefix' => 'update'], function() {
    Route::patch('/detail', 'ProfileController@detailUpdate');
    Route::patch('/experience/{id}', 'ProfileController@workUpdate');
    Route::patch('/education/{id}', 'ProfileController@eduUpdate');
    Route::patch('/skill/{id}', 'ProfileController@skillUpdate');
    Route::patch('/language/{id}', 'ProfileController@languageUpdate');
    Route::patch('/award/{id}', 'ProfileController@awardUpdate');
});

Route::get('/profile', 'ResumeController@index');
Route::get('/pdf', 'ResumeController@pdf');
Route::get('/edit/detail', 'ResumeController@detail');

//social network auth
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
//setting
Route::group(['prefix' => 'setting', 'middleware' => 'auth'], function() {
    Route::get('/', 'SettingController@index');
});

//user info
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    Route::get('/detail', 'ProfileController@getDetail');
    Route::get('/experience', 'ProfileController@getExperience');
    Route::get('/experience/{id}', 'ProfileController@getExperienceById');
    Route::get('/education', 'ProfileController@getEducation');
    Route::get('/education/{id}', 'ProfileController@getEducationById');
    Route::get('/skill', 'ProfileController@getSkill');
    Route::get('/skill/{id}', 'ProfileController@getSkillById');
    Route::get('/language', 'ProfileController@getLanguage');
    Route::get('/language/{id}', 'ProfileController@getLanguageById');
    Route::get('/award', 'ProfileController@getAward');
    Route::get('/avatar', 'ProfileController@getAvatar');
    Route::get('/award/{id}', 'ProfileController@getAwardById');
});
//delete
Route::group(['prefix' => 'delete'], function() {
    Route::get('/work/{id}', 'ProfileController@workDelete');
    Route::get('/edu/{id}', 'ProfileController@eduDelete');
    Route::get('/skill/{id}', 'ProfileController@skillDelete');
    Route::get('/language/{id}', 'ProfileController@languageDelete');
    Route::get('/award/{id}', 'ProfileController@awardDelete');
});
//billplz
Route::group(['prefix' => 'payment', 'middleware' => 'auth'], function() {
    Route::get('/bill/{coupun}', 'SubscriptionController@subscription');
    Route::get('/callback', 'SubscriptionController@callback');
});

//resume
Route::group(['prefix' => 'resume'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/preview/{resume}', 'ResumeController@preview');
    Route::get('/generate/{resume}', 'ResumeController@generate');
    Route::get('/color/{resume}/{color}', 'ResumeController@changeColor');
});
//coverletter
Route::group(['prefix' => 'letter'], function() {
    Route::get('/', 'LetterController@index');
  Route::post('info', 'LetterController@insert');
  Route::get('/data', 'LetterController@getData');
  Route::patch('/dat', 'LetterController@update');
  Route::get('/preview/{letter}', 'LetterController@preview');
  Route::get('/generate/{letter}', 'LetterController@generate');

});
//afiliates
Route::group(['prefix' => 'affiliates'], function() {
    Route::get('/', 'AffiliateController@index');
    Route::get('/profile', 'AffiliateController@register');
    Route::patch('/profile/{id}', 'AffiliateController@update');
    Route::post('/register', 'AffiliateController@create');
    Route::get('/jualan', 'AffiliateController@jualan');
    Route::get('/komisyen', 'AffiliateController@komisyen');
    Route::get('/tool', 'AffiliateController@tool');
    Route::get('/tool/{file}', 'AffiliateController@download_tool');
    Route::post('/upload', 'AffiliateController@upload_gambar');
});
Route::get('/ref/{username}', 'AffiliateController@referral');
Route::get('/mail', function() {
    return view('mail.verify');
});
Route::get('/testmail', 'AffiliateController@mail');
Route::get('/verify/request', 'HomeController@sendVerify');
Route::get('/verify/{code}', 'Auth\RegisterController@verifyAccount');
Route::get('/payment', 'MolpayController@index');
Route::get('/payment/test/', 'MolpayController@data');

//blog redirection
Route::get('/bagaimana-katsana-bermula-perfection-bullshit', function() {
    return redirect('/blog/bagaimana-katsana-bermula-perfection-bullshit');
});
Route::get('/menghargai-pekerja-mampu-meningkatkan-100-prestasi-syarikat', function() {
    return redirect('/blog/menghargai-pekerja-mampu-meningkatkan-100-prestasi-syarikat');
});
Route::get('/nilai-penglibatan-anda-di-universiti', function() {
    return redirect('/blog/nilai-penglibatan-anda-di-universiti');
});
Route::get('/5-tips-menghilangkan-perasaan-gemuruh-ketika-temuduga', function() {
    return redirect('/blog/5-tips-menghilangkan-perasaan-gemuruh-ketika-temuduga');
});
Route::get('/kerja-kosong-khas-buat-rider-yang-handal', function() {
    return redirect('/blog/kerja-kosong-khas-buat-rider-yang-handal');
});
Route::get('/6-kunci-ayat-untuk-komunikasi-dengan-baik-bersama-boss-anda', function() {
    return redirect('/blog/6-kunci-ayat-untuk-komunikasi-dengan-baik-bersama-boss-anda');
});
Route::get('/kemahiran-yang-perlu-anda-kuasai-untuk-menyakinkan-majikan', function() {
    return redirect('/blog/kemahiran-yang-perlu-anda-kuasai-untuk-menyakinkan-majikan');
});
Route::get('/boros-ini-tips-buat-tabung-kewangan-dengan-berkesan', function() {
    return redirect('/blog/boros-ini-tips-buat-tabung-kewangan-dengan-berkesan');
});
Route::get('/4-perkara-besar-yang-dipelajari-nicam-caramba', function() {
    return redirect('/blog/4-perkara-besar-yang-dipelajari-nicam-caramba');
});
Route::get('/belajar-kat-universiti-pun-susah-ke-ramai-tidak-tahu-cabaran-bergelar-mahasiswa', function() {
    return redirect('/blog/belajar-kat-universiti-pun-susah-ke-ramai-tidak-tahu-cabaran-bergelar-mahasiswa');
});
Route::get('/8-tips-memohon-biasiswa', function() {
    return redirect('/blog/8-tips-memohon-biasiswa');
});
Route::get('/download-ebook', function() {
    return redirect('/blog/download-ebook');
});
Route::get('/ebook-percuma', function() {
    return redirect('/blog/ebook-percuma');
});
Route::get('/percuma-ebook', function() {
    return redirect('/blog/percuma-ebook');
});
Route::get('/menjana-pendapatan-di-universiti', function() {
    return redirect('/blog/menjana-pendapatan-di-universiti');
});
Route::get('/nasihat-ceo-the-lorrykepada-pemula-startup', function() {
    return redirect('/blog/nasihat-ceo-the-lorrykepada-pemula-startup');
});
Route::get('/betul-ke-biasiswa-menjanjikan-peluang-kerjaya-selepas-tamat-belajar', function() {
    return redirect('/blog/betul-ke-biasiswa-menjanjikan-peluang-kerjaya-selepas-tamat-belajar');
});
Route::get('/larangan-penggunaan-bahasa-apabila-anda-berbincang-mengenai-gaji', function() {
    return redirect('/blog/larangan-penggunaan-bahasa-apabila-anda-berbincang-mengenai-gaji');
});
Route::get('/bahaya-stress-dan-cara-menanganinya-anda-perlu-tahu', function() {
    return redirect('/blog/bahaya-stress-dan-cara-menanganinya-anda-perlu-tahu');
});
Route::get('/generation-gap-sebuah-konflik-harmoni-yang-perlu-anda-fahami', function() {
    return redirect('/blog/generation-gap-sebuah-konflik-harmoni-yang-perlu-anda-fahami');
});
Route::get('/argh-sibuknya-kerja-anda-perlu-lupakan-kerja-dan-boleh-lakukan-7-aktiviti-yang-menyeronokkan-ini', function() {
    return redirect('/blog/argh-sibuknya-kerja-anda-perlu-lupakan-kerja-dan-boleh-lakukan-7-aktiviti-yang-menyeronokkan-ini');
});


//test
Route::post('/testpost', 'ProfileController@upload_gambar');
Route::get('/resume-click', function() {
    return view('salepage.resume');
});
//affiliate resgiter
Route::get('/register/affiliate', function() {
    return redirect('/register')->cookie('affiliate', true);
});
//page-size
Route::get('/offer', function(){
  return view('pages.harga');
});
