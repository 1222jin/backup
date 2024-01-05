<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function test () 
    {
        DB::table('tests')->insert([
            ['name'=>'test','email' => 'picard@example.com','password' => 'tests'],
            ['name'=>'test','email' => 'janeway@example.com','password' => 'testsa'],
        ]);
        $samples = DB::table('tests')->get();
        
        return view('users.index', ['test_sample' => $samples]);
    }

    public function test_view () 
    {
        $samples = DB::table('tests')->get();
        
        return view('users.index',['test_sample' => $samples]);
    }

    public function test_post(Request $request): RedirectResponse
    {
        $samples = DB::table('tests')->get();
        $name = $request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');

        DB::table('tests')->insert([
            ['name'=>$name,'email' => $email,'password' => $password],
        ]);

        return redirect('/index');
    }

    public function test_delete($id)
    {
        
        $deleted = DB::table('tests')->where('id','=',$id)->delete();

        return redirect('/index');
    }

    public function test_update(Request $request, $id)
    {
        $name = $request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        dd($id);
        $updated = DB::table('tests')->where('id',$id)->update(['name'=>$name,'email'=>$email,'password'=>$password]);

        return redirect('/index');

    }
    

}
