<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syscode;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Models\Target_rkap_perbulan;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Target_rkap_perbulanExport;

class MasterController extends Controller
{

    public function syscode()
    {
        $title = "syscode";
        $syscodes = \App\Models\Syscode::orderBy('id', 'ASC')
        ->get();
        return view('master.syscode.syscode',
            [
            'title' => $title,
            'syscodes' => $syscodes,
        ]);
    }

        public function tambah_tahun(Request $request)
        {
            $syscode = Syscode::create($request->all());

            return redirect ('/syscode')->with('success', 'Data Tahun berhasil ditambah');
        }

        public function edit_tahun($id)
        {
            $title = "syscode";
            $syscode = \App\Models\Syscode::find($id);

            return view('master.syscode.edit', [
                'title' => $title,
                'syscode' => $syscode,
            ]);
        }
     
        public function update_tahun(Request $request ,$id)
        {       
            $syscode = \App\Models\Syscode::find($id);
            $syscode->update($request->all());

            return redirect ('/syscode')->with('success', 'Data Tahun Berhasil Diupdate');
        }

        public function hapus_tahun($id)
        {
            $syscode = Syscode::find($id);
            $syscode->delete();

            return redirect('syscode')->with('success', 'Data Tahun berhasil dihapus');
        }

        public function tambah_waktu(Request $request)
        {
            $syscode = Syscode::create($request->all());

            return redirect ('/syscode')->with('success', 'Data Waktu berhasil ditambah');
        }

        public function edit_waktu($id)
        {
            $title = "syscode";
            $syscode = \App\Models\Syscode::find($id);

            return view('master.syscode.edit', [
                'title' => $title,
                'syscode' => $syscode,
            ]);
        }
     
        public function update_waktu(Request $request ,$id)
        {       
            $syscode = \App\Models\Syscode::find($id);
            $syscode->update($request->all());

            return redirect ('/syscode')->with('success', 'Data Waktu Berhasil Diupdate');
        }

        public function hapus_waktu($id)
        {
            $syscode = Syscode::find($id);
            $syscode->delete();

            return redirect('syscode')->with('success', 'Data Waktu berhasil dihapus');
        }

        public function tambah_type(Request $request)
        {
            $syscode = Syscode::create($request->all());

            return redirect ('/syscode')->with('success', 'Data Type berhasil ditambah');
        }

        public function edit_type($id)
        {
            $title = "syscode";
            $syscode = \App\Models\Syscode::find($id);

            return view('master.syscode.edit', [
                'title' => $title,
                'syscode' => $syscode,
            ]);
        }
     
        public function update_type(Request $request ,$id)
        {       
            $syscode = \App\Models\Syscode::find($id);
            $syscode->update($request->all());

            return redirect ('/syscode')->with('success', 'Data Type Berhasil Diupdate');
        }

        public function hapus_type($id)
        {
            $syscode = Syscode::find($id);
            $syscode->delete();

            return redirect('syscode')->with('success', 'Data Type berhasil dihapus');
        }

        public function tambah_satuan(Request $request)
        {
            $syscode = Syscode::create($request->all());

            return redirect ('/syscode')->with('success', 'Data Satuan berhasil ditambah');
        }

        public function edit_satuan($id)
        {
            $title = "syscode";
            $syscode = \App\Models\Syscode::find($id);

            return view('master.syscode.edit', [
                'title' => $title,
                'syscode' => $syscode,
            ]);
        }
     
        public function update_satuan(Request $request ,$id)
        {       
            $syscode = \App\Models\Syscode::find($id);
            $syscode->update($request->all());

            return redirect ('/syscode')->with('success', 'Data Satuan Berhasil Diupdate');
        }

        public function hapus_satuan($id)
        {
            $syscode = Syscode::find($id);
            $syscode->delete();

            return redirect('syscode')->with('success', 'Data Satuan berhasil dihapus');
        }    

    public function user()
    {
        $title = "user";
        $users = \App\Models\User::orderBy('id', 'ASC')
        ->get();
        return view('master.user.user',
            [
            'title' => $title,
            'users' => $users,
        ]);
    }

        public function tambah_user(Request $request)
        {
            $password = $request->password;
            // Validasi kekuatan password
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
             
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {

                return redirect ('/user')->with('warning', 'Pasword setidaknya harus 8 karakter dan harus memiliki huruf besar, huruf kecil, angka, dan spesial karakter.');

            }else{
                
                if ($_POST['password']==$_POST['password_confirmation'] ) {

                    $messages = [
                        'email' => '*kolom email tidak boleh sama !',
                    ];
             
                    $this->validate($request,[
                        'email' => ['required', 'max:255',Rule::unique('users')->where('email', $request->email)],
                    ],$messages);

                    //input pendaftaran sebagai user dulu
                    $user = new User;
                    $user->role = $request->role;
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->password = bcrypt($request->password);
                    $user->save();

                    return redirect ('/user')->with('success', 'Data User Berhasil Ditambah');

                }else {
                    return redirect ('/user')->with('warning', 'Password yang Anda Masukan Tidak Sama! Silakan ulangi kembali!');
                }
            }
        }

