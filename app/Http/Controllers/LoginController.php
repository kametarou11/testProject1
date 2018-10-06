<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    use App\Http\Controllers\Controller;
    use App\Models\Common;

    class LoginController extends Controller{

        /*
        protected $dataList;

        public function __construct()
        {
        }
        */
        public function getIndex(Request $request){
            return view('login');
        }
        public function postIndex(Request $request){
            $res = "you typed: " . $request->input('str');
            /*
            DB::beginTransaction();
            DB::delete('delete from list where id = "2018000"');
            DB::insert('insert into list values(2018000,"b","www")');
            DB::update('update list set name = "kakaka" where id = "2018000"');
            DB::commit();
            $data = DB::select('select * from list');
            */
            //データをinsert
            $data1 = array('id' => '2018000', 'password' => 'Pas2018000', 'name' => 'ゼロ');
            $this->dataList->create($data1);
            //キーを指定してdelete
            $data2 = $this->dataList->find('2018000');
            $data2->delete();
            //キーを指定してupdate
            $data3 = $this->dataList->find('2018073');
            $data3->name = '変更する名前';
            $data3->save();
            $data = $this->dataList->all();
            return view('helo', ['message' => $res, 'data' => $data]);
        }
    }
