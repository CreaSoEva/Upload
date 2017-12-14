<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormUploadRequest;
use App\Models\t_form;
use Illuminate\Support\Facades\Mail;
use App\Mail\classMail;

class HomeViewController extends Controller
{
     public function index()
    {
        return view('homeView');
    }

    public function upload(FormUploadRequest $request)
    {

        /**
         * Store a new user.
         *
         * @param  Request  $request
         * @return Response
         */
            //$form = new t_form;
            // $forms = $form->find(1);

            // $form = t_form::find(1);

            $form = new t_form;

            $form->expediteur = $request->name;
            $form->destinataire = $request->mail;
            $form->message = $request->message;
            $form->link_files = $request->upload->getClientOriginalName();
            
            $form->link_upload = $request->upload->hashName();

            $request->upload->store(config('images.path'), 'public');

            $form->save();


            Mail::to($form->destinataire)
                ->send(new classMail($form->id));//Envoie le mail que au adresse OVH reste à configurer le reste

            return view('uploadView');
        
    }
}
