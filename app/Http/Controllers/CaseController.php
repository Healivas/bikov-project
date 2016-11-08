<?php

namespace App\Http\Controllers;

use App\Cases;
use App\User;
use App\Winner;
use App\UserCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaseController extends Controller
{
    public function getCases()
    {
        $cases = Cases::orderBy('price')->get();
        $users = User::all();

        return view('cases.list', [
            'cases' => $cases,
            'users' => $users,
        ]);
    }

    public function getById($id, Request $request)
    {
        $case = Cases::find($id);
        $users = User::all();

        $input = $request->all();
        if (!empty($input)) {
            if ($input['ik_inv_st'] == 'success') {
                $user = User::where('id', '=', Auth::user()->id)->first();
                $user->update([
                    $user->balance = $user->balance + $case->price
                ]);
            }
            return redirect()->to('case/' . $case->id);
        }
        return view('cases.case', [
            'case' => $case,
            'users' => $users,
        ]);
    }

    public function try_chance(Request $request)
    {
        $case = Cases::find($request->id);
        $user = Auth::user();

        if (!empty($request->price && $request->id)) {

            if ($user->balance < $request->price) {

                return ['balance' => false];

            } //выборка и создание выиграша
            $total = ($case->percent / 100) * $case->price;
            $gift = $case->gifts()->where('cash', '<=', $total)->inRandomOrder()->first();
            $winner = Winner::create(['user_id' => $user->id, 'gift_id' => $gift->id]);

            //отнимание бвлвнса у пользователя
            $user = User::find($user->id);
            $user->update([
                $user->balance = $user->balance - $request->price
            ]);

            //добавление выграша пользователю
            $user->update([
                $user->balance = $user->balance + $winner->gift->cash
            ]);

            //добавление кейса в историю
            UserCase::create(['case_id' => $case->id, 'user_id' => $user->id]);

        }

        return response()->json(array('id' => $request->id, 'price' => $request->price, 'won' => $winner->gift->cash));
    }
}
