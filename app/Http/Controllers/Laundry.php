<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Transaksi;
use App\Models\Transaksi_Detail;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Outlet;
use App\Models\Paket;
use App\Models\Pengguna;
use App\Models\User;
use Auth;
class Laundry extends Controller
{
    //
    public function tambah_pelanggan(Request $req){
        $table = new Pelanggan;
        $table->nama_pel = $req->nama_pelanggan;
        $table->alamat = $req->alamat_pelanggan;
        $table->no_telp = $req->no_telp;
        $table->save();
        return redirect()->back()->with("berhasil", "Berhasil Menambahkan");
    }

    public function daftar_pelanggan(Request $req){
        if($req->has('search')){
            $data = Pelanggan::where('nama_pel','LIKE','%' .$req->search.'%')->orWhere('kode_pel','LIKE','%' .$req->search.'%')
            ->orWhere('alamat','LIKE','%' .$req->search.'%')->orWhere('no_telp','LIKE','%' .$req->search.'%')->get();
        }else{
            $data = Pelanggan::all();
        }
        return view('registrasi_pelanggan', ['lihat' => $data]);
    }

    public function edit($id){
        $edit = Pelanggan::find($id);
        return response()->json([
            'status' => 200,
            'tampil' => $edit,
        ]);
    }

    public function update(Request $req){
        $ids = $req->input('id_pel');
        $update = Pelanggan::find($ids);
        $update->nama_pel = $req->nama_pelanggan;
        $update->alamat = $req->alamat_pelanggan;
        $update->no_telp = $req->no_telp;
        $update->update();
        return back();
    }

    public function hapus($id){
        $kill = Pelanggan::find($id);
        $kill->delete();
        return redirect()->back();
    }


##################################################################OUTLETTTTTTTTTTTTTTTTTTTTTZZZZZZZZZZZZZZZZZZZZ#####################################################
    public function tambah_outlet(Request $req){
        $table = new Outlet;
        $table->nama_outlet = $req->nama_outlet;
        $table->alamat_outlet = $req->alamat_outlet;
        $table->no_telp = $req->no_telp;
        $table->save();
        return redirect()->back()->with("berhasil", "Berhasil Menambahkan");
    }

    public function daftar_outlet(Request $req){
        if($req->has('search')){
            $data = Outlet::where('nama_outlet','LIKE','%' .$req->search.'%')
            ->orWhere('alamat_outlet','LIKE','%' .$req->search.'%')->orWhere('no_telp','LIKE','%' .$req->search.'%')->get();
        }else{
            $data = Outlet::all();
        }
        return view('outlet', ['lihat' => $data]);
    }

    public function edit_outlet($id){
        $datas = Outlet::find($id);
        return response()->json([
            "Status" => 200,
            "tampil" => $datas,
        ]);
    }

    public function update_outlet(Request $req){
        $ids = $req->input('id_out');
        $tables = Outlet::find($ids);
        $tables->nama_outlet = $req->nama_outlet;
        $tables->alamat_outlet = $req->alamat_outlet;
        $tables->no_telp = $req->no_telp;
        $tables->update();
        return back();
    }

