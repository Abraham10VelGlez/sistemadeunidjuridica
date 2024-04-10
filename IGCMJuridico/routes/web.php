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
/*RETORNA VISTA*/
Route::get('/', function () {
    return view('welcome');
    //return view('auth.login');
});
/*INICIO DEL LOGIN*/
Route::resource('log','LogController');
    /*RETORNA VISTA*/
// esta vista es con middleware..... funciona.....
//Route::get('/inicio','Controller@iniciov')->middleware('auth');
Route::get('/inicio','Controller@iniciov');
    /*
        Route::get('/',function (){
            return view('inicio');
        });
        */
        /*RETORNA A CONTROLADOR Y A SU VEX LLEGA A METODO PARA EJECUTAR...*/
Route::post('/captr','Controller@capturaformulario');

/*CERRAR SESION DE USUARIOS*/
Route::get('logout','LogController@logout');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
/*CREADOR_USUARIO*/
//Route::get('/avg','Controller@creacionmunicipios')->middleware('auth');


/*RENDIRACION  DE CADA FORMULARIO DE CAPTURA....*/
Route::post('/renderigcm','Controller@render');
Route::post('/renderigcm2','Controller@render2');
Route::post('/renderigcm3','Controller@render3');
Route::post('/renderigcm4','Controller@render4');
Route::post('/renderigcm5','Controller@render5');


/*LISTA DE MUNICIPIOS MODO VER TODO....*/
Route::get('/Municipios','Controller@ListarMuncpos');
Route::post('/redfilter','Controller@filtermethod');
Route::post('/textfinish','Controller@methoddetails');
Route::post('/renderigcmfree','Controller@renderfree');
Route::post('/renderigcm2free','Controller@render2free');
Route::post('/renderigcm3free','Controller@render3free');
Route::post('/renderigcm4free','Controller@render4free');
Route::post('/renderigcm5free','Controller@render5free');

Route::get('error',function (){
    abort(404);
});


/*RUTA DE GENERACION DE WORD DOCS*/
//Route::get('/ruta_docx','Controller@word');
Route::get('/ruta_docx/{xhorto}','Controller@word')->middleware('auth');


/*INGRESA DATOS DEL OFICIO PARA JUEZ 1*/
//Route::post('/ingresadatosuno','Controller@capturardatos')->middleware('auth');
Route::post('/ingresadatosuno','Controller@capturardatos');
/*DIRECCION DE VISTA A OFFICE WORD*/
Route::get('/doc','Controller@vistadocverifcadowload')->middleware('auth');
/*RUTA PARA EDITAR LOS DATOS DEL OFICIO REGISTRADO...*/
Route::get('/editar_of/{xhorto}','Controller@edit')->middleware('auth');

/*RUTA PARA ACCEDER AL ARCHIVO DE DESCARGA DEL SCANEO DEL OFICIO*/

Route::get('/oficios/{file}', function ($file) {
    return Storage::download("/oficios/$file");
});


/* RUTA DE LISTA DE BUSQUEDAS*/
Route::get('/mostrar','Controller@listado1');

/*RUTA PARA FILTRAR DATOS DE BUSQUEDA*/
Route::post('/datafilter','Controller@dataofficefilter');

/*RUTA PARA EJECUTA EL EMAIL DE NOTIFICACIONES DE OFICIOS POR VENCER*/
Route::get('/email','Controller@correspondence');
Route::get('/send/','mailController@send');


/*RUTA PARA DEVOVLER VISTA PREVIA DE DETALLES DE OFICIO*/
Route::post('/detailsof','Controller@detailsOffice');

/*RUTA PARA GUARDAR DATOS EDITADOS DE UN OFICIO....*/
Route::post('/ingresadatoseditados','Controller@savedataeditados');

/*RUTA PARA GUARDAR LOS ARCHIVOS COMPLEMENTOS DE UN OFICIO*/
Route::post('/savecomplements','Controller@savesofficecomplement');

/*RUTA PARA VER VISTA DE LOS OFICIOS EN EL ARCHIVO*/
Route::get('/archivo','Controller@filesview');



/*RUTA DE VISTA DE PERITAJE*/
Route::get('/peritaje','Controller@peritajes');

/*RUTA PARA GUARDAR DATOS DE PERITAJE*/
Route::post('/ingresadatosdos','Controller@capturardatosper');

/*RUTA PARA GUARDAR DATOS EDITADOS DE UN OFICIO....*/
Route::post('/ingresadatoseditadosper','Controller@savedataeditadosper');

/*RUTA DE VISTA DE LISTA  DE PERITAJES*/
Route::get('/mostrarper','Controller@listado2');

/*RUTA PARA ELIMINAR UN ARCHIVO DE LA LISTA DE PERITAJES*/
Route::post('/eliminar','Controller@deleteper');

Route::post('/pertj','Controller@Validateperitajex');

/*RUTA DE GENERACION DE WORD DOCS*/
Route::get('/ruta_docpx/{xhorto}','Controller@wordper')->middleware('auth');

/*RUTA PARA EDITAR LOS DATOS DEL PERITAJE REGISTRADO...*/
Route::get('/expediente_peritaje/{xhorto}','Controller@ExpedientExt')->middleware('auth');
/*RUTA PARA GUARDAR LOS ARCHIVOS COMPLEMENTOS DE UN PERITAJE*/
Route::post('/savecomplementsp','Controller@savespertijcomplement');

/*RUTA PARA VER VISTA DE LOS OFICIOS EN EL ARCHIVO*/
Route::get('/achivop','Controller@filesviewper');






/*RUTA DE VISTA DE PERITAJE*/
Route::get('/juiciost','Controller@juiciostramite');

/*RUTA PARA GUARDAR DATOS DE PERITAJE*/
Route::post('/ingresadatostres','Controller@capturardatosjuit');

/*RUTA DE GENERACION DE WORD DOCS*/
Route::get('/ruta_docxjo/{xhorto}','Controller@wordjui')->middleware('auth');

Route::post('/juxi','Controller@Validatejuixio');

/*RUTA DE VISTA DE LISTA  DE JUICIOS*/
Route::get('/mostrarjux','Controller@listado3');

/*RUTA PARA GUARDAR LOS ARCHIVOS COMPLEMENTOS DE UN PERITAJE*/
Route::post('/savecomplementsjx','Controller@savejuicicomplement');

/*RUTA PARA VER VISTA DE LOS OFICIOS EN EL ARCHIVO*/
Route::get('/achivoj','Controller@filesviewjuxi');

/*RUTA PARA EDITAR LOS DATOS DEL PERITAJE REGISTRADO...*/
Route::get('/expediente_juicio/{xhorto}','Controller@ExpedientExtj')->middleware('auth');

