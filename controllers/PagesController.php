<?php

class PagesController {

    public function home () {

        return view('index');

    }

    public function about () {

        return view('about', ['company' => 'Ametikool']);
        
    }

    public function contact () {

        return view('contact');

    }


}