<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sendData(Request $request){
        $EmailTo = "migueljuarezmeza2@gmail.com";
        $Subject = "Cliente Facturación";

        // prepare email body text
        $Body = "";
        $Body .= "Name: ";
        $Body .= $request->rname;
        $Body .= "\n";
        $Body .= "Email: ";
        $Body .= $request->remail;
        $Body .= "\n";
        $Body .= "Phone: ";
        $Body .= $request->rphone;
        $Body .= "\n";
        $Body .= "Package: ";
        $Body .= $request->rselect;
        $Body .= "\n";

        $email = $request->remail;

        // send email
        $success = mail($EmailTo, $Subject, $Body, "From:".$email);
        // redirect to success page
        
        return back();
    }
}
