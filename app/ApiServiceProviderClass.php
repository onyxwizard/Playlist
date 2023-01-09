<?php

    namespace app;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;

    class ApiServiceProviderClass
    {
        
        public $req;

        function apicall(){
            $req = Http::get("https://api.ipify.org/");
           
            return response()->json($req);
        }
        // function returns(){
        //     return $this->req;
        // }
    }