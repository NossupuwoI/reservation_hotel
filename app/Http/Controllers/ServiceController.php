<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function tableau_service()
    {
        $services = Service::all();
        return view('service.service', compact('services'));
    }
    public function ajouter_service(Request $request)
    {
        $request->validate([
            'User' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'prix' => 'required',
        ]);

        //Extensification de l'objet etudiant
        $service = new Service();
        $service->User = $request->User;
        $service->name = $request->name;
        $service->designation = $request->designation;
        $service->prix = $request->prix;
        $service->save();

        return redirect('/service');
    }
    public function update($id)
    {
        $services = Service::find($id);
        return view('service.updateservice', compact('services'));
    }

    public function modifier_service_traitement(Request $request)
    {
        $request->validate([
            'User' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'prix' => 'required',
        ]);

        //Extensification de l'objet etudiant
        $service =  Service::find($request->id);
        $service->User = $request->User;
        $service->name = $request->name;
        $service->designation = $request->designation;
        $service->prix = $request->prix;
        $service->update();

        return redirect('/service');
    }



    public function delete_service($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/service');
    }
}