    public function kill_outlet($id){
        $tables = Outlet::find($id);
        $tables->delete();
        return back();
    }

##################################################################OUTLETTTTTTTTTTTTTTTTTTTTTZZZZZZZZZZZZZZZZZZZZ#####################################################








##################################################################PAKETTTLAUNDRYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY#####################################################

public function tambah_paket(Request $req){
        $tables = new Paket();
        $tables->nama_paket = $req->nama_paket;
        $tables->jenis = $req->jenis;
        $tables->id_outlet = $req->outlet;
        $tables->harga = $req->harga;
        $tables->save();
        return back()->with("berhasil", "Berhasil Menambahkan");
}

public function daftar_paket(Request $req){

        $dataOutlet = Outlet::all();

        $dataPaket = null;

       $queryPaket = new Paket();


    if($req->has('search')){
        $dataPaket = $queryPaket->where('nama_paket','LIKE','%' .$req->search.'%')->orWhere('jenis','LIKE','%' .$req->search.'%')
        ->orWhere('harga','LIKE','%' .$req->search.'%')->get();
    }else{
        $dataPaket = $queryPaket->with("outlet")->get();
    }

    return view('paket_cucian', ['lihat' => $dataPaket, 'dataOutlet'=>$dataOutlet]);
}


public function edit_paket($id){
    $datas = Paket::where("id_outlet", $id)->first();
        return response()->json([
            "Status" => 200,
            "tampil" => $datas,
        ]);
}

public function update_paket(Request $req){

        $ids = $req->id_paket;
        $tables = Paket::where("id_outlet",$ids)->first();
        $tables->nama_paket = $req->input('nama_paket');
        $tables->jenis = $req->input('jenis');
        $tables->id_outlet = $req->input('outlet');
        $tables->harga = $req->input('harga');
        $tables->update();
        return back();
}

public function kill_paket($id){
        $table = Paket::find($id);
        $table->delete();
        return back();
}

##################################################################PAKETTTLAUNDRYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY#####################################################




##################################################################PENGGGGUUUNAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA#####################################################

public function tambah_pengguna(Request $req){
        $table = new User;
        $table->nama_pengguna = $req->nama_pengguna;
        $table->role = $req->role;
        $table->email = $req->email;
        $table->password = bcrypt($req->password);
        $table->save();
        return back()->with("berhasil", "Berhasil Menambahkan");

}

public function daftar_pengguna(Request $req){
    if($req->has('search')){
        $data = User::where('nama_pengguna','LIKE','%' .$req->search.'%')
        ->orWhere('role','LIKE','%' .$req->search.'%')->orWhere('email','LIKE','%' .$req->search.'%')->get();
    }else{
        $data = User::all();
    }
    return view('pengguna', ['lihat' => $data]);
}

public function edit_pengguna($id){
        $table = User::where('id_pengguna',$id)->first();
        return response()->json([
            "Status" => 200,
            "tampil" => $table,
        ]);
}

public function update_pengguna(Request $req){
        $ids = $req->id_pengguna;
        $table = User::where("id_pengguna",$ids)->first();
        $table->nama_pengguna = $req->input('nama_pengguna');
        $table->role = $req->input('role');
        $table->email = $req->input('email');
        $table->password = bcrypt($req->input('password'));
        $table->update();
        return back();
}

public function kill_pengguna($id){
        $tables = User::find($id);
        $tables->delete();
        return back();
}

##################################################################PENGGGGUUUNAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA#####################################################



##################################################################LOOOOOOOOOOOOOOOOOOOGGGGIIIIIIIIIINNNNNNNNNNNNN#####################################################

public function postLogin(Request $req){
    if(Auth::attempt($req->only('email','password'))){
            return redirect('/dashboard');
    }else{
        return redirect('/')->with('error','Akun Anda Masukan Salah!');
    }
}


public function logout(){
        Auth::logout();
        return redirect('/');
}

##################################################################LOOOOOOOOOOOOOOOOOOGGGGGGIIIIIIIIIINNNNNNNNNNNNN####################################################




##################################################################             TRANSAKSI                           ####################################################



public function tampil_transaksi(){
        $dataOutlet = Outlet::all();
        $data_pelanggan = Pelanggan::all();
        $data_paket = Paket::all();
        return view('tambah_transaksi', ['lihat' => $dataOutlet, 'data_pelanggan' => $data_pelanggan, 'data_paket' => $data_paket]);
}

public function tambah_transaksi(Request $req){
        $data = $req->all();


       // dd($data);

        $nama_paket = explode(":", $data["jenis"])[0];
        $harga_paket = explode(":", $data["jenis"])[1];

        $kode_pel = explode(":", $data["nama_pelanggan"])[0];
        $nama_pel = explode(":", $data["nama_pelanggan"])[1];
        
   
        $transaksi = new Transaksi;
        $jumlahs = $transaksi->nama_paket = $harga_paket * $transaksi->berat = $data['berat'];
        
        $transaksi->outlet = $data['outlet'];
        $transaksi->pelangganss = $data["nama_pelanggan"];
        $transaksi->nama_member = $nama_pel;
        $transaksi->tanggal_transaksi = $data['tanggal_transaksi'];
        $transaksi->jenis_pakets = $nama_paket;
        $transaksi->status = $data['status'];
        $transaksi->pembayaran = $data['pembayaran'];
        $transaksi->berat = $data['berat'];
        $transaksi->tanggal_bayar = $data['tanggal_bayar'];
        $transaksi->batas_waktu = $data['batas_transaksi'];
        $transaksi->nama_paket = $data['jenis'];
        $transaksi->harga_paket = $harga_paket;
        $transaksi->total_bayar = $jumlahs;
        $transaksi->penanggung_jawab = $data['penanggung_jawab'];
        $transaksi->save();

        $transaksi_detail = new Transaksi_Detail;
        $jumlah = $transaksi_detail->jenis_paket = $harga_paket * $transaksi_detail->berat = $data['berat'];

        $transaksi_detail->nama_members = $data['nama_pelanggan'];
        $transaksi_detail->outlet_nama = $data['outlet'];
        $transaksi_detail->jenis_paket = $data['jenis'];
        $transaksi_detail->berat = $data['berat'];
        $transaksi_detail->total_bayar = $jumlah;
        $transaksi_detail->batas_waktu = $data['batas_transaksi'];
        $transaksi_detail->tanggal_bayar = $data['tanggal_bayar'];
        $transaksi_detail->save();

        return redirect('data_transaksi');
}

public function lihat_data_transaksi(Request $req){

    $dataPaket = null;

    $queryPaket = new Transaksi();

        $nama_member = Pelanggan::all();

        $paketz = Paket::all();

    if($req->has('search')){
        $dataPaket = $queryPaket->where('nama_paket','LIKE','%' .$req->search.'%')->orWhere('jenis','LIKE','%' .$req->search.'%')
        ->orWhere('harga','LIKE','%' .$req->search.'%')->get();
    }else{
        $dataPaket = $queryPaket->with("outlets")->get();
    }

    return view('data_transaksi', ['lihat' => $dataPaket, 'member'=>$nama_member,'paket'=>$paketz]);
}

public function searchTransaksi(Request $req) {
    $datefrom = $req->datefrom;
    $dateto = $req->dateto;
    $transaksi = Transaksi::with("outlets")
    ->whereBetween('tanggal_transaksi',[$datefrom,$dateto])
    ->orwhereBetween('tanggal_transaksi',[$dateto,$datefrom])
    ->orWhere('tanggal_transaksi', $datefrom)
    ->orWhere('tanggal_transaksi', $dateto)->get();
    return view("data_transaksi", ['lihat' => $transaksi]);
}

public function detail_transaksi($id){
    $tabless = Transaksi::find($id);
    return view('detail_transaksi', ['lihatz' => $tabless]);
}

public function cetak($id){
        $tabless = Transaksi::find($id);
        return view('cetak', ['lihats' => $tabless]);
}

public function edit_transaksi($id){
    $table = Transaksi::find($id);
    return response()->json([
        "Status" => 200,
        "tampil" => $table,
    ]);
}

public function update_transaksi(Request $req){
        $lol_id = $req->id_trans;
        $table =Transaksi::find($lol_id);
        $table->tanggal_transaksi = $req->tanggal_transaksi;
        $table->status = $req->status;
        $table->pembayaran = $req->pembayaran;
        $table->update();
        return back();
        
}

public function kill_transaksi($id){
    $lol = Transaksi::find($id);
    $lol->delete();
    return back();
}

public function laporan_pemasukan(){
    $tabel = Transaksi_Detail::all();
    return view('laporan_pemasukan',['lihat' => $tabel]);
}

public function search_pemasukan(Request $req){
    $tanggalAwal = $req->dari;
    $tanggalAkhir = $req->sampai;
    $tabel = Transaksi_detail::whereBetween('tanggal_bayar',[$tanggalAwal,$tanggalAkhir])
    ->orWhereBetween('tanggal_bayar',[$tanggalAkhir,$tanggalAwal])
    ->orWhere('tanggal_bayar',$tanggalAwal)
    ->orWhere('tanggal_bayar',$tanggalAkhir)
    ->orWhere('total_bayar')
    ->get();
    return view('laporan_pemasukan',['lihat'=>$tabel]);
}

public function cari_laporan_outlet(Request $req){
    $lol = $req->cari;
    $tabel = Transaksi_Detail::where('outlet_nama',$lol)->get();
    return view('laporan_pemasukan',['lihat' => $tabel]);
}

public function hapus_pemasukan($id){
    $tabel = Transaksi_detail::find($id);
    $tabel->delete();
    return back();
}

##################################################################             TRANSAKSI                            ####################################################

##################################################################             DASHBOARD                            ####################################################


public function riwayat_terakhir(){
    $tabel = Transaksi::all();
    $tabel2 = Transaksi_Detail::all();
    $tabel3 = Pengeluaran::all();
    return view('dashboard',['lihat' => $tabel,'lihatz' => $tabel2, 'lihats'=>$tabel3]);
}


public function tambah_pengeluaran(Request $req){
        $tables = new Pengeluaran;
        $tables->hargaz = $req->harga;
        $tables->alasan = $req->alasan;
        $tables->created_at = $req->tanggal;
        $tables->tanggal = $req->tanggal;
        $tables->save();
        return back();
}

public function lihat_data_pengeluaran(){
    
        $tables = Pengeluaran::all();
        return view('pengeluaran', ['lihat' => $tables]);
}

##################################################################             DASHBOARD                            ####################################################

##################################################################             PEMASUKAN                            ####################################################
public function pemasukan(){
    $tabel2 = Transaksi_Detail::all();
    return view('pemasukan',['lihatz' => $tabel2]);
}

public function search_laporan_pemasukan(Request $req) {
    if($req->has('search')) {
        $tanggal = Transaksi_Detail::whereMonth('tanggal_bayar',$req->search)->whereYear('tanggal_bayar',$req->search2)->get();
    }else{
        $tanggal = Transaksi_Detail::all();
    }

    return view('pemasukan',['lihatz' =>$tanggal]);
}


##################################################################             PEMASUKAN                            ####################################################
}
