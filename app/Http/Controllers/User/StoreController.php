<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRequest;

use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validate();

        User::firstOrCreate([
            'email' => $data['email']
        ], $data);

        return redirect()->route('user.index');

    }
}
