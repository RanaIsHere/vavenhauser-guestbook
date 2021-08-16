<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medias;
use App\Models\Guestbook;

class AdminController extends Controller
{
    public function defaultAdmin()
    {
        return view('admin.index', [
            'title' => 'Administration Center',
            'gb_users' => User::all(),
            'gb_medias' => Medias::all(),
            'gb_guestbooks' => Guestbook::all()
        ]);
    }

    public function delete(Request $request)
    {
//        return $request->all();

        if ($request->has(['delete', 'd'])) {
            $id = $request->delete;

            switch ($request->d)
            {
                case('users'):
                    User::destroy($id);
                case('medias'):
                    Medias::destroy($id);
                case('guestbooks'):
                    Guestbook::destroy($id);
            }
        } else {
            return redirect()->back();
        }

        return redirect('/admin?d=' . $request->d . '');
    }

    public function update(Request $request)
    {
//        TODO add a proper update page
        if ($request->has(['update', 'd'])) {
            return 'ERROR 404 NOT FOUND, Reason: For now, this feature is unavailable.';
        } else {
            return redirect()->back();
        }
    }
}
