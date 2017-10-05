<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Contact;
use App\About;
use App\Portfolio;
use App\Process;
use App\Services;
use App\Carousel;
use Mail;


class IndexController extends Controller
{
    public function execute(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $messages = [
                'required' => "Поле :attribute обязательно к заполнению",
                'email' => "Поле :attribute должно соответствовать email адресу"
            ];

            $this->validate($request, [
                'username' => 'required|max:50',
                'email' => 'required|email',
                'text' => 'required'
            ], $messages);

            $data = $request->all();

            $result = Mail::send(env('THEME').'.site.email',['data'=>$data], function($message) use ($data){
                $mailAdmin = env('MAIL_ADMIN');

                $message->from($data['email'], $data['username']);
                $message->to($mailAdmin)->subject('question');
            });

            if($result){
                return redirect()->route('home')->with('status','email is send');
            }
        }


        $page = Page::get(['name','title']);
        $menu = Contact::get(['social']);
        $social = $this->choose($menu);
        $about = About::all();
        $about = $this->choose($about);
        $portfolio = Portfolio::all();
        $process = Process::all();
        $carousel = Carousel::all();
        $services = Services::all();
        $contact = Contact::all();

        return view(env('THEME').'.site.index', array(
                                                    'page' => $page,
                                                    'social' => $social,
                                                    'about' => $about,
                                                    'portfolios' => $portfolio,
                                                    'processes' => $process,
                                                    'carousels' => $carousel,
                                                    'services' => $services,
                                                    'contacts' => $contact
        ));

    }

    protected function choose($result)
    {
        $result->transform(function($item)
        {
            if(is_string($item->social) && json_decode($item->social,true,10) && json_last_error() == JSON_ERROR_NONE)
            $item->social = json_decode($item->social,true,10);
            if(is_string($item->text) && json_decode($item->text,true,10) && json_last_error() == JSON_ERROR_NONE)
            $item->text = json_decode($item->text,true,10);
            if(is_string($item->describer) && json_decode($item->describer,true,10) && json_last_error() == JSON_ERROR_NONE)
            $item->describer = json_decode($item->describer,true,10);

            return $item;
        });

        return $result;
    }
}
