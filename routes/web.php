<?php


/* 

                                                                                           ..                                     
                                                                                    ,o""""o                                   
                                                                                ,o$"     o                                   
                                                                            ,o$$$                                           
                                                                            ,o$$$'                                            
                                                                        ,o$"o$'                                             
                                                                        ,o$$"$"'                                              
                                                                    ,o$"$o"$"'                                               
                                                                ,oo$"$"$"$"$$`                      ,oooo$$$$$$$$oooooo.    
                                                                ,o$$$"$"$"$"$"$"o$`..             ,$o$"$$"$"'            `oo.o 
                                                            ,oo$$$o"$"$"$"$  $"$$$"$`o        ,o$$"o$$$o$'                 `o 
                                                        ,o$"$"$o$"$"$"$  $"$$o$$o $$o`o   ,$$$$$o$"$$o'                    $ 
                                                        ,o"$$"'  `$"$o$" o$o$o"  $$$o$o$oo"$$$o$"$$"$o"'                     $ 
                                                    ,o$"'        `"$ "$$o$$" $"$o$o$$"$o$$o$o$o"$"$"`""o                   '  
                                                ,o$'          o$ `"$"$o "$o$$o$$$"$$$o"$o$$o"$$$    `$$                     
                                                ,o'           (     `" o$"$o"$o$$$"$o$"$"$o$"$$"$ooo|  ``                    
                                                $"$             `    (   `"o$$"$o$o$$ "o$o"   $o$o"$"$    )                   
                                                (  `                   `    `o$"$$o$" "o$$     "o /|"$o"                       
                                                `                           `$o$$$$"" o$      "o$\|"$o'                       
                                                    Art Name                `$o"$"$ $ "       `"$"$o$                        
                                                    -NagaButuh-             "$$"$$ "oo         ,$""$                        
                                                                            $"$o$$""o"          ,o$"$                       
                                                                            $$"$$"$ "o           `,",                       
                                                                    ,oo$oo$$$$$$"$o$$$ ""o                                    
                                                                ,o$$"o"o$o$$o$$$"$o$$oo"oo                                   
                                                                ,$"oo"$$$$o$$$$"$$$o"o$o"o"$o o                                
                                                            ,$$$""$$o$,      `$$$$"$$$o""$o $o                              
                                                            $o$o$"$,          `$o$"$o$o"$$o$ $$o                            
                                                            $$$o"o$$           ,$$$$o$$o"$"$$ $o$$oo      ,                  
                                                            "$o$$$ $`.        ,"$$o$"o$""$$$$ `"$o$$oo    `o                 
                                                            `$o$o$"$o$o`.  ,.$$"$o$$"$$"o$$$$   `$o$$ooo    $$ooooooo        
                                                                `$o$"$o"$"$$"$$"$"$$o$$o"$$o"        `"$o$o            `"o     
                                                                `$$"$"$o$$o$"$$"$ $$$  $ "           `$"$o            `o    
                                                                    `$$"o$o"$o"$o$ "  o $$$o            `$$"o          ,$    
                                                                        (" ""$"""     o"" "o$o             `$$ooo     ,o$$    
                                                                            $$"""o   (   "$o$$$"o            `$o$$$o$"$'     
                                                                                ) ) )           )  ) )   

*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Laundry;



Route::get('/', function () {
    return view('login');
})->middleware('guest')->name('login');

Route::get('/beranda', function () {
    return view('layout');
});



Route::view('test', 'test');

Route::post('postLogin', [Laundry::class, 'postLogin'])->middleware('guest');

Route::get('/logout', [Laundry::class, 'logout'])->middleware('auth');

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::view('dashboard', 'dashboard');


    Route::view('paket_cucian', 'paket_cucian');
    Route::post('tambah_paket', [Laundry::class, 'tambah_paket']);
    Route::get('paket_cucian', [Laundry::class, 'daftar_paket']);
    Route::get('edit-paket/{id}', [Laundry::class, 'edit_paket']);
    Route::put('update_paket', [Laundry::class, 'update_paket']);
    Route::get('kill_paket/{id}', [Laundry::class, 'kill_paket']);


    Route::view('pengguna', 'pengguna');
    Route::post('tambah_pengguna', [Laundry::class, 'tambah_pengguna']);
    Route::get('pengguna', [Laundry::class, 'daftar_pengguna']);
    Route::get('edit-pengguna/{id}', [Laundry::class, 'edit_pengguna']);
    Route::put('update_pengguna', [Laundry::class, 'update_pengguna']);
    Route::get('kill_peng/{id}', [Laundry::class, 'kill_pengguna']);
    Route::view('pemasukan', 'pemasukan');
    Route::get('pemasukan_search', [Laundry::class, 'search_laporan_pemasukan']);

    Route::view('pengeluaran', 'pengeluaran');
    Route::post('tambahPengeluaran', [Laundry::class, 'tambah_pengeluaran']);
    Route::get('pengeluaran', [Laundry::class, 'lihat_data_pengeluaran']);

    Route::view('laporan_pemasukan','laporan_pemasukan');
    Route::get('laporan_pemasukan',[Laundry::class,'laporan_pemasukan']);
    Route::get('search_pemasukan',[Laundry::class,'search_pemasukan']);
    Route::get('hapus_pemasukan/{id}',[Laundry::class,'hapus_pemasukan']);
    Route::get('cari_laporan_outlet',[Laundry::class,'cari_laporan_outlet']);
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,kasir']], function () {
    Route::view('dashboard', 'dashboard');
    Route::get('dashboard', [Laundry::class, 'riwayat_terakhir']);

    Route::view('regpel','registrasi_pelanggan');
    Route::post('tambah_pel', [Laundry::class, "tambah_pelanggan"]);
    Route::get('regpel', [Laundry::class, "daftar_pelanggan"]);
    Route::get('edit-pel/{id}', [Laundry::class, 'edit']); #EDIT Pelanggan
    Route::PUT('update_pel', [Laundry::class, 'update']); #UPDATE PELANGGAN
    Route::get('kill_pel/{id}', [Laundry::class, 'hapus']);

    Route::view('outlet', 'outlet');
    Route::post('tambah_out', [Laundry::class, "tambah_outlet"]);
    Route::get('outlet', [Laundry::class, "daftar_outlet"]);
    Route::get('edit-outlet/{id}', [Laundry::class, 'edit_outlet']); #EDIT Outlet
    Route::PUT('outlet_update', [Laundry::class, 'update_outlet']); #UPDATE Outlet
    Route::get('kill_out/{id}', [Laundry::class, 'kill_outlet']);

    Route::view('tambah_transaksi', 'tambah_transaksi');
    Route::get('tambah_transaksi',[Laundry::class, 'tampil_transaksi']);
    Route::post('tambah_transaksi', [Laundry::class, 'tambah_transaksi']);

    Route::view('data_transaksi', 'data_transaksi');
    Route::get('data_transaksi', [Laundry::class, 'lihat_data_transaksi']);
    Route::get('searchTransaksi', [Laundry::class, 'searchTransaksi']);

    Route::view('detail_transaksi', 'detail_transaksi');
    Route::get('detail_transaksi/{id}', [Laundry::class, 'detail_transaksi']);
    Route::get('edit-transaksi/{id}', [Laundry::class, 'edit_transaksi']);
    Route::put('update_transaksi', [Laundry::class, 'update_transaksi']);
    Route::get('kill_transaksi/{id}', [Laundry::class, 'kill_transaksi']);
    

    Route::view('cetak','cetak');
    Route::get('cetak/{id}', [Laundry::class, 'cetak']);

    Route::view('pemasukan', 'pemasukan');
    Route::get('pemasukan', [Laundry::class, 'pemasukan']);

    Route::view('pengeluaran', 'pengeluaran');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,kasir,owner']], function () {
    Route::view('dashboard', 'dashboard');
    Route::get('dashboard', [Laundry::class, 'riwayat_terakhir']);

    Route::view('pemasukan', 'pemasukan');
    Route::get('pemasukan', [Laundry::class, 'pemasukan']);

    Route::view('pengeluaran', 'pengeluaran');
    Route::post('tambahPengeluaran', [Laundry::class, 'tambah_pengeluaran']);
    Route::get('pengeluaran', [Laundry::class, 'lihat_data_pengeluaran']);

    Route::view('laporan_pemasukan','laporan_pemasukan');
    Route::get('laporan_pemasukan',[Laundry::class,'laporan_pemasukan']);
    Route::get('search_pemasukan',[Laundry::class,'search_pemasukan']);
    Route::get('hapus_pemasukan/{id}',[Laundry::class,'hapus_pemasukan']);
    Route::get('cari_laporan_outlet',[Laundry::class,'cari_laporan_outlet']);

    Route::get('pemasukan_search', [Laundry::class, 'search_laporan_pemasukan']);
    
    Route::view('laporan_pengeluaran','laporan_pengeluaran');

    Route::get('laporan_pengeluaran',[Laundry::class,'data_outlet']);

    Route::view('laporan_pengeluaran_outlet','laporan_pengeluaran_outlet');
    Route::get('laporan_pengeluaran_outlet/{id}',[Laundry::class,'pengs_outs']);
    
});




