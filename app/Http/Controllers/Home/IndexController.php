<?php

namespace App\Http\Controllers\Home;

use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home.index.index');
    }

    /**
     * 联系我们
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('home.index.about');
    }

    /**
     * 帮助中心
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function help()
    {
        return view('home.index.help');
    }

    /**
     * 联系我们
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact(Request $request)
    {
        if($request->isMethod('post')){

            $this->validate($request,[
                'name' => 'required|max:64',
                'email' => 'required|email',
                'phone' => 'regex:/^1[345789][0-9]{9}$/',
                'contents' => 'required|max:65535',
            ]);

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->contents = $request->contents;
            $result = $contact->save();

            if($result){
                return redirect('/')->with('message', 'Message sent!');
            }else{

            }
        }else{
            return view('home.index.contact');
        }
    }
}