        public function edit_user($id)
        {
            $title = "user";
            $user = \App\Models\User::find($id);

            return view('master.user.edit', [
                'title' => $title,
                'user' => $user,
            ]);
        }
     
        public function update_user(Request $request ,$id)
        {       
            $user = \App\Models\User::find($id);
            $user->update($request->all());

            return redirect ('/user')->with('success', 'Data User Berhasil Diupdate');
        }

        public function hapus_user($id)
        {
            $user = User::find($id);
            $user->delete();

            return redirect('user')->with('success', 'Data User berhasil dihapus');
        }

    public function target_rkap()
    {
        $title = "target_rkap";
        $target_rkap_perbulan = Target_rkap_perbulan::all();
        $tahun_rkap =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.S_TARGET_RKAP_PERBULAN order by Tahun DESC');
        //$tahun_rkap_sekarang =  DB::select('SELECT MAX(TAHUN) AS TAHUN FROM DASHBOARDGRAFIK.S_PROD_PEND_PERBULAN');

        $select_tahun =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='TAHUN' order by VALUE_NUMBER DESC");
        $select_satuan =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='SATUAN' order by ID asc");
        $select_type =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='TYPE' order by ID asc");

        return view('master.target_rkap_perbulan.target_rkap_perbulan',
            [
            'title' => $title,
            'target_rkap_perbulan' => $target_rkap_perbulan,
            'tahun_rkap' => $tahun_rkap,
            //'tahun_rkap_sekarang' => $tahun_rkap_sekarang,
            'select_tahun' => $select_tahun,
            'select_satuan' => $select_satuan,
            'select_type' => $select_type,
        ]);
    }

        public function cari_tahun(Request $request)
        {
            $title = "target_rkap";
            $tahun_rkap =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.S_TARGET_RKAP_PERBULAN order by Tahun DESC');
            //$tahun_rkap_sekarang =  DB::select('SELECT MAX(TAHUN) AS TAHUN FROM DASHBOARDGRAFIK.S_PROD_PEND_PERBULAN');
            
            // menangkap data pencarian
            $cari_tahun = $request->cari_tahun;
            $target_rkap_perbulan =  DB::select("select *  from DASHBOARDGRAFIK.S_TARGET_RKAP_PERBULAN where TAHUN LIKE'%$cari_tahun%'");

            $select_tahun =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='TAHUN' order by VALUE_NUMBER DESC");
            $select_satuan =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='SATUAN' order by ID asc");
            $select_type =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='TYPE' order by ID asc");

            return view('master.target_rkap_perbulan.target_rkap_perbulan',
                [
                'title' => $title,
                'target_rkap_perbulan' => $target_rkap_perbulan,
                'tahun_rkap' => $tahun_rkap,
                //'tahun_rkap_sekarang' => $tahun_rkap_sekarang,
                'select_tahun' => $select_tahun,
                'select_satuan' => $select_satuan,
                'select_type' => $select_type,
            ]);
        }

        public function tambah_target_rkap(Request $request)
        {
            $target_rkap_perbulan = Target_rkap_perbulan::create($request->all());

            return redirect ('/target_rkap')->with('success', 'Data Target RKAP Perbulan berhasil ditambah');
        }

        public function edit_target_rkap($id)
        {
            $title = "target_rkap";   
            $target_rkap_perbulan = \App\Models\Target_rkap_perbulan::find($id);

            $select_tahun =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='TAHUN' order by VALUE_NUMBER DESC");
            $select_satuan =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='SATUAN' order by ID asc");
            $select_type =  DB::select("SELECT * from DASHBOARDGRAFIK.S_SYSCODE WHERE KODE='TYPE' order by ID asc");

            return view('master.target_rkap_perbulan.edit', [
                'title' => $title,
                'target_rkap_perbulan' => $target_rkap_perbulan,
                'select_tahun' => $select_tahun,
                'select_satuan' => $select_satuan,
                'select_type' => $select_type,
            ]);
        }
     
        public function update_target_rkap(Request $request ,$id)
        {       
            $target_rkap_perbulan = \App\Models\Target_rkap_perbulan::find($id);
            $target_rkap_perbulan->update($request->all());

            return redirect ('/target_rkap')->with('success', 'Data Target RKAP Perbulan Berhasil Diupdate');
        }

        public function hapus_target_rkap($id)
        {
            $target_rkap_perbulan = Target_rkap_perbulan::find($id);
            $target_rkap_perbulan->delete();

            return redirect('target_rkap')->with('success', 'Data Target RKAP Perbulan berhasil dihapus');
        }

        public function export_excel()
        {
            return Excel::download(new Target_rkap_perbulanExport, 'Target_rkap_perbulan.xls');
        }

}
