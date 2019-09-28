<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Str;
use App\isi;
use App\indexing;
class ini_control extends Controller
{
    public function createSurat(){
       $ha=Str::random(15);
       $r=indexing::create([
           'codesur'=>$ha,
           
       ]);
    }
    public function on(){
        $r=indexing::orderBy('id', 'DESC')->get();
        return view('home', compact('r'));
    }
    public function cr(){
       return view('create');
    }
    public function n(){
        $ha=Str::random(15);
        $r=indexing::create([
            'codesur'=>$ha,
            
        ]);
        return redirect('g/'.$ha);
    } 
    public function h($codesur){
        $f=indexing::where('codesur', 'like', "%{$codesur}%")->first();
        $gs=$f->isi;
        return view('nioh',array('gs'=>$gs), compact('f'));                                                                                                     
    }
    public function createlist(Request $t){
        $n=bcrypt($t->code);
        $hj = isi::create([
            'namaaset' => $t->namaaset,
            'noaset' => $t->noaset,
            'spc' => $t->spc,
            'lem' => $t->lem,
            'ket' => $t->ket,
            'code' => $n,
            ]);
        $code=$t->code;
        
        $post =indexing::where('codesur', 'like', "%{$code}%")->first();
        $post->isi()->save($hj);
        return redirect('g/'.$code);
    }
    public function deletcode($id,$code){
      $n=indexing::where('codesur', 'like', "%{$code}%")->first();
      $n->isi()->delete();
      $n->delete();
      return redirect('/create');
       
    }
    public function deletelist($id,$code){
        $g=isi::find($id)->delete();
         return redirect('g/'.$code);
    }
    public function printsw($codesur){
        $f=indexing::where('codesur', 'like', "%{$codesur}%")->first();
        $gs=$f->isi;
        return view('sysprint',array('gs'=>$gs), compact('f'));
    }
    public function inst(){
        
    }
    
}
